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
<body>
<div id="categorymenu" class="modal fixed w-screen h-screen bg-black opacity-80 ">
    <div class=" flex flex-col items-center text-center align-middle capitalize place-content-center">
        <ul class="text-white font-sans text-3xl font-semibold space-y-4">
            <li>Action</li>
            <li>Amour</li>
            <li>Animation</li>
            <li>Comédies</li>
            <li>Drames</li> 
            <li>Horreur</li>
            <li>SF</li>
            <li>Thriller</li>
        </ul>
        <div class="my-4">
            <svg width="49" height="50" viewBox="0 0 49 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M24.5 47.238C36.9264 47.238 47 37.1644 47 24.738C47 12.3116 36.9264 2.23804 24.5 2.23804C12.0736 2.23804 2 12.3116 2 24.738C2 37.1644 12.0736 47.238 24.5 47.238Z" stroke="#C684D8" stroke-width="3"/>
                <path d="M17.75 17.988L31.2498 31.488" stroke="white" stroke-width="2" stroke-linecap="round"/>
                <path d="M31.25 17.988L17.75 31.4878" stroke="white" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </div>
    </div>
</div>

</body>
</html>