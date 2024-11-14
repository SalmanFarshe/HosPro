<!-- Modal for Adding Food Package -->
<div class="modal fade" id="addFoodPackageModal" tabindex="-1" aria-labelledby="addFoodPackageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-glass">
            <div class="modal-header">
                <h5 class="modal-title" id="addFoodPackageModalLabel">Add Food Package</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addRoomForm" method="POST">
                    <div class="mb-3">
                        <label for="foodName" class="frm-label">Food Package Name</label>
                        <input type="text" class="frm-input" name="foodName" id="foodName" required>
                    </div>
                    <div class="mb-3">
                        <label for="foodPrice" class="frm-label">Price</label>
                        <input type="number" class="frm-input" name="foodPrice" id="foodPrice" required>
                    </div>
                    <div class="mb-3">
                        <label for="foodAvailability" class="frm-label">Availability</label>
                        <input type="number" class="frm-input" name="foodAvailability" id="foodAvailability" required>
                    </div>
                    <div class="mb-3">
                        <label for="foodDescription" class="frm-label">Description</label>
                        <textarea class="frm-input" name="foodDescription" id="foodDescription" rows="3" required></textarea>
                    </div>
                    <button type="submit"  name="foodDataSubmit" class="btn button">Add Food Package</button>
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
    if (isset($_POST['foodDataSubmit'])) {
        $connection = mysqli_connect($server_name, $dbusername, $dbpassword);
        $food_name = $_POST['foodName'];
        $food_price = $_POST['foodPrice'];
        $food_availability = $_POST['foodAvailability'];
        $food_description = $_POST['foodDescription'];
        $add_food_query = "INSERT INTO `user_details`(`food_package_name`, `food_package_details`, `food_package_price`, `food_package_availability`) VALUES ( '$food_name', '$food_price', '$food_availability', '$food_description' )";
        $result = mysqli_query($connection, $add_food_query);
        if($result){
            echo "Data Inserted Successfully";
        }
        else{
            die("Connection failed lkcbjldfng;ldfkjgn;ldfkn");
        }
    }
?>