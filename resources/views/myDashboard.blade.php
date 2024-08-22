<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/icon.png') }}" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.0/main.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.0/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css' rel='stylesheet' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js'></script>

    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS (for modal functionality) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <title>TaskOrbit</title>
</head>

<body>
    @extends('layouts.master')

    @section('content')
        <div class="container mt-4">
            <h4>Welcome to the Dashboard</h4>
            <div class="flex">
                <div class="chart-container w-1/2 h-128">
                    <canvas id="myChart"></canvas>
                </div>
                <div class="chart-container w-1/2 h-128">
                    <canvas id="myChart2"></canvas>
                </div>
            </div>
            <div id="calendar" class="h-128 w-1/2">

            </div>
        </div>

        <!--modal to display event's details : -->
        <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="eventModalLabel">Event Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Title:</strong> <span id="modalEventTitle"></span></p>
                        <p><strong>Date:</strong> <span id="modalEventDate"></span></p>
                        <p><strong>Time:</strong> <span id="modalEventTime"></span></p>
                    </div>
                </div>
            </div>
        </div>

        <script>
            const data = {
                labels: ['1st project', '2nd project', '3rd project'],
                datasets: [{
                    label: 'My First Dataset',
                    data: [300, 50, 100],
                    backgroundColor: [
                        '#F72798',
                        '#3FA2F6',
                        '#88D66C',
                    ],
                    hoverOffset: 4
                }]
            };

            const config = {
                type: 'pie',
                data: data,
                options: {
                    maintainAspectRatio: false, // Disable the aspect ratio ()
                }
            };

            // Render the first chart
            const myChart = new Chart(
                document.getElementById('myChart'),
                config
            );

            // Chart 2 data and config

            const labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July'];
            const data2 = {
                labels: labels,
                datasets: [{
                    label: 'My First Dataset',
                    data: [65, 59, 80, 81, 56, 55, 40],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(201, 203, 207, 0.2)'
                    ],
                    borderColor: [
                        'rgb(255, 99, 132)',
                        'rgb(255, 159, 64)',
                        'rgb(255, 205, 86)',
                        'rgb(75, 192, 192)',
                        'rgb(54, 162, 235)',
                        'rgb(153, 102, 255)',
                        'rgb(201, 203, 207)'
                    ],
                    borderWidth: 1
                }]
            };

            const config2 = {
                type: 'bar',
                data: data2,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            };

            // Render the second chart
            const myChart2 = new Chart(
                document.getElementById('myChart2'),
                config2

            );
            //add calendar (from FullCalendar)

            document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: [
                    @foreach($meets as $meet)
                    {
                        title: '{{ $meet->title }}',
                        start: '{{ $meet->date }}T{{ $meet->time }}',
                        backgroundColor: '#F72798',
                        borderColor: '#F72798',
                    },
                    @endforeach
                ],
                eventClick: function(info) {
                    // Set the modal title and body content
                    document.getElementById('modalEventTitle').textContent = info.event.title;
                    document.getElementById('modalEventDate').textContent = info.event.start.toISOString().split('T')[0];
                    document.getElementById('modalEventTime').textContent = info.event.start.toLocaleTimeString();

                    // Show the modal
                    var myModal = new bootstrap.Modal(document.getElementById('eventModal'), {
                        keyboard: false
                    });
                    myModal.show();
                }
            });
            calendar.render();
        });
/*an i get the pop up on the calendar? like the event details appears on a box on the calendar not vertically at left :         <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="eventModalLabel">Event Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Title:</strong> <span id="modalEventTitle"></span></p>
                        <p><strong>Date:</strong> <span id="modalEventDate"></span></p>
                        <p><strong>Time:</strong> <span id="modalEventTime"></span></p>
                    </div>
                </div>
            </div>
        </div>
          document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: [
                    @foreach($meets as $meet)
                    {
                        title: '{{ $meet->title }}',
                        start: '{{ $meet->date }}T{{ $meet->time }}',
                        backgroundColor: '#F72798',
                        borderColor: '#F72798',
                    },
                    @endforeach
                ],
                eventClick: function(info) {
                    // Set the modal title and body content
                    document.getElementById('modalEventTitle').textContent = info.event.title;
                    document.getElementById('modalEventDate').textContent = info.event.start.toISOString().split('T')[0];
                    document.getElementById('modalEventTime').textContent = info.event.start.toLocaleTimeString();

                    // Show the modal
                    var myModal = new bootstrap.Modal(document.getElementById('eventModal'), {
                        keyboard: false
                    });
                    myModal.show();
                }
            });
            calendar.render();
        });*/

    </script>
    @endsection
</body>
</html>
