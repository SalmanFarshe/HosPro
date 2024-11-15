<?php
    $activePage = 'packages';
    require_once("../backend/controller/admin-mood.php");
    require_once("../backend/config/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages | HosPro</title>
    <?php require_once('../src/components/links.php'); ?>
    <link rel="stylesheet" href="../assets/css/package.css">
</head>
<body>
    <div class="dashboard">
        <?php require_once('../src/components/sidenav.php'); ?>
        <div class="dashboard-app">
            <div class="container">
                <div class="row w-100 justify-content-center align-items-center">
                    <div class="col-md-10">
                        <p class="display-6">Welcome to Package Manager</p>
                    </div>
                    <div class="col-md-2">
                        <!-- Button to Open the Main Package Modal -->
                        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addPackageModal">
                            Add Package
                        </button>
                    </div>
                </div>
            </div>
            <?php require_once('../src/modals/pkg/pkg-type.php'); ?>
            <?php require_once('../src/modals/pkg/pkg-type-select.php'); ?>
            <?php require_once('../src/modals/pkg/pkg-add-room.php'); ?>
            <?php require_once('../src/modals/pkg/pkg-add-food.php'); ?>
            <!-- list of packages -->
            <div class="container my-4">
                <div class="row">
                    <div class="col-md-6">
                        <?php require_once('../src/components/pkg-list-room.php'); ?>
                    </div>
                    <div class="col-md-6">
                        <?php require_once('../src/components/pkg-list-food.php'); ?>
                    </div>
                </div>
            </div>
            <?php require_once('../src/modals/pkg/pkg-view-room.php'); ?>
            <?php require_once("../src/modals/pkg/pkg-edit-room.php"); ?>
            <?php require_once("../src/modals/pkg/pkg-edit-food.php"); ?>
            <?php require_once("../src/modals/pkg/pkg-view-food.php"); ?>
        </div>
    </div>
    <script src="../assets/js/app.js"></script>
</body>
</html>