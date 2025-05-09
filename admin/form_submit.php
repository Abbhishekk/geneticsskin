<?php 
    include "connect/db.php";
    include "connect/fun.php";

    $conn = new connect();
    $fun = new fun($conn->dbconnect());
    function compressImage($source, $destination, $quality) { 
        // Get image info 
        $imgInfo = getimagesize($source); 
        $mime = $imgInfo['mime']; 
         
        // Create a new image from file 
        switch($mime){ 
            case 'image/jpeg': 
                $image = imagecreatefromjpeg($source); 
                break; 
            case 'image/png': 
                $image = imagecreatefrompng($source); 
                break; 
            case 'image/gif': 
                $image = imagecreatefromgif($source); 
                break; 
            default: 
                $image = imagecreatefromjpeg($source); 
        } 
         
        // Save image 
        imagejpeg($image, $destination, $quality); 
         
        // Return compressed image 
        return $destination; 
    }
    function convert_filesize($bytes, $decimals = 2) { 
        $size = array('B','KB','MB','GB','TB','PB','EB','ZB','YB'); 
        $factor = floor((strlen($bytes) - 1) / 3); 
        return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$size[$factor]; 
    }
   if(isset($_POST["treatment_type_submit"])){
    $name = $_POST["name"];
    if(!empty($name)){
        $fetch = $fun->add_treatment_type($name);
        $msg = "Added Successfully";
        header("location:add_treatment_type.php?msg=$msg");
    }
    else{
        $msg= "Enter All Fields";
        header("location:add_treatment_type.php?msg=$msg");

    }
   }
   else if(isset($_POST["treatment_type_update"])){
    $id = $_POST["id"];
    $name = $_POST["name"];
    if(!empty($name)){
        $fetch = $fun->updateTreatmentType($id,$name);
        $msg = "Updated Successfully";
        header("location:edit_treatment_type.php?msg=$msg");
    }
    else{
        $msg= "Enter All Fields";
        header("location:edit_treatment_type.php?msg=$msg");

    }
   }
   else if(isset($_POST["treatment_submit"])){
        $treatment_type = $_POST["treatment_type"];
        $name = $_POST["name"];

        //images
        $fileName = $treatment_type."_".$name;
        $target_dir = "../assets/img/treatments/";
        $target_file = $target_dir .basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $file_name = $target_dir ."$fileName.".$imageFileType;
        $imageTemp = $_FILES["image"]["tmp_name"]; 
        $imageSize = convert_filesize($_FILES["image"]["size"]); 
         
        // Compress size and upload image 
        $compressedImage = compressImage($imageTemp, $file_name, 25); 
        if($compressedImage){
            $fetch = $fun->add_treatment($treatment_type,$name,$file_name);
            $msg = "Added Successfully";
            header("location:add_treatment.php?msg=$msg");
        }
        else{
            $msg= "Enter All Fields";
            echo "$msg";
            header("location:add_treatment.php?msg=$msg");
        }
   }
   else if(isset($_POST["add_course"])){
        $name = $_POST["name"];
        $des = $_POST["des"];
        $fee = $_POST["fee"];
        $editor = $_POST["editor"];
        $editor = htmlspecialchars($editor);
        //images
        $fetch = $fun->fetchLastCourse();
        $row = mysqli_fetch_array($fetch);
        if(empty($row)){
            $fileName = "course-1";

        }
        else{
            $fileName = "course-".($row["id"]+1);
        }
        $target_dir = "../assets/img/courses/";
        $target_file = $target_dir .basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $file_name = $target_dir ."$fileName.".$imageFileType;
        $actual_name = $fileName.".".$imageFileType;
        $imageTemp = $_FILES["image"]["tmp_name"]; 
        $imageSize = convert_filesize($_FILES["image"]["size"]); 
         
        // Compress size and upload image 
        $compressedImage = compressImage($imageTemp, $file_name, 25); 
        if($compressedImage){
            $fetch = $fun->addCourse($name,$des,$fee,$actual_name,$editor);
            $msg = "Added Successfully";
            header("location:add_course.php?msg=$msg");
        }
        else{
            $msg= "Enter All Fields";
            echo "$msg";
            header("location:add_course.php?msg=$msg");
        }
   }
   else if(isset($_POST["edit_course"])){
    $name = $_POST["name"];
        $des = $_POST["des"];
        $fee = $_POST["fee"];
        $editor = $_POST["editor"];
        $editor = htmlspecialchars($editor);
    $id = $_POST["id"];

    //images
    if(isset($_FILES["image"]["name"]) && !empty($_FILES["image"]["name"])){
        $fileName = "course-$id";
        $target_dir = "../assets/img/courses/";
        $target_file = $target_dir .basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $file_name = $target_dir ."$fileName.".$imageFileType;
        $actual_name = $fileName.".".$imageFileType;

        $imageTemp = $_FILES["image"]["tmp_name"]; 
        $imageSize = convert_filesize($_FILES["image"]["size"]); 
         
        // Compress size and upload image 
        $compressedImage = compressImage($imageTemp, $file_name, 25); 
        if($compressedImage){
            $fetch = $fun->updateCourse($id,$name,$des,$fee,$actual_name,$editor);
            $msg = "Added Successfully";
            //echo "$msg";
            
            header("location:add_course.php?msg=$msg");
        }
        else{
            $msg= "Image not uploaded";
            // echo "$msg";
            header("location:edit_course.php?id=$id&msg=$msg");
        }

    }
    else{
        $fetch = $fun->updateCourse($id,$name,$des,$fee,"",$editor);
        if($fetch){
            $msg = "Added Successfully";

        }
        else{
            $msg= "Enter All Fields";
        }
        // echo "$msg";

         header("location:add_course.php?msg=$msg");
    }

    
   }
   else if(isset($_POST["treatment_edit_submit"])){
    $treatment_type = $_POST["treatment_type"];
    $name = $_POST["name"];
    
    $id = $_POST["id"];

    //images
    if(isset($_FILES["image"]["name"]) && !empty($_FILES["image"]["name"])){
        $fileName = $treatment_type."_".$name;
        $target_dir = "../assets/img/treatments/";
        $target_file = $target_dir .basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $file_name = $target_dir ."$fileName.".$imageFileType;

        $imageTemp = $_FILES["image"]["tmp_name"]; 
        $imageSize = convert_filesize($_FILES["image"]["size"]); 
         
        // Compress size and upload image 
        $compressedImage = compressImage($imageTemp, $file_name, 25); 
        if($compressedImage){
            $fetch = $fun->updateTreatment($id,$treatment_type,$name,$file_name);
            $msg = "Added Successfully";
            //echo "$msg";
            
            header("location:add_treatment.php?msg=$msg");
        }
        else{
            $msg= "Image not uploaded";
            // echo "$msg";
            header("location:edit_treatment.php?id=$id&msg=$msg");
        }

    }
    else{
        $fetch = $fun->updateTreatment($id,$treatment_type,$name,"");
        if($fetch){
            $msg = "Added Successfully";

        }
        else{
            $msg= "Enter All Fields";
        }
        // echo "$msg";

         header("location:add_treatment.php?msg=$msg");
    }

    
   }
   else if(isset($_POST["aesthatic_edit_submit"])){
    
    $name = $_POST["name"];
    
    $id = $_POST["id"];

    //images
    if(isset($_FILES["image"]["name"]) && !empty($_FILES["image"]["name"])){
        $fileName = $treatment_type."_".$name;
        $target_dir = "../assets/img/aesthatics/";
        $target_file = $target_dir .basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $file_name = $target_dir ."$fileName.".$imageFileType;

        $imageTemp = $_FILES["image"]["tmp_name"]; 
        $imageSize = convert_filesize($_FILES["image"]["size"]); 
         
        // Compress size and upload image 
        $compressedImage = compressImage($imageTemp, $file_name, 25); 
        if($compressedImage){
            $fetch = $fun->updateAesthatic($id,$name,$file_name);
            $msg = "Updated Successfully";
            //echo "$msg";
            
            header("location:add_aesthatics.php?msg=$msg");
        }
        else{
            $msg= "Image not uploaded";
            // echo "$msg";
            header("location:edit_aesthatic.php?id=$id&msg=$msg");
        }

    }
    else{
        $fetch = $fun->updateAesthatic($id,$name,"");
        if($fetch){
            $msg = "Added Successfully";

        }
        else{
            $msg= "Enter All Fields";
        }
        // echo "$msg";

         header("location:add_aesthatics.php?msg=$msg");
    }

    
   }
   else if(isset($_POST["treatment_submit_des"])){
    $id = $_POST["treatment"];
    $find = $fun->fetchDescription($id);
    $editor = $_POST["editor"];
    $editor = htmlspecialchars($editor);
    if($find != null){
        $fetch = $fun->updateDescription($id,$editor);
        $msg = "Updated Successfully";
    }
    else{

        $fetch = $fun->addDescription($id,$editor);
        $msg = "Added Successfully";

    }
    header("location:add_treatment_description.php?msg=$msg");
   }
   else if(isset($_POST["change_date"])){
    $id = $_POST["id"];
    $date = $_POST["date"];
    
        $fetch = $fun->updateAppointmentDate($id,$date);
        $msg = "Rescheduled successfully";
    
   

        

    
    header("location:appointments.php?msg=$msg");
   }
   else if(isset($_POST["change_date_aesthatic"])){
    $id = $_POST["id"];
    $date = $_POST["date"];
    
        $fetch = $fun->updateAesthaticAppointmentDate($id,$date);
        $msg = "Rescheduled successfully";
    
   

        

    
    header("location:appointments.php?msg=$msg");
   }
   else if(isset($_POST["aesthatic_submit_des"])){
    $id = $_POST["aesthatic"];
    $find = $fun->fetchAesthaticDescription($id);
    
    $editor = $_POST["editor"];
    $editor = htmlspecialchars($editor);
    if($find != null){
        $fetch = $fun->updateAestheticDescription($id,$editor);
        $msg = "Updated Successfully";
    }
    else{

        $fetch = $fun->addDescriptionAesthatic($id,$editor);
        $msg = "Added Successfully";

    }
    
    header("location:add_aesthatics_description.php?msg=$msg");
   }
   else if(isset($_POST["aesthatics_submit"])){
  
        $name = $_POST["name"];

        //images
        $fileName = $treatment_type."_".$name;
        $target_dir = "../assets/img/aesthatics/";
        $target_file = $target_dir .basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $file_name = $target_dir ."$fileName.".$imageFileType;

        $imageTemp = $_FILES["image"]["tmp_name"]; 
        $imageSize = convert_filesize($_FILES["image"]["size"]); 
         
        // Compress size and upload image 
        $compressedImage = compressImage($imageTemp, $file_name, 25); 
        if($compressedImage){
            $fetch = $fun->addAesthatics($name,$file_name);
            $msg = "Added Successfully";
            header("location:add_aesthatics.php?msg=$msg");
        }
        else{
            $msg= "Enter All Fields";
            echo "$msg";
            header("location:add_aesthatics.php?msg=$msg");
        }
   }
   else{
    $msg= "Invalid Request!";
    header("location:index.php?msg=$msg");

    // print_r($_POST);
   }
?>