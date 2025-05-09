<?php

class fun
{
    private $db;
    function __construct($con)
    {
        $this->db = $con;

    }

    public function login($username,$password){
        
        $query    = "SELECT * FROM `admin` WHERE `username`='$username' AND `password` = '$password'";
        $result = mysqli_query($this->db, $query);

        
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
           
            
                return ["Done",1];
            
           
            // Redirect to user dashboard page
           
             
        }
        else{
            return ["Failed",0];
        }
    }

    public function fetchTreatmentWithType($type){
        $sql = "SELECT * FROM `treatment` WHERE `type` = '$type' ";
        $fetch = mysqli_query($this->db, $sql);
        return $fetch;
    }    
    public function fetchTreatments(){
        $sql = "SELECT * FROM `treatment` ORDER BY `id` DESC";
        $fetch = mysqli_query($this->db, $sql);
        return $fetch;
    }    

    public function addAppointment($fname, $phone, $type, $treatment, $date){
        $sql = "INSERT INTO `appointment`(`name`, `phone`, `date`, `type`, `treatment`) 
                VALUES ('$fname','$phone','$date','$type','$treatment')";
        $insert = mysqli_query($this->db, $sql);
        return $insert;
    }
    public function addAesthaticAppointment($fname, $phone, $type, $date){
        $sql = "INSERT INTO `aesthatic_appointment`(`name`, `phone`, `date`, `type`) 
                VALUES ('$fname','$phone','$date','$type')";
        $insert = mysqli_query($this->db, $sql);
        return $insert;
    }

    public function add_treatment_type($name){
        $sql = "INSERT INTO `treatment_type`(`name`) VALUES ('$name')";
        $insert = mysqli_query($this->db, $sql);
        return $insert;
    }

    public function fetchTreatmentType(){
        $sql = "SELECT * FROM `treatment_type`";
        $fetch = mysqli_query($this->db, $sql);
        return $fetch;
    }

    public function deleteTreatmentType($id){
        $sql = "DELETE FROM `treatment_type` WHERE `id` = '$id'";
        $delete = mysqli_query($this->db, $sql);
        return $delete;
    }
    public function deleteTreatment($id){
        $sql = "DELETE FROM `treatment` WHERE `id` = '$id'";
        $delete = mysqli_query($this->db, $sql);
        return $delete;
    }

    public function fetchTreatmentTypewithId($id){
        $sql = "SELECT * FROM `treatment_type` WHERE `id` = '$id'";
        $fetch = mysqli_query($this->db, $sql);
        return $fetch;
    }

    public function updateTreatmentType($id, $name){
        $sql = "UPDATE `treatment_type` SET `name` = '$name' WHERE `id` = '$id'";
        $update = mysqli_query($this->db, $sql);
        return $update;
    }

    public function add_treatment($treatment_type, $name, $image){
        $sql = "INSERT INTO `treatment`(`type`, `name`, `image`) VALUES ('$treatment_type','$name','$image')";
        $insert = mysqli_query($this->db, $sql);
        return $insert;
    }

    public function updateTreatment($id, $treatment_type, $name, $image = ""){
        if($image != ""){
            $sql = "UPDATE `treatment` SET `type` = '$treatment_type', `name` = '$name', `image` = '$image' WHERE `id` = '$id'";
            $update = mysqli_query($this->db, $sql);
            return $update;
        }
        else{
            $sql = "UPDATE `treatment` SET `type` = '$treatment_type', `name` = '$name' WHERE `id` = '$id'";
            $update = mysqli_query($this->db, $sql);
            return $update;

        }
    }
    public function updateCourse($id, $name, $des,$fee, $image = "",$long_des){
        if($image != ""){
            $sql = "UPDATE `courses` SET `name` = '$name', `short_des` = '$des',`des` = '$long_des',`image` = '$image', `fee` = '$fee' WHERE `id` = '$id'";
            $update = mysqli_query($this->db, $sql);
            return $update;
        }
        else{
            $sql = "UPDATE `courses` SET `name` = '$name', `short_des` = '$des', `des` = '$long_des',`fee` = '$fee' WHERE `id` = '$id'";
            $update = mysqli_query($this->db, $sql);
            return $update;

        }
    }
    public function updateAesthatic($id, $name, $image = ""){
        if($image != ""){
            $sql = "UPDATE `aesthatic` SET  `name` = '$name', `image` = '$image' WHERE `id` = '$id'";
            $update = mysqli_query($this->db, $sql);
            return $update;
        }
        else{
            $sql = "UPDATE `aesthatic` SET  `name` = '$name' WHERE `id` = '$id'";
            $update = mysqli_query($this->db, $sql);
            return $update;

        }
    }

    public function fetchTreatmentWithId($id){
        $sql = "SELECT * FROM `treatment` WHERE `id` = '$id'";
        $fetch = mysqli_query($this->db, $sql);
        $res = (mysqli_num_rows($fetch) > 0) ? mysqli_fetch_assoc($fetch) : false;
        return $res;
    }

    public function addDescription($id, $description){
        $sql = "INSERT INTO `treatment_description`( `treatment_id`, `description`) VALUES ('$id','$description')";
        $update = mysqli_query($this->db, $sql);
        return $update;
    }
    public function updateDescription($id, $description){
        $sql = "UPDATE `treatment_description` SET `description`='$description' WHERE `treatment_id`='$id'";
        $update = mysqli_query($this->db, $sql);
        return $update;
    }
    public function updateAestheticDescription($id, $description){
        $sql = "UPDATE `aesthatics_description` SET `description`='$description' WHERE `aesthatic_id`='$id'";
        $update = mysqli_query($this->db, $sql);
        return $update;
    }
    public function addDescriptionAesthatic($id, $description){
        $sql = "INSERT INTO `aesthatics_description`( `aesthatic_id`, `description`) VALUES ('$id','$description')";
        $update = mysqli_query($this->db, $sql);
        return $update;
    }

    public function fetchDescription($id){
        $sql = "SELECT * FROM `treatment_description` WHERE `treatment_id` = '$id'";
        $fetch = mysqli_query($this->db, $sql);
        $res = (mysqli_num_rows($fetch) > 0) ? mysqli_fetch_assoc($fetch) : null;
        return $res;
    }
    public function fetchAesthaticDescription($id){
        $sql = "SELECT * FROM `aesthatics_description` WHERE `aesthatic_id` = '$id'";
        $fetch = mysqli_query($this->db, $sql);
        $res = (mysqli_num_rows($fetch) > 0) ? mysqli_fetch_assoc($fetch) : null;
        return $res;
    }
    public function fetchDescriptionWithTreatment($id){
        $sql = "SELECT * FROM `treatment_description` WHERE `treatment_id` = '$id'";
        $fetch = mysqli_query($this->db, $sql);
        $res = (mysqli_num_rows($fetch) > 0) ? mysqli_fetch_assoc($fetch) : null;
        return $res;
    }
    public function fetchDescriptionWithAesthetic($id){
        $sql = "SELECT * FROM `aesthatics_description` WHERE `aesthatic_id` = '$id'";
        $fetch = mysqli_query($this->db, $sql);
        $res = (mysqli_num_rows($fetch) > 0) ? mysqli_fetch_assoc($fetch) : null;
        return $res;
    }

    public function fetchAppointments(){
        $sql = "SELECT *,appointment.id as app_id ,appointment.name as app_name ,treatment.name as treat_name FROM `appointment`
        INNER JOIN treatment on appointment.treatment = treatment.id
        WHERE appointment.date >= CURRENT_DATE() and status NOT IN ('Completed','Cancel')  ; ";
        $fetch = mysqli_query($this->db, $sql);
        return $fetch;    
    }

    //new
    public function fetchAppointmentsWithid($id){
        $sql = "SELECT *,appointment.id as app_id ,appointment.name as app_name ,treatment.name as treat_name FROM `appointment`
        INNER JOIN treatment on appointment.treatment = treatment.id
        WHERE  appointment.id = '$id' ; ";
        $fetch = mysqli_query($this->db, $sql);
        return $fetch;    
    }

    public function fetchAesthaticAppointmentsWithid($id){
        $sql = "SELECT * FROM `aesthatic_appointment` WHERE `id` = '$id'";
        $fetch = mysqli_query($this->db, $sql);
        return $fetch;
    }

    public function updateAppointmentDate($id,$date){
        $sql = "UPDATE `appointment` SET `date` = '$date' WHERE `id` = '$id'";
        $update = mysqli_query($this->db, $sql);
        return $update;
    }

    public function updateAesthaticAppointmentDate($id,$date){
        $sql = "UPDATE `aesthatic_appointment` SET `date` = '$date' WHERE `id` = '$id'";
        $update = mysqli_query($this->db, $sql);
        return $update;
    }
    //end

    public function fetchAesthaticAppointments(){
        $sql = "SELECT * FROM `aesthatic_appointment`   WHERE `date` >= CURRENT_DATE() and `status` != 'Completed';";
        $fetch = mysqli_query($this->db, $sql);
        return $fetch;    
    }
    public function fetchPrevAppointments(){
        $sql = "SELECT *,appointment.id as app_id ,appointment.name as app_name ,treatment.name as treat_name FROM `appointment`
        INNER JOIN treatment on appointment.treatment = treatment.id
        WHERE  status in ('Completed','Cancel') ORDER BY appointment.date DESC ; ";
        $fetch = mysqli_query($this->db, $sql);
        return $fetch;    
    }

    public function addAesthatics($name, $image){
        $sql = "INSERT INTO `aesthatic`(`name`, `image`) VALUES ('$name','$image')";
        $insert = mysqli_query($this->db, $sql);
        return $insert;
    }

    public function fetchAesthatics(){
        $sql = "SELECT * FROM `aesthatic`";
        $fetch = mysqli_query($this->db, $sql);
        return $fetch;
    }
    public function fetchAesthaticsWithId($id){
        $sql = "SELECT * FROM `aesthatic` WHERE `id` = '$id'";
        $fetch = mysqli_query($this->db, $sql);
        $fetch = (mysqli_num_rows($fetch)>0)? mysqli_fetch_array($fetch):(null);
        return $fetch;
    }
    public function addTreatment_services($title,$des,$id){
        $sql = "UPDATE `treatment_services` SET `title`='$title',`des`='$des' WHERE `id`='$id'";
        $insert = mysqli_query($this->db, $sql);
        return $insert;
    }

    public function fetchTreatment_services(){
        $sql = "SELECT * FROM `treatment_services`";
        $fetch = mysqli_query($this->db, $sql);
        return $fetch;
    }

    public function addCourse($name, $des, $fee, $image,$long_des){
        $sql = "INSERT INTO `courses`(`name`, `short_des`, `des`,`image`, `fee`) VALUES ('$name','$des','$long_des','$image','$fee')";
        $insert = mysqli_query($this->db, $sql);
        return $insert;
    }

    public function fetchCourse(){
        $sql = "SELECT * FROM `courses`";
        $fetch = mysqli_query($this->db, $sql);
        return $fetch;
    }
    public function fetchLastCourse(){
        $sql = "SELECT * FROM `courses` ORDER BY `id` DESC LIMIT 1";
        $fetch = mysqli_query($this->db, $sql);
        return $fetch;
    }
    public function fetchCourseWithId($id){
        $sql = "SELECT * FROM `courses` WHERE `id` = '$id' ";
        $fetch = mysqli_query($this->db, $sql);
        return $fetch;
    }

    public function updateCourseStatus($id,$status){
        $sql = "UPDATE `courses` SET `status` = '$status' WHERE `id` = '$id'";
        $update = mysqli_query($this->db, $sql);
        return $update;

    }

    public function fetchEnquiries(){
        $sql = "SELECT enquiry.name,enquiry.age,enquiry.id as id, enquiry.phone,enquiry.email,enquiry.address,enquiry.education, courses.name as course_name FROM `enquiry` INNER JOIN `courses` ON `enquiry`.`course` = `courses`.`id`";
        $fetch = mysqli_query($this->db, $sql);
        return $fetch;
    }
    public function fetchEnquiriesWithId($id){
        $sql = "SELECT enquiry.name,enquiry.age,enquiry.id as id, enquiry.phone,enquiry.email,enquiry.address,enquiry.education, courses.name as course_name, courses.fee as fee FROM `enquiry` INNER JOIN `courses` ON `enquiry`.`course` = `courses`.`id` WHERE `enquiry`.`id` = '$id'";
        $fetch = mysqli_query($this->db, $sql);
        return $fetch;
    }

    public function admittedStudents(){
        $sql = "SELECT * FROM `student` where 1  ORDER BY id DESC";
        $fetch = mysqli_query($this->db, $sql);
        return $fetch;
    }

    public function updateBalanceFees($balance, $id)
    {
        $deposit = "UPDATE `student` SET `fee`='$balance' WHERE `id` = '$id'";
        $result = mysqli_query($this->db, $deposit);
        return $result;
    }

    public function fetchAllEarnings(){
        $sql = "SELECT * FROM `earning` where 1   ORDER BY id DESC";
        $fetch = mysqli_query($this->db,$sql);
        
        return $fetch;
    }
    public function insertTransactionHistory($id, $name, $remain, $reason,$date)
    {
        $transaction = "INSERT INTO `transaction_history`( `student_id`, `name`, `amount`, `reason`, `date`) VALUES ('" . $id . "','" . $name . "','" . $remain . "','" . $reason . "','$date')";
        mysqli_query($this->db, $transaction);
    }

    public function getLastEarningMonth()
    {
        $amount = "SELECT * FROM `earning` ORDER BY id DESC LIMIT 1 ";
        $am = mysqli_query($this->db, $amount);
        return $am;
    }
    public function insertEarning($remain, $date)
    {
        $earning = "INSERT INTO `earning`( `earning`, `month_year`) VALUES ('" . $remain . "','" . $date . "')";
        $am = mysqli_query($this->db, $earning);
        return $am;
    }

    public function updateEarning($remain, $id)
    {
        $earning = "UPDATE `earning` SET `earning`='" . $remain . "' WHERE `id`='" . $id . "'";
        mysqli_query($this->db, $earning);
    }

    public function fetchTransactionHistory()
    {
        $sql = "SELECT * FROM transaction_history  ORDER BY id DESC";
        $fetch = mysqli_query($this->db, $sql);
        return $fetch;
    }
    public function getTransactionWithId($id)
    {
        $fetch = "SELECT * FROM transaction_history where id ='" . $id . "';";
        $result = mysqli_query($this->db, $fetch);
        return $result;
    }

    public function getStudentByID($id){
        $sql = "SELECT * FROM `student` WHERE `id` = '$id'";
        $fetch = mysqli_query($this->db, $sql);
        return $fetch;
    }

    public function countTotalStudents()
    {
        $user = "SELECT COUNT(*) as count_stud FROM student ";
        $count = mysqli_query($this->db, $user);
        $assoc = mysqli_fetch_assoc($count);
        return $assoc['count_stud'];
    }

    public function getEarning()
    {
        $month = date('m');
        $year = date('y');
        $date = "".$month."-".$year."";
        $amount = "SELECT * FROM `earning` WHERE `month_year`='$date' ORDER BY id DESC LIMIT 1 ";
        $am = mysqli_query($this->db, $amount);
        if($am){
            
        $earn = mysqli_fetch_assoc($am);
         $earning = $earn['earning'];
        }
        else{
            $earning = 0;
        }
        return $earning;
    }

    public function getCourseDetails()
    {
        $sql = "SELECT * FROM `courses` ";
        $query = mysqli_query($this->db, $sql);
        return $query;
    }

    public function getEarningData(){
        $earn = [0,0,0,0,0,0,0,0,0,0,0,0];
        $year = date("y");
        $year = substr($year,2);
        $sql = "SELECT `earning`,`month_year` FROM `earning` WHERE `month_year` LIKE '%$year'";
        $fetch = mysqli_query($this->db,$sql);
        if(mysqli_num_rows($fetch)>0){
            while($res = mysqli_fetch_assoc($fetch)){
                $month = substr($res['month_year'],0,2);
                //echo "Month:- $month";
                $month = intval($month);
                $earn[$month-1] = $res['earning'];
            }
        }
        //print_r($earn);
        return $earn;
    }

    public function getTotalBalanceFees()
    {
        $total_remaining = "SELECT SUM(fee) AS balance FROM student;";
        $remain = mysqli_query($this->db, $total_remaining);
        $row = mysqli_fetch_assoc($remain);
        return $row['balance'];
    }
    public function getCourseStudentData(){
        $arr = [];
        $sql = "SELECT `course`, COUNT(`course`) as count FROM `student` GROUP BY `course` HAVING COUNT(`course`) > 1;";
        $fetch = mysqli_query($this->db,$sql);
        if(mysqli_num_rows($fetch)>0){
            while($res = mysqli_fetch_assoc($fetch)){
                $arr[$res['course']] = $res['count'];
            }
        }
        return $arr;
    }

    public function getTotalSum() {
        $sql = "SELECT SUM(`total_fee`) AS sum FROM `student` WHERE 1";
        $fetch = mysqli_query($this->db,$sql);
        $fetch = mysqli_fetch_assoc($fetch);
        return $fetch['sum'];
    }

    public function fetchLastFiveTransaction()
    {
        $sql = "SELECT * FROM transaction_history  ORDER BY id DESC LIMIT 5";
        $fetch = mysqli_query($this->db, $sql);
        
        return $fetch;
    }

}
?>