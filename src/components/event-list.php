<div class="table-responsive mt-4">
    <table class="table card-bg-glass">
        <thead>
            <tr>
                <th>EvId</th>
                <th>User Name</th>
                <th>Event Name</th>
                <th>Date</th>
                <th>Category</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conn = new mysqli("localhost", "root", "", "all");
            $sql = "SELECT * FROM event_details";
            $result = $conn->query($sql);
            if (!$result) {
                die("Invalid query!");
            }
            while ($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <th><?php echo $row['EvId'] ?></th>
                    <th><?php echo $row['user_name'] ?></th>
                    <td><?php echo $row['event_name'] ?></td>
                    <th><?php echo $row['date'] ?></th>
                    <td><?php echo $row['category'] ?></td>
                    <td><?php echo $row['status'] ?></td>
                    <td class='d-flex justify-content-between'>
                        <a href='edit.php?id=<?php echo $row['id'] ?>' type='button' class='btn btn-sm btn-warning' data-bs-toggle='modal' data-bs-target='#reviewUserModal'>Edit</a>
                        <a href='delete.php?id=<?php echo $row['id'] ?>' type='button' class='btn btn-sm btn-danger' data-bs-toggle='modal' data-bs-target='#reviewUserModal'>Delete</a>
                        <a href='#' type='button' class='btn btn-sm btn-info' data-bs-toggle='modal' data-bs-target='#reviewUserModal'>Profile</a>
                        <a href='#' type='button' class='btn btn-sm btn-secondary' data-bs-toggle='modal' data-bs-target='#reviewUserModal'>Review</a>
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
                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editEventModal">Edit</button>
                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#checkPassModal">Delete</button>
                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#eventDetailsModal">Details</button>
                </td>
            </tr>
        </tbody> -->
    </table>
</div>