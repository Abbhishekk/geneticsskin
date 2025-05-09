<!--Appointment-->
<?php 
    $treatment_type = $fun->fetchAesthatics();

?>
<div class="flex flex-col md:flex-row justify-center bg-slate-200 m-3 p-10 gap-3" id="appointment">
            <div class="flex flex-col md:items-end">
                <h3 class="text-[#452464] md:text-lg text-sm" data-aos="fade-right"
                    data-aos-anchor-placement="center-bottom">REQUEST FOR YOU</h3>
                <h1 class="md:text-5xl text-3xl  text-[#452464] font-medium" data-aos="fade-right">Consultation</h1>
            </div>
            <div class="flex flex-col items-start ">
                <form action="addAppointment.php" method="post">

                    <div class="grid grid-cols-1 gap-6  md:grid-cols-3">

                        <div>
                            <input type="text" class="w-full p-3 border-0 rounded-lg focus:border-[#452464]" name="name"
                                id="name" placeholder="Name">
                        </div>
                        <div>
                            <input type="text" class="w-full p-3 border-0 rounded-lg focus:border-[#452464]"
                                name="phone" id="phone" placeholder="Phone no.">
                        </div>
                        <div>
                            <input type="date" class="w-full p-3 border-0 rounded-lg focus:border-[#452464]" name="date"
                                id="date" min="<?php echo date('Y-m-d'); ?>" placeholder="Preferred date">
                        </div>
                        <div>
                            <select name="aesthetic" id="aesthetic"
                                class="w-full p-3 border-0 rounded-lg focus:border-[#452464]">
                                <option value="">Select Aesthetic </option>
                                <?php 
                                    if(mysqli_num_rows($treatment_type)>0){
                                        while($row = mysqli_fetch_assoc($treatment_type)){
                                            echo "<option value=".$row["name"].">$row[name]</option>";
                                        }
                                    }
                                ?>
                                
                            </select>
                        </div>
                        
                        <div>
                            <button type="submit" name="aesthatic_submit"
                                class="w-full p-3 font-bold border-0 bg-[#452464] p-2 text-white rounded-lg focus:border-[#452464] hover:bg-[#844db8]">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- end Appointment -->