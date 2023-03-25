<div class="w-100 flex flex-col justify-center align-middle">
    <section class=" bg-violettrans/50   bg-blur mx-auto rounded-lg  my-10 py-4 ">

        <form method="post" action="/cinemate/traitement/login.php" method='POST' class="flex flex-col w-[22rem] items-center">

        <label class="text-base text-btnatcive font-sans font-normal my-2">
            </label><br>
        <input type="email" name="email" placeholder="  Adresse Mail " class="rounded-md pl-2 w-60 py-2"><br>
     
        <label class="text-base text-btnatcive font-sans my-2">
             </label><br>
        <input type ="password" name="password" placeholder="  Mot de passe" class="rounded-md pl-2 w-60 py-2"><br>
    
        <input type="submit" name="submit" value="Se connecter" class="cursor-pointer justify-center m-3 mt-4 py-2 px-6 w-60 rounded-md text-white bg-mauve hover:bg-btnatcive hover:text-white text-2xl font-sans font-semibold ">

        <a href="signup.php" class="justify-center mb-1 py-2 px-6 w-60 rounded-md text-mauve bg-white hover:bg-btnatcive hover:text-btnatcive text-2xl flex justify-center font-sans font-semibold ">S'inscrire</a>

        <div class="form-control flex flex-col justify-around flex w-36">
            <label class="cursor-pointer label">
                <input type="checkbox" class="toggle toggle-xs toggle-mauve" checked />
                <span class="label-text text-white l-1"> Se souvenir de moi </span> 
            </label>
        </div>
            <a href="#" class="mt-1 mb-2 font-semibold text-white">Mot de passe oubblié ?</a>
        </form>

    </section>
</div>