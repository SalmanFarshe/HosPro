<div class="modal fade" id="editEmployeeModal" tabindex="-1" aria-labelledby="editEmployeeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content card-bg-glass">
            <div class="modal-header">
                <h5 class="modal-title" id="editEmployeeModalLabel">Edit Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="editEmployeeName" class="form-label">Employee Name</label>
                        <input type="text" class="form-control" id="editEmployeeName" required>
                    </div>
                    <div class="mb-3">
                        <label for="editEmployeePosition" class="form-label">Position</label>
                        <input type="text" class="form-control" id="editEmployeePosition" required>
                    </div>
                    <div class="mb-3">
                        <label for="editEmployeeEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="editEmployeeEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="editEmployeeSalary" class="form-label">Salary</label>
                        <input type="number" class="form-control" id="editEmployeeSalary" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Employee</button>
                </form>
            </div>
        </div>
    </div>
</div>