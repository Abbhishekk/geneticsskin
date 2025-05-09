<?php 
    include "connect/db.php";
    include "connect/fun.php";

    $conn = new connect();
    $fun = new fun($conn->dbconnect());


    if(isset($_POST["app_submit"])){
        $fetch =  $fun->enquirySubmit($_POST);
        if($fetch){
            header("location:courses.php?msg=Enquiry Submitted");
        }
        else{
            header("location:courses.php?msg=Enquiry Not Submitted");
        }
    }

?>