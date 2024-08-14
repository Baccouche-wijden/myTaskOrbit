<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/icon.png') }}" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>TaskOrbit</title>
</head>

<body>
    @extends('layouts.master')

    @section('content')
        <div class="container mt-4">
            <h4>Welcome to the Dashboard</h4>
            <div class="chart-container w-1/2 h-screen">
                <canvas id="myChart"></canvas>
            </div>
        </div>

        <script>
            const data = {
                labels: ['1st project', '2nd project', '3rd project'],
                datasets: [{
                    label: 'My First Dataset',
                    data: [300, 50, 100],
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)'
                    ],
                    hoverOffset: 4
                }]
            };

            const config = {
                type: 'doughnut',
                data: data,
                options: {
                    maintainAspectRatio: false, // Disable the aspect ratio
                }
            };

            // Render the chart
            const myChart = new Chart(
                document.getElementById('myChart'),
                config
            );
        </script>
    @endsection
</body>
</html>
