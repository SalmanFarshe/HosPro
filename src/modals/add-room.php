<?php
$conn = new mysqli("localhost", "root", "", "all");
if (isset($_POST['submit'])) {
  $room_number = $_POST['room_number'];
  $room_type = $_POST['room_type'];
  $capacity = $_POST['capacity'];
  $price = $_POST['price'];
  $bed_type = $_POST['bed_type'];
  $bathroom = $_POST['bathroom'];
  $facilities = $_POST['facilities'];
  $sql = " INSERT INTO `room_details`(`room_number`, `room_type`, `capacity`, `price`, `bed_type`, `bathroom`, `facilities`) VALUES ( '$room_number', '$room_type', '$capacity', '$price', '$bed_type', '$bathroom', '$facilities' )";

  $result = mysqli_query($conn, $sql);
  if($result){
    echo "Data Inserted Successfully";
  }
  else{
    die("Connection failed".$conn->connect_error);
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
                <form id="addRoomForm" action="" method="post">
                    <div class="row">
                        <!-- Left Column -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="addRoomNumber" class="frm-label">Room Number</label>
                                <input type="text" name="room_number" class="form-control frm-input" id="addRoomNumber" placeholder="Enter Room Number">
                            </div>
                            <div class="mb-3">
                                <label for="addRoomType" class="frm-label">Room Type</label>
                                <input type="text" name="room_type" class="form-control frm-input" id="addRoomType" placeholder="Enter Room Type (e.g., Deluxe, Standard)">
                            </div>
                            <div class="mb-3">
                                <label for="addRoomCapacity" class="frm-label">Capacity</label>
                                <input type="number" name="capacity" class="form-control frm-input" id="addRoomCapacity" placeholder="Enter Room Capacity (e.g., 2)">
                            </div>
                            <div class="mb-3">
                                <label for="addRoomPrice" class="frm-label">Price</label>
                                <input type="text" name="price" class="form-control frm-input" id="addRoomPrice" placeholder="Enter Price (e.g., $100)">
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="addRoomBed" class="frm-label">Bed Type</label>
                                <input type="text" name="bed_type" class="form-control frm-input" id="addRoomBed" placeholder="Enter Bed Type (e.g., King Size Bed)">
                            </div>
                            <div class="mb-3">
                                <label for="addRoomBath" class="frm-label">Bathroom</label>
                                <input type="text" name="bathroom" class="form-control frm-input" id="addRoomBath" placeholder="Enter Bathroom Type (e.g., En-suite)">
                            </div>
                            <div class="mb-3">
                                <label for="addRoomFacilities" class="frm-label">Facilities</label>
                                <input type="text" name="facilities" class="form-control frm-input" id="addRoomFacilities" placeholder="Enter Facilities (e.g., Free Wi-Fi, Air Conditioning)">
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="modal-footer">
                        <button type="submit" class="button m-1">
                            <a href="#" class="button_link">Add Room</a>
                        </button>
                        <button type="button" class="button m-1" data-bs-dismiss="modal">
                            <a href="#" class="button_link">Cancel</a>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
