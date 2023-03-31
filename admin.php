<?php
session_start();
if(isset($_SESSION['id_role']))
    { if($_SESSION['id_role']== 1){; 
?>
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

<!--DAISYUI-->
<link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.4/dist/full.css" rel="stylesheet" type="text/css" />
<!--/DAISYUI-->

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



    <title>AllosimplonAdmin</title>

</head>
<body class="w-full h-screen flex flex-col bg-violet">

<?php include('content/navbar.php')?>
<div class="w-full h-full flex flex-col pt-20 items-center bg-violet">

    <div class="flex w-auto mt-10 flex-col">

        <a href="user.php" class="cursor-pointer">
            <div class="font-normal text-3xl w-[22rem] py-4 text-white flex bg-violettrans/50 rounded-md justify-between items-center px-5" >
                
                <div class="flex items-center"> 
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="6" r="4" stroke="white"/>
                    <path d="M18 9C19.6569 9 21 7.88071 21 6.5C21 5.11929 19.6569 4 18 4" stroke="white" stroke-linecap="round"/>
                    <path d="M6 9C4.34315 9 3 7.88071 3 6.5C3 5.11929 4.34315 4 6 4" stroke="white" stroke-linecap="round"/>
                    <path d="M17.1973 15C17.7078 15.5883 18 16.2714 18 17C18 19.2091 15.3137 21 12 21C8.68629 21 6 19.2091 6 17C6 14.7909 8.68629 13 12 13C12.3407 13 12.6748 13.0189 13 13.0553" stroke="white" stroke-linecap="round"/>
                    <path d="M20 19C21.7542 18.6153 23 17.6411 23 16.5C23 15.3589 21.7542 14.3847 20 14" stroke="#C684D8" stroke-linecap="round"/>
                    <path d="M4 19C2.24575 18.6153 1 17.6411 1 16.5C1 15.3589 2.24575 14.3847 4 14" stroke="#C684D8" stroke-linecap="round"/>
                </svg>

                <h2 class="mx-3">Utilisateurs</h2>
                </div>
                
                <svg width="15" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 1.66312L1.4775 0L15 13.125L1.4775 26.25L0 24.5869L11.8088 13.125L0 1.66312Z" fill="white"/>
                </svg>
            </div>
        </a>
        
        <a href="crudfilm.php">
            <div class="font-normal text-3xl w-[22rem] py-4 text-white flex bg-violettrans/50 rounded-md justify-between items-center px-5 mt-0.5" >
                
                <div class="flex items-center"> 
                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.604 16.2917L2.39567 16.2917" stroke="white" stroke-linecap="round"/>
                    <path d="M20.604 6.70834L2.39567 6.70834" stroke="white" stroke-linecap="round"/>
                    <path d="M11.5 1.91666L11.5 6.70832M11.5 21.0833L11.5 16.2917" stroke="white" stroke-linecap="round"/>
                    <path d="M16.2915 2.39584L16.2915 6.70834M16.2915 20.6042L16.2915 16.2917" stroke="white" stroke-linecap="round"/>
                    <path d="M6.7085 2.39584L6.7085 6.70834M6.7085 20.6042L6.7085 16.2917" stroke="white" stroke-linecap="round"/>
                    <path d="M13.4168 11.5C13.4168 10.9942 12.9093 10.6531 11.8942 9.97082C10.8653 9.27926 10.3508 8.93348 9.96714 9.18736C9.5835 9.44125 9.5835 10.1275 9.5835 11.5C9.5835 12.8725 9.5835 13.5587 9.96714 13.8126C10.3508 14.0665 10.8653 13.7207 11.8942 13.0292C12.9093 12.3469 13.4168 12.0058 13.4168 11.5Z" stroke="#C684D8" stroke-linecap="round"/>
                    <path d="M1.9165 11.5C1.9165 6.98236 1.9165 4.72355 3.31995 3.3201C4.7234 1.91666 6.98221 1.91666 11.4998 1.91666C16.0175 1.91666 18.2763 1.91666 19.6797 3.3201C20.4622 4.10256 20.8084 5.1509 20.9616 6.70832M21.0832 11.5C21.0832 16.0176 21.0832 18.2764 19.6797 19.6799C18.2763 21.0833 16.0175 21.0833 11.4998 21.0833C6.98221 21.0833 4.7234 21.0833 3.31995 19.6799C2.53749 18.8974 2.19128 17.8491 2.03808 16.2917" stroke="white" stroke-linecap="round"/>
                </svg>

                <h2 class="mx-3">Films</h2>
                </div>
                
                <svg width="15" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 1.66312L1.4775 0L15 13.125L1.4775 26.25L0 24.5869L11.8088 13.125L0 1.66312Z" fill="white"/>
                </svg>
            
            </div>
        </a>
        <a href="crudartiste.php">
            <div class="font-ligth
             text-3xl w-[22rem] py-4 text-white flex bg-violettrans/50 rounded-md justify-between items-center px-5 mt-0.5" >
                
                <div class="flex items-center"> 
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.5003 17.221C17.5578 16.7652 18.6142 16.0672 19.4318 15M7.3877 8.10846L8.08722 5.37926C8.52779 3.66038 8.74807 2.80094 9.32331 2.36888C9.51616 2.22403 9.73232 2.11656 9.9615 2.05159C10.6451 1.85777 11.4221 2.22163 12.9761 2.94934C14.1268 3.48822 14.7022 3.75765 15.3025 3.94822C15.5113 4.01448 15.722 4.07352 15.9345 4.12524C16.5456 4.27402 17.1727 4.34142 18.427 4.47622C20.1208 4.65827 20.9677 4.74929 21.4671 5.27447C21.6345 5.45054 21.7703 5.6566 21.868 5.88284C22.1595 6.55769 21.9393 7.41713 21.4987 9.13602L21.0209 11" stroke="white" stroke-linecap="round"/>
                    <path d="M2.46673 13C2.04961 11.3713 1.84853 10.5397 2.13226 9.88284C2.22999 9.6566 2.36579 9.45054 2.53319 9.27447C3.03253 8.74929 3.87945 8.65827 5.57328 8.47622C6.82756 8.34142 7.4547 8.27402 8.06578 8.12524C8.27824 8.07352 8.48901 8.01448 8.69774 7.94822C9.29811 7.75765 9.87347 7.48822 11.0242 6.94934C12.5782 6.22163 13.3551 5.85777 14.0388 6.05159C14.268 6.11656 14.4841 6.22403 14.677 6.36888C15.2522 6.80094 15.4725 7.66038 15.9131 9.37926L16.7582 12.6766C17.7517 16.5526 15.4742 19.335 13.7324 20.8219C13.201 21.2755 12.9353 21.5023 11.907 21.7903C10.8787 22.0784 10.5401 22.0208 9.86292 21.9058C7.75527 21.5476 4.67076 20.4302 3.51432 17" stroke="white" stroke-linecap="round"/>
                    <path d="M5.25882 13.2955C5.31893 12.6763 5.77997 12.1206 6.44889 11.9414C7.11781 11.7621 7.79491 12.0128 8.1566 12.5191" stroke="white" stroke-linecap="round"/>
                    <path d="M19.1797 8.93565C19.1195 8.3164 18.6585 7.76073 17.9896 7.5815C17.3207 7.40226 16.6436 7.65296 16.2819 8.1592" stroke="#C684D8" stroke-linecap="round"/>
                    <path d="M11.0547 11.7423C11.1148 11.123 11.5759 10.5674 12.2448 10.3881C12.9137 10.2089 13.5908 10.4596 13.9525 10.9658" stroke="white" stroke-linecap="round"/>
                    <path d="M10.8926 6.89665C10.7321 7.12134 10.4198 7.17334 10.1951 7.01281C9.97043 6.85228 9.91842 6.54 10.079 6.31531L10.8926 6.89665ZM12.0641 6.51125C11.5886 6.38385 11.1284 6.56658 10.8926 6.89665L10.079 6.31531C10.5665 5.63292 11.4605 5.31424 12.3229 5.54532L12.0641 6.51125ZM12.6754 6.91236C12.5318 6.72706 12.3219 6.58032 12.0641 6.51125L12.3229 5.54532C12.7941 5.67158 13.1898 5.94372 13.4657 6.2996L12.6754 6.91236Z" fill="#C684D8"/>
                    <path d="M13.2007 16.2309C13.2007 16.2309 12.1758 15.4703 10.3884 15.9492C8.60094 16.4281 8.09372 17.5993 8.09372 17.5993" stroke="#C684D8" stroke-linecap="round"/>
                </svg>


                <h2 class="mx-3">Artistes</h2>
                </div>
                
                <svg width="15" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 1.66312L1.4775 0L15 13.125L1.4775 26.25L0 24.5869L11.8088 13.125L0 1.66312Z" fill="white"/>
                </svg>
            
            </div>
        </a>
    </div>
</div>

<!-- FOOTER -->
<?php include ('content/footer.php') ?>
<!-- /FOOTER -->
</body>
</html>
<!--MODAL-->
<?php include('content/modals.php')?>
<!--MODAL-->

<?php 
    } else{
        header('Location:index.php');
    }}

else{
    header('Location:login.php');
} ?>