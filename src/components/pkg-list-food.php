<!-- Food Packages Section -->
<h2 class="text-light pb-2">Food Packages</h2>
<table class="table card-bg-glass">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Package Name</th>
            <th scope="col">Price</th>
            <th scope="col">Availability</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $list_food_package_details = "SELECT * FROM food_package_details ORDER BY food_package_id ASC";
            $result = mysqli_query($connection,$list_food_package_details);
            if (!$result) {
                die("Invalid query!");
            }
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $row['food_package_id'] ?></td>
                    <td><?php echo $row['food_package_name'] ?></td>
                    <td><?php echo $row['food_package_price'] ?></td>
                    <td><?php echo $row['food_package_availability'] ?></td>
                    <td>
                        <a href="#" 
                        class="btn btn-sm btn-info details_btn" 
                        data-id="<?php echo $row['food_package_id']; ?>" 
                        data-bs-toggle="modal" 
                        data-bs-target="#viewFoodModal">Details</a>
                        
                        <a href="#" class="btn btn-sm btn-warning edit_btn" data-id="<?php echo $row['food_package_id']; ?>" data-bs-toggle="modal" data-bs-target="#editFoodModal">Edit</a>
                        
                        <a href="#" class="btn btn-sm btn-danger delete_btn" data-id="<?php echo $row['food_package_id']; ?>" data-bs-toggle="modal" data-bs-target="#checkPassModal">Delete</a>
                    </td>        
                </tr>
            <?php
            }
        ?>
    </tbody>
</table>
<?php require_once("../src/modals/check-password.php"); ?>