<div class="modal fade" id="addEmployeeModal" tabindex="-1" aria-labelledby="addEmployeeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content card-bg-glass">
            <div class="modal-header">
                <h5 class="modal-title" id="addEmployeeModalLabel">Add New Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="employeeName" class="frm-label form-label">Employee Name</label>
                        <input type="text" class="frm-input form-control" id="employeeName" required>
                    </div>
                    <div class="mb-3">
                        <label for="employeePosition" class="frm-label form-label">Position</label>
                        <input type="text" class="frm-input form-control" id="employeePosition" required>
                    </div>
                    <div class="mb-3">
                        <label for="employeeEmail" class="frm-label form-label">Email</label>
                        <input type="email" class="frm-input form-control" id="employeeEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="employeeSalary" class="frm-label form-label">Salary</label>
                        <input type="number" class="frm-input form-control" id="employeeSalary" required>
                    </div>
                    <button type="submit" class="button w-100">
                        <a href="" class="button_link">
                            Save Employee
                        </a>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>