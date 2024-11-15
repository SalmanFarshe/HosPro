<div class="modal fade" id="checkPassModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <!-- Password Validation Modal -->
    <div class="modal-dialog">
        <div class="modal-content card-bg-glass">
            <div class="modal-header">
                <h5 class="modal-title" id="passwordModalLabel">Password Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="passCheckForm" method="post" action="packages.php">
                <div class="modal-body">
                    <p>Please confirm your password to proceed with updates.</p>
                    <div class="mb-3">
                        <label for="adminPassword" class="form-label frm-label">Admin Password</label>
                        <input type="hidden" name="delete_id" id="deleteId">
                        <input type="password" name="pass_check" class="form-control frm-input" id="adminPassword" placeholder="Enter admin password">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" name="pass_check_submit" class="btn btn-primary">Confirm</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('passCheckForm').addEventListener('submit', function() {
        const deleteId = this.dataset.id;
        document.getElementById('deleteId').value = deleteId;
    });
</script>
<?php
    if (isset($_POST['pass_check_submit'])) {
        include("../backend/config/config.php");

        $pass_check = $_POST['pass_check'];
        $delete_id = $_POST['delete_id'];

        $get_admin_pass = "SELECT * FROM admin_details WHERE admin_password = '$pass_check'";
        $result = mysqli_query($connection, $get_admin_pass);

        if (mysqli_num_rows($result) > 0) {
            $delete_room_pkg_query = "DELETE FROM room_package_details WHERE room_package_id = '$delete_id'";
            $delete_food_pkg_query = "DELETE FROM food_package_details WHERE food_package_id = '$delete_id'";
            if (mysqli_query($connection, $delete_room_pkg_query) && mysqli_query($connection, $delete_food_pkg_query)) {
                echo "Record deleted successfully";
                ?>
                <meta http-equiv="refresh" content="0;url=packages.php">
                <?php
            } else {
                echo "Error deleting record: " . mysqli_error($connection);
            }

        } else {
            echo "Invalid password.";
        }
    }
?>