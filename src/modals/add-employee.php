<?php
$conn = new mysqli("localhost", "root", "", "thehosprodb");
if (isset($_POST['submit'])) {
    $employee_full_name = $_POST['employee_full_name'];
    $employee_role = $_POST['employee_role'];
    $employee_email = $_POST['employee_email'];
    $employee_address = $_POST['employee_address'];
    $employee_phn = $_POST['employee_phn'];
    $employee_nid = $_POST['employee_nid'];
    $employee_dob = $_POST['employee_dob'];
    $employee_salary = $_POST['employee_salary'];
    $add_employee_query = " INSERT INTO `employee_details`(`employee_full_name`, `employee_role`, `employee_email`, `employee_address`, `employee_phn`, `employee_nid`, `employee_dob`, `employee_salary` ) VALUES ( '$employee_full_name', '$employee_role', '$employee_email', '$employee_address', '$employee_phn', '$employee_nid', '$employee_dob', '$employee_salary' )";

    $result = mysqli_query($conn, $add_employee_query);
    if ($result) {
        echo "Data Inserted Successfully";
    } else {
        die("Connection failed" . $conn->connect_error);
    }
}
?>


<div class="modal fade" id="addEmployeeModal" tabindex="-1" aria-labelledby="addEmployeeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content card-bg-glass">
            <div class="modal-header">
                <h5 class="modal-title" id="addEmployeeModalLabel">Add New Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form id="addEmployeeForm" action="" method="post">
                    <div class="row">
                        <!-- Left Column -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="employeeNameInput" class="frm-label form-label">Employee Name</label>
                                <input type="text" name="employee_full_name" class="frm-input form-control" id="employeeNameInput" required>
                            </div>
                            <div class="mb-3">
                                <label for="employeePositionInput" class="frm-label form-label">Position</label>
                                <input type="text" name="employee_role" class="frm-input form-control" id="employeePositionInput" required>
                            </div>
                            <div class="mb-3">
                                <label for="employeeEmailInput" class="frm-label form-label">Email</label>
                                <input type="email" name="employee_email" class="frm-input form-control" id="employeeEmailInput" required>
                            </div>
                            <div class="mb-3">
                                <label for="employeeAddressInput" class="frm-label form-label">Address</label>
                                <input type="text" name="employee_address" class="frm-input form-control" id="employeeAddressInput" required>
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="employeePhoneInput" class="frm-label form-label">Phone</label>
                                <input type="number" name="employee_phn" class="frm-input form-control" id="employeePhoneInput" required>
                            </div>
                            <div class="mb-3">
                                <label for="employeeNIDInput" class="frm-label form-label">NID</label>
                                <input type="number" name="employee_nid" class="frm-input form-control" id="employeeNIDInput" required>
                            </div>
                            <div class="mb-3">
                                <label for="employeeDOBInput" class="frm-label form-label">DOB</label>
                                <input type="date" name="employee_dob" class="frm-input form-control" id="employeeDOBInput" required>
                            </div>
                            <div class="mb-3">
                                <label for="employeeSalaryInput" class="frm-label form-label">Salary</label>
                                <input type="number" name="employee_salary" class="frm-input form-control" id="employeeSalaryInput" required>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="modal-footer">
                        <button type="submit" class="button w-100" name="submit">
                            <a href="#" class="button_link">
                                Add Employee
                            </a>
                        </button>
                    </div>
                </form>
            </div>

            <!-- <div class="modal-body">
                <form method="POST">
                    <div class="mb-3">
                        <label for="employeeName" class="frm-label form-label">Employee Name</label>
                        <input type="text" class="frm-input form-control" id="employeeName" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="employeePosition" class="frm-label form-label">Position</label>
                        <input type="text" class="frm-input form-control" id="employeePosition" name="position" required>
                    </div>
                    <div class="mb-3">
                        <label for="employeeEmail" class="frm-label form-label">Email</label>
                        <input type="email" class="frm-input form-control" id="employeeEmail" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="employeeSalary" class="frm-label form-label">Salary</label>
                        <input type="number" class="frm-input form-control" id="employeeSalary" name="salary" required>
                    </div>
                    <button type="submit" name="submit" class="button w-100">
                        Save Employee
                    </button>
                </form>
            </div> -->
        </div>
    </div>
</div>