<div>
    <nav class="bg-gray-200 flex flex-col 
                {{ $isOpen ?  'w-64' : 'w-20' }}
                h-screen p-5 items-center justify-center 
                border-r border-gray-300 
                dark:bg-gray-800 dark:border-gray-700 transition-all duration-300">
                
    
            <!-- Account -->
            @livewire('partials.components.account-dropdown')
            
            <!-- Menus -->
            <div class="w-full h-full border-b border-gray-300 dark:border-gray-700 overflow-y-auto overflow-x-hidden">

                <!-- store -->
                @foreach ($globalMenus as $k => $menu)                    
                    @if($loop->first)
                        <h3 class="
                            {{ ! $isOpen ? 'text-sm break-words' : 'ml-5'}}
                            pt-5 pb-3 uppercase text-gray-400">{{ $menu->title }}</h3>
                    @endif
                    
                    @if($isOpen)
                        @livewire('partials.components.menu-link-expanded', ['menu' => $menu])
                    @else
                        @livewire('partials.components.menu-link-closed', ['menu' => $menu])
                    @endif
                @endforeach

                <!-- admin -->
                @can('only-admin')
                    @foreach ($adminMenus as $k => $menu)                    
                        @if($loop->first)
                            <h3 class="
                                {{ ! $isOpen ? 'text-sm break-words' : 'ml-5'}}
                                pt-5 pb-3 uppercase text-gray-400">{{ $menu->title }}</h3>
                        @endif
                        
                        @if($isOpen)
                            @livewire('partials.components.menu-link-expanded', ['menu' => $menu])
                        @else
                            <!-- closed -->
                            @livewire('partials.components.menu-link-closed', ['menu' => $menu])
                        @endif
                    @endforeach
                @endcan
            </div>
            
            <!-- Other Actions -->
            <div class="w-full h-10 flex text-center items-center justify-end pt-5">
                <button 
                    wire:click="$toggle('isOpen')"
                    tabindex="-1"
                    class="text-gray-500 dark:text-gray-700 
                    hover:text-indigo-400 dark:hover:text-gray-300">

                    <i class="fas 
                    {{$isOpen ? 'fa-chevron-left' : 'fa-chevron-right' }}"></i>
                </button>
            </div>
    </nav>
</div>
