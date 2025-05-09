<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
    include "include/links.php";
    if(isset($_GET["msg"])){
        echo "<script>
            
            if(confirm('$_GET[msg]')){
                window.location.href = './index.php';
            }
            window.location.href = './'; 
         
        </script>";
        
    }
    $ts = $fun->fetchTreatment_services();
?>
</head>



<body>

    <div class=" overflow-x-hidden ">
    

        <?php 
            include "include/navBar.php";
        ?>
        <!-- hero Banner -->
        <section class="w-screen h-screen">

            

                <div id="default-carousel" class="relative h-full w-full" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-full overflow-hidden rounded-lg md:h-full">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div class="overflow-x-hidden">
                                <img src="./assets/img/slider-bg1.jpg" 
                                class="object-cover h-screen w-full " />

                            </div>
                            
                            <div class="absolute top-[50%] left-[5%] bg-white p-5 rounded-xl bg-opacity-20 backdrop-filter backdrop-blur-lg">
                                <h3 class="text-[#452464] text-sm animate-pulse" data-aos="fade-right">ADVANCED CELL
                                    CARE
                                </h3>
                                <h1 class="text-[#452464] text-5xl" data-aos="fade-left">GET THE BEST SKIN <br>
                                    TREATMENTS</h1>
                                <button class="  mt-4 p-4 rounded-lg bg-[#452464] text-[#fff] hover:bg-[#844db8]"
                                    data-aos="fade-up"> <a href="#appointment"> Get Appointment</a></button>

                            </div>
                            <!-- <img src="/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..."> -->
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div class="overflow-x-hidden">
                                                        
                                <img src="./assets/img/slider-bg2.jpg" 
                                    class="object-cover h-screen w-full " />
                            </div> 
                            <div class="absolute top-[50%] left-[5%] bg-white p-5 rounded-xl bg-opacity-20 backdrop-filter backdrop-blur-md">
                                <h3 class="text-[#452464] text-sm animate-pulse" data-aos="fade-right">WE CARE FOR YOUR
                                    SCREEN</h3>
                                <h1 class="text-[#452464] text-5xl" data-aos="fade-left">Treat Every Skin <br> Problems
                                    Effectively</h1>
                                <button class=" mt-4 p-4 rounded-lg bg-[#452464] text-[#fff] hover:bg-[#844db8]"
                                    data-aos="fade-up"><a href="#appointment"> Get Appointment</a></button>

                            </div>
                <!-- <img src="/docs/images/carousel/carousel-2.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..."> -->
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div class="overflow-x-hidden" >

                                <img src="./assets/img/slider-bg3.jpg"
                                class="object-cover h-screen w-full" />
                            </div> 
                            <div class="absolute top-[50%] left-[5%] bg-white p-5 rounded-xl bg-opacity-20 backdrop-filter backdrop-blur-lg">
                                <h3 class="text-[#452464] text-sm animate-pulse" data-aos="fade-right">WE CARE FOR YOUR
                                SCREEN</h3>
                                <h1 class="text-[#452464] text-5xl" data-aos="fade-left">Treat Every Skin <br> Problems
                                Effectively</h1>
                                <button class="  mt-4 p-4 rounded-lg bg-[#452464] text-[#fff] hover:bg-[#844db8]"
                                data-aos="fade-up"><a href="#appointment"> Get Appointment</a></button>

                            </div>
                            <!-- <img src="/docs/images/carousel/carousel-3.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..."> -->
                        </div>
                    
                        
                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                        
                    </div>
                    <!-- Slider controls -->
                    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>

            


        </section>
        <button id="contactButton" class=" fixed bottom-[20px] right-[20px] bg-white text-[#fff] rounded-full">
            <a href="https://wa.me/919226906565?text=hey%20I%20want%20to%20know%20more" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" class="" height="60" viewBox="0 0 1219.547 1225.016" id="whatsapp"><path fill="#E0E0E0" d="M1041.858 178.02C927.206 63.289 774.753.07 612.325 0 277.617 0 5.232 272.298 5.098 606.991c-.039 106.986 27.915 211.42 81.048 303.476L0 1225.016l321.898-84.406c88.689 48.368 188.547 73.855 290.166 73.896h.258.003c334.654 0 607.08-272.346 607.222-607.023.056-162.208-63.052-314.724-177.689-429.463zm-429.533 933.963h-.197c-90.578-.048-179.402-24.366-256.878-70.339l-18.438-10.93-191.021 50.083 51-186.176-12.013-19.087c-50.525-80.336-77.198-173.175-77.16-268.504.111-278.186 226.507-504.503 504.898-504.503 134.812.056 261.519 52.604 356.814 147.965 95.289 95.36 147.728 222.128 147.688 356.948-.118 278.195-226.522 504.543-504.693 504.543z"></path><linearGradient id="a" x1="609.77" x2="609.77" y1="1190.114" y2="21.084" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#20b038"></stop><stop offset="1" stop-color="#60d66a"></stop></linearGradient><path fill="url(#a)" d="M27.875 1190.114l82.211-300.18c-50.719-87.852-77.391-187.523-77.359-289.602.133-319.398 260.078-579.25 579.469-579.25 155.016.07 300.508 60.398 409.898 169.891 109.414 109.492 169.633 255.031 169.57 409.812-.133 319.406-260.094 579.281-579.445 579.281-.023 0 .016 0 0 0h-.258c-96.977-.031-192.266-24.375-276.898-70.5l-307.188 80.548z"></path><path fill="#FFF" fill-rule="evenodd" d="M462.273 349.294c-11.234-24.977-23.062-25.477-33.75-25.914-8.742-.375-18.75-.352-28.742-.352-10 0-26.25 3.758-39.992 18.766-13.75 15.008-52.5 51.289-52.5 125.078 0 73.797 53.75 145.102 61.242 155.117 7.5 10 103.758 166.266 256.203 226.383 126.695 49.961 152.477 40.023 179.977 37.523s88.734-36.273 101.234-71.297c12.5-35.016 12.5-65.031 8.75-71.305-3.75-6.25-13.75-10-28.75-17.5s-88.734-43.789-102.484-48.789-23.75-7.5-33.75 7.516c-10 15-38.727 48.773-47.477 58.773-8.75 10.023-17.5 11.273-32.5 3.773-15-7.523-63.305-23.344-120.609-74.438-44.586-39.75-74.688-88.844-83.438-103.859-8.75-15-.938-23.125 6.586-30.602 6.734-6.719 15-17.508 22.5-26.266 7.484-8.758 9.984-15.008 14.984-25.008 5-10.016 2.5-18.773-1.25-26.273s-32.898-81.67-46.234-111.326z" clip-rule="evenodd"></path><path fill="#FFF" d="M1036.898 176.091C923.562 62.677 772.859.185 612.297.114 281.43.114 12.172 269.286 12.039 600.137 12 705.896 39.633 809.13 92.156 900.13L7 1211.067l318.203-83.438c87.672 47.812 186.383 73.008 286.836 73.047h.255.003c330.812 0 600.109-269.219 600.25-600.055.055-160.343-62.328-311.108-175.649-424.53zm-424.601 923.242h-.195c-89.539-.047-177.344-24.086-253.93-69.531l-18.227-10.805-188.828 49.508 50.414-184.039-11.875-18.867c-49.945-79.414-76.312-171.188-76.273-265.422.109-274.992 223.906-498.711 499.102-498.711 133.266.055 258.516 52 352.719 146.266 94.195 94.266 146.031 219.578 145.992 352.852-.118 274.999-223.923 498.749-498.899 498.749z"></path></svg>

            </a>

        </button>

        
        <?php 
            include "include/appointment.php";
        ?>

        <!--Treatments and services -->
        <?php 
            if(mysqli_num_rows($ts)>0){

        ?>
        
        
        <div class="md:m-20">
            <h3 class="text-[#452464] md:text-lg text-sm text-center" data-aos="fade-right">HEALTHY SKIN AND NATURAL
            </h3>
            <h1 class="text-5xl text-center text-[#452464] font-bold" data-aos="fade-left">Treatments & Services</h1>

            <div class="flex md:justify-between md:flex-row flex-col  md:gap-3 gap-0 p-10">
                <?php 
                $sr = 1;
                    while($row = mysqli_fetch_assoc($ts)){
                        $id = ($sr==4)?"aesthatic.php":"treatment.php?id=$sr";
                        $sr++;
                ?>
                <div class="card md:w-96 mb-10 ">
                    <a href="<?=$id?>"> 
                        <figure><img src="./assets/img/card-<?= $row["id"]?>.jpg"  alt="makeup"
                            class="w-full h-72 object-cover rounded-lg" />
                        </figure>
                    </a>
                    <div class="card-body">
                        <div class="relative items-center justify-center">
                            <p class=" absolute   text-8xl text-[#452464] opacity-10 z-5">0<?= $row["id"]?>.</p>
                            <h2 class=" absolute card-title z-10 text-[#452464] font-semibold text-3xl top-9 left-8"><?= strtoupper( $row["title"])?></h2>
                        </div>


                    </div>
                    <div class="mt-10">
                        <h1 class="text-[#452464] text-5xl font-medium">&nbsp;</h1>
                        <hr class=" absolute w-32  h-[3px] bg-[#fed700] mt-5">
                        <div class="mt-10">
                            <p class="text-[#452464] text-justify  "><?= $row["des"]?></p>
                        
                        </div>
                       

                    </div>
                    
                </div>
                
                <?php        
                    }
                ?>
                

            </div>
        </div>
        <?php        

            }
        ?>
        <!--End-->
        <hr class="w-20 mx-auto h-1 bg-[#fed700]">

        <!--Skin Treat HIM/Her photos-->
        <div class="flex flex-col justify-center text-center md:m-20 ">
            <div class="flex flex-col">

                <h3 class="text-[#452464] text-md" data-aos="fade-right">WE PROVIDE FOR YOU</h3>
                <h1 class="text-[#452464] text-5xl font-bold" data-aos="fade-left">We Treat All Type Of Skin</h1>
            </div>
            <div class="flex justify-center mt-5 gap-5">
                <button class="bg-black hover:bg-gray-800 text-white px-3 py-2 mb-10 rounded-lg font-medium"
                    onclick="getElementById('img-him').setAttribute('src','./assets/img/him-img.jpg')">For Him</button>
                <button class="bg-[#452464] hover:bg-[#844db8] text-white px-3 py-2 mb-10 rounded-lg font-medium"
                    onclick="getElementById('img-him').setAttribute('src','./assets/img/her-img.jpg')">For Her</button>
            </div>
            <div>
                <img loading="lazy" src="./assets/img/him-img.jpg" id="img-him" alt="skin-treat-him-her"
                    class="w-full object-cover rounded-lg" />
            </div>
        </div>
        <!--End-->
        <hr class="w-20 mx-auto h-1 bg-[#fed700]">

        <!--Our Services-->
        <div class="flex flex-col justify-center items-center md:m-20 m-5">
            <p class="text-[#452464] text-3xl font-bold text-center mb-10" data-aos="fade-up">OUR SERVICES</p>
            <div class="grid md:grid-cols-3 grid-cols-2 gap-5">
                <div class="card  mb-5 overflow-hidden">
                    <a href="#">
                        <div class="w-64 h-64 bg-red-100 relative">

                            <div class="absolute inset-0 bg-cover bg-center rounded-lg z-0"
                                style="background-image: url('./assets/img/service-1.jpg')"></div>
                            <div
                                class=" bg-black p-5 rounded-xl bg-opacity-30   duration-300 absolute inset-0 z-10 flex justify-center items-center text-6xl text-white font-semibold">
                                SKIN</div>

                        </div>
                    </a>
                </div>
                <div class="card  mb-5 overflow-hidden">
                    <a href="#">
                        <div class="w-64 h-64 bg-red-100 relative">
                            <div class="absolute inset-0 bg-cover bg-center rounded-lg z-0"
                                style="background-image: url('./assets/img/service-2.jpg')"></div>
                            
                            <div
                                class=" bg-black p-5 rounded-xl bg-opacity-30   duration-300 absolute inset-0 z-10 flex justify-center items-center text-6xl text-white font-semibold">
                                HAIR</div>
                        </div>

                    </a>
                </div>
                <div class="card  mb-5 overflow-hidden">
                    <a href="#">

                        <div class="w-64 h-64 bg-red-100 relative">
                            <div class="absolute inset-0 bg-cover bg-center rounded-lg z-0"
                                style="background-image: url('./assets/img/service-3.jpg')"></div>
                            <div
                                class=" bg-black p-5 rounded-xl bg-opacity-30   duration-300 absolute inset-0 z-10 flex justify-center items-center text-6xl text-white font-semibold">
                                BODY</div>
                        </div>
                    </a>
                </div>
                <div class="card  mb-5 overflow-hidden">
                    <a href="aestahtics.php">

                        <div class="w-64 h-64 bg-red-100 relative">
                            <div class="absolute inset-0 bg-cover bg-center rounded-lg z-0"
                                style="background-image: url('./assets/img/service-4.jpg')"></div>
                            <div
                                class=" bg-black p-5 rounded-xl bg-opacity-30   duration-300 absolute inset-0 z-10 flex justify-center items-center text-6xl text-white font-semibold">
                                AESTHATICS</div>
                        </div>
                    </a>
                </div>
                <div class="card  mb-5 overflow-hidden">
                    <a href="#">
                        <div class="w-64 h-64 bg-red-100 relative">
                            <div class="absolute inset-0 bg-cover bg-center rounded-lg z-0"
                                style="background-image: url('./assets/img/service-5.jpg')"></div>
                            <div
                                class=" bg-black p-5 rounded-xl bg-opacity-30   duration-300 absolute inset-0 z-10 flex justify-center items-center text-6xl text-white font-semibold">
                                COSMETIC SURGERY</div>
                        </div>

                    </a>
                </div>
                <div class="card mb-5 overflow-hidden overflow-hidden">
                    <a href="#">
                        <div class="w-64 h-64 bg-red-100 relative ">
                            <div class="absolute inset-0 bg-cover bg-center rounded-lg z-0"
                                style="background-image: url('./assets/img/service-6.jpg')"></div>
                            <div
                                class=" bg-black p-5 rounded-xl bg-opacity-30   duration-300 absolute inset-0 z-10 flex justify-center items-center text-6xl text-white font-semibold">
                                WELLNESS</div>
                        </div>

                    </a>
                </div>

            </div>
        </div>
        <!--End-->
        <hr class="w-20 mx-auto h-1 bg-[#fed700]">
        <!--Before After Gallery-->

        <?php 
            include "include/beforeAfter.php";
        ?>

        <!--End-->
        <hr class="w-20 mx-auto h-1 bg-[#fed700]">

        <!--Shop Now-->
        <!-- <div class="flex flex-col justify-center items-center md:m-20 m-5">
            <p class="text-[#452464] text-3xl font-bold text-center mb-10" data-aos="fade-up">OUR PRODUCTS</p>
            <div class="grid md:grid-cols-3 grid-cols-2 gap-5">
                <div class="card  mb-5 overflow-hidden">
                    <a href="skin.html">
                        <div class="w-64 h-64 bg-red-100 relative">

                            <div class="absolute inset-0 bg-cover bg-center rounded-lg z-0"
                                style="background-image: url('./assets/img/service-1.jpg')"></div>
                            <div
                                class="opacity-0 hover:opacity-100 hover:bg-gray-900/[0.2] duration-300 absolute inset-0 z-10 flex justify-center items-center text-6xl text-white font-semibold">
                                SKIN</div>

                        </div>
                    </a>
                </div>
                <div class="card  mb-5 overflow-hidden">
                    <a href="hair.html">
                        <div class="w-64 h-64 bg-red-100 relative">
                            <div class="absolute inset-0 bg-cover bg-center rounded-lg z-0"
                                style="background-image: url('./assets/img/service-2.jpg')"></div>
                            <div
                                class="opacity-0 hover:opacity-100 hover:bg-gray-900/[0.2] duration-300 absolute inset-0 z-10 flex justify-center items-center text-6xl text-white font-semibold">
                                HAIR</div>
                        </div>

                    </a>
                </div>
                <div class="card  mb-5 overflow-hidden">
                    <a href="body.html">

                        <div class="w-64 h-64 bg-red-100 relative">
                            <div class="absolute inset-0 bg-cover bg-center rounded-lg z-0"
                                style="background-image: url('./assets/img/service-3.jpg')"></div>
                            <div
                                class="opacity-0 hover:opacity-100 hover:bg-gray-900/[0.2] duration-300 absolute inset-0 z-10 flex justify-center items-center text-6xl text-white font-semibold">
                                BODY</div>
                        </div>
                    </a>
                </div>
                <div class="card  mb-5 overflow-hidden">
                    <a href="aestahtics.html">

                        <div class="w-64 h-64 bg-red-100 relative">
                            <div class="absolute inset-0 bg-cover bg-center rounded-lg z-0"
                                style="background-image: url('./assets/img/service-4.jpg')"></div>
                            <div
                                class="opacity-0 hover:opacity-100 hover:bg-gray-900/[0.2] duration-300 absolute inset-0 z-10 flex justify-center items-center text-6xl text-white font-semibold">
                                AESTHATICS</div>
                        </div>
                    </a>
                </div>
                <div class="card  mb-5 overflow-hidden">
                    <a href="cosmetic.html">
                        <div class="w-64 h-64 bg-red-100 relative">
                            <div class="absolute inset-0 bg-cover bg-center rounded-lg z-0"
                                style="background-image: url('./assets/img/service-5.jpg')"></div>
                            <div
                                class="opacity-0 hover:opacity-100 hover:bg-gray-900/[0.2] duration-300 absolute inset-0 z-10 flex justify-center items-center text-6xl text-white font-semibold">
                                COSMETIC SURGERY</div>
                        </div>

                    </a>
                </div>
                <div class="card mb-5 overflow-hidden overflow-hidden">
                    <a href="wellness.html">
                        <div class="w-64 h-64 bg-red-100 relative ">
                            <div class="absolute inset-0 bg-cover bg-center rounded-lg z-0"
                                style="background-image: url('./assets/img/service-6.jpg')"></div>
                            <div
                                class="opacity-0 hover:opacity-100 hover:bg-gray-900/[0.2] duration-300 absolute inset-0 z-10 flex justify-center items-center text-6xl text-white font-semibold">
                                WELLNESS</div>
                        </div>

                    </a>
                </div>

            </div>
        </div> -->

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