<div class="w-100 flex flex-col justify-center align-middle">
    <section class=" bg-violettrans/50   bg-blur mx-auto rounded-lg  my-10 py-4 ">

        <form method="post" action="traitement/signup.php" method='POST' class="flex flex-col w-[22rem] items-center">

        <label class=" text-btnatcive font-sans font-regulard my-2">
            </label><br>
        <input type="text" name="pseudo" placeholder="  Pseudo " class=" pl-2 rounded-md w-60 py-2"><br>

        <label class="text-base text-btnatcive font-sans font-normal my-2">
            </label><br>
        <input type="email" name="email" placeholder="  Adresse Mail " class="rounded-md pl-2 w-60 py-2"><br>
     
        <label class="text-base text-btnatcive font-sans my-2">
             </label><br>
        <input type ="password" name="password" placeholder="  Mot de passe" class="rounded-md pl-2 w-60 py-2"><br>

        <label class="text-base text-btnatcive font-sans font-normal my-2">
           </label><br>
        <input type ="password" name="password2" placeholder="  Confirmation du mot de passe " class="rounded-md w-60 pl-2 mb-2 py-2 " ><br>        
       
        <input type="submit" value="S'inscrire" class="justify-center m-3 py-2 px-6 w-60 rounded-md text-white bg-mauve hover:bg-btnatcive hover:text-btnatcive text-2xl font-sans font-semibold ">
        
        <div class="form-control items-center flex justify-around w-60">
            <label class="cursor-pointer label">
            <span class="label-text text-white pr-1">Activer le contrôl parental</span> 
            <input type="checkbox" class="toggle toggle-xs toggle-mauve" checked />
            </label>
        </div>
        
        </form>

    </section>
</div>