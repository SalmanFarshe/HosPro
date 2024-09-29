<!DOCTYPE html>
<html lang="en">

<head>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bill & Payments | HosPro</title>
    <link rel="stylesheet" href="../assets/css/dash.css">

    <style>
    .container {
        width: 100%;
        margin: 0 auto;
    }

    /* Table Styles */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    th {
        background-color: #f2f2f2;
    }

    /* Pagination Styles */
    .pagination {
        margin-top: 20px;
        text-align: center;
    }

    .pagination a {
        margin: 0 5px;
        text-decoration: none;
        padding: 8px 16px;
        border: 1px solid #ddd;
        color: #333;
        display: inline-block;
    }

    .pagination a.active {
        background-color: #4CAF50;
        color: white;
        border: 1px solid #4CAF50;
    }

    .pagination a:hover {
        background-color: #ddd;
    }

    /* Responsive Design */
    .table-container {
        width: 100%;
        overflow-x: auto;
        /* Horizontal scroll on smaller screens */
    }

    .box {
        float: right;
    }
    </style>
</head>

<body>


    <section>
        <!-- Side Nav -->
        <!-- <div class="dashboard-nav">
            <header>
                <a href="#" class="brand-logo" style="text-decoration: none;">
                    <i class="fa-solid fa-hotel"></i> <span>HosPro</span>
                </a>
            </header>
            <nav class="dashboard-nav-list">
                <a href="#" class="dashboard-nav-item">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard
                </a>
                <a href="#" class="dashboard-nav-item">
                    <i class="fa-solid fa-bed"></i>
                    Room Mapping
                </a>
                <a href="#" class="dashboard-nav-item">
                    <i class="fa-solid fa-user-tie"></i>
                    Employee
                </a>
                <a href="#" class="dashboard-nav-item">
                    <i class="fa-solid fa-calendar-days"></i>
                    Events Mapping
                </a>
                <a href="#" class="dashboard-nav-item">
                    <i class="fa-solid fa-users"></i>
                    All Users
                </a>
                <a href="#" class="dashboard-nav-item">
                    <i class="fa-solid fa-clipboard-list"></i>
                    Packages
                </a>
                <a href="#" class="dashboard-nav-item active">
                    <i class="fa-regular fa-credit-card"></i>
                    Bill & Payments
                </a>
                <a href="#" class="dashboard-nav-item">
                    <i class="fa-solid fa-chart-pie"></i>
                    Total Costing
                </a>

                <div class="nav-item-divider"></div>

                <a href="#" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Logout </a>
            </nav>
        </div> -->

        <!-- Bill & Payments  -->
        <div>
            <div class="row">
                <div class="col-6">
                    <form class="box my-4" action="your-server-side-script" method="GET">
                        <label for="search">Search:</label>
                        <input type="text" id="search" name="search" value="">
                        <input type="submit" value="Search">
                    </form>


                    <div class="table-container">

                        <table>
                            <thead>
                                <tr>
                                    <th>Payments ID</th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone No.</th>
                                    <!-- <th>Booking Id</th> -->
                                    <th>Due</th>
                                    <th>Paid</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1011</td>
                                    <td>1</td>
                                    <td>Air John Doe</td>
                                    <td>Air_john@gmail.com</td>
                                    <td>01234567890</td>
                                    <!-- <td>000101</td> -->
                                    <td>1500 </td>
                                    <td>1500 </td>
                                    <td>3000 </td>
                                </tr>
                                <tr>
                                    <td>1012</td>
                                    <td>2</td>
                                    <td>Bir John Doe</td>
                                    <td>Bir_john@gmail.com</td>
                                    <td>01234567890</td>
                                    <!-- <td>000101</td> -->
                                    <td>1500 </td>
                                    <td>1500 </td>
                                    <td>3000 </td>
                                </tr>
                                <tr>
                                    <td>1013</td>
                                    <td>3</td>
                                    <td>Cir John Doe</td>
                                    <td>Cir_john@gmail.com</td>
                                    <td>01234567890</td>
                                    <!-- <td>000101</td> -->
                                    <td>1500 </td>
                                    <td>1500 </td>
                                    <td>3000 </td>
                                </tr>
                                <tr>
                                    <td>1014</td>
                                    <td>4</td>
                                    <td>Dir John Doe</td>
                                    <td>Dir_john@gmail.com</td>
                                    <td>01234567890</td>
                                    <!-- <td>000101</td> -->
                                    <td>1500 </td>
                                    <td>1500 </td>
                                    <td>3000 </td>
                                </tr>
                                <tr>
                                    <td>1015</td>
                                    <td>5</td>
                                    <td>John Doe</td>
                                    <td>john@gmail.com</td>
                                    <td>01234567890</td>
                                    <!-- <td>000101</td> -->
                                    <td>1500 </td>
                                    <td>1500 </td>
                                    <td>3000 </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>


                    <div class="pagination box mb-4">
                        <a href="?page=1" class="active">1</a>
                        <a href="?page=2">2</a>
                        <a href="?page=3">3</a>
                        <a href="?page=4">4</a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="col">
                        <div class="card my-3">
                            <canvas id="myBarChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <form class="box my-4" action="your-server-side-script" method="GET">
                        <label for="search">Search:</label>
                        <input type="text" id="search" name="search" value="">
                        <input type="submit" value="Search">
                    </form>


                    <div class="table-container">

                        <table>
                            <thead>
                                <tr>
                                    <th>Bill ID</th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone No.</th>
                                    <!-- <th>Booking Id</th> -->
                                    <th>Due</th>
                                    <th>Paid</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1011</td>
                                    <td>1</td>
                                    <td>Air John Doe</td>
                                    <td>Air_john@gmail.com</td>
                                    <td>01234567890</td>
                                    <!-- <td>000101</td> -->
                                    <td>1500 </td>
                                    <td>1500 </td>
                                    <td>3000 </td>
                                </tr>
                                <tr>
                                    <td>1012</td>
                                    <td>2</td>
                                    <td>Bir John Doe</td>
                                    <td>Bir_john@gmail.com</td>
                                    <td>01234567890</td>
                                    <!-- <td>000101</td> -->
                                    <td>1500 </td>
                                    <td>1500 </td>
                                    <td>3000 </td>
                                </tr>
                                <tr>
                                    <td>1013</td>
                                    <td>3</td>
                                    <td>Cir John Doe</td>
                                    <td>Cir_john@gmail.com</td>
                                    <td>01234567890</td>
                                    <!-- <td>000101</td> -->
                                    <td>1500 </td>
                                    <td>1500 </td>
                                    <td>3000 </td>
                                </tr>
                                <tr>
                                    <td>1014</td>
                                    <td>4</td>
                                    <td>Dir John Doe</td>
                                    <td>Dir_john@gmail.com</td>
                                    <td>01234567890</td>
                                    <!-- <td>000101</td> -->
                                    <td>1500 </td>
                                    <td>1500 </td>
                                    <td>3000 </td>
                                </tr>
                                <tr>
                                    <td>1015</td>
                                    <td>5</td>
                                    <td>John Doe</td>
                                    <td>john@gmail.com</td>
                                    <td>01234567890</td>
                                    <!-- <td>000101</td> -->
                                    <td>1500 </td>
                                    <td>1500 </td>
                                    <td>3000 </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>


                    <div class="pagination box mb-4">
                        <a href="?page=1" class="active">1</a>
                        <a href="?page=2">2</a>
                        <a href="?page=3">3</a>
                        <a href="?page=4">4</a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="col">
                        <div class="card my-3">
                            <!-- Pie chart will be rendered on this canvas -->
                            <canvas id="myPieChart" class="card-img-top" width="400" height="200"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        // bar chart
        var ctx = document.getElementById('myBarChart').getContext('2d');
        var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August'],
                datasets: [{
                    label: 'Get Payments',
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

        // pie chart 
        var ctx = document.getElementById('myPieChart').getContext('2d');
        var myPieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Apples', 'Bananas', 'Cherries'],
                datasets: [{
                    label: 'Total Bills',
                    data: [30, 20, 50],
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
                    hoverOffset: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
            }
        });
    </script>
</body>

</html>