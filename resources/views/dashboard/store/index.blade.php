@extends('layouts.app')

@section('content')

    <!-- wrapper -->
    <div class="flex flex-col w-full h-full overflow-x-hidden overflow-y-auto
        dark:bg-gray-900 dark:text-white">
        
        <!-- status bar -->
        <div class="bg-gray-200 flex flex-row w-full h-48 items-center overflow-x-auto border-b border-gray-300
            dark:bg-gray-800 dark:border-gray-600">

            @foreach ($cards as $card)
                @livewire('partials.card-status', ['card' => $card]) 
            @endforeach            
        </div>

        <!-- content -->
        <div class="w-full h-screen p-5 overflow-x-hidden overflow-y-auto
            bg-gray-300 dark:bg-gray-900">
            
            <!-- graph -->
            @livewire('partials.dash-graph')
        </div>
    </div>
    
@endsection