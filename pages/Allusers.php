<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All User | HosPro</title>
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
                    <h2>All User Aera</h2>
                </div>
                <!-- Search and Filter Section -->
                <div class="row mb-4 align-items-center justify-content-between">
                    <div class="col-md-5">
                        <select class="form-select select-pos" id="filterPosition">
                            <option selected>Filter by User Status</option>
                            <option value="older">Older</option>
                            <option value="newer">Newer</option>
                        </select>
                    </div>

                    <div class="col-md-5">
                        <input type="text" class="form-control search-emp" placeholder="Search User" id="searchUser">
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="button float-end" data-bs-toggle="modal"
                            data-bs-target="#addUserModal">
                            Add New
                        </button>
                    </div>
                </div>

                <!-- Employee List Table -->
                <div class="table-responsive">
                    <?php require_once("../src/components/list-user.php"); ?>
                </div>
            </div>
            <!-- Add User Modal -->
            <?php require_once("../src/modals/add-employee.php"); ?>
            <!-- Edit User Modal -->
            <?php require_once("../src/modals/edit-employee.php"); ?>
            <!-- View User Profile Modal -->
            <?php require_once("../src/modals/view-employee.php"); ?>
            <!-- User delete Modal -->
            <?php require_once("../src/modals/check-password.php"); ?>
        </div>
    </div>
    <script src="../assets/js/app.js"></script>
</body>

</html>