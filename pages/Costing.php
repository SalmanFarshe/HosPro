<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emploee | HosPro</title>
    <?php require_once('../src/components/links.php'); ?>
    <link rel="stylesheet" href="../assets/css/billandpayment.css">
</head>
<body>
    <div class="dashboard">
        <?php require_once('../src/components/sidenav.php'); ?>
        <div class="dashboard-app">
            <!-- Payments list  -->             
                <!-- bills list -->
                <div class="row mt-5">
                    <div class="col-sm-12 col-lg-8">
                        <!-- search bills -->
                        <form class="" action="your-server-side-script" method="GET">
                            <label for="search">Search all bills:</label>
                            <br>
                            <input type="text" class="search-bill" id="search" name="search" value="">
                            <input type="submit" value="Search" class="button">
                        </form>


                        <div class="table-container">
                            <!-- bills table -->
                            <?php require_once("../src/components/list-cost.php"); ?>
                        </div>
                        <!-- bills pagination -->
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item">
                                <a class="page-link text-white bg-glass" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                                </li>
                                <li class="page-item"><a class="page-link text-white active bg-glass" href="#">1</a></li>
                                <li class="page-item"><a class="page-link text-white bg-glass" href="#">2</a></li>
                                <li class="page-item"><a class="page-link text-white bg-glass" href="#">3</a></li>
                                <li class="page-item">
                                <a class="page-link text-white bg-glass" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <div class="col">
                            <div class="card-bg-glass my-3">
                                <!-- Pie chart will be rendered on this canvas -->
                                <canvas id="myPieChart" class="card-img-top" width="400" height="200"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <script src="../assets/js/chart.js"></script>
    <script>
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