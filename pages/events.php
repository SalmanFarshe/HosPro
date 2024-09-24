<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events | HosPro</title>
    <?php require_once('../src/components/links.php'); ?>
    <link rel="stylesheet" href="../assets/css/employee.css">
</head>
<body>
    <div class="dashboard">
        <?php require_once('../src/components/sidenav.php'); ?>
        <div class="dashboard-app">
            <div class="container">
                <!-- Header with Add New Employee Button -->
                <div class="d-flex justify-content-center mb-4">
                    <h2>Employee Management</h2>
                </div>
                <!-- Search and Filter Section -->
                <div class="row mb-4 align-items-center justify-content-between">
                    <div class="col-md-5">
                        <select class="form-select select-pos" id="filterPosition">
                            <option selected>Filter by Position</option>
                            <option value="Manager">Manager</option>
                            <option value="Receptionist">Receptionist</option>
                            <option value="Housekeeping">Housekeeping</option>
                        </select>
                    </div>
                    <div class="col-md-5">
                        <input type="text" class="form-control search-emp" placeholder="Search Employee" id="searchEmployee">
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="button float-end" data-bs-toggle="modal" data-bs-target="#addEmployeeModal">
                            <a href="#" class="button_link">
                                Add New
                            </a>
                        </button>
                    </div>
                </div>

                <!-- Employee List Table -->
                <div class="table-responsive">
                    <?php require_once("../public/components/list-employee.php"); ?>
                </div>
            </div>

            <!-- Add Employee Modal -->
            <?php require_once("../public/modals/add-employee.php"); ?>
            

        </div>
    </div>
    <script src="../assets/js/app.js"></script>
</body>
</html>