<!-- Room Packages Section -->
<h2 class="text-light pb-2">Room Packages</h2>
<table class="table  card-bg-glass">
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
            $list_room_package_details = "SELECT * FROM room_package_details";
            $result = mysqli_query($connection, $list_room_package_details);
            if (!$result) {
                die("Invalid query!");
            }
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $row['room_package_id'] ?></td>
                    <td><?php echo $row['room_package_name'] ?></td>
                    <td><?php echo $row['room_package_price'] ?></td>
                    <td><?php echo $row['room_package_availability'] ?></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewRoomModal">Details</a>
                        
                        <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editRoomModal">Edit</a>

                        <a href="#" class="btn btn-sm btn-danger delete_btn" data-id="<?php echo $row['room_package_id']; ?>" data-bs-toggle="modal" data-bs-target="#checkPassModal">Delete</a>
                    </td>        
                </tr>
            <?php
            }
        ?>   
    </tbody>
</table>
<?php require_once("../src/modals/check-password.php"); ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.delete_btn').forEach(button => {
        button.addEventListener('click', function() {
            const id = this.getAttribute('data-id');
            document.getElementById('passCheckForm').dataset.id = id;
        });
    });
});
</script>