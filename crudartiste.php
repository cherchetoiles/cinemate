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
    <link rel="preconnect" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.2.0/tailwind.min.css">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.5.1/tailwind.min.css">
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



    <title>AllosimplonAdminArtistes</title>

</head>
<body class="w-full h-auto flex flex-col bg-violet">


<div class="w-full h-full flex flex-col items-center">
    <!--RETOUR-->
    <div class="absolute top-8 left-10">
        <a href="admin.php">
            <svg width="16" height="28" viewBox="0 0 16 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.5 25.4619L14.0225 27.125L0.5 14L14.0225 0.875L15.5 2.53812L3.69125 14L15.5 25.4619Z" fill="white"/>
            </svg>
        </a>
    </div>
    <!--/RETOUR-->
    <!-- TITLE -->
    <div class="flex-col  items-center text-center font-bold font-sans text-white text-4xl">
        <h1 class="mt-4 capitalize">Artistes</h1>
        <?php include('content/ligncenter.php')?>
    </div>
    <!-- /TITLE -->
    
    <!-- CREATE -->
    <div class="flex mb-2 justify-end justify-items-end text-end mr-14 text-white font-sans text-xl font-bold w-full h-auto">
        <label for="my-modal-56" class="cursor-pointer">
            <div class="px-6  py-1 bg-violettrans/50 flex items-center rounded-sm my-3">Ajouter</div>
        </label>
    </div>
   <!-- /CREATE -->
   
   <?php
    require ('traitement/bdd.php');
    $sql = "SELECT *, GROUP_CONCAT(a.id_artiste) FROM `artiste` a 
    JOIN `specialite` s ON a.id_artiste = s.id_artiste
    JOIN `job` j ON j.id_job = s.id_job 
    GROUP BY(a.id_artiste)";  
    $req = $db->prepare($sql);
    $req->execute();
    // SQL REQUEST
    $sql = "SELECT * FROM `job`";
    $result = $db->prepare($sql);
    $result->execute();
    ?>
    
   
    <div class="grid grid-cols-2 sm:grid-cols-7 sm:grid-rows-3">

    <?php
    foreach( $req->fetchAll() as $artiste){
        ?>

     <!--ARTISTE CARD-->
    
    <div class="m-4 py-4 text-white flex flex-col bg-violettrans/50 rounded-big  mx-6 items-center px-3 justify-center align-middle" >   
         
    <!-- PHOTO AND ROLE -->
        <div class="flex flex-col justify-center items-center w-auto h-auto text-center mx-1 object-cover">
            <h6 class="text-2xl font-bold font-sans text-white mb-1 "><?=  $artiste['name_job']?></h6>
            <div alt="image artiste"  class="w-24 h-24 bg-auto rounded-big bg-[url('<?= $artiste['img_artiste']?>')] bg-cover"></div>
            <h6 class="text-2xl font-bold font-sans text-white my-1"><?= $artiste['nom']?></h6>
            <p class="text-base font-regulard font-body mt-[-10px]"><?= $artiste['prenom']?></p>
        </div>      
        <!-- PHOTO AND ROLE -->
        <!-- BUTTON MAGIC -->            
        <div class="flex flew-row w-full justify-center my-1">
                <!-- MODIFIE -->
                <label for="my-modal-30" class="cursor-pointer">
                        <div class="bg-mauve rounded-sm px-2.5 py-1 mr-0.5">
                            <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.04167 4.83289L4.29123 2.08245C3.68129 1.47252 2.69239 1.47252 2.08245 2.08245C1.47252 2.69239 1.47252 3.68129 2.08245 4.29123L8.70877 10.9175C9.31871 11.5275 10.3076 11.5275 10.9175 10.9175C11.5275 10.3076 11.5275 9.31871 10.9175 8.70877L9.25044 7.04167" stroke="white" stroke-linecap="round"/>
                                <path d="M3.25 5.41666L5.41667 3.24999" stroke="white" stroke-linecap="round"/>
                                <path d="M8.72102 1.24974C8.80819 1.02788 9.12102 1.02788 9.2082 1.24974L9.44132 1.84302C9.46794 1.91075 9.52136 1.96437 9.58884 1.99108L10.1799 2.22507C10.401 2.31257 10.401 2.62655 10.1799 2.71405L9.58884 2.94804C9.52136 2.97475 9.46794 3.02837 9.44132 3.09611L9.2082 3.68939C9.12102 3.91124 8.80819 3.91124 8.72102 3.68939L8.48789 3.09611C8.46128 3.02837 8.40786 2.97475 8.34037 2.94804L7.74928 2.71405C7.52824 2.62655 7.52824 2.31257 7.74928 2.22507L8.34037 1.99108C8.40786 1.96437 8.46128 1.91075 8.48789 1.84302L8.72102 1.24974Z" stroke="white"/>
                                <path d="M10.8155 4.94511C10.9027 4.72325 11.2155 4.72325 11.3027 4.94511L11.3877 5.16142C11.4143 5.22916 11.4677 5.28278 11.5352 5.30949L11.7507 5.3948C11.9717 5.4823 11.9717 5.79629 11.7507 5.88379L11.5352 5.9691C11.4677 5.99581 11.4143 6.04943 11.3877 6.11717L11.3027 6.33348C11.2155 6.55534 10.9027 6.55534 10.8155 6.33348L10.7305 6.11717C10.7039 6.04943 10.6504 5.99581 10.583 5.9691L10.3674 5.88379C10.1464 5.79629 10.1464 5.4823 10.3674 5.3948L10.583 5.30949C10.6504 5.28278 10.7039 5.22916 10.7305 5.16142L10.8155 4.94511Z" stroke="white"/>
                                <path d="M2.78032 8.29139C2.8675 8.06954 3.18032 8.06954 3.2675 8.29139L3.3525 8.50771C3.37912 8.57544 3.43254 8.62906 3.50002 8.65577L3.71554 8.74109C3.93658 8.82859 3.93658 9.14257 3.71554 9.23007L3.50002 9.31538C3.43254 9.3421 3.37912 9.39571 3.3525 9.46345L3.2675 9.67976C3.18032 9.90162 2.8675 9.90162 2.78032 9.67976L2.69532 9.46345C2.66871 9.39571 2.61529 9.3421 2.5478 9.31538L2.33228 9.23007C2.11124 9.14257 2.11124 8.82859 2.33228 8.74109L2.5478 8.65577C2.61529 8.62906 2.66871 8.57544 2.69532 8.50771L2.78032 8.29139Z" stroke="white"/>
                            </svg>
                        </div>
                </label>
                <!--/MODIFIE -->

                
                <!-- DELETE -->
                <label for="my-modal" class="cursor-pointer">
                    <div class="bg-mauve rounded-sm px-2.5 py-1" id="delate-button">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.9582 3.5H2.0415" stroke="white" stroke-linecap="round"/>
                            <path d="M5.5415 6.41666L5.83317 9.33332" stroke="white" stroke-linecap="round"/>
                            <path d="M8.45817 6.41666L8.1665 9.33332" stroke="white" stroke-linecap="round"/>
                            <path d="M3.7915 3.5C3.8241 3.5 3.8404 3.5 3.85517 3.49963C4.33552 3.48745 4.75927 3.18203 4.92271 2.73019C4.92774 2.71629 4.9329 2.70083 4.9432 2.6699L4.99984 2.5C5.04818 2.35496 5.07236 2.28244 5.10442 2.22087C5.23234 1.97521 5.46902 1.80462 5.74253 1.76095C5.81108 1.75 5.88752 1.75 6.04041 1.75H7.95927C8.11215 1.75 8.18859 1.75 8.25715 1.76095C8.53065 1.80462 8.76733 1.97521 8.89525 2.22087C8.92732 2.28244 8.95149 2.35496 8.99984 2.5L9.05647 2.6699C9.06677 2.70078 9.07194 2.7163 9.07696 2.73019C9.24041 3.18203 9.66416 3.48745 10.1445 3.49963C10.1593 3.5 10.1756 3.5 10.2082 3.5" stroke="white"/>
                            <path d="M10.7181 8.98283C10.6148 10.5315 10.5632 11.3059 10.0586 11.7779C9.55404 12.25 8.77797 12.25 7.22584 12.25H6.77471C5.22257 12.25 4.44651 12.25 3.94192 11.7779C3.43733 11.3059 3.38571 10.5315 3.28246 8.98283L3.01416 4.95834M10.9864 4.95834L10.8697 6.70834" stroke="white" stroke-linecap="round"/>
                        </svg>
                    </div>
                </label>
                <!-- DELETE -->
            </div>            
            <!-- /BUTTON MAGIC -->
    </div>
   <!-- ARTISTE CARD -->
   <?php
        }
    ?>
</div>
</div>

<?php include('form/deleteartiste.php')?>
<?php include('form/createartiste.php')?>
<script src="assets/js/modal.js"></script>
<script src="assets/js/deletemodal.js"></script>
</body>
</html>
<?php 
    } else{
        header('Location:index.php');
    }}

else{
    header('Location:login.php');
} ?>