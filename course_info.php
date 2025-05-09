<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
    include "include/links.php";
   $id = $_GET["id"];


    $tr = $fun->fetchCourseWithId($id);
    $tr = mysqli_fetch_assoc($tr);
   
    
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
                <img src="./assets/img/courses/<?php echo $tr["image"]?>" class="w-full h-screen object-cover" alt="">
                
                </div>
               
                <div class="absolute top-[50%] left-[5%] bg-white p-5 rounded-xl bg-opacity-20 backdrop-filter backdrop-blur-md">
                                <h3 class="text-[#452464] text-sm animate-pulse" data-aos="fade-right"> <?php echo(strtoupper($tr['name'])); ?>
                                    
                                </h3>
                                <h1 class="text-[#452464] text-5xl" data-aos="fade-left">GET THE BEST <br>
                                    TRAINING</h1>
                                <button class="  mt-4 p-4 rounded-lg bg-[#452464] text-[#fff] hover:bg-[#844db8]"
                                    data-aos="fade-up"> <a href="#appointment"> Apply Now</a></button>

                    
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
            <p class="text-[#452464] text-3xl font-bold text-center mb-10" data-aos="fade-up"><?php echo($tr['name']); ?> </p>
            <div class="des appearance-none">
           
            <?php 
            if(empty($tr['des'])){
                echo "Description Not Added yet";
            }
            else{
                echo htmlspecialchars_decode($tr["des"]);

            }
            
            ?> 
                
                

            </div>
        </div>
        <!--End-->
        
        <hr class="w-20 mx-auto h-1 bg-[#fed700]">
        <div class="flex flex-col w-full justify-center items-center md:p-20 mx-auto" >
            <h1 class="text-[#452464] text-3xl font-bold text-center mb-10" >Enquiry</h1>
            <form class=" grid w-full md:grid-cols-2 gap-2" action="enquiry.php" method="POST" >
                        <div  class=""  >
                            <label for="course" class="block mb-2 text-sm font-medium text-gray-900 ">Course</label>
                            <select name="course" id="course"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                <option value="<?php echo $tr["id"]?>" selected> <?= $tr["name"]?> </option>
                            </select>
    
                        </div>
                        <div class="" >
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Your Name</label>
                            <input type="text" name="name" id="name " class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  " placeholder="John Doe" required />
                        </div>
                        <div class="" >
                            <label for="age " class="block mb-2 text-sm font-medium text-gray-900 ">Your Age</label>
                            <input type="number" name="age" id="age " placeholder="20" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  " required />
                        </div>
                        <div class="" >
                            <label for="phone " class="block mb-2 text-sm font-medium text-gray-900 ">Your Phone</label>
                            <input type="text" name="phone" id="phone " placeholder="9868574525" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  " required />
                        </div>
                        <div class="" >
                            <label for="email " class="block mb-2 text-sm font-medium text-gray-900 ">Your Email</label>
                            <input type="email" name="email" id="email " placeholder="ab@test.com" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  " required />
                        </div>
                        <div class="" >
                            <label for="edu " class="block mb-2 text-sm font-medium text-gray-900 ">Education Qualification</label>
                            <input type="text" name="edu" id="edu " placeholder="Qualification" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  " required />
                        </div>
                        <div class="col-span-2 w-full" >
                            <label for="address " class="block mb-2 text-sm font-medium text-gray-900 ">Your Address</label>
                            <textarea type="text" name="address" id="address " placeholder="Address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  " required ></textarea>
                        </div>
                        
                        <div class="col-span-2 items-center justify-center flex w-1/2  mx-auto " >
                            <button type="submit" name="app_submit" class="  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Submit</button>

                        </div>
                        
                    </form>

        </div>
        
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