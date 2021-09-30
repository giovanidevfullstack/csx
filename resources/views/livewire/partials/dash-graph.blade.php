<div class="flex flex-col w-full h-4/6 mx-auto p-2 rounded-lg
    bg-gray-200 dark:bg-gray-800 shadow-r-3-xl">

    <!-- header -->
    <div class="bg-red-400 w-full h-20 flex flex-row justify-center items-center">
        <h1>Some actions to graph</h1>
    </div>

    <!-- content -->
    <div class="w-full h-full">
        <div class="w-8/12 h-4/6 mx-auto">
            <canvas id="myChart"></canvas>
        </div>
    </div>

    <!-- footer -->
    <div class="bg-pink-400 w-full h-20 flex flex-row justify-center items-center">
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
            const labels    = @this.get('labels');
            const data      = @this.get('data');
            const title     = @this.get('title');

            //build graph
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: title,
                        data: data,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>
@endsection


