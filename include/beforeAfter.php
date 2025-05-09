<div class="md:m-20 m-5 mb-10">
            <p class="text-[#452464] text-3xl font-bold text-center mb-10" data-aos="fade-up">Before After Gallery</p>
            <div class="grid md:grid-cols-3 grid-cols-2 gap-5 ">
                <div>

                    <main class="slider-main">
                        <div class="container container1">
                            <div class="image-container">
                                <img class="image-after slider-image" loading="lazy" src=" ./assets/img/gallery-1-2.jpg"
                                    alt="black and white" />
                                <img class="image-before slider-image" loading="lazy"
                                    src="./assets/img/gallery-1-1.jpg " alt="color photo" />
                            </div>
                            <!-- step="10" -->
                            <input type="range" min="0" max="100" value="50"
                                aria-label="Percentage of before photo shown" class="slider slider1" />
                            <div class="slider-line" aria-hidden="true"></div>
                            <div class="slider-button" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    viewBox="0 0 256 256">
                                    <rect width="256" height="256" fill="none"></rect>
                                    <line x1="128" y1="40" x2="128" y2="216" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                                    <line x1="96" y1="128" x2="16" y2="128" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                                    <polyline points="48 160 16 128 48 96" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline>
                                    <line x1="160" y1="128" x2="240" y2="128" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                                    <polyline points="208 96 240 128 208 160" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline>
                                </svg>
                            </div>
                        </div>

                    </main>

                    <script>
                        const container = document.querySelector('.container1');
                        document.querySelector('.slider1').addEventListener('input', (e) => {
                            container.style.setProperty('--position', `${e.target.value}%`);
                        })
                    </script>
                </div>
                <div>
                    <main class="slider-main">
                        <div class="container container2">
                            <div class="image-container">
                                <img class="image-before slider-image object-fill " loading="lazy" src="./assets/img/gallery-2-1.jpg"
                                alt="color photo" />
                                <img class="image-after slider-image object-fill " loading="lazy" src="./assets/img/gallery-2-2.jpg "
                                alt="black and white" />
                            </div>
                            <!-- step="10" -->
                            <input type="range" min="0" max="100" value="50"
                                aria-label="Percentage of before photo shown" class="slider slider2" />
                            <div class="slider-line" aria-hidden="true"></div>
                            <div class="slider-button" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    viewBox="0 0 256 256">
                                    <rect width="256" height="256" fill="none"></rect>
                                    <line x1="128" y1="40" x2="128" y2="216" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                                    <line x1="96" y1="128" x2="16" y2="128" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                                    <polyline points="48 160 16 128 48 96" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline>
                                    <line x1="160" y1="128" x2="240" y2="128" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                                    <polyline points="208 96 240 128 208 160" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline>
                                </svg>
                            </div>
                        </div>

                    </main>

                    <script>
                        const container2 = document.querySelector('.container2');
                        document.querySelector('.slider2').addEventListener('input', (e) => {
                            container2.style.setProperty('--position', `${e.target.value}%`);
                        })
                    </script>

                </div>

                <div>
                    <main class="slider-main">
                        <div class="container container3">
                            <div class="image-container">
                                <img class="image-before slider-image" loading="lazy" src="./assets/img/gallery-3-1.jpg"
                                    alt="color photo" />
                                <img class="image-after slider-image" loading="lazy" src="./assets/img/gallery-3-2.jpg"
                                    alt="black and white" />
                            </div>
                            <!-- step="10" -->
                            <input type="range" min="0" max="100" value="50"
                                aria-label="Percentage of before photo shown" class="slider slider3" />
                            <div class="slider-line" aria-hidden="true"></div>
                            <div class="slider-button" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    viewBox="0 0 256 256">
                                    <rect width="256" height="256" fill="none"></rect>
                                    <line x1="128" y1="40" x2="128" y2="216" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                                    <line x1="96" y1="128" x2="16" y2="128" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                                    <polyline points="48 160 16 128 48 96" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline>
                                    <line x1="160" y1="128" x2="240" y2="128" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                                    <polyline points="208 96 240 128 208 160" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline>
                                </svg>
                            </div>
                        </div>

                    </main>

                    <script>
                        const container3 = document.querySelector('.container3');
                        document.querySelector('.slider3').addEventListener('input', (e) => {
                            container3.style.setProperty('--position', `${e.target.value}%`);
                        })
                    </script>

                </div>

                <div>
                    <main class="slider-main">
                        <div class="container container4">
                            <div class="image-container">
                                <img class="image-before slider-image" loading="lazy" src="./assets/img/gallery-4-1.jpg"
                                    alt="color photo" />
                                <img class="image-after slider-image" loading="lazy" src="./assets/img/gallery-4-2.jpg"
                                    alt="black and white" />
                            </div>
                            <!-- step="10" -->
                            <input type="range" min="0" max="100" value="50"
                                aria-label="Percentage of before photo shown" class="slider slider4" />
                            <div class="slider-line" aria-hidden="true"></div>
                            <div class="slider-button" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    viewBox="0 0 256 256">
                                    <rect width="256" height="256" fill="none"></rect>
                                    <line x1="128" y1="40" x2="128" y2="216" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                                    <line x1="96" y1="128" x2="16" y2="128" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                                    <polyline points="48 160 16 128 48 96" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline>
                                    <line x1="160" y1="128" x2="240" y2="128" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                                    <polyline points="208 96 240 128 208 160" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline>
                                </svg>
                            </div>
                        </div>

                    </main>

                    <script>
                        const container4 = document.querySelector('.container4');
                        document.querySelector('.slider4').addEventListener('input', (e) => {
                            container4.style.setProperty('--position', `${e.target.value}%`);
                        })
                    </script>

                </div>

                <div>
                    <main class="slider-main">
                        <div class="container container5">
                            <div class="image-container">
                                <img class="image-before slider-image object-cover" loading="lazy" src="./assets/img/gallery-5-1.jpg"
                                    alt="color photo" />
                                <img class="image-after slider-image object-cover" loading="lazy" src="./assets/img/gallery-5-2.jpg"
                                    alt="black and white" />
                            </div>
                            <!-- step="10" -->
                            <input type="range" min="0" max="100" value="50"
                                aria-label="Percentage of before photo shown" class="slider slider5" />
                            <div class="slider-line" aria-hidden="true"></div>
                            <div class="slider-button" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    viewBox="0 0 256 256">
                                    <rect width="256" height="256" fill="none"></rect>
                                    <line x1="128" y1="40" x2="128" y2="216" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                                    <line x1="96" y1="128" x2="16" y2="128" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                                    <polyline points="48 160 16 128 48 96" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline>
                                    <line x1="160" y1="128" x2="240" y2="128" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                                    <polyline points="208 96 240 128 208 160" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline>
                                </svg>
                            </div>
                        </div>

                    </main>

                    <script>
                        const container5 = document.querySelector('.container5');
                        document.querySelector('.slider5').addEventListener('input', (e) => {
                            container5.style.setProperty('--position', `${e.target.value}%`);
                        })
                    </script>

                </div>
                <div>
                    <main class="slider-main">
                        <div class="container container6">
                            <div class="image-container">
                                <img class="image-before slider-image object-cover" loading="lazy"
                                    src="./assets/img/gallery-6-1.jpg" alt="color photo" />
                                <img class="image-after slider-image object-cover" loading="lazy" src="./assets/img/gallery-6-2.jpg"
                                    alt="black and white" />
                            </div>
                            <!-- step="10" -->
                            <input type="range" min="0" max="100" value="50"
                                aria-label="Percentage of before photo shown" class="slider slider6" />
                            <div class="slider-line" aria-hidden="true"></div>
                            <div class="slider-button" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    viewBox="0 0 256 256">
                                    <rect width="256" height="256" fill="none"></rect>
                                    <line x1="128" y1="40" x2="128" y2="216" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                                    <line x1="96" y1="128" x2="16" y2="128" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                                    <polyline points="48 160 16 128 48 96" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline>
                                    <line x1="160" y1="128" x2="240" y2="128" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                                    <polyline points="208 96 240 128 208 160" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline>
                                </svg>
                            </div>
                        </div>

                    </main>

                    <script>
                        const container6 = document.querySelector('.container6');
                        document.querySelector('.slider6').addEventListener('input', (e) => {
                            container6.style.setProperty('--position', `${e.target.value}%`);
                        })
                    </script>

                </div>
            </div>

        </div>