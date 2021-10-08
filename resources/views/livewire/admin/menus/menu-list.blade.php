<div x-data="{ open_new: false }" class="flex flex-col w-4/12 h-screen p-5 overflow-x-hidden overflow-y-auto 
    border-r border-gray-300 dark:border-gray-700">

    <div class="flex flex-row justify-between w-full items-center mb-2">
        <h1 class="w-full uppercase text-lg text-gray-400">
            Menus
        </h1>
        <button 
            type="submit" 
            class="w-10 h-10 text-md mx-auto rounded-md
                text-gray-400 hover:bg-gray-300 hover:text-gray-400" 
            alt="{{ __('delete')}}"
            @click="open_new = !open_new">
            
            <i class="fas fa-plus"></i> 
        </button>
    </div>

    <!-- new menu -->
    <div x-cloak x-show.transition.in.duration.300ms.out.duration.300ms="open_new" 
        class="flex flex-col w-full items-center">
        <form wire:submit.prevent="save" class="w-full">
            <div class="w-full h-full flex flex-col text-indigo-400">
                <label class="text-gray-500">Nome</label>
                <input wire:model.defer="menuName" 
                        type="text" 
                        class="p-1 w-full h-8 rounded-lg px-3 py-2 placeholder-current
                        border border-indigo-400 outline-none focus:outline-none focus:ring-1 focus:ring-indigo-600">
                @error('menuName') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                
                <div class="mx-auto pt-2 w-full">
                    <button type="submit" class="w-full h-8 bg-green-400 rounded-md text-white
                        hover:bg-green-600 hover:text-green-400">Save</button>
                </div>

                <!-- message -->
                <div class="pt-2">
                    <div class="flex items-center w-full h-10 rounded-sm bg-green-100 border-l-4 border-green-400 text-green-400 px-4"
                        x-cloak 
                        x-data="{ show: false }"
                        x-show.transition.opacity.out.duration.1500ms="show"
                        x-init="@this.on('menuCreated', () => { show = true; setTimeout(() => { show=false; }, 2000)})">
                        Menu criado com sucesso!
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="text-gray-600 text-md flex flex-col mt-2">
        @foreach ($allMenus as $menu )
            <button class="w-full flex flex-row justify-between items-center px-4 py-2 mx-1 cursor-pointer
            text-gray-500 border-l-2 border-white
            hover:text-indigo-400 hover:border-indigo-400
            dark:border-gray-900 dark:hover:border-gray-300 dark:hover:text-gray-300 dark:text-gray-700"
            wire:click="openMenu({{ $menu->id }})">
                
            <div>{{ $menu->name }}</div>

                <!-- if is active -->
                <div class="{{ $menu->is_active ? 'bg-green-400' : 'bg-red-400' }} w-2 h-2 rounded-full"></div>
            </button>
        @endforeach
    </div>

    <!-- message -->
    <div class="pt-2">
        <div class="flex flex-col justify-center items-start w-full h-14 rounded-sm bg-green-100 border-l-4 border-green-400 text-green-400 px-4"
            x-cloak 
            x-data="{ show: false }"
            x-show.transition.opacity.out.duration.1500ms="show"
            x-init="Livewire.on('menuDeleted', () => { show = true; setTimeout(() => { show=false; }, 2000)})">
            <label>Menu removido com sucesso!</label>
            <a href="#" class="underline text-indigo-400 text-sm self-center">restaurar</a>
        </div>
    </div>
</div>