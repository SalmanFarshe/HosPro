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
                        <label for="editEmployeeName" class="frm-label form-label">Employee Name</label>
                        <input type="text" class="form-control frm-input" id="editEmployeeName" required>
                    </div>
                    <div class="mb-3">
                        <label for="editEmployeePosition" class="frm-label form-label">Position</label>
                        <input type="text" class="form-control frm-input" id="editEmployeePosition" required>
                    </div>
                    <div class="mb-3">
                        <label for="editEmployeeEmail" class="frm-label form-label">Email</label>
                        <input type="email" class="form-control frm-input" id="editEmployeeEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="editEmployeeSalary" class="frm-label form-label">Salary</label>
                        <input type="number" class="form-control frm-input" id="editEmployeeSalary" required>
                    </div>
                    <button type="submit" class="button w-100">
                        <a href="" class="button_link">
                            Update Employee
                        </a>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>