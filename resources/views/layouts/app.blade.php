<!DOCTYPE html>
<html 
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"     
    class="{{ session()->get('isDark') ? 'dark' : '' }}">
    
    @include('partials.header')

    <!-- get dark by session? -->
    <body class="antialiased flex w-screen h-screen">
        
        <!-- crazy sidmenu -->
        @include('partials.sidebar')

        @yield('content')

        <!-- Scripts -->
        @include('partials.footer')
    </body>
</html>
