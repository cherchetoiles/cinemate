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

 <!-- BDD -->
 <?php
require ('traitement/bdd.php');
$req = 'SELECT*FROM user WHERE id_user = ?';
$req = $db->prepare($req);
$req->execute([$_SESSION['id_user']]);
$result = $req->fetch();
$user = $result;

?>
 <!-- BDD -->

<div class="w-full h-full flex flex-col items-center">
    <!--RETOUR-->
    <div class="absolute top-8 left-10">
        <a href="index.php">
            <svg width="16" height="28" viewBox="0 0 16 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.5 25.4619L14.0225 27.125L0.5 14L14.0225 0.875L15.5 2.53812L3.69125 14L15.5 25.4619Z" fill="white"/>
            </svg>
        </a>
    </div>
    <!--/RETOUR-->
    <!-- TITLE -->
    <div class="flex-col  items-center text-center font-bold font-sans text-white text-4xl">
        <h1 class="mt-4 capitalize"><?=$user['pseudo']?></h1>
        <?php include('content/ligncenter.php')?>
    </div>
    <!-- /TITLE -->

    <img src="assets/img/avatar.png" alt="image d'avatar" class="w-48 h-48 mx-auto mt-7 mb-4 rounded-big">
    
    <a href="content/pages/avatar.php"><p class="text-xl font-body font-normal text-white flex justify-evenly items-center "> Modifier</p></a>

    <div class="flex w-auto mt-10 flex-col">
        <a href="content/pages/myfavorite.php?id_user=<?= $user['id_user']?>">
            <div class="font-normal text-3xl w-[22rem] py-4 text-white flex bg-violettrans/50 rounded-md justify-between items-center px-5" >
                
                <div class="flex items-center"> 
                    <svg width="27" height="20" viewBox="0 0 27 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25.3333 19.3334H9.33333C8.97971 19.3334 8.64057 19.1929 8.39052 18.9428C8.14048 18.6928 8 18.3536 8 18C8 17.6464 8.14048 17.3073 8.39052 17.0572C8.64057 16.8072 8.97971 16.6667 9.33333 16.6667H25.3333C25.687 16.6667 26.0261 16.8072 26.2761 17.0572C26.5262 17.3073 26.6667 17.6464 26.6667 18C26.6667 18.3536 26.5262 18.6928 26.2761 18.9428C26.0261 19.1929 25.687 19.3334 25.3333 19.3334ZM25.3333 11.3334H9.33333C8.97971 11.3334 8.64057 11.1929 8.39052 10.9428C8.14048 10.6928 8 10.3536 8 10C8 9.6464 8.14048 9.30726 8.39052 9.05721C8.64057 8.80716 8.97971 8.66669 9.33333 8.66669H25.3333C25.687 8.66669 26.0261 8.80716 26.2761 9.05721C26.5262 9.30726 26.6667 9.6464 26.6667 10C26.6667 10.3536 26.5262 10.6928 26.2761 10.9428C26.0261 11.1929 25.687 11.3334 25.3333 11.3334ZM25.3333 3.33335H9.33333C8.97971 3.33335 8.64057 3.19288 8.39052 2.94283C8.14048 2.69278 8 2.35364 8 2.00002C8 1.6464 8.14048 1.30726 8.39052 1.05721C8.64057 0.807163 8.97971 0.666687 9.33333 0.666687H25.3333C25.687 0.666687 26.0261 0.807163 26.2761 1.05721C26.5262 1.30726 26.6667 1.6464 26.6667 2.00002C26.6667 2.35364 26.5262 2.69278 26.2761 2.94283C26.0261 3.19288 25.687 3.33335 25.3333 3.33335Z" fill="white"/>
                        <path d="M4 2C4 2.39556 3.8827 2.78224 3.66294 3.11114C3.44318 3.44004 3.13082 3.69638 2.76537 3.84776C2.39992 3.99913 1.99778 4.03874 1.60982 3.96157C1.22186 3.8844 0.865492 3.69392 0.585787 3.41421C0.306082 3.13451 0.115601 2.77814 0.0384303 2.39018C-0.0387401 2.00222 0.000866572 1.60009 0.152242 1.23463C0.303617 0.869181 0.559962 0.556824 0.88886 0.337061C1.21776 0.117298 1.60444 0 2 0C2.53043 0 3.03914 0.210713 3.41421 0.585786C3.78929 0.960859 4 1.46957 4 2ZM2 8C1.60444 8 1.21776 8.1173 0.88886 8.33706C0.559962 8.55682 0.303617 8.86918 0.152242 9.23463C0.000866572 9.60009 -0.0387401 10.0022 0.0384303 10.3902C0.115601 10.7781 0.306082 11.1345 0.585787 11.4142C0.865492 11.6939 1.22186 11.8844 1.60982 11.9616C1.99778 12.0387 2.39992 11.9991 2.76537 11.8478C3.13082 11.6964 3.44318 11.44 3.66294 11.1111C3.8827 10.7822 4 10.3956 4 10C4 9.46957 3.78929 8.96086 3.41421 8.58579C3.03914 8.21071 2.53043 8 2 8ZM2 16C1.60444 16 1.21776 16.1173 0.88886 16.3371C0.559962 16.5568 0.303617 16.8692 0.152242 17.2346C0.000866572 17.6001 -0.0387401 18.0022 0.0384303 18.3902C0.115601 18.7781 0.306082 19.1345 0.585787 19.4142C0.865492 19.6939 1.22186 19.8844 1.60982 19.9616C1.99778 20.0387 2.39992 19.9991 2.76537 19.8478C3.13082 19.6964 3.44318 19.44 3.66294 19.1111C3.8827 18.7822 4 18.3956 4 18C4 17.4696 3.78929 16.9609 3.41421 16.5858C3.03914 16.2107 2.53043 16 2 16Z" fill="#C684D8"/>
                    </svg>
                    <h2 class="mx-3">Ma liste</h2>
                </div>
                
                <svg width="15" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 1.66312L1.4775 0L15 13.125L1.4775 26.25L0 24.5869L11.8088 13.125L0 1.66312Z" fill="white"/>
                </svg>
            
            </div>
        </a>
        <a href="content/pages/setting.php">
            <div class="font-normal text-3xl w-[22rem] py-4 text-white flex bg-violettrans/50 rounded-md justify-between items-center px-5 mt-0.5" >
                
                <div class="flex items-center"> 
                <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M28.05 19.2667C28.1209 18.7708 28.1917 18.275 28.1917 17.7083C28.1917 17.1417 28.1209 16.6458 28.05 16.15L31.2375 13.8833C31.5209 13.6708 31.6625 13.2458 31.45 12.8917L28.3334 7.65001C28.1209 7.29584 27.7667 7.15417 27.4125 7.36667L23.8709 8.99584C23.0209 8.35834 22.1709 7.86251 21.1792 7.43751L20.825 3.54167C20.7542 3.18751 20.4709 2.90417 20.1167 2.90417H14.025C13.6709 2.90417 13.3167 3.18751 13.3167 3.54167L12.9625 7.43751C11.9709 7.86251 11.05 8.35834 10.2709 8.99584L6.7292 7.36667C6.37504 7.22501 5.95004 7.36667 5.80837 7.65001L2.76254 12.8917C2.55004 13.2458 2.6917 13.6708 2.97504 13.8833L6.16254 16.15C6.0917 16.6458 6.02087 17.1417 6.02087 17.7083C6.02087 18.275 6.0917 18.7708 6.16254 19.2667L2.83337 21.5333C2.55004 21.7458 2.40837 22.1708 2.62087 22.525L5.6667 27.7667C5.8792 28.1208 6.23337 28.2625 6.58754 28.05L10.1292 26.4208C10.9792 27.0583 11.8292 27.5542 12.8209 27.9792L13.175 31.875C13.2459 32.2292 13.5292 32.5125 13.8834 32.5125H19.975C20.3292 32.5125 20.6834 32.2292 20.6834 31.875L21.0375 27.9792C22.0292 27.5542 22.95 27.0583 23.7292 26.4208L27.2709 28.05C27.625 28.1917 28.05 28.05 28.1917 27.7667L31.2375 22.525C31.45 22.1708 31.3084 21.7458 31.025 21.5333L28.05 19.2667ZM17 24.7917C13.1042 24.7917 9.9167 21.6042 9.9167 17.7083C9.9167 13.8125 13.1042 10.625 17 10.625C20.8959 10.625 24.0834 13.8125 24.0834 17.7083C24.0834 21.6042 20.8959 24.7917 17 24.7917Z" fill="white"/>
                    <path d="M17 9.20831C12.325 9.20831 8.5 13.0333 8.5 17.7083C8.5 22.3833 12.325 26.2083 17 26.2083C21.675 26.2083 25.5 22.3833 25.5 17.7083C25.5 13.0333 21.675 9.20831 17 9.20831ZM17 21.25C15.0167 21.25 13.4583 19.6916 13.4583 17.7083C13.4583 15.725 15.0167 14.1666 17 14.1666C18.9833 14.1666 20.5417 15.725 20.5417 17.7083C20.5417 19.6916 18.9833 21.25 17 21.25Z" fill="#C684D8"/>
                </svg>
                <h2 class="mx-3">Paramètres</h2>
                </div>
                
                <svg width="15" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 1.66312L1.4775 0L15 13.125L1.4775 26.25L0 24.5869L11.8088 13.125L0 1.66312Z" fill="white"/>
                </svg>
            
            </div>
        </a>
        <a href="content/pages/help.php">
            <div class="font-normal text-3xl w-[22rem] py-4 text-white flex bg-violettrans/50 rounded-md justify-between items-center px-5 mt-0.5" >
                
                <div class="flex items-center"> 
                <svg width="29" height="29" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.6667 12.2778C10.6667 11.3218 10.9501 10.3874 11.4812 9.59252C12.0123 8.79768 12.7672 8.17819 13.6504 7.81236C14.5335 7.44654 15.5053 7.35082 16.443 7.53733C17.3805 7.72381 18.2418 8.18414 18.9177 8.8601C19.5937 9.53605 20.054 10.3973 20.2405 11.3348C20.4269 12.2724 20.3312 13.2443 19.9654 14.1275C19.5996 15.0105 18.9802 15.7655 18.1852 16.2965C17.3905 16.8277 16.4559 17.1111 15.5 17.1111V18.7222M4.22222 30H26.7778C28.5574 30 30 28.5574 30 26.7778V4.22222C30 2.44264 28.5574 1 26.7778 1H4.22222C2.44264 1 1 2.44264 1 4.22222V26.7778C1 28.5574 2.44264 30 4.22222 30Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15.5 25.1666C16.3898 25.1666 17.1111 24.4453 17.1111 23.5555C17.1111 22.6657 16.3898 21.9444 15.5 21.9444C14.6102 21.9444 13.8889 22.6657 13.8889 23.5555C13.8889 24.4453 14.6102 25.1666 15.5 25.1666Z" fill="#C684D8"/>
                </svg>

                <h2 class="mx-3">Assitances</h2>
                </div>
                
                <svg width="15" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 1.66312L1.4775 0L15 13.125L1.4775 26.25L0 24.5869L11.8088 13.125L0 1.66312Z" fill="white"/>
                </svg>
            
            </div>
        </a>
    </div>

    <div class="text-sm font-body text-white absolute items-center bottom-10 ">
    <a href="traitement/logout.php"><p>Se déconnecter</p></a>
    </div>

</div>
</body>
</html>
<?php
  }else{
    header('Location: index.php');
  }
?>