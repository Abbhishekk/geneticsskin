<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
    include "include/links.php";
   $id = $_GET["id"];

  $treat = $fun->fetchTreatmentwithId($id);
    $t = mysqli_fetch_array($treat);
    $treatment = $fun->fetchTreatmentTypewithId($id);
    
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
                <img src="assets/img/slider-bg1.jpg" class="w-full h-screen object-cover" alt="">
                
                </div>
               
                <div class="absolute top-[50%] left-[5%] bg-white p-5 rounded-xl bg-opacity-20 backdrop-filter backdrop-blur-md">
                                <h3 class="text-[#452464] text-sm animate-pulse" data-aos="fade-right">ADVANCED <?php echo(strtoupper($t['name'])); ?>
                                    CARE
                                </h3>
                                <h1 class="text-[#452464] text-5xl" data-aos="fade-left">GET THE BEST <?php echo(strtoupper($t['name'])); ?> <br>
                                    TREATMENTS</h1>
                                <button class="  mt-4 p-4 rounded-lg bg-[#452464] text-[#fff] hover:bg-[#844db8]"
                                    data-aos="fade-up"> <a href="#appointment"> Get Appointmemt</a></button>

                    
                            </div>
            
                <!-- Controls -->
               
            </div>

            


        </section>

        <?php 
            include "include/appointment.php";
        ?>

      

       
        <hr class="w-20 mx-auto h-1 bg-[#fed700]">
 
        <!--Our Services-->
        <div class="flex flex-col justify-center items-center md:m-20 m-5">
            <p class="text-[#452464] text-3xl font-bold text-center mb-10" data-aos="fade-up"><?php echo($t['name']); ?> Treatments</p>
            <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-5">
                <?php 
                    if(mysqli_num_rows($treatment)>0){
                        while($row = mysqli_fetch_assoc($treatment)){
                            
                            $image = $row['image'];
                ?>
                <div class="card  mb-5 overflow-hidden">
                    <a href="treatment_item.php?id=<?php echo $row["id"]?>">
                        <div class="w-64 h-64 bg-red-100 relative">

                            <div class="absolute inset-0 bg-cover bg-center rounded-lg z-0"
                                style="background-image: url('<?php echo ".".ltrim($row["image"],".")?>')"></div>
                            <div
                                class="opacity-0 bg-white p-5 rounded-xl bg-opacity-20 backdrop-filter backdrop-blur-md hover:opacity-100 hover:bg-gray-900/[0.2] duration-300 absolute inset-0 z-10 flex justify-center items-center text-4xl text-white font-semibold">
                                <?php 
                                    echo $row["treatment"];
                                ?></div>

                        </div>
                    </a>
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