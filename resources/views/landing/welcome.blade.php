@extends('layouts.landing')

@section('content')

    <div class="flex flex-row justify-center w-screen h-screen
        dark:bg-gray-900 dark:text-white 
        sm:items-center py-4 sm:pt-0">
        <h1>Let's create something amazing with Tailwind and Livewire</h1>

        <a href="{{ route('dashboard.store.index') }}" class="w-14 h-14 flex items-center justify-center m-4" alt="{{ __('Logout')}}">
            <i class="fas fa-sign-in-alt text-2xl text-gray-800 hover:text-green-300
            transition duration-200 ease-in-out transform hover:translate-y-1 hover:scale-125  
            dark:text-gray-300 dark:hover:text-green-700"></i>
        </a>
    </div>
    
@endsection