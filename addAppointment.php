<?php 
    include "connect/db.php";
    include "connect/fun.php";

    $conn = new connect();
    $fun = new fun($conn ->dbconnect());


    if(isset($_POST["treatment_submit"])){

        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $date = $_POST["date"];
        $type = $_POST["type"];
        $treatment = $_POST["treatment"];
        // print_r($_POST);
         $fun->addAppointment($name, $phone, $type, $treatment, $date);
         header("Location: index.php?msg=appointment booked");
    }
    if(isset($_POST["aesthatic_submit"])){

        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $date = $_POST["date"];
        $type = $_POST["aesthetic"];
        
        // print_r($_POST);
         $fun->addAesthaticAppointment($name, $phone, $type, $date);
         header("Location: index.php?msg=Appointment Booked");
    }

?>