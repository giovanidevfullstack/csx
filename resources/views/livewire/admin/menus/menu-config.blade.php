<div class="w-full h-screen">

    <!-- details -->
    <div class="flex flex-col mx-auto w-full h-2/6 p-5 border-b border-gray-300">
        @if(isset($menu))
            <div class="h-8 text-gray-500">
                <h1 class="uppercase text-gray-600 text-lg">{{ $menu->name ?? '' }}</h1>
            </div>

            <div class="flex flex-row h-full">
                <div class="flex flex-col w-11/12 text-gray-600 space-y-2 justify-center">
                    <div>ID: {{ $menu->id ?? ''}}</div>
                    <div>Permissão: {{ $menu->is_admin ? 'admin' : 'user' }}</div>
                    <div>Título de grupo: {{ $menu->title ?? ''}}</div>
                    <div>Icone: {{ $menu->icon ?? ''}}</div>
                    <div>Rota: {{ $menu->route ?? ''}}</div>
                    <div>Criado em: {{ $menu->created_at ?? '' }}</div>
                </div>
                <div class="flex flex-col w-1/12 justify-center">
                    <button 
                        type="submit" 
                        class="w-full h-10 text-md mx-auto
                            text-blue-700 hover:bg-blue-700 hover:text-white" 
                        alt="{{ __('edit')}}"
                        wire:click="editMenu({{ $menu->id }})">
                        
                        <i class="fas fa-pencil-alt"></i> 
                    </button>
                    <button 
                        type="submit" 
                        class="w-full h-10 text-md mx-auto
                            text-gray-700 hover:bg-gray-700 hover:text-white" 
                        alt="{{ __('disable')}}">
                        
                        <i class="fas fa-eye-slash"></i> 
                    </button>
                    <button 
                        type="submit" 
                        class="w-full h-10 text-md mx-auto
                            text-red-700 hover:bg-red-700 hover:text-white" 
                        alt="{{ __('delete')}}">
                        
                        <i class="fas fa-trash-alt"></i> 
                    </button>
                </div>
            </div>
        @endif
    </div>

    <!-- crud component -->
    @livewire('admin.menus.menu-crud')
</div>