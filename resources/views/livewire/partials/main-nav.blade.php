<div>
    <nav class="bg-gray-200 flex flex-col 
                {{ $isOpen ?  'w-64' : 'w-20' }}
                h-screen p-5 items-center justify-center 
                border-r border-gray-300 
                dark:bg-gray-800 dark:border-gray-700">
                
    
            <!-- Account -->
            @livewire('partials.components.account-dropdown')
            
            <!-- Menus -->
            <div class="w-full h-full border-t border-b border-gray-300 dark:border-gray-700 overflow-y-auto overflow-x-hidden">

                <!-- Store -->
                <h3 class="pt-5 pb-3 uppercase text-gray-400">Loja</h3>
                @foreach ($menus as $menu)
                    @if($isOpen)
                        <a href="{{ is_null($menu['route']) ?  '#' : route($menu['route']) }}" 
                            class="py-2 flex justify-between text-sm
                            text-gray-500 dark:text-gray-700 
                            hover:text-indigo-400 dark:hover:text-gray-300">

                            <div class="flex items-center">
                                <i class="fas {{ $menu['icon'] }}"></i>

                                <span class="pl-4">{{ $menu['name'] }}</span>
                            </div>

                            <div class="flex items-center">
                                @if (!empty($menu['new_msg']))
                                    <span class="bg-red-400 text-white text-xs font-light rounded-full w-4 h-4 block text-center items-center">
                                        {{ $menu['new_msg'] }}
                                    </span>
                                @endif
                            </div>
                        </a>
                    @else
                        <a href="{{ is_null($menu['route']) ?  '#' : route($menu['route']) }}" 
                            class="py-4 flex justify-center text-md
                            text-gray-500 dark:text-gray-700 
                            hover:text-indigo-400 dark:hover:text-gray-300">

                            <i class="fas {{ $menu['icon'] }}"></i>

                            @if (!empty($menu['new_msg']))
                                <span class="bg-red-400 absolute w-4 h-4 ml-5 items-center rounded-full text-center text-white text-xs font-light">
                                    {{ $menu['new_msg'] }}
                                </span>
                            @endif
                        </a>
                    @endif
                @endforeach

                <!-- Admin -->
                <h3 class="pt-5 pb-3 uppercase text-gray-400">Administração</h3>
                @foreach ($menus as $menu)
                    @if($isOpen)
                        <a href="{{ is_null($menu['route']) ?  '#' : route($menu['route']) }}" 
                            class="py-2 flex justify-between text-sm
                            text-gray-500 dark:text-gray-700 
                            hover:text-indigo-400 dark:hover:text-gray-300">

                            <div class="flex items-center">
                                <i class="fas {{ $menu['icon'] }}"></i>

                                <span class="pl-4">{{ $menu['name'] }}</span>
                            </div>

                            <div class="flex items-center">
                                @if (!empty($menu['new_msg']))
                                    <span class="bg-red-400 text-white text-xs font-light rounded-full w-4 h-4 block text-center items-center">
                                        {{ $menu['new_msg'] }}
                                    </span>
                                @endif
                            </div>
                        </a>
                    @else
                        <a href="{{ is_null($menu['route']) ?  '#' : route($menu['route']) }}" 
                            class="py-4 flex justify-center text-md
                            text-gray-500 dark:text-gray-700 
                            hover:text-indigo-400 dark:hover:text-gray-300">

                            <i class="fas {{ $menu['icon'] }}"></i>

                            @if (!empty($menu['new_msg']))
                                <span class="bg-red-400 absolute w-4 h-4 ml-5 items-center rounded-full text-center text-white text-xs font-light">
                                    {{ $menu['new_msg'] }}
                                </span>
                            @endif
                        </a>
                    @endif
                @endforeach
            </div>
            
            <!-- Other Actions -->
            <div class="w-full h-40 flex text-center items-center justify-center">
                <button 
                    wire:click="$toggle('isOpen')"
                    tabindex="-1"
                    class="text-gray-500 dark:text-gray-700 
                    hover:text-indigo-400 dark:hover:text-gray-300">

                    <i class="fas 
                    {{$isOpen ? 'fa-compress-alt' : 'fa-expand-alt' }}"></i>
                </button>
            </div>
    </nav>
</div>
