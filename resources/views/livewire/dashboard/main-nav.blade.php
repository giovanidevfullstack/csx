<div>
    <nav x-data="{ open: true }" 
            :class="{ 'w-64' : open, 'w-20' : !open }"
            class="bg-gray-200 flex flex-col 
            h-screen p-4 items-center justify-center 
            border-r border-gray-300 
            dark:bg-gray-800 dark:border-gray-700 transition-all duration-300"
            >
                
    
            <!-- Account -->
            @livewire('dashboard.components.account-dropdown')
            
            <!-- Menus -->
            <div class="w-full h-full border-b border-gray-300 dark:border-gray-700 overflow-y-auto overflow-x-hidden">

                <!-- store -->
                @foreach ($globalMenus as $k => $menu)                    
                    @if($loop->first)
                        <h3 :class="{ 'text-sm break-words text-center' : !open, 'ml-3' : open }"
                            class="pt-5 pb-3 uppercase text-gray-400">{{ $menu->title }}</h3>
                    @endif
                    
                    <div x-show="open">
                        @livewire('dashboard.components.menu-link-expanded', ['menu' => $menu])
                    </div>
                    <div x-show="!open">
                        @livewire('dashboard.components.menu-link-closed', ['menu' => $menu])
                    </div>
                @endforeach

                <!-- admin -->
                @can('only-admin')
                    @foreach ($adminMenus as $k => $menu)                    
                        @if($loop->first)
                            <h3 :class="{ 'text-sm break-words' : !open, 'ml-3' : open }"
                                class="pt-5 pb-3 uppercase text-gray-400">{{ $menu->title }}</h3>
                        @endif
                        
                        <div x-show="open">
                            @livewire('dashboard.components.menu-link-expanded', ['menu' => $menu])
                        </div>
                        <div x-show="!open">
                            @livewire('dashboard.components.menu-link-closed', ['menu' => $menu])
                        </div>
                    @endforeach
                @endcan
            </div>
            
            <!-- Other Actions -->
            <div class="w-full h-10 flex text-center items-center justify-end pt-5">
                <button 
                    @click="open = !open"
                    tabindex="-1"
                    class="text-gray-500 dark:text-gray-700 
                    hover:text-indigo-400 dark:hover:text-gray-300">

                    <!-- With dynamic class has a bug -->
                    <i x-show="open"  class="fas fa-chevron-left"></i>
                    <i x-show="!open" class="fas fa-chevron-right"></i>
                </button>
            </div>
    </nav>
</div>
