<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- RESET CSS -->
    <link rel="stylesheet" href="assets/css/reset.css">
<!-- /RESET CSS -->

<!-- FONT -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;900&family=League+Spartan:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;900&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
<!--/FONT -->

<!-- TAILWIND CND -->
    <script src="https://cdn.tailwindcss.com"></script>
<!-- /TAILWIND CND -->

<!-- TAILWIND CONFIG -->
    <script>
        tailwind.config = {
        theme: {
            extend: {
            colors: {
                mauve:'#C684D8',
                violet:'#200A21',
                violettrans:'#471A48',
                btnviolet:'#321033',
                btnactive :'#8D6D8E',
                nav:'#1E051F',
            },
            fontFamily: {
                'sans': ['"League Spartan"', 'sans-serif'],
                'body': ['"Roboto"','sans-serif'],
            },
            fontSize: {
                'lt':'0.75',
                sm: '0.875rem',
                base: '1rem',
                xl: '1.125rem',
                '2xl': '1.25rem',
                '3xl': '1.5rem',
                '4xl': '2rem',
                
                '5xl': '3.052rem',
                },
            borderRadius: {
                'none': '0',
                'sm': '0.25rem',
                'md': '0.5rem',
                'lg': '0.625rem',
                'big': '0.75rem',
            },
        }
        }
    }
    </script>
<!-- /TAILWIND CONFIG -->



    <title>AllosimplonParamètres</title>

</head>
<body class="w-full h-screen flex flex-col bg-violet">

<div class="w-full h-full flex flex-col items-center">
    <!--RETOUR-->
    <div class="absolute top-8 left-10">
        <a href="profil.php">
            <svg width="16" height="28" viewBox="0 0 16 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.5 25.4619L14.0225 27.125L0.5 14L14.0225 0.875L15.5 2.53812L3.69125 14L15.5 25.4619Z" fill="white"/>
            </svg>
        </a>
    </div>
    <!--/RETOUR-->
    <!-- TITLE -->
    <div class="flex-col  items-center text-center font-bold font-sans text-white text-4xl">
        <h1 class="mt-4">Paramètres</h1>
        <?php include('content/ligncenter.php')?>
    </div>
    <!-- /TITLE -->    

    <div class="flex w-auto mt-10 flex-col">
        <a href="#">
            <div class="font-normal text-2xl w-[22rem] py-4 text-white flex bg-violettrans rounded-md justify-between items-center px-5" >
                
                <div class="flex items-center"> 
                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <ellipse cx="12.9998" cy="6.50002" rx="4.33333" ry="4.33333" stroke="white"/>
                    <path d="M21.6641 19.5C21.6668 19.3221 21.6668 19.1414 21.6668 18.9583C21.6668 16.2659 17.7866 14.0833 13.0002 14.0833C8.21369 14.0833 4.3335 16.2659 4.3335 18.9583C4.3335 21.6507 4.3335 23.8333 13.0002 23.8333C15.4171 23.8333 17.16 23.6636 18.4168 23.3604" stroke="white" stroke-linecap="round"/>
                </svg>

                    <h2 class="mx-3">Pseudo</h2>
                </div>
                
                <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M20.0572 1.69746C19.7544 1.42109 19.3949 1.20245 18.9994 1.05417C18.6039 0.905891 18.1803 0.830912 17.753 0.833564C17.3257 0.836216 16.9032 0.916445 16.51 1.06962C16.1167 1.22279 15.7605 1.44587 15.4618 1.72598L2.57329 13.5404L1 19.1666L7.13759 17.7236L20.0261 5.90911C20.3317 5.63545 20.5752 5.30896 20.7423 4.94853C20.9095 4.5881 20.997 4.20087 20.9999 3.80923C21.0028 3.41759 20.921 3.02931 20.7592 2.66684C20.5974 2.30436 20.3588 1.97489 20.0572 1.69746V1.69746Z" stroke="#C684D8" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M15.0938 2.06409L19.6572 6.24722" stroke="#C684D8" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M2.57422 13.5396L7.14208 17.7194" stroke="#C684D8" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

            
            </div>
        </a>
        <a href="#">
            <div class="font-normal text-2xl w-[22rem] py-4 text-white flex bg-violettrans rounded-md justify-between items-center px-5 mt-0.5" >
                
                <div class="flex items-center"> 
                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23.6667 7.70837V18.5417C23.6667 19.26 23.3813 19.9489 22.8734 20.4568C22.3655 20.9647 21.6766 21.25 20.9583 21.25H4.70833C3.99004 21.25 3.30116 20.9647 2.79325 20.4568C2.28534 19.9489 2 19.26 2 18.5417V7.70837" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M23.6667 7.70833C23.6667 6.99004 23.3813 6.30116 22.8734 5.79325C22.3655 5.28534 21.6766 5 20.9583 5H4.70833C3.99004 5 3.30116 5.28534 2.79325 5.79325C2.28534 6.30116 2 6.99004 2 7.70833L11.3979 13.5764C11.8284 13.8454 12.3257 13.9881 12.8333 13.9881C13.3409 13.9881 13.8383 13.8454 14.2687 13.5764L23.6667 7.70833Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                <h2 class="mx-3">lebouffonvert@bouffon.fr</h2>
                </div>
                
                <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.0572 1.69746C19.7544 1.42109 19.3949 1.20245 18.9994 1.05417C18.6039 0.905891 18.1803 0.830912 17.753 0.833564C17.3257 0.836216 16.9032 0.916445 16.51 1.06962C16.1167 1.22279 15.7605 1.44587 15.4618 1.72598L2.57329 13.5404L1 19.1666L7.13759 17.7236L20.0261 5.90911C20.3317 5.63545 20.5752 5.30896 20.7423 4.94853C20.9095 4.5881 20.997 4.20087 20.9999 3.80923C21.0028 3.41759 20.921 3.02931 20.7592 2.66684C20.5974 2.30436 20.3588 1.97489 20.0572 1.69746V1.69746Z" stroke="#C684D8" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15.0938 2.06409L19.6572 6.24722" stroke="#C684D8" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M2.57422 13.5396L7.14208 17.7194" stroke="#C684D8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

            
            </div>
        </a>
        <a href="#">
            <div class="font-normal text-2xl w-[22rem] py-4 text-white flex bg-violettrans rounded-md justify-between items-center px-5 mt-0.5" >
                
                <div class="flex items-center"> 
                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.4167 9.90112H7.58333C6.08756 9.90112 4.875 11.1137 4.875 12.6095V20.7345C4.875 22.2302 6.08756 23.4428 7.58333 23.4428H18.4167C19.9124 23.4428 21.125 22.2302 21.125 20.7345V12.6095C21.125 11.1137 19.9124 9.90112 18.4167 9.90112Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M13.0002 1.77612C11.5636 1.77612 10.1858 2.34681 9.17 3.36263C8.15418 4.37845 7.5835 5.7562 7.5835 7.19279V9.90112H18.4168V7.19279C18.4168 5.7562 17.8461 4.37845 16.8303 3.36263C15.8145 2.34681 14.4368 1.77612 13.0002 1.77612V1.77612Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>


                <h2 class="mx-3">Mot de passe</h2>
                </div>
                
                <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.0572 1.69746C19.7544 1.42109 19.3949 1.20245 18.9994 1.05417C18.6039 0.905891 18.1803 0.830912 17.753 0.833564C17.3257 0.836216 16.9032 0.916445 16.51 1.06962C16.1167 1.22279 15.7605 1.44587 15.4618 1.72598L2.57329 13.5404L1 19.1666L7.13759 17.7236L20.0261 5.90911C20.3317 5.63545 20.5752 5.30896 20.7423 4.94853C20.9095 4.5881 20.997 4.20087 20.9999 3.80923C21.0028 3.41759 20.921 3.02931 20.7592 2.66684C20.5974 2.30436 20.3588 1.97489 20.0572 1.69746V1.69746Z" stroke="#C684D8" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15.0938 2.06409L19.6572 6.24722" stroke="#C684D8" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M2.57422 13.5396L7.14208 17.7194" stroke="#C684D8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

            
            </div>
        </a>
        <a href="#">
            <div class="font-normal text-2xl w-[22rem] py-4 text-white flex bg-violettrans rounded-md justify-between items-center px-5 mt-0.5" >
                
                <div class="flex items-center"> 
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.3333 20.3062C20.3333 20.6598 20.1929 20.999 19.9428 21.249C19.6928 21.4991 19.3536 21.6395 19 21.6395H4.33333C3.97971 21.6395 3.64057 21.4991 3.39052 21.249C3.14048 20.999 3 20.6598 3 20.3062V2.97286C3 2.61924 3.14048 2.2801 3.39052 2.03005C3.64057 1.78 3.97971 1.63953 4.33333 1.63953H13.7813C14.1347 1.6396 14.4736 1.77995 14.7236 2.02975L19.9431 7.2493C20.1929 7.49926 20.3333 7.83815 20.3333 8.19153V20.3062Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M10.261 7.88635L8.3659 10.4126C8.30856 10.4889 8.2355 10.5521 8.15165 10.5977C8.06781 10.6434 7.97513 10.6705 7.87989 10.6772C7.78466 10.684 7.68909 10.6702 7.59964 10.6368C7.5102 10.6034 7.42897 10.5512 7.36145 10.4837L6.33301 9.45613" stroke="#C684D8" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M10.261 13.8864L8.3659 16.4126C8.30856 16.4889 8.2355 16.5521 8.15165 16.5977C8.06781 16.6434 7.97513 16.6705 7.87989 16.6772C7.78466 16.684 7.68909 16.6702 7.59964 16.6368C7.5102 16.6034 7.42897 16.5512 7.36145 16.4837L6.33301 15.4552" stroke="#C684D8" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M13 10.6793H17" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M13 16.0126H17" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>


                <h2 class="mx-3">Contrôl parental</h2>
                </div>
                
                <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.0572 1.69746C19.7544 1.42109 19.3949 1.20245 18.9994 1.05417C18.6039 0.905891 18.1803 0.830912 17.753 0.833564C17.3257 0.836216 16.9032 0.916445 16.51 1.06962C16.1167 1.22279 15.7605 1.44587 15.4618 1.72598L2.57329 13.5404L1 19.1666L7.13759 17.7236L20.0261 5.90911C20.3317 5.63545 20.5752 5.30896 20.7423 4.94853C20.9095 4.5881 20.997 4.20087 20.9999 3.80923C21.0028 3.41759 20.921 3.02931 20.7592 2.66684C20.5974 2.30436 20.3588 1.97489 20.0572 1.69746V1.69746Z" stroke="#C684D8" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15.0938 2.06409L19.6572 6.24722" stroke="#C684D8" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M2.57422 13.5396L7.14208 17.7194" stroke="#C684D8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

            
            </div>
        </a>
    </div>

    <div class="text-sm font-body text-white absolute items-center bottom-10 ">
    <a href="#"><p>Se déconnecter</p></a>
    </div>

</div>
</body>
</html>