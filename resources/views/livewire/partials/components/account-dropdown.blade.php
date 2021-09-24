<div>
    <div class="relative w-full h-20 p-4">
        <button class="z-10 w-12 h-12 rounded-full overflow-hidden border-2 border-gray-400 hover:border-green-300 dark:hover:border-gray-300"
            wire:click="$toggle('isOpen')">

            <img src="{{ asset('img/car.jpg')}}" alt=""
                class="w-full h-full object-cover"/>
        </button>

        <!-- backdrop button -->
        <button 
            class="bg-black bg-opacity-0 inset-0 w-full h-full fixed
            cursor-default
            {{$isOpen ? '' : 'hidden' }}"
            wire:click="$toggle('isOpen')"
            tabindex="-1">
        </button>

        <!-- dropdown menu -->
        <div class="left-2 z-10 absolute flex flex-col w-60 h-auto py-4
            bg-gray-200 border border-gray-300 rounded-lg shadow-2xl
            dark:bg-gray-800 dark:border-gray-600 space-y-1
            {{$isOpen ? '' : 'hidden' }}">

            <div class="text-center">
                <span class="text-xs font-light tracking-tighter leading-tight text-gray-600 dark:text-gray-500">
                    {{ isset(auth()->user()->name) ? 'Bem vindo ' . auth()->user()->name . " " . auth()->user()->last_name: ''}}
                </span>
            </div>

            <!-- Dark Toogle -->   
            <div class="flex flex-row w-full h-10 px-5 items-center justify-between text-sm
                hover:bg-indigo-400 text-gray-500 hover:text-white
                border-b border-gray-300 dark:border-gray-600 dark:hover:bg-gray-300 dark:hover:text-gray-600"> 

                <div class="flex space-x-2 items-center">
                    <i class="fas {{ session()->get('isDark') ? 'fa-sun' : 'fa-moon' }}"></i>
                    <label class="capitalize">{{ __('darkmode') }} </label>
                </div>

                <div>
                    <button 
                        wire:click="toggleDark"
                        class="bg-gray-500 w-full h-full rounded-full">adasd
                    </button>
                </div>
            </div>

            <!-- other links -->
            <div class="flex flex-row w-full h-10 px-5 items-center justify-between text-sm
                hover:bg-indigo-400 text-gray-500 hover:text-white
                dark:hover:bg-gray-300 dark:hover:text-gray-600"> 

                <a class="flex space-x-2 items-center">
                    <i class="fas fa-link"></i>
                    <label class="capitalize">{{ __('link') }} </label>
                </a>
                
                {{-- <div>
                    <button 
                        wire:click="toggleDark"
                        class="bg-gray-500 w-full h-full rounded-full">adasd
                    </button>
                </div> --}}
            </div>
            <div class="flex flex-row w-full h-10 px-5 items-center justify-between text-sm
                hover:bg-indigo-400 text-gray-500 hover:text-white
                dark:hover:bg-gray-300 dark:hover:text-gray-600"> 

                <a class="flex space-x-2 items-center">
                    <i class="fas fa-link"></i>
                    <label class="capitalize">{{ __('link') }} </label>
                </a>
                
                {{-- <div>
                    <button 
                        wire:click="toggleDark"
                        class="bg-gray-500 w-full h-full rounded-full">adasd
                    </button>
                </div> --}}
            </div>
            <div class="flex flex-row w-full h-10 px-5 items-center justify-between text-sm
                hover:bg-indigo-400 text-gray-500 hover:text-white
                dark:hover:bg-gray-300 dark:hover:text-gray-600"> 

                <a class="flex space-x-2 items-center">
                    <i class="fas fa-link"></i>
                    <label class="capitalize">{{ __('link') }} </label>
                </a>
                
                {{-- <div>
                    <button 
                        wire:click="toggleDark"
                        class="bg-gray-500 w-full h-full rounded-full">adasd
                    </button>
                </div> --}}
            </div>
            <!-- end other links -->

            <div class="flex flex-row w-full h-10 px-5 items-center justify-between text-sm
                hover:bg-indigo-400 text-gray-500 hover:text-white
                dark:hover:bg-gray-300 dark:hover:text-gray-600
                border-t border-gray-300 dark:border-gray-600 "> 

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button 
                        type="submit" 
                        class="items-center justify-center text-sm w-full h-full" 
                        alt="{{ __('Logout')}}">
                        
                        <i class="fas fa-door-open"></i> {{ __('Logout')}}
                    </button>
                </form>
                
            </div>
            
            
        </div>
        <!-- dropdown menu -->
    </div>
</div>
