<?php
$activePage = 'customize';
require_once("../backend/controller/admin-mood.php");
include('../backend/config/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emploee | HosPro</title>
    <?php require_once('../src/components/links.php'); ?>
    <link rel="stylesheet" href="../assets/css/customize.css">
</head>

<body>
    <div class="dashboard align-items-center justify-content-center">
        <?php require_once('../src/components/sidenav.php'); ?>
        <div class="dashboard-app">
            <div class="container mt-5">
                <div class="row customiser_wrapper card-bg-glass">
                    <!-- Vertical Tabs Navigation -->
                    <div class="col-md-3 pt-3 customiser_nav_wrapper">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="true">
                                Profile
                            </button>
                            <button class="nav-link" id="v-pills-general-tab" data-bs-toggle="pill" data-bs-target="#v-pills-general" type="button" role="tab" aria-controls="v-pills-general" aria-selected="false">
                                General Info
                            </button>
                            <!-- <button class="nav-link" id="v-pills-password-tab" data-bs-toggle="pill" data-bs-target="#v-pills-password" type="button" role="tab" aria-controls="v-pills-password" aria-selected="false">
                                Password & Email
                            </button> -->
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
                            <div class="tab-pane p-2 fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <h4>Profile Information</h4>
                                <div class="row">
                                    <?php
                                    $list_events_query = "SELECT * FROM admin_details";
                                    $result = mysqli_query($connection, $list_events_query);
                                    if (!$result) {
                                        die("Invalid query!");
                                    }
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <div class="col-7">
                                            <h3><strong>Company Name: </strong> <?php echo $row['hotel_name'] ?></h3>
                                            <p><strong>Email: </strong> <?php echo $row['hotel_email'] ?></p>
                                            <p><strong>Phone: </strong> <?php echo $row['hotel_phn'] ?></p>
                                            <p><strong>Address: </strong> <?php echo $row['hotel_address'] ?></p>
                                            <p><strong>Status: </strong> Present</p>
                                        </div>
                                        <div class="col-5">
                                            <!-- Displaying Logo -->
                                            <img src="<?php echo $row['hotel_logo']; ?>" alt="Hotel Logo" class="w-100 m-auto">
                                            <!-- <img src="../assets/img/Dark-Logo_HosPro.png" alt="User Photo" class="w-100 m-auto"> -->
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <!-- General Info Tab -->
                            <div class="tab-pane px-2 mt-4 fade show " style="max-height: 400px; overflow-y: auto;" id="v-pills-general" role="tabpanel" aria-labelledby="v-pills-general-tab">
                                <h4>General Information</h4>

                                <?php
                                if (isset($_POST['update'])) {
                                    $id = $_POST['id'];  // Assuming the ID is passed through a hidden input field
                                    $hotel_name = $_POST['hotel_name'];
                                    $hotel_address = $_POST['hotel_address'];
                                    $hotel_phn = $_POST['hotel_phn'];
                                    $hotel_email = $_POST['hotel_email'];
                                    $admin_password = $_POST['admin_password'];

                                    // Update query
                                    // $update_query = "UPDATE admin_details SET hotel_name='$hotel_name', hotel_address='$hotel_address', hotel_phn='$hotel_phn' WHERE id=$id";
                                    $update_query = "UPDATE admin_details SET hotel_name='$hotel_name', hotel_address='$hotel_address', hotel_phn='$hotel_phn', hotel_email='$hotel_email', admin_password='$admin_password' WHERE id=$id";

                                    if (mysqli_query($connection, $update_query)) {
                                        echo "Record updated successfully!";
                                        // echo "<script>alert('Record updated successfully!'); window.location.reload();</script>";
                                    } else {
                                        echo "Error updating record: " . mysqli_error($connection);
                                    }
                                }

                                // Fetch the existing data from the database (assuming the ID is 1)
                                $query = "SELECT * FROM admin_details WHERE id = 1";
                                $result = mysqli_query($connection, $query);
                                $row = mysqli_fetch_assoc($result);
                                ?>


                                <form method="POST" action="">
                                    <div class="mb-3">
                                        <label for="companyName" class="frm-label form-label">Company Name</label>
                                        <!-- Pre-populating the company name from the database -->
                                        <input type="text" class="form-control frm-input" id="companyName" name="hotel_name" placeholder="Enter company name" value="<?php echo $row['hotel_name']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="companyAddress" class="frm-label form-label">Address</label>
                                        <!-- Pre-populating the company address from the database -->
                                        <input type="text" class="frm-input form-control" id="companyAddress" name="hotel_address" placeholder="Enter company address" value="<?php echo $row['hotel_address']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="phoneNumber" class="frm-label form-label">Phone Number</label>
                                        <!-- Pre-populating the phone number from the database -->
                                        <input type="text" class="frm-input form-control" id="phoneNumber" name="hotel_phn" placeholder="Enter phone number" value="<?php echo $row['hotel_phn']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="adminEmail" class="frm-label form-label">Email</label>
                                        <input type="email" class="frm-input form-control" id="adminEmail" name="hotel_email"  placeholder="Enter new email" value="<?php echo $row['hotel_email']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="newPassword" class="frm-label form-label">New Password</label>
                                        <input type="password" class="frm-input form-control" id="newPassword" name="admin_password" placeholder="Enter new password">
                                    </div>
                                    <!-- Hidden input to pass the company ID -->
                                    <input type="hidden" name="id" value="1">

                                    <!-- Update Info button -->
                                    <button type="submit" name="update" class="btn btn-primary">Update Info</button>
                                </form>
                            </div>

                            <!-- Password & Email Update Tab -->

                            <!-- <div class="tab-pane p-2 fade" id="v-pills-password" role="tabpanel" aria-labelledby="v-pills-password-tab">
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
                            </div> -->
                            <!-- Logo Update Tab -->
                            <div class="tab-pane p-2 fade" id="v-pills-logo" role="tabpanel" aria-labelledby="v-pills-logo-tab">
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
                            <div class="tab-pane p-2 fade" id="v-pills-receptionist" role="tabpanel" aria-labelledby="v-pills-receptionist-tab">
                                <h4>Receptionist Info</h4>
                                <!--name="receptionist_password" -->
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