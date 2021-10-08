@extends('layouts.app')

@section('content')

    <!-- wrapper -->
    <div class="flex flex-row w-full h-full overflow-x-hidden overflow-y-auto
        dark:bg-gray-900 dark:text-white">
        
        <!-- list component -->
        @livewire('admin.menus.menu-list')

        <!-- config component -->
        @livewire('admin.menus.menu-config')
    </div>
    
@endsection