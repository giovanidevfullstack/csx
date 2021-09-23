@extends('layouts.app')

@section('content')

    <!-- wrapper -->
    <div class="flex flex-col w-full h-full overflow-x-hidden overflow-y-auto
        dark:bg-gray-900 dark:text-white">
        
        <!-- status bar -->
        <div class="bg-gray-200 flex flex-row w-full h-48 items-center overflow-x-auto border-b border-gray-300">

            <!-- todo: wire:card-status -->
            <div class="bg-white flex flex-col flex-shrink-0 w-64 h-36 ml-4 p-4 rounded-md border-l-4 border-blue-400
                group hover:bg-blue-400">
                <div class="flex flex-row justify-between text-gray-400 group-hover:text-white">
                    <h1 class="uppercase">
                        Total
                    </h1>

                    <button>
                        <i class="fas fa-ellipsis-v"></i>
                    </button>
                </div>
                
                <div class="h-full flex flex-col justify-center text-center text-green-400 group-hover:text-white">
                    <h1 class="text-3xl ">R$ 30.000,00</h1>
                    <label class="text-md">
                        (+ 31%

                        <i class="fas fa-long-arrow-alt-up"></i>

                        )
                    </label>
                </div>
            </div>

            <!--temp-->
            <div class="bg-white flex flex-col flex-shrink-0 w-64 h-36 ml-4 p-4 rounded-md border-l-4 border-blue-400
                group hover:bg-blue-400">
                <div class="flex flex-row justify-between text-gray-400 group-hover:text-white">
                    <h1 class="uppercase">
                        Propostas
                    </h1>

                    <button>
                        <i class="fas fa-ellipsis-v"></i>
                    </button>
                </div>
                
                <div class="h-full flex flex-col justify-center text-center text-green-400 group-hover:text-white">
                    <h1 class="text-3xl ">32</h1>
                    <label class="text-md">
                        (+ 3%

                        <i class="fas fa-long-arrow-alt-up"></i>

                        )
                    </label>
                </div>
            </div>
            
        </div>

        <!-- graph -->
        <div class="w-full h-full overflow-x-hidden overflow-y-auto">

        </div>
    </div>
    
@endsection