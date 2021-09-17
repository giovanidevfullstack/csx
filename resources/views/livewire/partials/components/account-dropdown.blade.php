<div>
    <div class="relative w-full h-40 text-center p-2">
        <button class="relative z-10 w-12 h-12 rounded-full overflow-hidden border-2 border-gray-400 hover:border-green-300 dark:hover:border-gray-300"
            wire:click="$toggle('isOpen')">

            <img src="{{ asset('img/car.jpg')}}" alt=""
            class="w-full h-full object-cover"/>
        </button>

        <!-- dropdown menu -->
        <button 
            class="bg-black bg-opacity-20 inset-0 w-full h-full fixed
            cursor-default
            {{$isOpen ? '' : 'hidden' }}"
            wire:click="$toggle('isOpen')"
            tabindex="-1">
        </button>

        <div class="left-5 z-10 absolute flex flex-col w-52 h-auto py-4 
            bg-gray-200 border border-gray-300 rounded-lg shadow-2xl
            dark:bg-gray-800 dark:border-gray-600
            {{$isOpen ? '' : 'hidden' }}">

            <h1 class="dark:text-gray-200 p-1">Conta</h1>
            <a href="#" class="hover:bg-green-200 dark:hover:bg-gray-300 text-sm text-gray-500">Link</a> 
            <a href="#" class="hover:bg-green-200 dark:hover:bg-gray-300 text-sm text-gray-500">Link</a> 
            <a href="#" class="hover:bg-green-200 dark:hover:bg-gray-300 text-sm text-gray-500">Link</a> 

            <div class="border border-gray-300 dark:border-gray-600 my-2"></div>

            <h1 class="dark:text-gray-200 p-1">Configurações</h1>
            <a href="#" class="hover:bg-green-200 dark:hover:bg-gray-300 text-sm text-gray-500">Link</a> 
            <a href="#" class="hover:bg-green-200 dark:hover:bg-gray-300 text-sm text-gray-500">Link</a> 
            <a href="#" class="hover:bg-green-200 dark:hover:bg-gray-300 text-sm text-gray-500">Link</a> 
        </div>
        <!-- dropdown menu -->

        <div class="pt-2">
            <span class="text-xs font-light tracking-tighter leading-tight text-gray-600 dark:text-gray-500">
                Gaz Vechiles Shop
            </span>
        </div>
    </div>
</div>
