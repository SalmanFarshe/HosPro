<!-- Modal for Adding Room Package -->
<div class="modal fade" id="addRoomPackageModal" tabindex="-1" aria-labelledby="addRoomPackageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-glass">
            <div class="modal-header">
                <h5 class="modal-title" id="addRoomPackageModalLabel">Add Room Package</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="packages.php">
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
    require_once("../backend/config/config.php"); // Adjust path if needed

    if (isset($_POST['submit_room_data'])) {
        // Generate new ID
        function generateID($table, $prefix, $id_column, $connection) {
            $query = "SELECT MAX($id_column) AS last_id FROM $table";
            $result = mysqli_query($connection, $query);

            // Check if query succeeded
            if (!$result) {
                die("ID generation query failed: " . mysqli_error($connection));
            }

            $row = mysqli_fetch_assoc($result);

            // If no ID exists, start from 1
            $last_id = $row['last_id'] ?? null;
            $new_number = $last_id ? intval(substr($last_id, strlen($prefix))) + 1 : 1;

            // Generate ID with prefix and padded number
            return $prefix . str_pad($new_number, 2, '0', STR_PAD_LEFT);
        }

        // Generate new room package ID
        $new_room_id = generateID('room_package_details', 'PKG-', 'room_package_id', $connection);

        // Collect form data
        $room_name = $_POST['room_name'];
        $room_price = $_POST['room_price'];
        $room_availability = $_POST['room_availability'];
        $room_description = $_POST['room_description'];

        // Insert query
        $add_room_query = "
            INSERT INTO room_package_details 
            (room_package_id, room_package_name, room_package_details, room_package_price, room_package_availability) 
            VALUES 
            ('$new_room_id', '$room_name', '$room_description', '$room_price', '$room_availability')";

        // Execute query
        $result = mysqli_query($connection, $add_room_query);

        // Error handling
        if (!$result) {
            die("Query failed: " . mysqli_error($connection));
        }

        // Connection error handling
        if (!$connection) {
            echo "Connection error";
        }
    }
?>
