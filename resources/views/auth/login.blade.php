@extends('layouts.landing')

@section('content')

    <div class="flex flex-row justify-center w-screen h-screen
        bg-indigo-800
        dark:bg-gray-900 dark:text-white 
        sm:items-center py-4 sm:pt-0">
        
        <div class="w-4/12 h-3/6 p-5 flex items-center
            bg-white" style="border-radius: 50% 5%/ 28% 5%">

            <div class="w-10/12 h-auto mx-auto">
                <form method="POST" action="{{ route('login.attempt') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <label for="email" :value="__('Email')" />
                        <input id="email" 
                                type="email" 
                                name="email" 
                                :value="old('email')" 
                                required autofocus 
                                placeholder="Email"
                                class="block mt-1 w-full h-10 px-3 py-2 rounded-lg
                                text-sm text-indigo-400 placeholder-current border border-indigo-400 focus:outline-none focus:ring-1 focus:ring-indigo-600"/>
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <label for="password" :value="__('Password')" />

                        <input id="password"
                                type="password"
                                name="password"
                                required autocomplete="current-password" 
                                placeholder="Senha"
                                class="block mt-1 w-full h-10 px-3 py-2 rounded-lg
                                text-sm text-indigo-400 placeholder-current border border-indigo-400 focus:outline-none focus:ring-1 focus:ring-indigo-600"/>
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4 text-center">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" 
                                class="rounded border-gray-300 text-indigo-600 shadow-sm 
                                focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <span class="ml-3 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-center mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <button class="w-full h-10 rounded-lg bg-indigo-400 text-white 
                            hover:bg-indigo-800 hover:text-indigo-400 
                            focus:ring-2 focus:ring-indigo-600 focus:ring-opacity-50
                            dark:bg-indigo-900 dark:text-indigo-400">
                            {{ __('Log in') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection