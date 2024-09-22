<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emploee | HosPro</title>
    <?php require_once('../public/links.php'); ?>
</head>
<body>
    <div class="dashboard">
        <?php require_once('../public/sidenav.php'); ?>
        <div class="dashboard-app">
            <div class="container mt-5">
                <!-- Header with Add New Employee Button -->
                <div class="d-flex justify-content-between mb-4">
                    <h2>Employee Management</h2>
                    <button type="button" class="button" data-bs-toggle="modal" data-bs-target="#addEmployeeModal">
                        <a href="#" class="button_link">
                            Add New Employee
                        </a>
                    </button>
                </div>

                <!-- Search and Filter Section -->
                <div class="row mb-4">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Search Employee" id="searchEmployee">
                    </div>
                    <div class="col-md-4">
                        <select class="form-select" id="filterPosition">
                            <option selected>Filter by Position</option>
                            <option value="Manager">Manager</option>
                            <option value="Receptionist">Receptionist</option>
                            <option value="Housekeeping">Housekeeping</option>
                        </select>
                    </div>
                </div>

                <!-- Employee List Table -->
                <div class="table-responsive">
                    <?php require_once("../public/components/list-employee.php"); ?>
                </div>
            </div>

            <!-- Add Employee Modal -->
            <?php require_once("../public/modals/add-employee.php"); ?>
            
            <!-- Edit Employee Modal -->
            <?php require_once("../public/modals/edit-employee.php"); ?>
            

            <!-- View Employee Profile Modal -->
            <?php require_once("../public/modals/view-employee.php"); ?>
            
            <!-- Employee Performance Review Modal -->
            <?php require_once("../public/modals/review-employee.php"); ?>
            

        </div>
    </div>
    <script src="../assets/js/app.js"></script>
</body>
</html>