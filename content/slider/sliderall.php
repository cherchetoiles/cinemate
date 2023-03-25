<?php
require ('traitement/bdd.php');
$sql = 'SELECT * FROM film WHERE last_date < CURDATE();
;';
// ATTENTION LIMIT
$result = $db->prepare($sql);
$result->execute();

// SQL REQUEST 
?>


<div class="w-full h-auto ">
    
    <?php foreach($result->fetchAll() as $film){?>

    <div class="flex-col items-center font-bold font-sans text-white  text-3xl ml-12">
        <h3 class="mt-4 "></h3>
        <?php include('content//lign.php')?>
    </div>
            
    <div class="carousel carousel-center p-4 space-x-4 pl-12 rounded-lg ">
        <div class="carousel-item">
            <a href="film.php?id_film=<?= $film['id_film']?>">
                <img src="<?= $film['img_film']?>" class="rounded-lg w-36 h-auto ">
            </a>
        </div>
    </div>

    <?php } ?>

</div>