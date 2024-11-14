<?php
require_once('../backend/config/config.php');

$sql = "SELECT employee_full_name, employee_role, employee_email, employee_phn, employee_address FROM employees";
$result = mysqli_query($connection, $sql);
$rows = mysqli_num_rows($result);
?>

<table class="table card-bg-glass">
    <thead>
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
            if ($result && $rows > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row['employee_full_name']; ?></td>
                            <td><?php echo $row['employee_role']; ?></td>
                            <td><?php echo $row['employee_email']; ?></td>
                            <td><?php echo $row['employee_phn']; ?></td>
                            <td><?php echo $row['employee_address']; ?></td>
                            <td class='d-flex justify-content-between'>
                            <button class='btn btn-sm btn-warning' data-bs-toggle='modal' data-bs-target='#editEmployeeModal'>Edit</button>
                            <button class='btn btn-sm btn-danger' data-bs-toggle='modal' data-bs-target='#checkPassModal'>Delete</button>
                            <button class='btn btn-sm btn-info' data-bs-toggle='modal' data-bs-target='#profileModal'>Profile</button>
                            <button class='btn btn-sm btn-secondary' data-bs-toggle='modal' data-bs-target='#reviewModal'>Review</button>
                            </td>
                        </tr>
                    <?php
                }
            } else {
                echo "<tr><td colspan='6' class='text-center'>No employees found.</td></tr>";
            }
        ?>
    </tbody>
</table>