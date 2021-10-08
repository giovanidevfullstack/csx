<div class="flex flex-col mx-auto w-full h-4/6 p-5">
    @if(isset($menu))

        <form wire:submit.prevent="update" class="h-full">
            <div class="w-full h-full flex flex-col p-5 space-y-2 text-indigo-400">
                <label class="text-gray-500">Nome</label>
                <input type="text" wire:model.defer="menu.name"
                    class="p-1 w-full h-10 rounded-lg px-3 py-2 placeholder-current
                    border border-indigo-400 outline-none focus:outline-none focus:ring-1 focus:ring-indigo-600">
                @error('menu.name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror

                <div class="inline-block space-x-2">
                    <label class="text-gray-500">Administração?</label>
                    <input type="checkbox" wire:model.defer="menu.is_admin" {{ $menu['is_admin'] ? 'checked' : '' }}
                            class="rounded border-gray-300 text-indigo-400 focus:ring-indigo-400">
                    @error('menu.is_admin') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror

                    <label class="text-gray-500">Ativado</label>
                    <input type="checkbox" wire:model.defer="menu.is_active" {{ $menu['is_active'] ? 'checked' : '' }}
                            class="rounded border-gray-300 text-indigo-400 focus:ring-indigo-400">
                    @error('menu.is_active') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                </div>

                <label class="text-gray-500">Icone</label>
                <input type="text" wire:model.defer="menu.icon" 
                    class="p-1 w-full h-10 rounded-lg px-3 py-2 placeholder-current
                    border border-indigo-400 outline-none focus:outline-none focus:ring-1 focus:ring-indigo-600">
                @error('menu.icon') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror

                <label class="text-gray-500">Rota</label>
                <input type="text" wire:model.defer="menu.route" 
                    class="p-1 w-full h-10 rounded-lg px-3 py-2 placeholder-current
                    border border-indigo-400 outline-none focus:outline-none focus:ring-1 focus:ring-indigo-600">
                @error('menu.route') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                
                <div class="mx-auto pt-2">
                    <button type="submit" class="w-72 h-10 bg-green-400 rounded-md text-white
                        hover:bg-green-600 hover:text-green-400">Save</button>
                </div>

                <!-- message -->
                <div class="pt-2">
                    <div class="flex items-center w-full h-14 rounded-sm bg-green-100 border-l-4 border-green-400 text-green-400 px-4"
                        x-cloak 
                        x-data="{ show: false }"
                        x-show.transition.opacity.out.duration.1500ms="show"
                        x-init="@this.on('menuUpdated', () => { show = true; setTimeout(() => { show=false; }, 2000)})">
                        Menu atualizado com sucesso!
                    </div>
                </div>
            </div>
        </form>
    @endif
</div>