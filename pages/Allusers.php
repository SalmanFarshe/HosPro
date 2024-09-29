<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emploee | HosPro</title>
    <?php require_once('../src/components/links.php'); ?>
    <link rel="stylesheet" href="../assets/css/alluser.css">
</head>
<body>
    <div class="dashboard">
        <?php require_once('../src/components/sidenav.php'); ?>
        <div class="dashboard-app">          
            <div>
                <!-- search users -->
                <form class="" action="your-server-side-script" method="GET">
                    <label for="search">Search All the users:</label>
                    <br>
                    <input type="text" class="search-usr" id="search" name="search" value="">
                    <input type="submit" class="button" value="Search">
                </form>
                <!-- user list -->
                <div class="table-container">
                    <?php require_once("../src/components/list-user.php"); ?>
                </div>
                <!-- user list pagination -->
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
        </div>
    </div>
</body>
</html>