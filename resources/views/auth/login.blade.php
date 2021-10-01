@extends('layouts.landing')

@section('content')

    <div class="flex flex-row justify-center w-screen h-screen
        bg-indigo-800
        dark:bg-gray-900 dark:text-white 
        sm:items-center py-4 sm:pt-0">
        
        <div class="w-10/12 h-4/6 sm:w-1/12 sm:h-6 md:w-8/12 md:h-3/6 lg:w-8/12 lg:h-3/6 xl:w-4/12 xl:h-3/6 2xl:w-3/12 2xl:h-3/6
            px-5 flex items-center flex-shrink
            bg-white shadow-r-3-xl" style="border-radius: 50% 5%/ 28% 5%">

            <div class="w-10/12 h-auto mx-auto">
                <h1 class="antialiased font-light text-center uppercase text-indigo-400 text-7xl mb-5">CSX</h1>

                <form method="POST" action="{{ route('login.attempt') }}">
                    @csrf
                    
                    <!-- Email Address -->
                    <div>
                        <span
                            class="flex flex-row items-center mt-1 p-1 w-full h-10 rounded-lg
                            text-sm text-indigo-400  border border-indigo-400 focus:outline-none focus:ring-1 focus:ring-indigo-600">
                            <input id="email" 
                                    type="email" 
                                    name="email" 
                                    :value="old('email')" 
                                    required autofocus 
                                    placeholder="Email"
                                    class="px-3 py-2 border-none outline-none w-full h-full placeholder-current"/>
                            <i class="fas fa-envelope m-2"></i>
                        </span>
                        
                        @error('email')
                            <span class="text-red-400 text-sm text-light" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mt-4" x-data="{ show : true }">
                        <div class="flex flex-row items-center mt-1 p-1 w-full h-10 rounded-lg
                            text-sm text-indigo-400 border border-indigo-400 focus:outline-none focus:ring-1 focus:ring-indigo-600">
                            <input id="password"
                                    :type="show ? 'password' : 'text'"
                                    name="password"
                                    required autocomplete="current-password" 
                                    placeholder="Senha"
                                    class="px-3 py-2 border-none outline-none w-full h-full placeholder-current"/>
                            <i class="fas fa-eye m-2" @click="show = !show" x-show="show"></i>
                            <i class="fas fa-eye-slash m-2" @click="show = !show" x-show="!show"></i>
                        </div>
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4 text-center">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" 
                                    type="checkbox" 
                                    name="remember"
                                    class="rounded border-gray-300 text-indigo-400 focus:ring-indigo-400">

                            <span class="ml-3 text-sm text-indigo-400">{{ __('Permanecer logado') }}</span>
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
                            {{ __('Entrar') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection