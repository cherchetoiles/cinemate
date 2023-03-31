<input type="checkbox" id="my-modal-56" class="modal-toggle" />
<div class="modal bg-violet/60">
  <div class="modal-box bg-violettrans/50 ">
    <label for="my-modal-56" class="btn btn-sm btn-circle text-mauve bg-white hover:bg-mauve hover:text-white absolute right-2 top-2">✕</label>
    <div class="w-100 flex flex-col justify-center align-middle">
    <section class=" mx-auto rounded-lg  my-10 py-4 ">

        <form method="post" action="traitement/createuser.php" method='POST' class="flex flex-col w-[22rem] items-center ">

        <label class=" text-btnatcive font-sans font-regulard my-2">
            </label><br>
        <input type="text" name="nom" id="nom" placeholder="Nom" class=" pl-2 rounded-md w-60 py-2"><br>

        <label class="text-base text-btnatcive font-sans font-normal my-2">
            </label><br>
        <input type="text" name="prenom" id="prenom" placeholder="Prénom"  class="rounded-md pl-2 w-60 py-2"><br>
    
        <label class="text-base text-btnatcive font-sans my-2">
            </label><br>
        <input type ="text" name="img_artiste" id="img_artiste" placeholder="Lien de photo de l'artiste"  class="rounded-md pl-2 w-60 py-2"><br>

        <label for="job" class="my-2"></label>
        <select name="job[]" id="id_job" class="bg-white rounded-md pl-2 w-60 py-3 ">
        <?php
            // Boucle pour afficher les catégories dans le menu déroulant
            while ($row = $result->fetch()) { ?>
            <option value="<?= $row['id_job']?>"> <?=$row['name_job']?></option>;
            <?php }
        ?>
        </select>

        <input type="submit" value="Enregistrer" class="justify-center m-3 py-2 px-6 w-60 rounded-md text-white bg-mauve hover:bg-btnatcive hover:text-btnatcive text-2xl font-sans font-semibold ">
        
        </form>

    </section>
</div>
</div>