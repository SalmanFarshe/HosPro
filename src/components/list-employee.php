
<table class="table card-bg-glass">
    <thead>
        <tr>
            <th>EID</th>
            <th>Name</th>
            <th>Position</th>
            <th>Email</th>
            <th>Salary</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $conn = new mysqli("localhost", "root", "", "thehosprodb");
        $sql = "SELECT * FROM employee_details";
        $result = $conn->query($sql);
        if (!$result) {
            die("Invalid query!");
        }
        while ($row = $result->fetch_assoc()) {
        ?>
            <tr>
                <th><?php echo $row['employee_id'] ?></th>
                <td><?php echo $row['employee_full_name'] ?></td>
                <td><?php echo $row['employee_role'] ?></td>
                <td><?php echo $row['employee_email'] ?></td>
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