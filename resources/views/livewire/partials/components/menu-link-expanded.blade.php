<div>
    <div class="ml-2">
        <a href="{{ is_null($menu->route) ?  '#' : route($menu->route) }}" 
            class="py-2 m-1 flex justify-between text-sm
            text-gray-500 border-l-2 border-gray-200
            hover:text-indigo-400 hover:border-indigo-400
            dark:border-gray-800 dark:hover:border-gray-300 dark:hover:text-gray-300 dark:text-gray-700 
            {{ (Route::current()->getName() == $menu->route) ? 'text-indigo-400 border-indigo-400' : ''}}">

            <div class="flex items-center pl-3">
                <i class="fas {{ $menu->icon }}"></i>

                <span class="pl-4">{{$menu->name}}</span>
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
