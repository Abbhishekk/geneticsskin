<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Add Slider Images</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  
  <?php 
    include "include/links.php";
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

    if(isset($_POST["submit"])){
        $img_no = $_POST["image_no"];
        if(isset($_FILES["image"]["name"]) && !empty($_FILES["image"]["name"])){
            $fileName = $treatment_type."_".$name;
            $target_dir = "../assets/img/";
            $target_file = $target_dir .basename($_FILES["image"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $file_name = $target_dir ."slider-bg$img_no.".$imageFileType;
           

            $imageTemp = $_FILES["image"]["tmp_name"]; 
            $imageSize = convert_filesize($_FILES["image"]["size"]); 
             
            // Compress size and upload image 
            $compressedImage = compressImage($imageTemp, $file_name, 25); 
            if($compressedImage){
               
                $msg = "Added Successfully";
                //echo "$msg";
                
                header("location:slider.php?msg=$msg");
            }
            else{
                $msg= "Image not uploaded";
                // echo "$msg";
                header("location:slider.php?id=$id&msg=$msg");
            }
    
        }
        else{
            $msg= "Image not uploaded";
            // echo "$msg";
            header("location:slider.php?msg=$msg");
        }
    }
    

  ?>
</head>

<body>

 <?php 
  include 'include/header.php';
 ?>

  <?php 
    include 'include/navBar.php';  
  ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Slider Images</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item ">Sliders</li>
          <li class="breadcrumb-item active">Add Slider Images</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Slider Form</h5>
            <?php
            // echo $id;
            // print_r($treatment);
            ?>
               <!-- Multi Columns Form -->
          <form class="row g-3" action="slider.php" method="post" id="form" enctype="multipart/form-data">
            <?php
            if (isset($_GET["msg"]) && $_GET["msg"] == "Added Successfully") {
              echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <i class='bi bi-check-circle me-1'></i>
                    <span id='message' >" . $_GET['msg'] . "</span>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                  </div>";
            } else if (isset($_GET["msg"]) && $_GET["msg"] != "Added Successfully") {
              echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <i class='bi bi-exclamation-octagon me-1'></i>
                    <span id='message' >" . $_GET['msg'] . "</span>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                  </div>";
            }
            
            ?>

            
         
            
            <div class="col-md-6 form-floating mb-3 " >
              <select name="image_no" id="floatingSelect" class="form-select" aria-label="Floating label select example" > 
                    <option value="1" selected >1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>

              </select>
              <label for="floatingSelect">Image no.</label>

            </div>
            <div class="col-md-6">
              <label for="image" name="image" class="col-sm-2 col-form-label">Upload Image</label>
              <div class="col-sm-10">
                <input class="form-control" name="image" type="file" id="image" accept=".jpg">
              </div>
            </div>
            <div class="text-center">
              <div class="spinner-border text-success " hidden id="loader" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="" id="buttons">
                <button type="submit" name="submit" class="btn btn-primary">Submit </button>
                <button type="reset" class="btn btn-secondary">Reset</button>

              </div>
            </div>
          </form><!-- End Multi Columns Form -->

            </div>
          </div>
          <div class="card" >
            <div class="card-body">
                <div class="row" >
                    <div class="col-md-4" >
                        <img src="../assets/img/slider-bg1.jpg" class="img-fluid" alt="slider image">
                    </div>
                    <div class="col-md-4" >
                    <img src="../assets/img/slider-bg2.jpg" class="img-fluid" alt="slider image">

                    </div>
                    <div class="col-md-4" >
                    <img src="../assets/img/slider-bg3.jpg" class="img-fluid" alt="slider image">

                    </div>
                </div>
            </div>
          </div>
         
    </section>

  </main><!-- End #main -->

  <?php 
    include "include/footer.php";
  ?>

</body>

</html>