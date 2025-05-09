<?php 
    include "connect/db.php";
    include "connect/fun.php";

    $conn = new connect();
    $fun = new fun($conn->dbconnect());

    
?>
<link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com/3.4.3"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" defer/>
  
    
    <title>GENETICS</title>
    <style type="text/tailwindcss">
       

        
        @layer utilities {
          .content-auto {
            content-visibility: auto;
          }
          
        
        }

        
      </style>
    <style>
        *,
        *::after,
        *::before {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .slider-main iframe {
            aspect-ratio: 16/9;
        }

        .slider-main .video-container {
            margin: 2rem;
            max-height: 300px;
        }

        .slider-main img {
            display: block;
            max-width: 100%;
        }

        .slider-main main {
            display: grid;
            place-items: center;
            min-height: 100vh;
        }

        .slider-main .container {
            display: grid;
            place-content: center;
            position: relative;
            overflow: hidden;
            border-radius: 1rem;
            --position: 50%;
        }

        .slider-main .image-container {
            max-width: 800px;
            max-height: 90vh;
            aspect-ratio: 1/1;
        }

        .slider-main .slider-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: left;
        }

        .slider-main .image-before {
            position: absolute;
            inset: 0;
            width: var(--position);

        }

        .slider-main .slider {
            position: absolute;
            inset: 0;
            cursor: pointer;
            opacity: 0;
            /* for Firefox */
            width: 100%;
            height: 100%;
        }

        .slider-main .slider:focus-visible~.slider-button {
            outline: 5px solid black;
            outline-offset: 3px;
        }

        .slider-main .slider-line {
            position: absolute;
            inset: 0;
            width: .2rem;
            height: 100%;
            background-color: #fff;
            /* z-index: 10; */
            left: var(--position);
            transform: translateX(-50%);
            pointer-events: none;
        }

        .slider-main .slider-button {
            position: absolute;
            background-color: #fff;
            color: black;
            padding: .5rem;
            border-radius: 100vw;
            display: grid;
            place-items: center;
            top: 50%;
            left: var(--position);
            transform: translate(-50%, -50%);
            pointer-events: none;
            /* z-index: 100; */
            box-shadow: 1px 1px 1px hsl(0, 50%, 2%, .5);
        }
    
    .logo img {
      -webkit-filter: drop-shadow(1px 1px 0 black) 
                    drop-shadow(-1px -1px 0 white);
    filter:drop-shadow(1px 1px 0 black) 
           drop-shadow(-1px -1px 0 white);
}
  
    </style>
    
    <script>
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function () {
            var currentScrollPos = window.pageYOffset;

            if (currentScrollPos === 0) {
                document.getElementById("navbar").style.backgroundColor = 'transparent';
            } else {
                document.getElementById("navbar").style.backgroundColor = 'white';
            }




            prevScrollpos = currentScrollPos;
        }
    </script>