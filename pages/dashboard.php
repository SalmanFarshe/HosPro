<?php
    $activePage = 'dashboard';
    require_once("../backend/controller/admin-mood.php");
    require_once("../backend/config/config.php");

    // Fetch data counts from the database
    $queries = [
        'all_users' => "SELECT COUNT(*) AS count FROM user_details",
        'room_mapping' => "SELECT COUNT(*) AS count FROM room_details",
        'employees' => "SELECT COUNT(*) AS count FROM employee_details",
        'food_packages' => "SELECT COUNT(*) AS count FROM food_package_details",
        'room_packages' => "SELECT COUNT(*) AS count FROM room_package_details",
        'bill_payments' => "SELECT SUM(event_amount) AS total FROM events_details"
    ];

    $stats = [];
    foreach ($queries as $key => $query) {
        $result = mysqli_query($connection, $query);
        $data = mysqli_fetch_assoc($result);
        $stats[$key] = $data['count'] ?? ($data['total'] ?? 0); // Handles count or sum
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | HosPro</title>
    <link rel="stylesheet" href="../assets/css/dash.css">
    <?php require_once('../src/components/links.php'); ?>
    <style>
        body {
            font-family: var(--main-font);
            background-color: var(--background-color);
            color: var(--text-color);
        }

        .dashboard {
            display: flex;
            min-height: 100vh;
        }

        .dashboard-app {
            flex-grow: 1;
            padding: 20px;
        }

        .card {
            border: none;
            border-radius: 10px;
            padding: 20px;
            background-color: var(--card-background-color);
            box-shadow: 0 8px 32px var(--box-shadow-color);
            color: var(--text-color-light);
            transition: transform 0.3s, background 0.3s;
        }

        .card.card-bg-glass {
            background: rgba(112, 185, 207, 0.2);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h5, .card i {
            color: var(--primary-color);
        }

        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .charts-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .chart-card {
            flex: 1 1 calc(50% - 20px);
            padding: 20px;
            background: rgba(112, 185, 207, 0.2);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-radius: 10px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.37);
            border: 1px solid rgba(255, 255, 255, 0.18);
            color: var(--text-color-light);
        }

        .chart-card h5 {
            color: var(--primary-color);
        }
    </style>
</head>

<body>
    <div class="dashboard">
        <?php require_once('../src/components/sidenav.php'); ?>
        <div class="dashboard-app">
            <div class="dashboard-content">
                <div class="container">
                    <h1 class="mb-4">Dashboard Overview</h1>
                    <!-- Card Grid -->
                    <div class="card-grid">
                        <?php
                        $cards = [
                            ['title' => 'All Users', 'icon' => 'fa-users', 'count' => $stats['all_users'], 'link' => '../pages/allusers.php'],
                            ['title' => 'Room Mapping', 'icon' => 'fa-bed', 'count' => $stats['room_mapping'], 'link' => '../pages/room-mapping.php'],
                            ['title' => 'Food Packages', 'icon' => 'fa-utensils', 'count' => $stats['food_packages'], 'link' => '../pages/packages.php'],
                            ['title' => 'Room Packages', 'icon' => 'fa-tents', 'count' => $stats['room_packages'], 'link' => '../pages/packages.php'],
                            ['title' => 'Employees', 'icon' => 'fa-user-tie', 'count' => $stats['employees'], 'link' => '../pages/employee.php'],
                            ['title' => 'Total Revenue', 'icon' => 'fa-credit-card', 'count' => '$' . number_format($stats['bill_payments'], 2), 'link' => '../pages/billandpayments.php']
                        ];

                        foreach ($cards as $card) {
                            echo "
                            <a href='{$card['link']}' class='card-link'>
                                <div class='card card-bg-glass text-center'>
                                    <i class='fa-solid {$card['icon']} fa-3x mb-2'></i>
                                    <h5>{$card['count']}</h5>
                                    <p>{$card['title']}</p>
                                </div>
                            </a>";
                        }
                        ?>
                    </div>
                    <!-- Charts Section -->
                    <div class="charts-container mt-5">
                        <div class="chart-card">
                            <h5>Monthly Performance</h5>
                            <!-- <canvas id="myLineChart"></canvas> -->
                        </div>
                        <div class="chart-card">
                            <h5>Category Analysis</h5>
                            <!-- <canvas id="myBarChart"></canvas> -->
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
