<?php
session_start();
if(isset($_SESSION['id_user'])){
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



    <title>AllosimplonProfil</title>

</head>
<body class="w-full h-screen flex flex-col bg-violet">

<!--TOP-->
<div class="w-full h-full flex flex-col items-center">
    <!--RETOUR-->
    <div class="absolute top-8 left-10">
        <a href="../../profil.php">
            <svg width="16" height="28" viewBox="0 0 16 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.5 25.4619L14.0225 27.125L0.5 14L14.0225 0.875L15.5 2.53812L3.69125 14L15.5 25.4619Z" fill="white"/>
            </svg>
        </a>
    </div>
    <!--/RETOUR-->
    <!-- TITLE -->
    <div class="flex-col  items-center text-center font-bold font-sans text-white mb-8 text-4xl">
        <h1 class="mt-4">Ma liste</h1>
        <?php include('../ligncenter.php')?>
    </div>
    <!-- /TITLE -->

    <?php
    require ('../../traitement/bdd.php');
    $id_user = $_GET['id_user'];
    $req = 'SELECT * FROM preferer p JOIN film f ON p.id_film = f.id_film WHERE id_user=? ';
    $req = $db->prepare($req);
    $req->execute([$id_user]);
    $result = $req->fetchAll();

    $films = $result;

    foreach($films as $film){

    ?>
    <div class="mx-auto inline-grid grid-cols-3 gap-auto md:grid-cols-10">
    <a href="../../film.php?id_film=<?= $film['id_film']?>" class="px-1.5 py-1.5">
    <img src="<?= $film['img_film']?>" class="w-28 h-auto rounded-big" alt="">
    </a>
    
    </div>
        <?php
    }
        ?>
</div>
</body>
</html>
<?php
  }else{
    header('Location: index.php');
  }
?>