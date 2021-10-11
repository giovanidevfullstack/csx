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
                        <!-- <menu-link open:false/>-->
                        <div class="ml-2">
                            <a href="{{ is_null($menu->route) ?  '#' : route($menu->route) }}" 
                                class="py-2 m-1 flex justify-between text-sm
                                text-gray-500 border-l-2 border-gray-200
                                hover:text-indigo-400 hover:border-indigo-400
                                dark:border-gray-800 dark:hover:border-gray-300 dark:hover:text-gray-300 dark:text-gray-700 
                                {{ (Route::current()->getName() == $menu->route) ? 'text-indigo-400 border-indigo-400' : ''}}">
                    
                                <div class="flex items-center pl-3 w-full">
                                    <div class="mr-3 w-5">
                                        <i class="fas {{ $menu->icon }}"></i>
                                    </div>
                    
                                    <div class="w-auto">
                                        <span class="">{{$menu->name}}</span>
                                    </div>
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
                    </div>
                    <div x-show="!open">
                        <!-- <menu-link open:true/>-->
                        <a href="{{ is_null($menu->route) ?  '#' : route($menu->route) }}" 
                            class="w-full h-10 flex justify-center items-center text-md
                            text-gray-500 dark:text-gray-700 
                            hover:text-indigo-400 dark:hover:text-gray-300
                            {{ (Route::current()->getName() == $menu->route) ? 'text-indigo-400' : ''}}">
                    
                            <i class="fas {{ $menu->icon }}"></i>
                    
                            @if (!empty($menu->new_msgs))
                                <span class="bg-red-400 absolute w-4 h-4 ml-5 mb-5 items-center rounded-full text-center text-white text-xs font-light
                                    dark:bg-gray-600">
                                    {{ $menu->new_msgs }}
                                </span>
                            @endif
                        </a>
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
                            <div class="ml-2">
                                <a href="{{ is_null($menu->route) ?  '#' : route($menu->route) }}" 
                                    class="py-2 m-1 flex justify-between text-sm
                                    text-gray-500 border-l-2 border-gray-200
                                    hover:text-indigo-400 hover:border-indigo-400
                                    dark:border-gray-800 dark:hover:border-gray-300 dark:hover:text-gray-300 dark:text-gray-700 
                                    {{ (Route::current()->getName() == $menu->route) ? 'text-indigo-400 border-indigo-400' : ''}}">
                        
                                    <div class="flex items-center pl-3 w-full">
                                        <div class="mr-3 w-5">
                                            <i class="fas {{ $menu->icon }}"></i>
                                        </div>
                        
                                        <div class="w-auto">
                                            <span class="">{{$menu->name}}</span>
                                        </div>
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
                        </div>
                        <div x-show="!open">
                            <a href="{{ is_null($menu->route) ?  '#' : route($menu->route) }}" 
                                class="w-full h-10 flex justify-center items-center text-md
                                text-gray-500 dark:text-gray-700 
                                hover:text-indigo-400 dark:hover:text-gray-300
                                {{ (Route::current()->getName() == $menu->route) ? 'text-indigo-400' : ''}}">
                        
                                <i class="fas {{ $menu->icon }}"></i>
                        
                                @if (!empty($menu->new_msgs))
                                    <span class="bg-red-400 absolute w-4 h-4 ml-5 mb-5 items-center rounded-full text-center text-white text-xs font-light
                                        dark:bg-gray-600">
                                        {{ $menu->new_msgs }}
                                    </span>
                                @endif
                            </a>                            
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
