<?php
$conn = new mysqli("localhost", "root", "", "thehosprodb2");
if (isset($_POST['submit'])) {
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];
    $user_email = $_POST['user_email'];
    $user_address = $_POST['user_address'];
    $user_nid = $_POST['user_nid'];
    $user_full_name = $_POST['user_full_name'];
    $user_dob = $_POST['user_dob'];
    $user_phn = $_POST['user_phn'];
    $user_status = $_POST['user_status'];
    $add_user_query = " INSERT INTO `user_details`(`user_name`, `user_password`, `user_email`, `user_address`, `user_nid`, `user_full_name`, `user_dob`, `user_phn`, `user_status`) VALUES ( '$user_name', '$user_password', '$user_email', '$user_address', '$user_nid', '$user_full_name', '$user_dob', '$user_phn', '$user_status' )";

    $result = mysqli_query($conn, $add_user_query);
    if ($result) {
        echo "Data Inserted Successfully";
    } else {
        die("Connection failed" . $conn->connect_error);
    }
}
?>


<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content card-bg-glass">
            <div class="modal-header">
                <h5 class="modal-title" id="addUserModalLabel">Add New User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form with action and method -->
                <form id="addUserForm" action="" method="post">
                    <div class="row">
                        <!-- Left Column -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="userNameInput" class="frm-label form-label">User Name</label>
                                <input type="text" name="user_name" class="frm-input form-control" id="userNameInput" required>

                            </div>
                            <div class="mb-3">
                                <label for="userEmailInput" class="frm-label form-label">User Email</label>
                                <input type="email" name="user_email" class="frm-input form-control" id="userEmailInput" required>
                            </div>
                            <div class="mb-3">
                                <label for="userPasswordInput" class="frm-label form-label">User Password</label>
                                <input type="password" name="user_password" class="frm-input form-control" id="userPasswordInput" required>
                            </div>
                            <div class="mb-3">
                                <label for="userPhoneInput" class="frm-label form-label">User Phone</label>
                                <input type="number" name="user_phn" class="frm-input form-control" id="userPhoneInput" required>
                            </div>
                            <div class="mb-3">
                                <label for="userAddressInput" class="frm-label form-label">User Address</label>
                                <input type="text" name="user_address" class="frm-input form-control" id="userAddressInput" required>
                            </div>
                        </div>

                            <!-- Right Column -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="userAddressInput" class="frm-label form-label">User NID</label>
                                    <input type="number" name="user_nid" class="frm-input form-control" id="userAddressInput" required>
                                </div>
                                <div class="mb-3">
                                    <label for="userAddressInput" class="frm-label form-label">User Full Name</label>
                                    <input type="text" name="user_full_name" class="frm-input form-control" id="userAddressInput" required>
                                </div>
                                <div class="mb-3">
                                    <label for="userAddressInput" class="frm-label form-label">User DOB</label>
                                    <input type="date" name="user_dob" class="frm-input form-control" id="userAddressInput" required>
                                </div>
                                <div class="mb-3">
                                    <label for="eventStatus" class="form-label frm-label">User Status</label>
                                    <select class="form-select select-sts" name="user_status" id="eventStatus">
                                        <option value="present">Present</option>
                                        <option value="not-present">Not Present</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="modal-footer">
                            <button type="submit" class="button w-100" name="submit">
                                <a href="#" class="button_link">
                                    Add User
                                </a>
                            </button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>