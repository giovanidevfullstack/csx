<div>
    <div class="relative w-full h-32 text-center p-4">
        <button class="relative z-10 w-12 h-12 rounded-full overflow-hidden border-2 border-gray-400 hover:border-green-300 dark:hover:border-gray-300"
            wire:click="$toggle('isOpen')">

            <img src="{{ asset('img/car.jpg')}}" alt=""
            class="w-full h-full object-cover"/>
        </button>

        <!-- dropdown menu -->
        <button 
            class="bg-black bg-opacity-0 inset-0 w-full h-full fixed
            cursor-default
            {{$isOpen ? '' : 'hidden' }}"
            wire:click="$toggle('isOpen')"
            tabindex="-1">
        </button>

        <div class="left-2 z-10 absolute flex flex-col w-60 h-auto py-4 
            bg-gray-200 border border-gray-300 rounded-lg shadow-2xl
            dark:bg-gray-800 dark:border-gray-600
            {{$isOpen ? '' : 'hidden' }}">

            <!-- Dark Toogle -->   
            <div class="my-2">     
                <button 
                    wire:click="toggleDark"
                    class="items-center justify-center text-sm w-full
                    hover:bg-indigo-400 text-gray-500 hover:text-white dark:hover:bg-gray-300 dark:hover:text-gray-600">
                    
                    <i class="fas {{ session()->get('isDark') ? 'fa-sun' : 'fa-moon' }}"></i>
                </button>
            </div>

            <h1 class="text-gray-400 dark:text-gray-200 uppercase text-sm p-1">Minha conta</h1>
            <a href="#" class="text-gray-500 hover:bg-indigo-400 hover:text-white dark:hover:bg-gray-300 text-sm dark:hover:text-gray-600">Link</a> 
            <a href="#" class="text-gray-500 hover:bg-indigo-400 hover:text-white dark:hover:bg-gray-300 text-sm dark:hover:text-gray-600">Link</a> 
            <a href="#" class="text-gray-500 hover:bg-indigo-400 hover:text-white dark:hover:bg-gray-300 text-sm dark:hover:text-gray-600">Link</a> 

            <div class="border border-gray-300 dark:border-gray-600 my-2"></div>

            <h1 class="text-gray-400 dark:text-gray-200 uppercase text-sm p-1">Configurações</h1>
            <a href="#" class="text-gray-500 hover:bg-indigo-400 hover:text-white dark:hover:bg-gray-300 text-sm dark:hover:text-gray-600">Link</a> 
            <a href="#" class="text-gray-500 hover:bg-indigo-400 hover:text-white dark:hover:bg-gray-300 text-sm dark:hover:text-gray-600">Link</a> 
            <a href="#" class="text-gray-500 hover:bg-indigo-400 hover:text-white dark:hover:bg-gray-300 text-sm dark:hover:text-gray-600">Link</a> 

            <div class="border border-gray-300 dark:border-gray-600 my-2"></div>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
        
                <button 
                    type="submit" 
                    class="items-center justify-center text-sm w-full
                    hover:bg-indigo-400 text-gray-500 hover:text-white dark:hover:bg-gray-300 dark:hover:text-gray-600" 
                    alt="{{ __('Logout')}}">
                    
                    <i class="fas fa-door-open"></i> {{ __('Logout')}}
                </button>
            </form>
            
        </div>
        <!-- dropdown menu -->

        <div class="pt-2">
            <span class="text-xs font-light tracking-tighter leading-tight text-gray-600 dark:text-gray-500">
                {{ isset(auth()->user()->name) ? 'Bem vindo ' . auth()->user()->name : ''}}
            </span>
        </div>
    </div>
</div>
