<div>
    <div class="bg-white flex flex-col flex-shrink-0 w-64 h-36 ml-4 p-4 group rounded-md border-l-4 
                hover:bg-blue-400 border-blue-400
                dark:bg-gray-700 dark:border-gray-600">
                
        <div class="flex flex-row justify-between text-gray-400 group-hover:text-white">
            <h1 class="uppercase">
                {{ $card['title'] }}
            </h1>

            <button>
                <i class="fas fa-ellipsis-v"></i>
            </button>
        </div>
        
        <div class="h-full flex flex-col justify-center text-center group-hover:text-white text-green-400">
            <h1 class="text-3xl ">{{ $card['value'] }}</h1>
        </div>
    </div>
</div>
