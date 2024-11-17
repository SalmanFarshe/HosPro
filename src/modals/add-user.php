<?php
$conn = new mysqli("localhost", "root", "", "thehosprodb");
if (isset($_POST['submit'])) {
  $user_name = $_POST['user_name'];
  $user_phn = $_POST['user_phn'];
  $user_address = $_POST['user_address'];
  $sql = " INSERT INTO `user_details`(`user_name`, `user_phn`, `user_address`) VALUES ( '$user_name', '$user_phn', '$user_address' )";

  $result = mysqli_query($conn, $sql);
  if($result){
    echo "Data Inserted Successfully";
  }
  else{
    die("Connection failed".$conn->connect_error);
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
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="userNameInput" class="frm-label form-label">User Name</label>
                        <input type="text" name="user_name" class="frm-input form-control" id="userNameInput" required>
                    </div>
                    <div class="mb-3">
                        <label for="userPhoneInput" class="frm-label form-label">Phone</label>
                        <input type="text" name="user_phn" class="frm-input form-control" id="userPhoneInput" required>
                    </div>
                    <div class="mb-3">
                        <label for="userAddressInput" class="frm-label form-label">Address</label>
                        <input type="text" name="user_address" class="frm-input form-control" id="userAddressInput" required>
                    </div>
                    <!-- Submit button -->
                    <button type="submit" name="submit" class="button w-100">
                        Save User
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
