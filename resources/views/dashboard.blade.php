<!-- resources/views/dashboard.blade.php -->

@extends('layouts.base')

@section('title', 'Dashboard')

@section('content')
<style>
    body {
        color: black;
    }
    .dashboard-summary {
        display: flex;
        justify-content: space-around;
        margin-bottom: 20px;
        border-bottom: 1px solid #ddd;
        padding-bottom: 20px;
    }
    .summary-card {
        text-align: center;
        padding: 20px;
        background: #f5f5f5;
        border-radius: 8px;
        width: 15%;
        color: black;
        border: 1px solid #ddd;
    }
    .section {
        margin: 20px;
        padding: 20px;
        background: #f5f5f5;
        border-radius: 8px;
        border: 1px solid #ddd;
        color: black;
    }
    .section-header {
        border-bottom: 1px solid #ddd;
        padding-bottom: 10px;
        margin-bottom: 20px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #f2f2f2;
    }
    button {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 5px;
    }
    button:hover {
        background-color: #0056b3;
    }
    .chart {
        height: 400px;
        width: 400px;
    }
</style>

<div class="dashboard-summary section">
    <div class="summary-card">
        <h3>{{ $countvehicules }}</h3>
        <p>Vehicles</p>
    </div>
    <div class="summary-card">
        <h3>{{ $countchauffeurs }}</h3>
        <p>Drivers</p>
    </div>
    <div class="summary-card">
        <h3>{{ $countcarburants }} DHs</h3>
        <p>Fuel</p>
    </div>
    <div class="summary-card">
        <h3> {{ $countmaintenance }}DHs</h3>
        <p>Maintenance</p>
    </div>
</div>

{{-- <div class="activity-logs section">
    <h3 class="section-header">Recent Activity Logs</h3>
    <table>
        <thead>
            <tr>
                <th>Timestamp</th>
                <th>User</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2024-06-20 12:34:56</td>
                <td>Admin</td>
                <td>Added a new vehicle</td>
            </tr>
            <tr>
                <td>2024-06-19 10:22:45</td>
                <td>User1</td>
                <td>Updated driver information</td>
            </tr>
            <!-- Add more logs as needed -->
        </tbody>
    </table>
</div> --}}

<div class="services section">
    <h3 class="section-header">chart</h3>
    <div id="chart" class="chart"></div>
</div>
@endsection

@section('scripts')

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var options = {
            chart: {
                type: 'donut',
                height: 400,
                width: 400
            },
            series: [{{ $countcarburants }}, {{ $countmaintenance }}, {{ $countvehicules }}, {{ $countchauffeurs }}], // Data from PHP variables
            labels: ['Fuel', 'Maintenance', 'Vehicle', 'Drivers'],
            colors: ['#1E88E5', '#D32F2F', '#FFB300', '#43A047'],
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 300,
                        height: 300
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);

        chart.render();
    });
</script>

{{-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        var options = {
            chart: {
                type: 'donut',
                height: 400,  // Adjust the height here
                width: 400    // Adjust the width here
            },
            series: [40, 30, 20, 10], // Example data
            labels: ['Fuel', 'Maintenance', 'Vehicle', 'drivers'],
            colors: ['#1E88E5', '#D32F2F', '#FFB300', '#43A047'], // More modern colors
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 300,
                        height: 300
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);

        chart.render();
    });
</script> --}}

@endsection
