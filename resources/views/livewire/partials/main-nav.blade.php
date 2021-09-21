<div>
    <nav class="bg-gray-200 flex flex-col w-64 h-screen p-5 items-center justify-center 
                border-r border-gray-300 
                dark:bg-gray-800 dark:border-gray-700">
                
    
            <!-- Account -->
            @livewire('partials.components.account-dropdown')
            
            <!-- Menus -->
            <div class="w-full h-full border-t border-b border-gray-300 dark:border-gray-700 overflow-y-auto">

                <!-- Store -->
                <h3 class="pt-5 pb-3 uppercase text-gray-400">Loja</h3>
                @foreach ($menus as $menu)
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
                @endforeach

                <!-- Admin -->
                <h3 class="pt-5 pb-3 uppercase text-gray-400">Administração</h3>
                @foreach ($menus as $menu)
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
                @endforeach
            </div>
            
            <!-- Other Actions -->
            <div class="w-full h-40 text-center">
                something
            </div>
    </nav>
</div>
