<div class="w-100 flex flex-col justify-center align-middle">
    <section class=" bg-violettrans/50   bg-blur mx-auto rounded-lg  my-10 py-4 ">

        <form method="post" action="traitement/signup.php" method='POST' class="flex flex-col w-[22rem] items-center">

        <label class="text-base text-btnatcive font-sans font-normal my-2">
            </label><br>
        <input type="email" name="email" placeholder="  Adresse Mail " class="rounded-md pl-2 w-60 py-2"><br>
     
        <label class="text-base text-btnatcive font-sans mt-2">
             </label><br>
        <input type ="text" name="objet" placeholder="Object de votre message" class="rounded-md pl-2 w-60 py-2 mb-2"><br>

        <input type ="longtext" name="message" placeholder="Votre message" class=" rounded-md pl-2 w-60 h-20 py-2"><br>

        <input type="submit" value="Envoyez" class="justify-center m-3 py-2 px-6 w-60 rounded-md text-white bg-mauve hover:bg-btnatcive hover:text-btnatcive text-2xl font-sans font-semibold ">
    
        </form>

    </section>
</div>