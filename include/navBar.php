<!-- Navbar -->
<?php 
    $treat =  $fun->fetchTreatmentType();
?>
<nav class="w-full fixed z-50 bg-white   bg-opacity-20 backdrop-filter backdrop-blur-md  text-lg border-b border-gray-200 " id="navbar">
            <div class="max-w-screen-2xl flex flex-wrap lg:flex-row   items-center justify-between mx-auto ">
                <a href="index.php" class="flex logo items-center space-x-3 md:w-1/3 justify-center rtl:space-x-reverse">
                    <img src="./assets/img/logo.png" class="h-16 object-cover" alt="Flowbite Logo" loading="lazy"
                        style="mix-blend-mode: multiply;" />
                </a>
                <button data-collapse-toggle="navbar-multi-level" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-lg text-gray-500 rounded-lg xl:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
                    aria-controls="navbar-multi-level" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="hidden w-full xl:block lg:w-auto lg:bg-transparent bg-white" id="navbar-multi-level">
                    <ul
                        class="flex flex-col font-bold p-4 md:p-0 mt-4 border border-gray-100 rounded-lg  md:space-x-8 rtl:space-x-reverse lg:flex-row md:mt-0 md:border-0  ">
                        <li>
                            <a href="index.php" class="block py-2 px-3 text-[#fed700] rounded  md:text-[#fed700] md:p-0 "
                                aria-current="page">Home</a>
                        </li>
                        <li>

                            <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover"
                                data-dropdown-trigger="hover"
                                class="text-black  hover:text-[#fed700]  px-3  font-bold rounded-lg text-lg  text-center inline-flex items-center "
                                type="button">Treatment <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>

                            <!-- Dropdown menu -->
                            <div id="dropdownHover"
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                                <ul class="py-2 text-lg text-gray-700 " aria-labelledby="dropdownHoverButton">
                                    
                                    <?php 
                                    if(mysqli_num_rows($treat)>0){
                                        while($row = mysqli_fetch_assoc($treat)){
                                            echo "
                                            <li>
                                        <a href='treatment.php?id=$row[id]' class='block px-4 py-2 hover:bg-gray-100 '>$row[name]</a>
                                    </li>
                                               
                                                ";
                                        }
                                    }
                                ?>
                                </ul>
                            </div>

                        </li>
                        <li>
                            <a href="aesthatic.php"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#fed700] md:p-0  ">Aesthatics</a>
                        </li>
                        <li>
                            <a href="courses.php"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#fed700] md:p-0 ">Courses
                            </a>
                        </li>
                        <li class="hidden" >
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#fed700] md:p-0 ">Product</a>
                        </li>
                    </ul>
                </div>
                <div class="bg-[#fed700] xl:flex hidden  md:h-32 h-20 md:w-72 w-full  top-0  items-center justify-center">
                    <button
                        class="border-4 border-[#452464] flex gap-2  text-[#452464] w-auto rounded-sm font-bold py-2 px-4 hover:text-[#fed700] hover:bg-[#452464]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                        </svg>

                        <a href="#appointment">Appointment</a>
                    </button>
                </div>
            </div>
        </nav>
        <!-- Navbar End-->