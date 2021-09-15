<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    @include('partials.header')

    <!-- get dark by session? -->
    <body class="antialiased w-screen h-screen bg-blue-100">
        
        <!-- crazy sidmenu -->
        @include('partials.sidebar')

        @yield('content')

        <!-- Scripts -->
        @include('partials.footer')
    </body>
</html>
