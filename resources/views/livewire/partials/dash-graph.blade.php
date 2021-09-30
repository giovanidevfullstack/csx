<div class="flex flex-col w-full h-full mx-auto p-2 rounded-lg
    bg-gray-200 dark:bg-gray-800 shadow-r-3-xl">

    <!-- header -->
    <div class="w-full h-20 flex flex-row justify-center items-center">
        <h1>Some actions to graph</h1>
    </div>

    <!-- content -->
    <div class="w-full h-full flex items-center">
        <div class="w-10/12 h-auto mx-auto">
            <canvas id="myChart"></canvas>
        </div>
    </div>

    <!-- footer -->
    <div class="w-full h-20 flex flex-row justify-center items-center">
        <h1>Aditional stats</h1>
    </div>
</div>

@section('scripts')
    <script 
        src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js" 
        integrity="sha512-Wt1bJGtlnMtGP0dqNFH1xlkLBNpEodaiQ8ZN5JLA5wpc1sUlk/O5uuOMNgvzddzkpvZ9GLyYNa8w2s7rqiTk5Q==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer">
    </script>

    <script>
        document.addEventListener('livewire:load', function() { 
            //get all props
            const labels = @this.get('labels');            
            const datasets = @this.get('datasets');

            //build graph
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: datasets
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: false
                        }
                    }
                }
            });
        });
    </script>
@endsection


