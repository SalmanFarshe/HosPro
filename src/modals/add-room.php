<?php
// Include the config file for database connection
require_once('../backend/config/config.php'); // Make sure the path is correct

if (isset($_POST['submit'])) {
    // Sanitize form data
    $room_number = mysqli_real_escape_string($connection, $_POST['room_number']);
    $room_type = mysqli_real_escape_string($connection, $_POST['room_type']);
    $capacity = mysqli_real_escape_string($connection, $_POST['capacity']);
    $price = mysqli_real_escape_string($connection, $_POST['price']);
    $bed_type = mysqli_real_escape_string($connection, $_POST['bed_type']);
    $bathroom = mysqli_real_escape_string($connection, $_POST['bathroom']);
    $facilities = mysqli_real_escape_string($connection, $_POST['facilities']);
    
    // SQL query to insert data
    $sql = "INSERT INTO room_details (room_number, room_type, capacity, price, bed_type, bathroom, facilities) 
            VALUES ('$room_number', '$room_type', '$capacity', '$price', '$bed_type', '$bathroom', '$facilities')";
    
    // Execute query and check for success
    if (mysqli_query($connection, $sql)) {
        $message = "Room added successfully!";
    } else {
        $message = "Error: " . mysqli_error($connection);
    }
}
?>

<div class="modal fade" id="addRoomModal" tabindex="-1" aria-labelledby="addRoomModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content card-bg-glass">
            <div class="modal-header">
                <h5 class="frm-label" id="addRoomModalLabel">Add New Room</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form to add a new room -->
                <form id="addRoomForm" action="" method="post">
                    <div class="row">
                        <!-- Left Column -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="addRoomNumber" class="frm-label">Room Number</label>
                                <input type="text" name="room_number" class="form-control frm-input" id="addRoomNumber" placeholder="Enter Room Number" required>
                            </div>
                            <div class="mb-3">
                                <label for="addRoomType" class="frm-label">Room Type</label>
                                <input type="text" name="room_type" class="form-control frm-input" id="addRoomType" placeholder="Enter Room Type (e.g., Deluxe, Standard)" required>
                            </div>
                            <div class="mb-3">
                                <label for="addRoomCapacity" class="frm-label">Capacity</label>
                                <input type="number" name="capacity" class="form-control frm-input" id="addRoomCapacity" placeholder="Enter Room Capacity (e.g., 2)" required>
                            </div>
                            <div class="mb-3">
                                <label for="addRoomPrice" class="frm-label">Price</label>
                                <input type="text" name="price" class="form-control frm-input" id="addRoomPrice" placeholder="Enter Price (e.g., $100)" required>
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="addRoomBed" class="frm-label">Bed Type</label>
                                <input type="text" name="bed_type" class="form-control frm-input" id="addRoomBed" placeholder="Enter Bed Type (e.g., King Size Bed)" required>
                            </div>
                            <div class="mb-3">
                                <label for="addRoomBath" class="frm-label">Bathroom</label>
                                <input type="text" name="bathroom" class="form-control frm-input" id="addRoomBath" placeholder="Enter Bathroom Type (e.g., En-suite)" required>
                            </div>
                            <div class="mb-3">
                                <label for="addRoomFacilities" class="frm-label">Facilities</label>
                                <input type="text" name="facilities" class="form-control frm-input" id="addRoomFacilities" placeholder="Enter Facilities (e.g., Free Wi-Fi, Air Conditioning)" required>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="modal-footer">
                        <button type="submit" name="submit" class="button m-1">
                            <span class="button_link">Add Room</span>
                        </button>
                        <button type="button" class="button m-1" data-bs-dismiss="modal">
                            <span class="button_link">Cancel</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>