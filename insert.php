<?php 
    include "connect/db.php";

    $con = new connect();

    $treatment = array(
        "Skin" =>array(
            "t1" => "Acne Scar",
            "t2" => "Acne treatment",
            "t3" => "Freckles",
            "t4" => "Melasma",
            "t5" => "Open Pores",
            "t6" => "Pigmentation",
            "t7" => "Rosacea",
            "t8" => "Skin tag removal"
        ),
        "Hair" => array(
            "t1" => "Hair Transplant",
            "t2" => "Hair Growth Booster",
            "t3" => "Light therapy",
            "t4" => "Scalp micro needling"
        ),
        "Body" => array(
            "t1" => "Fat loss injections",
            "t2" => "Muscle toning",
            "t3" => "Body contouring",
            "t4" => "Skin tightening",
        )
    );
    $aesthatic = ["Crabon laser", "Chemical peel", "Dark circles treatment","Derma roller", "Chin reduction", "Face countering", "Laser hair removal", "Laser toning","Micro blading","Micro dermabrasion","Non surgical face lift", "Scar treatment", "Stretch mark reduction","Tattoo removal","Thred lift","Vampire facial (PRP)"];

    // foreach($aesthatic as $key){
    //     $sql = "INSERT INTO `aesthatic`( `name`) VALUES ('$key')";
    //     $fetch = mysqli_query($con->dbconnect(),$sql);
    //     if($fetch){
    //         echo "success<br>";
    //     }
    //     else{
    //         echo "failed";
    //     }
       
    // }
?>