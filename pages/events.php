<?php
    $activePage = 'events';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events | HosPro</title>
    <?php require_once('../src/components/links.php'); ?>
    <link rel="stylesheet" href="../assets/css/events.css">
</head>
<body>
    <div class="dashboard">
        <?php require_once('../src/components/sidenav.php'); ?>
        <div class="dashboard-app">
            <div class="container">
                <div class="d-flex justify-content-center mb-4">
                    <h2>Events Management</h2>
                </div>
                <div class="row mt-4 align-items-center">
                    <div class="col-md-3">
                        <input type="text" class="form-control search-event" placeholder="Search events..." id="searchEvent">
                    </div>
                    <div class="col-md-3">
                        <select class="form-select select-cat" id="filterCategory">
                            <option value="">All Categories</option>
                            <option value="conference">Conference</option>
                            <option value="workshop">Workshop</option>
                            <option value="seminar">Seminar</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select select-sts" id="filterStatus">
                            <option value="">All Status</option>
                            <option value="upcoming">Upcoming</option>
                            <option value="ongoing">Ongoing</option>
                            <option value="completed">Completed</option>
                        </select>
                    </div>
                    <div class="col-md-3 text-end">
                        <button class="button w-100" data-bs-toggle="modal" data-bs-target="#addEventModal">
                            <a href="#" class="button_link">
                                Add Event
                            </a>
                        </button>
                    </div>
                </div>
                <!-- Event List -->
                <?php require_once("../src/components/event-list.php"); ?>
            </div>
                <!-- Add Event Modal -->
                <?php require_once("../src/modals/add-event.php"); ?>
                <!-- Edit Event Modal -->
                <?php require_once("../src/modals/edit-event.php"); ?>
                <!-- Delete Event -->
                <?php require_once("../src/modals/check-password.php"); ?>
                <!-- Event Details -->
                <?php require_once("../src/modals/event-details.php"); ?>
            </div>
        </div>
    </div>
    <script src="../assets/js/app.js"></script>
</body>
</html>