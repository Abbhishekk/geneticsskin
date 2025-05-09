<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
    include "include/links.php";
   $id = $_GET["id"];


    $tr = $fun->fetchAesthaticsWithId($id);
   
    $des = $fun->fetchDescriptionWithAesthatic($id);
    
?>

</head> 

<style>
    .des .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    margin-top: 0;
    margin-bottom: 0.5rem;
    font-weight: 500;
    line-height: 1.2;
    color: var(--bs-heading-color);
}
.des h2{
    font-size: 3rem;
}
.des p{
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    margin-top: 0;
    margin-bottom: 1rem;
    text-align: justify;
}
.des ul {
    display: block;
    list-style-type: disc;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
}
.des a {
    background-color: #0d6efd;
    color: #fff;
    text-decoration: none;
    padding: 5px 10px;
    border-radius: 5px;
    transition: all 0.3s ease;
    text-align: center;


}
</style>

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
                <img src=".<?php echo ltrim($tr["image"],'.')?>" class="w-full h-screen object-cover" alt="">
                
                </div>
               
                <div class="absolute top-[50%] left-[5%] bg-white p-5 rounded-xl bg-opacity-20 backdrop-filter backdrop-blur-md">
                                <h3 class="text-[#452464] text-sm animate-pulse" data-aos="fade-right">ADVANCED <?php echo(strtoupper($tr['name'])); ?>
                                    CARE
                                </h3>
                                <h1 class="text-[#452464] text-5xl" data-aos="fade-left">GET THE BEST <?php echo(strtoupper($tr['name'])); ?> <br>
                                    TREATMENTS</h1>
                                <button class="  mt-4 p-4 rounded-lg bg-[#452464] text-[#fff] hover:bg-[#844db8]"
                                    data-aos="fade-up"> <a href="#appointment"> Get Appointmemt</a></button>

                    
                            </div>
            
                <!-- Controls -->
               
            </div>

            


        </section>

        <?php 
            include "include/aesthatic_appointment.php";
        ?>

      

       
        <hr class="w-20 mx-auto h-1 bg-[#fed700]">

        <!--Our Services-->
        <div class="flex flex-col justify-center items-center md:m-20 m-5">
            <p class="text-[#452464] text-3xl font-bold text-center mb-10" data-aos="fade-up"><?php echo($tr['name']); ?> Treatments</p>
            <div class="des appearance-none">
            <style>


            </style>
            <?php 
            if(empty($des)){
                echo "Description Not Added yet";
            }
            else{
                echo htmlspecialchars_decode($des["description"]);

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