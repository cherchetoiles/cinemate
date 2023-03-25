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
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;900&family=League+Spartan:wght@400;500;600;700;800&display=swap" rel="stylesheet">
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
                'body': ['"Roboto"'],
            },
            fontSize: {
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



    <title>Allosimplon</title>

</head>
<body class="bg-violet">

<!-- NAVABAR -->
<?php include ('content/navbar.php') ?>
<!-- /NAVABAR -->

<!--SOON-->
<?php include ('content/slider/slidersoon.php')?>
<!--/SOON-->

<!--NOW-->
<?php include ('content/slider/slidernow.php')?>
<!--/NOW-->

<!--ALL-->
<?php include ('content/slider/sliderall.php')?>
<!--/ALL-->

<!-- FOOTER -->
<?php include ('content/footer.php') ?>
<!-- /FOOTER -->
</body>

<!--CATEGORYMODAL-->
<?php include('content/modals.php') ?>
<!--C/ATEGORYMODAL-->
</html>