
<!-- Modal for Adding Room Package -->
<div class="modal fade" id="addRoomPackageModal" tabindex="-1" aria-labelledby="addRoomPackageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-glass">
            <div class="modal-header">
                <h5 class="modal-title" id="addRoomPackageModalLabel">Add Room Package</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST">
                    <div class="mb-3">
                        <label for="roomName" class="frm-label">Room Package Name</label>
                        <input type="text" name="room_name" class="frm-input" id="roomName" required>
                    </div>
                    <div class="mb-3">
                        <label for="roomPrice" class="frm-label">Price</label>
                        <input type="number" name="room_price" class="frm-input" id="roomPrice" required>
                    </div>
                    <div class="mb-3">
                        <label for="roomPrice" class="frm-label">Availability</label>
                        <input type="number" name="room_availability" class="frm-input" id="roomAvailability" required>
                    </div>
                    <div class="mb-3">
                        <label for="roomDescription" class="frm-label">Description</label>
                        <textarea name="room_description" class="frm-input" id="roomDescription" rows="3" required></textarea>
                    </div>
                    <button type="submit" name="submit_room_data" class="btn button">Add Room Package</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
    $server_name = 'localhost';
    $dbusername = 'root';
    $dbpassword = '';
    $dbname = 'thehosprodb2';
    
    if (isset($_POST['submit_room_data'])) {
        $connection = mysqli_connect($server_name, $dbusername, $dbpassword);
        $room_name = $_POST['room_name'];
        $room_price = $_POST['room_price'];
        $room_availability = $_POST['room_availability'];
        $room_description = $_POST['room_description'];
        $add_room_query = "INSERT INTO `user_details`(`room_package_name`, `room_package_details`, `romm_package_price`, `room_package_availability`) VALUES ( '$room_name', '$room_price', '$room_availability', '$room_description' )";
        $result = mysqli_query($connection, $add_room_query);
        echo $result;
        if($result){
            echo "Data Inserted Successfully";
        }
        else{
            die("Connection failed ldskvgdskmgdsklm");
        }
    }
?>