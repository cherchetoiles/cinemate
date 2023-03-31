<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- FAVICON -->
    <ank href="assets/img/favicon.png" rel="icon">
    <ank href="a" rel="apple-touch-icon">
<!-- /FAVICON -->

<!-- RESET CSS -->
    <ank rel="stylesheet" href="assets/css/reset.css">
<!-- /RESET CSS -->

    <ank rel="preconnect" href="https://fonts.googleapis.com">
    <ank rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!-- FONT -->

<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;900&family=League+Spartan:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;900&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
<!--/FONT -->

<!--DAISYUI-->
<link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.4/dist/full.css" rel="stylesheet" type="text/css" />
<!--/DAISYUI-->

<!-- TAILWIND CND -->
    <script src="https://cdn.tailwindcss.com"></script>
    <ank rel="preconnect" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.2.0/tailwind.min.css">
    <ank rel="preconnect" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.5.1/tailwind.min.css">

<!-- /TAILWIND CND -->

<!-- TAILWIND CONFIG -->
    <script>
        tailwind.config = {
        theme: {
            extend: {
            colors: {
                mauve:'#C684D8',
                violet:'#200A21',
                violettrans:'#471A48',
                btnviolet:'#321033',
                btnactive :'#8D6D8E',
                nav:'#1E051F',
            },
            fontFamily: {
                'sans': ['"League Spartan"', 'sans-serif'],
                'body': ['"Roboto"'],
            },
            fontSize: {
                sm: '0.875rem',
                base: '1rem',
                xl: '1.125rem',
                '2xl': '1.25rem',
                '3xl': '1.5rem',
                '4xl': '2rem',
                
                '5xl': '3.052rem',
                },
            borderRadius: {
                'none': '0',
                'sm': '0.25rem',
                'md': '0.5rem',
                'lg': '0.625rem',
                'big': '0.75rem',
            },
        }
        }
    }
    </script>
<!-- /TAILWIND CONFIG -->



    <title>Allosimplon</title>

</head>
<body>
<div class="text-center mt-8">
		<button onclick="openModal()" class='bg-blue-500 text-white p-2 rounded text-2xl font-bold my-5 mx-4'>Open Modal</button>
	</div>

	<div class="main-modal fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated font-sans fadeIn faster bg-violet/60">
		<div class=" shadow-lg modal-container w-11/12 md:max-w-md mx-auto bg-violettrans/50 rounded-big  shadow-lg z-50 overflow-y-auto">
			<div class="modal-content py-4 text-left ">
				<div class="flex items-end justify-end ">
					<div class="modal-close cursor-pointer z-50 btn btn-sm btn-circle text-mauve p-0.5 mr-2" style="background-color:#C684D8;">
						<svg class="fill-current text-white " xmlns="http://www.w3.org/2000/svg" width="14" height="14"
							viewBox="0 0 18 18">
							<path
								d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
							</path>between
						</svg>
					</div>
				</div>
				<!--Body-->
				<div class="">
                    <div class="">
                        <div class="w-100 flex flex-col justify-center align-middle">
                            <section class=" mx-auto rounded-lg  mb-7 mt-4 py-6 ">

                                <form method="post" action="traitement/creatartist.php" method='POST' class="flex flex-col w-[22rem] items-center ">

                                <label class="" >
                                    </label><br>
                                <input type="text" name="nom" id="nom" placeholder="Nom" class=" pl-2 rounded-md w-60 py-2 text-btnatcive font-sans font-regulard my-2""><br>

                                <label class="">
                                    </label><br>
                                <input type="text" name="prenom" id="prenom" placeholder="Prénom"  class="rounded-md pl-2 w-60 py-2 text-base text-btnatcive font-sans font-normal my-2"><br>

                                <label class="">
                                    </label><br>
                                <input type="text" name="img_artiste" id="img_artiste" placeholder="lien d'image"  class="rounded-md pl-2 w-60 py-2 text-base text-btnatcive font-sans font-normal my-2"><br>

                                <label for="job" class="my-1"></label>
                                <select name="job" id="id_job" class="bg-white rounded-md pl-2 w-60 py-3 mb-2">
                                    <option value="1">Scéanariste</option>
                                    <option value="2">Acteur</option>
                                </select>

                                <label for="film" class="my-1"></label>
                                    <select name="film" id="id_film" class="bg-white rounded-md pl-2 w-60 py-3 mb-2">
                                        <option value="">miaou</option>
                                        <option value="">dapêkf</option>
                                    </select>

                                <input type="submit" value="Inscrire" class="cursor-pointer justify-center m-3 py-2 px-6 w-60 rounded-md text-white hover:bg-white hover:text-btnatcive text-2xl font-sans font-semibold " style="background-color:#C684D8;">
                                
                                </form>

                            </section>
                        </div>
                    </div>				
                </div>
		    </div>
	    </div>
    </div>
</body>	
</html>
<script src="assets/js/modal.js"></script>