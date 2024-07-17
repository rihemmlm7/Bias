<section class="flex flex-col items-center justify-center pt-4 pr-8 pl-8 w-full h-full">
  <header>
    <h2 class="text-lg font-extrabold text-gray-900">Diesel</h2>
  </header>
  <header class="flex flex-col gap-5 justify-between items-start self-start font-medium w-full">
  <div class="header-content flex justify-between items-center w-full space-x-14 mt-5">
            <div class="left flex space-x-2">
                <h1 class="text-xs  text-gray-500">Volume :</h1>
                <p class="text-xs  text-gray-500">{{ $volume }}L</p>
            </div>
            <div class="right flex space-x-1">
                <h1 class="text-xs  text-gray-500">Dernier synchro</h1>
                <p class="text-xs  text-gray-500">{{ $date }}</p>
                <p class="text-xs  text-gray-500">{{ $hour }}</p>
            </div>

        </div>
        <div class="flex justify-between w-full ">
      <p class="text-sm text-black">Niveau (Litre):</p>
      <p class="text-sm text-black">{{ $nv_litre }} L</p>
      <p class="text-sm text-black">{{ $nv_litre}} mm</p>
    </div>
  </header>
  <hr class="shrink-0 self-center mt-8 max-w-full h-px border border-solid bg-slate-300 border-slate-300 w-[318px]">
  <div class="flex gap-5 self-start mt-4 ml-2.5 text-sm w-full pr-7 pl-5">
    <div class="flex flex-col flex-1 self-start mt-1.5 font-medium text-gray-500 ">
      <div class="flex justify-between w-full items-center mt-5 ">
        <p class="mr-2">Min:</p>
        <div class="inline-block bg-green-200 text-green-900 px-3 py-1 rounded-xl flex items-center justify-end">
        <i class="fa fa-caret-up text-green-600 custom-icon mr-2" aria-hidden="true"></i> 
        <p class="">{{ $min}}L</p>
          
          
        </div>
      </div>





      <div class="flex justify-between w-full items-center mt-5 ">
        <p class="mr-2">Max:</p>
        <div class="inline-block bg-green-200 text-green-900 px-3 py-1 rounded-xl flex items-center justify-end">
        <i class="fa fa-caret-up text-green-600 custom-icon mr-2" aria-hidden="true"></i> 
        <p class="">{{ $max}}L</p>
          
          
        </div>
      </div>






      <div class="flex justify-between w-full items-center mt-5 ">
        <p class="mr-2">Commance par:</p>
        <div class="inline-block bg-green-200 text-green-900 px-3 py-1 rounded-xl flex items-center justify-end">
        <i class="fa fa-caret-up text-green-600 custom-icon mr-2" aria-hidden="true"></i> 
        <p class="">{{ $comnce_par}}L</p>
          
          
        </div>
      </div>










      <div class="flex justify-between w-full items-center mt-5 ">
        <p class="mr-2">Terminer:</p>
        <div class="inline-block bg-green-200 text-green-900 px-3 py-1 rounded-xl flex items-center justify-end">
        <i class="fa fa-caret-up text-green-600 custom-icon mr-2" aria-hidden="true"></i> 
        <p class="">{{ $terminer}}L</p>
          
          
        </div>
      </div>






      <div class="flex justify-between w-full items-center mt-5 ">
        <p class="mr-2">La défirance :</p>
        
          <p class="mr-2 text-sm text-black">{{ $difirance}}L</p>
          

      </div>




    </div>

  </div>
  <hr class="shrink-0 self-center mt-11 max-w-full h-px border border-solid bg-slate-300 border-slate-300 w-[318px]">
  <p class="mt-4 text-sm font-medium text-blue-800">Le total est entre le 23/05/2024 09:01 et le 24/05/2024 09:00</p>
  <hr class="shrink-0 self-center mt-4 max-w-full h-px border border-solid bg-slate-300 border-slate-300 w-[318px]">
       <div class="flex justify-between w-full items-center mt-5 pr-2 pl-5">
        <p class="mr-2">Achat:</p>
        
          <p class="mr-2">{{ $achat}}L</p>
          

      </div>
      <div class="flex justify-between w-full items-center mt-5 pr-2 pl-5">
        <p class="mr-2">Vente:</p>
        
          <p class="mr-2">{{ $vente}}L</p>
          

      </div>
 
      <div class="shrink-0  h-2.5 bg-gray-600 bg-opacity-80 rounded-[40px] w-[37px]" role="separator" aria-hidden="true"></div>

        <div class="tank">
            <div class="water"
            style="--water-height: {{ $percentage / 100 }}; background: linear-gradient(to top, {{ $water_color }});">

            </div>
            <div class="percentage-container">
                <div class="percentage">{{ $percentage }}%</div>
            </div>
        </div>
      </div>
    </div>


  </div>
</section>
