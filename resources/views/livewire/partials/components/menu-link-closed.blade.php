<div>
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
</div>
