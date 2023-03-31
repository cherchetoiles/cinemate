<input type="checkbox" id="my-modal-52" class="modal-toggle" />
<div class="modal bg-violet/60" >
  <div class="modal-box bg-violettrans/50 ">
    <label for="my-modal-52" class="btn btn-sm btn-circle text-mauve bg-white hover:bg-mauve hover:text-white absolute right-2 top-2">✕</label>
    <div class="w-100 h-auto flex flex-col justify-center align-middle">
    <section class=" mx-auto rounded-lg  my-10 py-4 ">

        <form method="post" action="traitement/createfilm.php" class="flex flex-col w-[22rem] items-center ">

        <label class=" text-btnatcive font-sans font-regulard my-2"></label>
        <input type="text" name="title" id="title" placeholder="Titre" class=" pl-2 rounded-md w-60 py-2">
    
        <label class=" text-btnatcive font-sans font-regulard my-2"></label>   
        <input type="date" name="first_date" id="first_date" placeholder="Date de sortie" class=" pl-2 rounded-md w-60 py-2">

        <label class=" text-btnatcive font-sans font-regulard my-2"></label>
        <input type="date" name="last_date" id="last_date" placeholder="Dernière projection prévue" class=" pl-2 rounded-md w-60 py-2">

        <label class=" text-btnatcive font-sans font-regulard my-2"></label>
        <input type="text" name="synopsis" id="synopsis" placeholder="Synopsis" class=" pl-2 rounded-md w-60 py-2">

        <label class=" text-btnatcive font-sans font-regulard my-2"></label>    
        <input type="text" name="img_film" id="img_film" placeholder="Lien de l'affiche de film" class=" pl-2 rounded-md w-60 py-2">

        <label class=" text-btnatcive font-sans font-regulard my-2"></label>
        <input type="text" name="bg_img" id="bg_img" placeholder="Lien image de fond" class=" pl-2 rounded-md w-60 py-2">
        
        <label class=" text-btnatcive font-sans font-regulard my-2"></label>
        <input type="text" name="cover" id="cover" placeholder="Lien image de mise en avant" class=" pl-2 rounded-md w-60 py-2">
        
        <label class=" text-btnatcive font-sans font-regulard my-2"></label>
        <input type="text" name="iframe" id="iframe" placeholder="Lien de video watch=v" class=" pl-2 rounded-md w-60 py-2">
    
        
        <label for=" category" class="my-2 text-white text-xl mt-2">-- Sélectionnez une catégorie --</label>
        <select name="category[]" multiple id="id_category" class="bg-white rounded-md pl-2 w-60 py-3 ">
        <?php
            // Boucle pour afficher les catégories dans le menu déroulant
            while ($row = $req->fetch()) { ?>
            <option value="<?= $row['id_category']?>"> <?=$row['name_category']?> </option>;
            <?php }
        ?>
        </select>
        
        <label for=" artiste" class=" text-white my-2"></label>
        <select name="artiste[]" multiple id="id_artiste" class="bg-white rounded-md pl-2 w-60 py-3 ">
        <?php
            // Boucle pour afficher les catégories dans le menu déroulant
            while ($row = $artiste->fetch()) { ?>
            <option value="<?= $row['id_artiste']?>"> <?=$row['nom']?> <?=$row['prenom']?></option>;
            <?php }
        ?>
        </select>
        
        
        <input type="submit" value="Inscrire" class="justify-center m-3 py-2 px-6 w-60 rounded-md text-white bg-mauve hover:bg-btnatcive hover:text-btnatcive text-2xl font-sans font-semibold ">
        
        </form>

    </section>
</div>
</div>