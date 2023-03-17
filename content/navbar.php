<div class="h-auto bg-nav w-full fixed top-0 left-0 right-0 py-2 pr-2  flex-col">

<!-- NAVBAR PRINCIPAL -->
    <div class="w-full flex justify-between">

<!-- LOGO+LIGN -->
        <a href="index.php">
            <div class="flex-col">
                <img src="assets/img/logowhite.webp" class="h-10 w-auto">
                <?php include ('content/lign.php')?>
            </div>
        </a>
<!--/LOGO+LIGN -->

<!--ICON SEARCH+CONNEXION-->
        <div class="flex mt-2">
            <div class="px-1">        
                <svg class="" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.75 18.75L26.25 26.25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M21.25 12.5C21.25 17.3325 17.3325 21.25 12.5 21.25C7.66751 21.25 3.75 17.3325 3.75 12.5C3.75 7.66751 7.66751 3.75 12.5 3.75C17.3325 3.75 21.25 7.66751 21.25 12.5Z" stroke="white" stroke-width="2"/>
                </svg>
            </div>


            <a href="profil.php">
                <div class="px-1"> 
                    <svg width="28" height="31" viewBox="0 0 28 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 29.2592V27.493C1 20.6648 6.8203 15.1296 14 15.1296C21.1797 15.1296 27 20.6648 27 27.493V29.2592" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M14 15.1296C18.1026 15.1296 21.4285 11.9665 21.4285 8.06479C21.4285 4.16301 18.1026 1 14 1C9.89726 1 6.57138 4.16301 6.57138 8.06479C6.57138 11.9665 9.89726 15.1296 14 15.1296Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </a>
        </div>
<!--/ICON SEARCH+CONNEXION-->
    </div>
<!-- /NAVBAR PRINCIPAL -->

    <div class="w-full flex">
        <a href="films.php">
        <div class=" bg-violettrans h-auto w-auto py-1 ml-2 px-6 rounded-sm text-white font-sans font-bold text-sm ">
        <p class="opacity-100">Films</p>
        </div>
        </a>

        <!-- FAIRE AJAX CATEGORY MENU AVEC SELECT-->
        <a href="test.php">
        <div class=" bg-violettrans h-auto w-auto py-1 ml-0.5 px-6 rounded-sm text-white font-sans font-bold text-sm ">
        <p>Catégories</p>
        </div>
        </a>

        <a href="admin.php">
        <div class=" bg-violettrans h-auto w-auto py-1 ml-0.5 px-6 rounded-sm text-white font-sans font-bold text-sm ">
        <p class="opacity-100">Admin</p>
        </div>
        </a>
    </div>



</div>

<!-- MODAL CATEGORY MENU -->
<div