<label for="my-modal-2" class="btn btn-sm btn-circle bg-mauve text-white hover:bg-white hover:text-mauve absolute right-2 top-2">✕</label>
<div class="w-100 flex flex-col justify-center align-middle">
    <section class=" mx-auto rounded-lg  my-10 py-4 ">

        <form method="post" action="traitement/user.php" method='POST' class="flex flex-col w-[22rem] items-center ">

        <label class=" text-btnatcive font-sans font-regulard my-2">
            </label><br>
        <input type="text" name="pseudo" placeholder="<?='$pseudo'?>" class=" pl-2 rounded-md w-60 py-2"><br>

        <label class="text-base text-btnatcive font-sans font-normal my-2">
            </label><br>
        <input type="email" name="email" placeholder="<?='$email'?>"  class="rounded-md pl-2 w-60 py-2"><br>
    
        <label class="text-base text-btnatcive font-sans my-2">
            </label><br>
        <input type ="password" name="password" placeholder="<?='$Mot de passe'?>"  class="rounded-md pl-2 w-60 py-2"><br>

        <label for="role" class="my-2"></label>
        <select name="role" id="id-role" class="bg-white rounded-md pl-2 w-60 py-3 mb-2">
            <option value="dog">User</option>
            <option value="cat">Admin</option>
        </select>

        <input type="submit" value="Inscrire" class="justify-center m-3 py-2 px-6 w-60 rounded-md text-white bg-mauve hover:bg-btnatcive hover:text-btnatcive text-2xl font-sans font-semibold ">
        
        </form>

    </section>
</div>