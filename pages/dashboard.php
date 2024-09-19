<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | HosPro</title>
    <link rel="stylesheet" href="../assets/css/dash.css">
    <?php require_once('../public/links.php'); ?>
</head>
<body>
    <div class='dashboard'>
        <?php require_once('../public/sidenav.php'); ?>
        <!-- Content -->
        <div class='dashboard-app'>
            <div class='dashboard-content'>
                <div class=''>
                    <div class='card'>
                        <div class='card-header'>
                            <h1>Welcome Back Mr.Salman F Zihad</h1>
                        </div>
                        <div class='card-body'>
                            <p>Your account type is: <b>
                                    Administrator
                                </b></p>
                        </div>
                    </div>
                </div>

                <!-- Sub Content -->
                <h1 class="my-3"># Overview</h1>

                <div class="row">

                    <div class="col-4">
                        <div class="row row-cols-1 row-cols-sm-1 row-cols-lg-2 g-3 ">

                            <div class="col">
                                <div class="card text-bg-light my-3" style="max-width: 25rem; max-height: 25rem;">
                                    <div class="card-header fw-bold">All Users</div>
                                    <div class="card-header fw-bold">
                                        <i class="fa-solid fa-users border border-2 py-4 px-4 my-4 rounded-circle"
                                            style="font-size: 50px; "></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-bg-light my-3" style="max-width: 25rem;">
                                    <div class="card-header fw-bold">Room Maping</div>
                                    <div class="card-body text-center">
                                        <i class="fa-solid fa-bed border border-2 py-4 px-4 m-3 rounded-circle"
                                            style="font-size: 50px; "></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-bg-light my-3" style="max-width: 25rem;">
                                    <div class="card-header fw-bold ">Food Packages</div>
                                    <div class="card-body text-center">
                                        <i class="fa-solid fa-utensils border border-2 py-4 px-4 m-3 rounded-circle"
                                            style="font-size: 50px; "></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-bg-light my-3" style="max-width: 25rem;">
                                    <div class="card-header fw-bold">Room Packages</div>
                                    <div class="card-body text-center">
                                        <i class="fa-solid fa-tents border border-2 py-4 px-4 m-3 rounded-circle"
                                            style="font-size: 50px; "></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-bg-light my-3" style="max-width: 25rem;">
                                    <div class="card-header fw-bold">Employee</div>
                                    <div class="card-body text-center">
                                        <i class="fa-solid fa-user-tie border border-2 py-4 px-4 m-3 rounded-circle"
                                            style="font-size: 50px; "></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-bg-light my-3" style="max-width: 25rem;">
                                    <div class="card-header fw-bold">Bill & Payments</div>
                                    <div class="card-body text-center">
                                        <i class="fa-regular fa-credit-card border border-2 py-4 px-4 m-3 rounded-circle"
                                            style="font-size: 50px; "></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-8">

                        <div class="col">
                            <div class="card my-3">
                                <canvas id="myLineChart" class="card-img-top"></canvas>

                            </div>
                        </div>
                        <div class="col">
                            <div class="card my-3">
                                <canvas id="myBarChart"></canvas>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
        
    <script src="../assets/js/chart.js"></script>
    <script src="../assets/js/app.js"></script>
    <script>
        // Line Chart
        document.addEventListener("DOMContentLoaded", function () {
            var ctx = document.getElementById('myLineChart').getContext('2d');

            // Line chart configuration
            var myLineChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                    datasets: [{
                        label: 'Total Costing',
                        data: [10, 20, 30, 25, 15, 40],
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 2
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });

        // Bar Chart
        var ctx = document.getElementById('myBarChart').getContext('2d');
        var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July','August'],
                datasets: [{
                    label: 'Users Booking',
                    data: [35, 65, 30, 41, 29, 45, 40, 45],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(201, 203, 207, 0.2)'
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(201, 203, 207, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

</body>

</html>