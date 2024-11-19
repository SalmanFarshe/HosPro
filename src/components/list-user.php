<table class="table card-bg-glass">
    <thead>
        <tr>
            <th>UID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $conn = new mysqli("localhost", "root", "", "thehosprodb2");
        $sql = "SELECT * FROM user_details";
        $result = $conn->query($sql);
        if (!$result) {
            die("Invalid query!");
        }
        while ($row = $result->fetch_assoc()) {
        ?>
            <tr>
                <th><?php echo $row['user_id'] ?></th>
                <td><?php echo $row['user_name'] ?></td>
                <td><?php echo $row['user_phn'] ?></td>
                <td><?php echo $row['user_address'] ?></td>
                <td><?php echo $row['user_status'] ?></td>
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
</table>