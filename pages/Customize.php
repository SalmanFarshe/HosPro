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
            <div class="container mt-5">
                <div class="row">
                    <!-- Vertical Tabs Navigation -->
                    <div class="col-md-3 card-bg-glass pt-3">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                            <button class="nav-link active" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="true">
                                Profile
                            </button>

                            <button class="nav-link" id="v-pills-general-tab" data-bs-toggle="pill" data-bs-target="#v-pills-general" type="button" role="tab" aria-controls="v-pills-general" aria-selected="false">
                                General Info
                            </button>

                            <button class="nav-link" id="v-pills-password-tab" data-bs-toggle="pill" data-bs-target="#v-pills-password" type="button" role="tab" aria-controls="v-pills-password" aria-selected="false">
                                Password & Email
                            </button>

                            <button class="nav-link" id="v-pills-logo-tab" data-bs-toggle="pill" data-bs-target="#v-pills-logo" type="button" role="tab" aria-controls="v-pills-logo" aria-selected="false">
                                Logo Update
                            </button>

                            <button class="nav-link" id="v-pills-receptionist-tab" data-bs-toggle="pill" data-bs-target="#v-pills-receptionist" type="button" role="tab" aria-controls="v-pills-receptionist" aria-selected="false">
                                Receptionist Info
                            </button>

                        </div>
                    </div>

                    <!-- Tab Content -->
                    <div class="col-md-9">
                        <div class="tab-content" id="v-pills-tabContent">
                            <!-- Profile Tab -->
                            <div class="tab-pane card-bg-glass p-2 fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <h4>Profile Information</h4>
                                <div class="row">
                                    <div class="col-7">
                                        <h3><strong>Company Name: </strong>HosPro</h3>
                                        <p><strong>Email: </strong> HosPro24/7@gamil.com</p>
                                        <p><strong>Phone: </strong> +880 1234567890</p>
                                        <p><strong>Address: </strong> Ashulia, Savar, Dhaka</p>
                                        <p><strong>Status: </strong> Present</p>
                                    </div>
                                    <div class="col-5">
                                        <!-- Displaying Logo -->
                                        <img src="../assets/img/Dark-Logo_HosPro.png" alt="User Photo" class="w-100 m-auto">
                                    </div>
                                </div>
                            </div>
                            <!-- General Info Tab -->
                            <div class="tab-pane card-bg-glass p-2 fade show" id="v-pills-general" role="tabpanel" aria-labelledby="v-pills-general-tab">
                                <h4>General Information</h4>
                                <form>
                                    <div class="mb-3">
                                        <label for="companyName" class="frm-label form-label">Company Name</label>
                                        <input type="text" class="form-control frm-input" id="companyName" placeholder="Enter company name" value="HosPro">
                                    </div>
                                    <!-- <div class="mb-3">
                                        <label for="userName" class="frm-label form-label">User Name</label>
                                        <input type="text" class="frm-input form-control" id="userName" required>
                                    </div> -->
                                    <div class="mb-3">
                                        <label for="companyAddress" class="frm-label form-label">Address</label>
                                        <input type="text" class="frm-input form-control" id="companyAddress" placeholder="Enter company address" value="Ashulia, Savar, Dhaka">
                                    </div>
                                    <div class="mb-3">
                                        <label for="phoneNumber" class="frm-label form-label">Phone Number</label>
                                        <input type="text" class="frm-input form-control" id="phoneNumber" placeholder="Enter phone number" value="+880 1234567890">
                                    </div>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#checkPassModal">Update Info</button>
                                </form>
                            </div>
                            <!-- Password & Email Update Tab -->
                            <div class="tab-pane card-bg-glass p-2 fade" id="v-pills-password" role="tabpanel" aria-labelledby="v-pills-password-tab">
                                <h4>Update Password & Email</h4>
                                <form>
                                    <div class="mb-3">
                                        <label for="adminEmail" class="frm-label form-label">Email</label>
                                        <input type="email" class="frm-input form-control" id="adminEmail" placeholder="Enter new email" value="HosPro24/7@gmail.com">
                                    </div>
                                    <div class="mb-3">
                                        <label for="newPassword" class="frm-label form-label">New Password</label>
                                        <input type="password" class="frm-input form-control" id="newPassword" placeholder="Enter new password">
                                    </div>
                                    <div class="mb-3">
                                        <label for="confirmPassword" class="frm-label form-label">Confirm Password</label>
                                        <input type="password" class="frm-input form-control" id="confirmPassword" placeholder="Confirm new password">
                                    </div>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#checkPassModal">Update Password & Email</button>
                                </form>
                            </div>
                            <!-- Logo Update Tab -->
                            <div class="tab-pane card-bg-glass p-2 fade" id="v-pills-logo" role="tabpanel" aria-labelledby="v-pills-logo-tab">
                                <h4>Update Logo</h4>
                                <form>
                                    <div class="mb-3">
                                        <label for="logoUpload" class="frm-label form-label">Upload New Logo</label>
                                        <input type="file" class="frm-input form-control" id="logoUpload">
                                    </div>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#checkPassModal">Update Logo</button>
                                </form>
                            </div>

                            <!-- Receptionist Info Tab -->
                            <div class="tab-pane card-bg-glass p-2 fade" id="v-pills-receptionist" role="tabpanel" aria-labelledby="v-pills-receptionist-tab">
                                <h4>Receptionist Info</h4>
                                <form>
                                    <div class="mb-3">
                                        <label for="receptionistUsername" class="frm-label form-label">Receptionist Username</label>
                                        <input type="text" class="frm-input form-control" id="receptionistUsername" placeholder="Enter receptionist username">
                                    </div>
                                    <div class="mb-3">
                                        <label for="receptionistPassword" class="frm-label form-label">Receptionist Password</label>
                                        <input type="password" class="frm-input form-control" id="receptionistPassword" placeholder="Enter receptionist password">
                                    </div>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#checkPassModal">Update Receptionist Info</button>
                                </form>
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

</body>

</html>