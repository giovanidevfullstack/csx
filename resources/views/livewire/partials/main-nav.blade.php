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
                        <div class="ml-3">
                            <a href="{{ is_null($menu->route) ?  '#' : route($menu->route) }}" 
                                class="py-2 m-1 flex justify-between text-sm rounded-md
                                text-gray-500 border-l-2 border-gray-200
                                hover:text-indigo-400 hover:border-indigo-400
                                dark:border-gray-800 dark:hover:border-gray-300 dark:hover:text-gray-300 dark:text-gray-700 ">

                                <div class="flex items-center pl-3">
                                    <i class="fas {{ $menu->icon }}"></i>

                                    <span class="pl-4">{{ $menu->name }}</span>
                                </div>

                                <div class="flex items-center">
                                    @if (!empty($menu->new_msgs))
                                        <span class="bg-red-400 text-white text-xs font-light rounded-full w-4 h-4 block text-center items-center
                                            dark:bg-gray-600">
                                            {{ $menu->new_msgs }}
                                        </span>
                                    @endif
                                </div>
                            </a>
                        </div>
                    @else
                        <!-- closed -->
                        <a href="{{ is_null($menu->route) ?  '#' : route($menu->route) }}" 
                            class="w-full h-10 flex justify-center items-center text-md
                            text-gray-500 dark:text-gray-700 
                            hover:text-indigo-400 dark:hover:text-gray-300">

                            <i class="fas {{ $menu->icon }}"></i>

                            @if (!empty($menu->new_msgs))
                                <span class="bg-red-400 absolute w-4 h-4 ml-5 mb-5 items-center rounded-full text-center text-white text-xs font-light
                                    dark:bg-gray-600">
                                    {{ $menu->new_msgs }}
                                </span>
                            @endif
                        </a>
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
                            <div class="ml-3">
                                <a href="{{ is_null($menu->route) ?  '#' : route($menu->route) }}" 
                                    class="py-2 flex justify-between text-sm rounded-md
                                    text-gray-500 border-l-2 border-gray-200
                                    hover:text-indigo-400 hover:border-indigo-400
                                    dark:border-gray-800 dark:hover:border-gray-300 dark:hover:text-gray-300 dark:text-gray-700 ">

                                    <div class="flex items-center pl-3">
                                        <i class="fas {{ $menu->icon }}"></i>

                                        <span class="pl-4">{{ $menu->name }}</span>
                                    </div>

                                    <div class="flex items-center">
                                        @if (!empty($menu->new_msgs))
                                            <span class="bg-red-400 text-white text-xs font-light rounded-full w-4 h-4 block text-center items-center
                                                dark:bg-gray-600">
                                                {{ $menu->new_msgs }}
                                            </span>
                                        @endif
                                    </div>
                                </a>
                            </div>
                        @else
                            <!-- closed -->
                            <a href="{{ is_null($menu->route) ?  '#' : route($menu->route) }}" 
                                class="w-full h-10 flex justify-center items-center text-md
                                text-gray-500 dark:text-gray-700 
                                hover:text-indigo-400 dark:hover:text-gray-300">

                                <i class="fas {{ $menu->icon }}"></i>

                                @if (!empty($menu->new_msgs))
                                    <span class="bg-red-400 absolute w-4 h-4 ml-5 mb-5 items-center rounded-full text-center text-white text-xs font-light
                                        dark:bg-gray-600">
                                        {{ $menu->new_msgs }}
                                    </span>
                                @endif
                            </a>
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
