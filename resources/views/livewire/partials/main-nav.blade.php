<div>
    <nav x-data="{ open: true }" 
                :class="{ 'w-64' : open, 'w-20' : !open }"
                class="bg-gray-200 flex flex-col 
                h-screen p-5 items-center justify-center 
                border-r border-gray-300 
                dark:bg-gray-800 dark:border-gray-700 transition-all duration-300"
                >
                
    
            <!-- Account -->
            @livewire('partials.components.account-dropdown')
            
            <!-- Menus -->
            <div class="w-full h-full border-b border-gray-300 dark:border-gray-700 overflow-y-auto overflow-x-hidden">

                <!-- store -->
                @foreach ($globalMenus as $k => $menu)                    
                    @if($loop->first)
                        <h3 :class="{ 'text-sm break-words' : !open, 'ml-5' : open }"
                            class="pt-5 pb-3 uppercase text-gray-400">{{ $menu->title }}</h3>
                    @endif
                    
                    <div x-show="open">
                        @livewire('partials.components.menu-link-expanded', ['menu' => $menu])
                    </div>
                    <div x-show="!open">
                        @livewire('partials.components.menu-link-closed', ['menu' => $menu])
                    </div>
                @endforeach

                <!-- admin -->
                @can('only-admin')
                    @foreach ($adminMenus as $k => $menu)                    
                        @if($loop->first)
                            <h3 :class="{ 'text-sm break-words' : !open, 'ml-5' : open }"
                                class="pt-5 pb-3 uppercase text-gray-400">{{ $menu->title }}</h3>
                        @endif
                        
                        <div x-show="open">
                            @livewire('partials.components.menu-link-expanded', ['menu' => $menu])
                        </div>
                        <div x-show="!open">
                            @livewire('partials.components.menu-link-closed', ['menu' => $menu])
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

                    {{-- <i class="fas {{$isOpen ? 'fa-chevron-left' : 'fa-chevron-right' }}"></i> --}}
                    {{-- <i :class="{ 'fa-chevron-left' : open, 'fa-chevron-right' : !open }" class="fas"></i> --}}
                    <i class="fas fa-chevron-left"></i>
                    {{-- :class="{ 'text-sm break-words' : !open, 'ml-5' : open }" --}}
                </button>
            </div>
    </nav>
</div>
