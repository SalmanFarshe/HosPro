<?php 
    include('../backend/config/config.php');
?>
<div class="table-responsive mt-4">
    <table class="table card-bg-glass">
        <thead>
            <tr>
                <th>Event ID</th>
                <th>Event Name</th>
                <th>Event Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM events_details";
            $result = mysqli_query($connection,$sql);
            if (!$result) {
                die("Invalid query!");
            }
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <th><?php echo $row['events_id'] ?></th>
                    <th><?php echo $row['events_name'] ?></th>
                    <td><?php echo $row['event_date'] ?></td>
                    <td class='d-flex justify-content-between'>
                        <!-- <a href='#' type='button' class='btn btn-sm btn-warning' data-bs-toggle='modal' data-bs-target='#reviewUserModal'>Edit</a>
                        <a href='#' type='button' class='btn btn-sm btn-danger' data-bs-toggle='modal' data-bs-target='#reviewUserModal'>Delete</a>
                        <a href='#' type='button' class='btn btn-sm btn-info' data-bs-toggle='modal' data-bs-target='#reviewUserModal'>Profile</a>
                        <a href='#' type='button' class='btn btn-sm btn-secondary' data-bs-toggle='modal' data-bs-target='#reviewUserModal'>Review</a> -->
                        <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editEventModal">Edit</button>
                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#checkPassModal">Delete</button>
                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#eventDetailsModal">Details</button>
                    </td>
                </tr>
            <?php
            }
            ?>


        </tbody>

        <!-- <tbody>
            <tr>
                <td>1</td>
                <td>UID-2250</td>
                <td>Annual Tech Conference</td>
                <td>15th October 2024</td>
                <td>Conference</td>
                <td><span class="badge bg-info">Upcoming</span></td>
                <td>
                    
                </td>
            </tr>
        </tbody> -->
    </table>
</div>