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
                        <label for="employeeName" class="form-label">Employee Name</label>
                        <input type="text" class="form-control" id="employeeName" required>
                    </div>
                    <div class="mb-3">
                        <label for="employeePosition" class="form-label">Position</label>
                        <input type="text" class="form-control" id="employeePosition" required>
                    </div>
                    <div class="mb-3">
                        <label for="employeeEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="employeeEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="employeeSalary" class="form-label">Salary</label>
                        <input type="number" class="form-control" id="employeeSalary" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Employee</button>
                </form>
            </div>
        </div>
    </div>
</div>