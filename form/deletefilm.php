<input type="checkbox" id="my-modal-12" class="modal-toggle" />
<div class="modal">
  <div class="modal-box">
  <h3 class="font-bold text-2xl font-sans">Attention !</h3>
    <p class="text-xl">Êtes-vous sur de vouloir supprimer <?=$film['title']?> ?</p>
    <div class="modal-action">
        <label for="my-modal-12" class=" justify-center py-2 px-4 w-auto rounded-md text-white bg-mauve hover:bg-btnatcive hover:text-btnatcive text-base flex justify-center font-sans font-semibold ">Annuler</label>
        <a href="traitement/deletefilm.php?id_film=<?= $film['id_film'] ?>" class="justify-center  py-2 px-4 w-auto rounded-md text-white bg-nav hover:bg-btnatcive hover:text-btnatcive text-base flex justify-center font-sans font-semibold ">Supprimer</a>
    </div>
  </div>
</div>