<?php
    $activePage = 'room-mapping';
    require_once("../backend/controller/admin-mood.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages | HosPro</title>
    <?php require_once('../src/components/links.php'); ?>
    <link rel="stylesheet" href="../assets/css/room-mapping.css">
</head>
<body>
    <div class="dashboard">
        <?php require_once('../src/components/sidenav.php'); ?>
        <div class="dashboard-app">
            <div class="container">
                <!-- Add Room Button -->
                <div class="row">
                    <div class="col-6">
                        <h3>Room Mapping</h3>
                    </div>
                    <div class="col-6">
                        <button type="button" class="button float-end" data-bs-toggle="modal" data-bs-target="#addRoomModal">
                            <a href="#" class="button_link">Add New Room</a>
                        </button>
                    </div>
                </div>

                <!-- Floor Section -->
                <?php 
                    $floors = [1, 2, 3, 4, 5];
                    foreach ($floors as $floor) {
                        include("../src/components/floor.php");
                    }
                ?>

                <?php require_once("../src/modals/room-details.php"); ?>
                <?php require_once("../src/modals/add-room.php"); ?>
            </div>
        </div>
    </div>
    <script src="../assets/js/app.js"></script>
</body>
</html>
