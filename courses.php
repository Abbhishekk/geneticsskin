<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
    include "include/links.php";



  
    $course = $fun->fetchCourse();
    
?>
</head>



<body class=""  >
    <div class=" overflow-x-hidden ">


        <?php 
            include "include/navBar.php";
        ?>
        <!-- hero Banner -->
        <section class="">

            <div class="relative w-full glide-01 ">
                <!-- Slides -->
                <div class="overflow-x-hidden">
                <img src="assets/img/slider-bg1.jpg" class="w-full h-screen object-cover" alt="slider1">
                
                </div>
               
                <div class="absolute top-[50%] left-[5%] bg-white p-5 rounded-xl bg-opacity-20 backdrop-filter backdrop-blur-md">
                                <h3 class="text-[#452464] text-sm animate-pulse" data-aos="fade-right">ADVANCED COURSES
                                </h3>
                                <h1 class="text-[#452464] text-5xl" data-aos="fade-left">GET THE BEST TRAINING &<br>
                                    COURSES</h1>
                                <button class="  mt-4 p-4 rounded-lg bg-[#452464] text-[#fff] hover:bg-[#844db8]"
                                    data-aos="fade-up"> <a href="#appointment"> Get Enquiry</a></button>

                    
                            </div>
            
                <!-- Controls -->
               
            </div>

            


        </section>

      
      

       
        

        <!--Our Services-->
        <div class="flex flex-col justify-center items-center md:m-20 m-5">
        <?php
            if (isset($_GET["msg"]) && $_GET["msg"] == "Enquiry Submitted") {
                echo '<div class="p-4 mb-4 text-sm text-slate-100 rounded-lg bg-green-500 " role="alert">
                <span class="font-medium">'.$_GET["msg"].' </span>
              </div>';
              
            } else if (isset($_GET["msg"]) && $_GET["msg"] != "Enquiry Submitted") {
                echo '<div class="p-4 mb-4 text-sm text-slate-100 rounded-lg bg-red-500 " role="alert">
                <span class="font-medium">'.$_GET["msg"].'</span> 
              </div>';
             
            }
            ?>
            <p class="text-[#452464] text-3xl font-bold text-center mb-2" data-aos="fade-up">Courses</p>
            <hr class="w-20 mx-auto h-1 bg-[#fed700]">
            <div class="flex flex-wrap mt-5 gap-5">
                <?php 
                    if(mysqli_num_rows($course)>0){
                        while($row = mysqli_fetch_assoc($course)){
                            
                            $image = $row['image'];
                ?>
                 <div class="card md:w-96 mb-10 ">
                    <figure><img src="./assets/img/courses/<?= $row["image"]?>" loading="lazy" alt="makeup"
                            class="w-full h-72 object-cover rounded-lg" data-aos="fade-in" />
                    </figure>
                    <div class="card-body">
                        <div class="relative items-center justify-center">
                            <p class=" absolute   text-8xl text-[#452464] opacity-10 z-5">0<?= $row["id"]?>.</p>
                            <h2 class=" absolute card-title z-10 text-[#452464] font-semibold text-3xl top-9 left-8"><?= strtoupper( $row["name"])?></h2>
                        </div>


                    </div>
                    <div class="mt-10">
                        <h1 class="text-[#452464] text-5xl font-medium">&nbsp;</h1>
                        <hr class=" absolute w-32  h-[3px] bg-[#fed700] mt-5">
                        <div class="mt-10">
                            <p class="text-[#452464] text-justify  "><?= $row["short_des"]?></p>
                            <p>₹<?= $row["fee"]?>/-</p>
                        </div>
                        <div>
                        <button class="  mt-4 p-4 rounded-lg bg-[#452464] text-[#fff] hover:bg-[#844db8]"
                                    data-aos="fade-up"> <a href="course_info.php?id=<?= $row["id"]?>">  Learn More</a></button>
                          
                        </div>





                    </div>
                </div>
                <?php            
                        }
                    }
                ?>
                
                

            </div>
        </div>
        <!--End-->
        
  
        
        <hr class="w-20 mx-auto h-1 bg-[#fed700]">

        <!--Contact-->

       <?php 
       include 'include/contact.php';
       ?>


        <!--End-->
        <?php 
        include 'include/footer.php';
        ?>
</body>

</html>