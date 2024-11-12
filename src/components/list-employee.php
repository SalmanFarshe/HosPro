<!-- <table class="table card-bg-glass">
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
        $conn = new mysqli("localhost", "root", "", "all");
        $sql = "SELECT * FROM employee_details";
        $result = $conn->query($sql);
        if (!$result) {
            die("Invalid query!");
        }
        while ($row = $result->fetch_assoc()) {
        ?>
            <tr>
                <th><?php echo $row['eid'] ?></th>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['position'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['salary'] ?></td>

                <td class='d-flex justify-content-between'>
                    <a href='edit.php?id=<?php echo $row['id'] ?>' type='button' class='btn btn-sm btn-warning' data-bs-toggle='modal' data-bs-target='#editEmployeeModal'>Edit</a>
                    <a href='delete.php?id=<?php echo $row['id'] ?>' type='button' class='btn btn-sm btn-danger' data-bs-toggle='modal' data-bs-target='#checkPassModal'>Delete</a>
                    <a href='#' type='button' class='btn btn-sm btn-info' data-bs-toggle='modal' data-bs-target='#profileModal'>Profile</a>
                    <a href='#' type='button' class='btn btn-sm btn-secondary' data-bs-toggle='modal' data-bs-target='#reviewModal'>Review</a>
                </td>
            </tr>
        <?php
        }
        ?>

    </tbody>
</table> -->
<!-- <tr>
            <td>John Doe</td>
            <td>Manager</td>
            <td>john@example.com</td>
            <td>$4000</td>
            <td>Present</td>
            <td class="d-flex justify-content-between">
                <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editEmployeeModal">Edit</button>
                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#checkPassModal">Delete</button>
                <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#profileModal">Profile</button>
                <button class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#reviewModal">Review</button>
            </td>
        </tr> -->
<!-- <td><?php echo $row['attendance'] ?></td> -->


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
        $conn = new mysqli("localhost", "root", "", "all");
        $sql = "SELECT * FROM employee_details";
        $result = $conn->query($sql);
        if (!$result) {
            die("Invalid query!");
        }
        while ($row = $result->fetch_assoc()) {
        ?>
            <tr>
                <th><?php echo $row['eid'] ?></th>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['position'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['salary'] ?></td>
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