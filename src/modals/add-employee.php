<?php
$conn = new mysqli("localhost", "root", "", "all");
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $position = $_POST['position'];
  $email = $_POST['email'];
  $salary = $_POST['salary'];
  $sql = " INSERT INTO `employee_details`(`name`, `position`, `email`, `salary` ) VALUES ( '$name', '$position', '$email', '$salary' )";

  $result = mysqli_query($conn, $sql);
  if($result){
    echo "Data Inserted Successfully";
  }
  else{
    die("Connection failed".$conn->connect_error);
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

            <form action="" method="POST">
                    <div class="mb-3">
                        <label for="employeeNameInput" class="frm-label form-label">Employee Name</label>
                        <input type="text" name="name" class="frm-input form-control" id="employeeNameInput" required>
                    </div>
                    <div class="mb-3">
                        <label for="employeePositionInput" class="frm-label form-label">Position</label>
                        <input type="text" name="position" class="frm-input form-control" id="employeePositionInput" required>
                    </div>
                    <div class="mb-3">
                        <label for="employeeEmailInput" class="frm-label form-label">Email</label>
                        <input type="text" name="email" class="frm-input form-control" id="employeeEmailInput" required>
                    </div>
                    <div class="mb-3">
                        <label for="employeeSalaryInput" class="frm-label form-label">Salary</label>
                        <input type="text" name="salary" class="frm-input form-control" id="employeeSalaryInput" required>
                    </div>
                    <!-- Submit button -->
                    <button type="submit" name="submit" class="button w-100">
                        Save User
                    </button>
                </form>

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