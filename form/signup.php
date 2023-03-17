<div class=" w-screen h-screen flex flex-col justify-center align-middle">
    <section class=" shadow bg-violettrans bg-blur 	w-auto md:w-1/5 h-auto rounded-lg  py-4 ">

        <form method="post" action="traitement/signup.php" method='POST' class="flex flex-col w-76 items-center"

        <label class="text-l text-btnatcive font-sans font-normal my-1.5">
            </label><br>
        <input type="text" name="pseudo" placeholder="  Pseudo " class="rounded-sm  py-1"><br>

        <label class="text-l text-btnatcive font-sans font-normal my-1.5">
            </label><br>
        <input type="email" name="email" placeholder="  Adresse Mail " class="rounded-sm  py-1"><br>
     
        <label class="text-l text-btnatcive font-sans font-normal my-1.5">
             </label><br>
        <input type ="password" name="password" placeholder="  Mot de passe" class="rounded-sm  py-1"><br>

        <label class="text-l text-btnatcive font-sans font-normal my-1.5">
           </label><br>
        <input type ="password" name="password2" placeholder="  Confirmation du mot de passe " class="rounded-sm  mb-2 py-2 " ><br>        
       
        <input type="submit" value="S'inscrire" class="justify-center m-3 py-1 px-6 w-40 rounded-sm text-white bg-mauve hover:bg-btnatcive hover:text-btnatcive text-xl font-sans font-semibold ">
        
        <label class="text-white font-sans text-sm col-reverse">Activer le contrôl parental
            <input type="checkbox" checked>
            <span class="checkmark bg-mauve"></span>
        </label>
        
        </form>

    </section>
</div>