<div class="flex flex-col w-4/12 h-screen p-5 overflow-x-hidden overflow-y-auto 
    border-r border-gray-300 dark:border-gray-700">
    <div class="flex flex-row justify-between w-full items-center mb-5">
        <h1 class="w-full uppercase text-lg text-gray-400">
            Menus
        </h1>
        <button 
            type="submit" 
            class="w-10 h-10 text-md mx-auto rounded-md
                text-gray-400 hover:bg-gray-300 hover:text-gray-400" 
            alt="{{ __('delete')}}">
            
            <i class="fas fa-plus"></i> 
        </button>
    </div>
    <div class="text-gray-600 text-md flex flex-col">
        @foreach ($allMenus as $menu )
            <!-- form with link to edit -->
            <!-- or evt -->
            {{-- <button x-on:click="$wire.emit('menuSelected', $menu->id)">Increment</button> --}}
            <button class="w-full flex flex-row justify-between items-center px-4 py-2 mx-1 cursor-pointer
            text-gray-500 border-l-2 border-white
            hover:text-indigo-400 hover:border-indigo-400
            dark:border-gray-900 dark:hover:border-gray-300 dark:hover:text-gray-300 dark:text-gray-700"
            wire:click="openMenu({{ $menu->id }})">
                
            <div>{{ $menu->name }}</div>

                <!-- if is active -->
                <div class="{{ $menu->is_admin ? 'bg-green-400' : 'bg-red-400' }} w-2 h-2 rounded-full"></div>
            </button>
        @endforeach
    </div>
</div>