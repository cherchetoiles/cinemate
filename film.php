<?php
session_start();
$id_session = session_id();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- FAVICON -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="a" rel="apple-touch-icon">
<!-- /FAVICON -->

<!-- RESET CSS -->
    <link rel="stylesheet" href="assets/css/reset.css">
<!-- /RESET CSS -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;900&family=Roboto:wght@300;400&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;900&family=League+Spartan:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<!--/FONT -->

<!-- TAILWIND CND -->
    <script src="https://cdn.tailwindcss.com"></script>
<!-- /TAILWIND CND -->

<!-- TABS JAVASCRIPT -->
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
<!-- TABS JAVASCRIPT -->


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
                'body': ['"Roboto"'],
            },
            fontSize: {
                'lt':'0.75rem',
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
                'big': '0.75px',
            },
        }
        }
    }
    </script>
<!-- /TAILWIND CONFIG -->

    <title>AllosimplonFilm</title>
</head>
<body class="bg-violet">

<!-- REQUEST BDD -->
<?php
require ('traitement/bdd.php');
$id_film = $_GET['id_film'];
$req = 'SELECT*FROM film WHERE id_film = ?';
$req = $db->prepare($req);
$req->execute([$id_film]);
$result = $req->fetch();
$film = $result;

?>
<!-- /REQUEST BDD -->
<div class="w-full h-screen flex flex-col items-center">
    <!--RETOUR-->
    <div class=" z-1 absolute top-8 left-8">
        <a href="films.php">
            <svg width="16" height="28" viewBox="0 0 16 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.5 25.4619L14.0225 27.125L0.5 14L14.0225 0.875L15.5 2.53812L3.69125 14L15.5 25.4619Z" fill="white"/>
            </svg>
        </a>
    </div>
    <!--/RETOUR-->

    <!--FAVORITE-->
    <div class="z-2 absolute top-6 right-8">
            <a href="#">
                <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.1666 30.6667H5.74996" stroke="#C684D8" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M17.25 21.0833H5.75" stroke="#C684D8" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M31.6059 31.2575L32.0509 30.6537L32.0509 30.6537L31.6059 31.2575ZM33.5416 19.3701L33.0057 19.8948C33.1468 20.0389 33.34 20.1201 33.5416 20.1201C33.7433 20.1201 33.9364 20.0389 34.0775 19.8948L33.5416 19.3701ZM35.4774 31.2575L35.9223 31.8612L35.4774 31.2575ZM33.5416 32.2198L33.5416 31.4698H33.5416L33.5416 32.2198ZM32.0509 30.6537C30.7992 29.7312 29.1754 28.4068 27.8719 26.9182C26.5452 25.4029 25.6666 23.8482 25.6666 22.4533H24.1666C24.1666 24.4176 25.3612 26.3278 26.7434 27.9063C28.1488 29.5114 29.8697 30.9095 31.1609 31.8612L32.0509 30.6537ZM25.6666 22.4533C25.6666 20.1185 26.7284 18.6927 28.0364 18.2036C29.3528 17.7113 31.2086 18.0594 33.0057 19.8948L34.0775 18.8454C31.9935 16.717 29.5368 16.0411 27.511 16.7986C25.4768 17.5592 24.1666 19.6568 24.1666 22.4533H25.6666ZM35.9223 31.8612C37.2136 30.9096 38.9344 29.5115 40.3399 27.9064C41.722 26.3278 42.9166 24.4176 42.9166 22.4533H41.4166C41.4166 23.8482 40.5381 25.403 39.2113 26.9182C37.9079 28.4069 36.2841 29.7313 35.0324 30.6537L35.9223 31.8612ZM42.9166 22.4533C42.9166 19.6568 41.6064 17.5592 39.5722 16.7986C37.5464 16.0411 35.0897 16.717 33.0057 18.8454L34.0775 19.8948C35.8746 18.0594 37.7305 17.7113 39.0469 18.2036C40.3549 18.6926 41.4166 20.1185 41.4166 22.4533H42.9166ZM31.1609 31.8612C31.969 32.4567 32.6155 32.9698 33.5416 32.9698L33.5416 31.4698C33.2078 31.4698 32.9838 31.3413 32.0509 30.6537L31.1609 31.8612ZM35.0324 30.6537C34.0994 31.3413 33.8755 31.4698 33.5416 31.4698L33.5416 32.9698C34.4677 32.9698 35.1143 32.4567 35.9223 31.8612L35.0324 30.6537Z" fill="white"/>
                    <path d="M38.3334 11.5L18.2084 11.5M5.75004 11.5H10.0625" stroke="#C684D8" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
            </a>    

    </div>

    <!--/FAVORITE-->

    <!-- HEADER METTRE UNE VIDEO EN HEADER TROP DUR-->
    <div class="flex w-full h-2/3 bg-[url('<?=$film['bg_img'] ?>')] bg-cover items-center justify-end flex-col">
        <p class="text-base text-white/80 capitalize italic"><?='catégorie'?>,<?=$film['first_date'] ?></p>
        <h1 class="text-4xl font-bold text-white uppercase"><?=$film['title']?></h1>
    </div>
    <!--/HEADER -->

<!-- BUTTON+CREATOR -->
    <section class="text-white flex flex-col items-center text-2xl font-body mt-8">
        <a href="https://www.yout-ube.com/watch?v=msEkTp69pTU" class="justify-center mb-1 py-2.5 px-6 w-56 rounded-md bg-mauve hover:bg-white hover:text-mauve text-2xl flex justify-center font-sans font-semibold ">Regarder</a>
        <div class="mt-2 font-light flex flex-col text-center">
            <p>Créer par : <strong><?='Créateur'?></strong></p>
            <p>Réaliser par : <strong><?='Réalisateur'?></strong></p>   
        </div>
    </section>
<!-- /BUTTON+CREATOR -->

<!-- TABS NAVIGATIONS -->
<?php include ('content/tabs.php')?>
<!-- /TABS NAVIGATIONS -->

<!--SAME SEARCH-->
<?php include('content/slider/sliderreco.php')?>
<!--/SAME SEARCH-->
</div>
</body>
</html>