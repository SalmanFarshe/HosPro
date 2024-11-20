<!-- Modal for Adding Food Package -->
<div class="modal fade" id="addFoodPackageModal" tabindex="-1" aria-labelledby="addFoodPackageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-glass">
            <div class="modal-header">
                <h5 class="modal-title" id="addFoodPackageModalLabel">Add Food Package</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addRoomForm" method="POST" action="packages.php">
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
    require_once("../backend/config/config.php"); // Adjust the path if needed

    if (isset($_POST['foodDataSubmit'])) {
        // Generate new ID
        function generateID($table, $prefix, $id_column, $connection) {
            $query = "SELECT MAX($id_column) AS last_id FROM $table";
            $result = mysqli_query($connection, $query);
            $row = mysqli_fetch_assoc($result);

            // If no ID exists, start from 1
            $last_id = $row['last_id'] ?? null;
            $new_number = $last_id ? intval(substr($last_id, strlen($prefix))) + 1 : 1;

            // Generate ID with prefix and padded number
            return $prefix . str_pad($new_number, 2, '0', STR_PAD_LEFT);
        }
        $new_food_id = generateID('food_package_details', 'FD-', 'food_package_id', $connection);
        // Collect form data
        $food_name = $_POST['foodName'];
        $food_price = $_POST['foodPrice'];
        $food_availability = $_POST['foodAvailability'];
        $food_description = $_POST['foodDescription'];

        // Insert query
        $add_food_query = "
            INSERT INTO food_package_details 
            (food_package_id, food_package_name, food_package_details, food_package_type, food_package_price, food_package_availability) 
            VALUES 
            ('$new_food_id', '$food_name', '$food_description', 'Default', '$food_price', '$food_availability')";

        // Execute query
        $result = mysqli_query($connection, $add_food_query);

        // Error handling
        if (!$result) {
            die("Query failed: " . mysqli_error($connection));
        }
    }
?>
