<nav class="bg-transparent absolute flex flex-col w-20 h-screen py-2 items-start justify-center dark:bg-gray-900">

    <!-- menu content wrapper -->
    <div class="flex flex-col w-10/12 h-4/6 items-center rounded-r-lg space-y-2 
        bg-gray-200 border-t border-b border-r border-gray-300
        dark:bg-gray-800 dark:border-gray-700 shadow-r-3-xl">

        <!-- store logo -->
        <div class="w-full h-40 flex flex-col justify-center items-center m-4">
            <img src="{{ asset('img/car.jpg')}}" alt=""
                class="w-12 h-12 rounded-full"/>

            <span class="text-xs text-center pt-2 m-2 text-gray-600 dark:text-gray-500">My Company Name</span>
        </div>
        
        <!-- menu links -->
        <div class="w-full h-full flex flex-col justify-center items-center border-t border-b border-gray-300 dark:border-gray-700">
            <a href="{{ route('panel.store.index') }}" class="w-14 h-14 flex items-center justify-center">
                <i class="fas fa-home text-xl text-gray-600 hover:text-green-300
                transition duration-200 ease-in-out transform hover:translate-y-1 hover:scale-125 
                dark:text-gray-700 dark:hover:text-gray-300"></i>
            </a>
    
            <a href="{{ route('panel.store.vehicles.index') }}" class="w-14 h-14 flex items-center justify-center">
                <i class="fas fa-car text-xl text-gray-600 hover:text-green-300
                transition duration-200 ease-in-out transform hover:translate-y-1 hover:scale-125 
                dark:text-gray-700 dark:hover:text-gray-300"></i>
            </a>
    
            <a href="#" class="w-14 h-14 flex items-center justify-center">
                <i class="fas fa-money-bill-wave text-xl text-gray-600 hover:text-green-300
                transition duration-200 ease-in-out transform hover:translate-y-1 hover:scale-125 
                dark:text-gray-700 dark:hover:text-gray-300"></i>
            </a>
    
            <a href="#" class="w-14 h-14 flex items-center justify-center">
                <i class="fas fa-calendar-alt text-xl text-gray-600 hover:text-green-300
                transition duration-200 ease-in-out transform hover:translate-y-1 hover:scale-125 
                dark:text-gray-700 dark:hover:text-gray-300"></i>
            </a>
        </div>
        
        <!-- Bottom actions -->
        <div class="w-full h-40 flex flex-col items-center justify-end">
            <a href="{{ route('/') }}" class="w-14 h-14 flex items-center justify-center m-4" alt="{{ __('Logout')}}">
                <i class="fas fa-door-open text-xl text-gray-600 hover:text-green-300
                transition duration-200 ease-in-out transform hover:translate-y-1 hover:scale-125  
                dark:text-gray-700 dark:hover:text-gray-300"></i>
            </a>
        </div>
    </div>
</nav>