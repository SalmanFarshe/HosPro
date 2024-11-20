<?php
    require_once("../backend/controller/user-mood.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard | HosPro</title>
    <?php require_once('../src/components/links.php'); ?>
    <link rel="stylesheet" href="../assets/css/customize.css">
    <link rel="stylesheet" href="../assets/css/billandpayment.css">
    <link rel="stylesheet" href="../assets/css/dash.css">
</head>
<body>
    <div class="dashboard align-items-center justify-content-center">
        <div>
            <div class="container mt-5">
                <div class="row customiser_wrapper justify-items-center card-bg-glass">
                    <!-- Vertical Tabs Navigation -->
                    <div class="col-md-3 pt-3 customiser_nav_wrapper">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-profile" type="button" role="tab"
                                aria-controls="v-pills-profile" aria-selected="true">
                                User Profile
                            </button>
                            <button class="nav-link" id="v-pills-general-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-general" type="button" role="tab"
                                aria-controls="v-pills-general" aria-selected="false">
                                General Info
                            </button>
                            <button class="nav-link" id="v-pills-password-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-password" type="button" role="tab"
                                aria-controls="v-pills-password" aria-selected="false">
                                Password & Email
                            </button>
                            <button class="nav-link" id="v-pills-bookings-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-bookings" type="button" role="tab" aria-controls="v-pills-bookings"
                                aria-selected="false">
                                My Bookings
                            </button>
                            <button class="nav-link" id="v-pills-payments-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-payments" type="button" role="tab"
                                aria-controls="v-pills-payments" aria-selected="false">
                                My Payments
                            </button>
                            <div class="nav-item-divider"></div>

                            <a href="user-log-out.php" class="dashboard-nav-item text-light" style="text-decoration: none;">
                                <i class="fas fa-sign-out-alt"></i>
                                Logout
                            </a>
                        </div>
                    </div>
                    <!-- Tab Content -->
                    <div class="col-md-9">
                        <div class="tab-content" id="v-pills-tabContent">
                            <!-- Profile Tab -->
                            <div class="tab-pane p-2 fade show active" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                <h4 class="text-center pb-5">My Profile</h4>
                                <div class="row mx-auto">
                                    <div class="col-md-4">
                                        <img src="../../../01.HosPro/assets/img/Dark-Logo_HosPro.png" alt="User Photo"
                                            class="img-fluid rounded">
                                    </div>
                                    <div class="col-md-8">
                                        <h3>John Doe</h3>
                                        <p><strong>Phone:</strong> +880 1234567890</p>
                                        <p><strong>Address:</strong> Ashulia,Savar,Dhaka</p>
                                        <p><strong>Booking Date:</strong> January 1, 2020</p>
                                        <p><strong>Status</strong> Present </p>
                                    </div>
                                </div>
                            </div>
                            <!-- User Info Tab -->
                            <div class="tab-pane p-2 fade show" id="v-pills-general" role="tabpanel"
                                aria-labelledby="v-pills-general-tab">
                                <h4>My General Information</h4>
                                <form>
                                    <div class="mb-3">
                                        <label for="userName" class="frm-label form-label">User Name</label>
                                        <input type="text" class="frm-input form-control" id="userName" value="John Doe" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="userPhone" class="frm-label form-label">Phone</label>
                                        <input type="text" class="frm-input form-control" id="userPhone" value="+880 1234567890" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="userAddress" class="frm-label form-label">Address</label>
                                        <input type="text" class="frm-input form-control" id="userAddress" value="Ashulia,Savar,Dhaka" required>
                                    </div>
                                    <button type="submit" class="button w-100">
                                        <a href="" class="button_link">
                                            Changes Update!
                                        </a>
                                    </button>
                                </form>
                            </div>
                            <!-- Password & Email Update Tab -->
                            <div class="tab-pane p-2 fade" id="v-pills-password" role="tabpanel"
                                aria-labelledby="v-pills-password-tab">
                                <h4>Update Password & Email</h4>
                                <form>
                                    <div class="mb-3">
                                        <label for="adminEmail" class="frm-label form-label">Email | Phone</label>
                                        <input type="text" class="frm-input form-control" id="adminEmail"
                                            placeholder="Enter new email or new phone no." value="jhon@gmail.com | 01">
                                    </div>
                                    <div class="mb-3">
                                        <label for="newPassword" class="frm-label form-label">New Password</label>
                                        <input type="password" class="frm-input form-control" id="newPassword"
                                            placeholder="Enter new password">
                                    </div>
                                    <div class="mb-3">
                                        <label for="confirmPassword" class="frm-label form-label">Confirm
                                            Password</label>
                                        <input type="password" class="frm-input form-control" id="confirmPassword"
                                            placeholder="Confirm new password">
                                    </div>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#checkPassModal">Update Password & Email</button>
                                </form>
                            </div>
                            <!-- User Bookings Tab -->
                            <div class="tab-pane p-2 fade" id="v-pills-bookings" role="tabpanel"
                                aria-labelledby="v-pills-bookings-tab">
                                <h4>My Bookings</h4>
                                <!-- search payments -->
                                <form class="" action="your-server-side-script" method="GET">
                                    <label for="search">Search All the payments:</label>
                                    <br>
                                    <input type="text" class="search-pmnt" id="search" name="search" value="">
                                    <input type="submit" class="button" value="Search">
                                </form>
                                <!-- payments table -->
                                <div class="table-responsive">
                                    <?php require_once("../src/components/list-u-bookings.php"); ?>
                                </div>
                                <!-- payments pagination -->
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
                            <!-- User Payments Tab -->
                            <div class="tab-pane p-2 fade" id="v-pills-payments" role="tabpanel"
                                aria-labelledby="v-pills-payments-tab">
                                <h4>My Payments</h4>
                                <!-- search payments -->
                                <form class="" action="your-server-side-script" method="GET">
                                    <label for="search">Search All the payments:</label>
                                    <br>
                                    <input type="text" class="search-pmnt" id="search" name="search" value="">
                                    <input type="submit" class="button" value="Search">
                                </form>
                                <!-- payments table -->
                                <div class="table-responsive">
                                    <?php require_once("../src/components/list-u-payment.php"); ?>
                                </div>
                                <!-- payments pagination -->
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
                </div>
            </div>
            <!-- User delete Modal -->
            <?php require_once("../src/modals/check-password.php"); ?>
        </div>
    </div>
    <script src="../assets/js/chart.js"></script>
</body
</html>