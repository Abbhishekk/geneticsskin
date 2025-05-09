<?php

class fun
{
    private $db;
    function __construct($con)
    {
        $this->db = $con;

    }

    public function fetchTreatmentWithType($type){
        $sql = "SELECT * FROM `treatment` WHERE `type` = '$type'";
        $fetch = mysqli_query($this->db, $sql);
        return $fetch;
    }    
    public function fetchTreatmentWitId($id){
        $sql = "SELECT * FROM `treatment` WHERE `id` = '$id'";
        $fetch = mysqli_query($this->db, $sql);
       
        return $fetch;
    }   
    public function fetchAesthaticsWithId($id){
        $sql = "SELECT * FROM `aesthatic` WHERE `id` = '$id'";
        $fetch = mysqli_query($this->db, $sql);
        $fetch = (mysqli_num_rows($fetch)>0)? mysqli_fetch_array($fetch):(null);
        return $fetch;
    } 

    public function addAppointment($fname, $phone, $type, $treatment, $date){
        $sql = "INSERT INTO `appointment`(`name`, `phone`, `date`, `type`, `treatment`) 
                VALUES ('$fname','$phone','$date','$type','$treatment')";
        $insert = mysqli_query($this->db, $sql);
        return $insert;
    }
    public function addAesthaticAppointment($fname, $phone, $type, $date){
        $sql = "INSERT INTO `aesthatic_appointment`(`name`, `phone`, `date`, `aesthatic`) 
                VALUES ('$fname','$phone','$date','$type')";
        $insert = mysqli_query($this->db, $sql);
        return $insert;
    }
    public function fetchTreatmentType(){
        $sql = "SELECT * FROM `treatment_type`";
        $fetch = mysqli_query($this->db, $sql);
        return $fetch;
    }

    public function fetchTreatmentTypeWithId($id){
        $sql = "SELECT *,treatment_type.name as type_name, treatment.name as treatment FROM `treatment_type` 
        INNER JOIN treatment on treatment.type = treatment_type.name where treatment_type.id='$id'; ";
        $fetch = mysqli_query($this->db, $sql);
        return $fetch;
    }

    public function fetchTreatmentWithId($id){
        $sql = "SELECT * FROM `treatment_type` WHERE `id` = '$id'";
        $fetch = mysqli_query($this->db, $sql);
        
        return $fetch;
    }

    public function fetchAesthatics(){
        $sql = "SELECT * FROM `aesthatic`";
        $fetch = mysqli_query($this->db, $sql);
        return $fetch;
    }
    public function fetchDescription($id){
        $sql = "SELECT * FROM `treatment_description` WHERE `treatment_id` = '$id'";
        $fetch = mysqli_query($this->db, $sql);
        $res = (mysqli_num_rows($fetch) > 0) ? mysqli_fetch_assoc($fetch) : false;
        return $res;
    }
    public function fetchDescriptionWithAesthatic($id){
        $sql = "SELECT * FROM `aesthatics_description` WHERE `aesthatic_id` = '$id'";
        $fetch = mysqli_query($this->db, $sql);
        $res = (mysqli_num_rows($fetch) > 0) ? mysqli_fetch_assoc($fetch) : false;
        return $res;
    }
    public function fetchTreatment_services(){
        $sql = "SELECT * FROM `treatment_services`";
        $fetch = mysqli_query($this->db, $sql);
        return $fetch;
    }
    public function fetchCourse(){
        $sql = "SELECT * FROM `courses` WHERE `status` = 1";
        $fetch = mysqli_query($this->db, $sql);
        return $fetch;
    }

    public function enquirySubmit($data){
        $course = $data['course'];
        $name = $data['name'];
        $age = $data['age'];
        $phone = $data['phone'];
        $email = $data['email'];
        $address = $data['address'];
        $education = $data['edu'];

        $sql = "INSERT INTO `enquiry`( `course`, `name`, `age`, `phone`, `email`, `address`, `education`)
                 VALUES ('$course','$name','$age','$phone','$email','$address','$education')";
        $fetch = mysqli_query($this->db, $sql);
        return $fetch;
    }

    public function fetchCourseWithId($id){
        $sql = "SELECT * FROM `courses` WHERE `id` = '$id' ";
        $fetch = mysqli_query($this->db, $sql);
        return $fetch;
    }

    


}
