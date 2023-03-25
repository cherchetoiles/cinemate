<div class=" flex justify-center items-center p-9 h-auto">
  <div x-data="{ tab: 'synopsis' }" class="w-90">
    <div 
      class="flex -mx-px"
    >
      
      <button
        @click="tab = 'synopsis'"
        :class="{ 'bg-violettrans/50 border-white': tab === 'synopsis' }"
        class="bg-violettrans/30 hover:bg-mauve text-white text-sm md:text-base font-semibold rounded-t focus:outline-none mx-px py-px md:py-1 px-3 md:px-4"
        type="button"
      >
        Synopsis
      </button>
      
      <button
        @click="tab = 'casting'"
        :class="{ 'bg-violettrans/50 border-white': tab === 'casting' }"
        class="bg-violettrans/30 hover:bg-mauve text-white font-semibold rounded-t focus:outline-none mx-px py-2 px-4"
        type="button"
      >
        Casting
      </button>
      
      <button
        @click="tab = 'avis'"
        :class="{ 'bg-violettrans/50 border-white': tab === 'avis' }"
        class="bg-violettrans/30 hover:bg-mauve text-white text-sm md:text-base font-semibold rounded-t focus:outline-none mx-px py-px md:py-2 px-3 md:px-4"
        type="button"
      >
        Avis
      </button>
      
      
    </div>
    <ul class="bg-violettrans/50 text-white text-sm rounded-r-lg rounded-bl-lg p-4">
      
        <li x-show="tab === 'synopsis'">
          <?=$film['synopsis']?>
        </li>
        
        <li class="flex flex-col justify-center" x-show="tab === 'casting'">
            <h3 class="font-sans font-bold 9 mb-3 mt-1 ml-2 text-3xl"><?='Métier'?> :</h3>
            <div class=" text-lt inline-grid grid-cols-3 font-body text-lt gap-auto mx-auto md:grid-cols-10">
                
            
            <div class="px-1.5 py-1.5 flex flex-col items-center">
                    <img class="w-24 h-auto rounded-big" src="https://fr.web.img3.acsta.net/c_310_420/medias/nmedia/18/35/18/13/18370242.jpg" alt="spiderman">                
                    <p><?='Preonm'?></p>
                    <p><?='Nom'?></p>
                </div>

            </div>      
        </li>
        
        <li x-show="tab === 'avis'">
            Sint sit mollit irure quis est nostrud cillum consequat Lorem esse do quis dolor esse fugiat sunt do. Eu ex commodo veniam Lorem aliquip laborum occaecat qui Lorem esse mollit dolore anim cupidatat. <span class="hidden md:block">Deserunt officia id Lorem nostrud aute id commodo elit eiusmod enim irure amet eiusmod qui reprehenderit nostrud tempor. Fugiat ipsum excepteur in aliqua non et quis aliquip ad irure in labore cillum elit enim. Consequat aliquip incididunt ipsum et minim laborum laborum laborum et cillum labore. Deserunt adipisicing cillum id nulla minim nostrud labore eiusmod et amet. Laboris consequat consequat commodo non ut non aliquip reprehenderit nulla anim occaecat. Sunt sit ullamco reprehenderit irure ea ullamco Lorem aute nostrud magna.
        </li>
        
    </ul>
  </div>
</div>
