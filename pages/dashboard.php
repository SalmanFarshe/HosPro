<?php
    $activePage = 'dashboard';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | HosPro</title>
    <link rel="stylesheet" href="../assets/css/dash.css">
    <?php require_once('../src/components/links.php'); ?>
</head>
<body>
    <div class='dashboard'>
        <?php require_once('../src/components/sidenav.php'); ?>
        <!-- Content -->
        <div class='dashboard-app'>
            <div class='dashboard-content'>
                <!-- Sub Content -->
                <div class="row">
                    <div class="col-4">
                        <div class="row row-cols-1 row-cols-sm-1 row-cols-lg-2 g-3 ">
                            <div class="col">
                                <div class="card card-bg-glass my-3" style="max-width: 25rem; max-height: 25rem;">
                                    <div class="card-header fw-bold">All Users</div>
                                    <div class="card-header fw-bold">
                                        <i class="fa-solid fa-users border border-2 py-4 px-4 my-4 rounded-circle"
                                            style="font-size: 50px; "></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card card-bg-glass my-3" style="max-width: 25rem;">
                                    <div class="card-header fw-bold">Room Maping</div>
                                    <div class="card-body text-center">
                                        <i class="fa-solid fa-bed border border-2 py-4 px-4 m-3 rounded-circle"
                                            style="font-size: 50px; "></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card card-bg-glass my-3" style="max-width: 25rem;">
                                    <div class="card-header fw-bold ">Food Packages</div>
                                    <div class="card-body text-center">
                                        <i class="fa-solid fa-utensils border border-2 py-4 px-4 m-3 rounded-circle"
                                            style="font-size: 50px; "></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card card-bg-glass my-3" style="max-width: 25rem;">
                                    <div class="card-header fw-bold">Room Packages</div>
                                    <div class="card-body text-center">
                                        <i class="fa-solid fa-tents border border-2 py-4 px-4 m-3 rounded-circle"
                                            style="font-size: 50px; "></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card card-bg-glass my-3" style="max-width: 25rem;">
                                    <div class="card-header fw-bold">Employee</div>
                                    <div class="card-body text-center">
                                        <i class="fa-solid fa-user-tie border border-2 py-4 px-4 m-3 rounded-circle"
                                            style="font-size: 50px; "></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card card-bg-glass my-3" style="max-width: 25rem;">
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
                            <div class="card card-bg-glass my-3">
                                <canvas id="myLineChart" class="card-img-top"></canvas>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-bg-glass my-3">
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
</body>
</html>