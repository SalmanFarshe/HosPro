<div class="modal fade" id="addEmployeeModal" tabindex="-1" aria-labelledby="addEmployeeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content card-bg-glass">
            <div class="modal-header">
                <h5 class="modal-title" id="addEmployeeModalLabel">Add New Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="employee.php">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Full Name -->
                            <div class="mb-3">
                                <label for="employeeName" class="frm-label form-label">Full Name</label>
                                <input type="text" class="frm-input form-control" id="employeeName" name="employee_full_name" required>
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="employeeEmail" class="frm-label form-label">Email</label>
                                <input type="email" class="frm-input form-control" id="employeeEmail" name="employee_email" required>
                            </div>

                            <!-- NID -->
                            <div class="mb-3">
                                <label for="employeeNID" class="frm-label form-label">National ID (NID)</label>
                                <input type="text" class="frm-input form-control" id="employeeNID" name="employee_nid" required>
                            </div>

                            <!-- Date of Birth -->
                            <div class="mb-3">
                                <label for="employeeDOB" class="frm-label form-label">Date of Birth</label>
                                <input type="date" class="frm-input form-control" id="employeeDOB" name="employee_dob" required>
                            </div>
                        </div>

                        <!-- Right Column: Contact Information and Role -->
                        <div class="col-md-6">
                            <!-- Address -->
                            <div class="mb-3">
                                <label for="employeeAddress" class="frm-label form-label">Address</label>
                                <textarea class="frm-input form-control" id="employeeAddress" name="employee_address" rows="3"></textarea>
                            </div>

                            <!-- Phone -->
                            <div class="mb-3">
                                <label for="employeePhone" class="frm-label form-label">Phone Number</label>
                                <input type="text" class="frm-input form-control" id="employeePhone" name="employee_phn" required>
                            </div>

                            <!-- Role -->
                            <div class="mb-3">
                                <label for="employeeRole" class="frm-label form-label">Role</label>
                                <select class="frm-input form-control" id="employeeRole" name="employee_role" required>
                                    <option value="receptionist">Receptionist</option>
                                    <option value="manager">Manager</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>

                        </div>
                        <!-- Submit Button -->
                        <div class="mt-4">
                            <button type="submit" class="button w-100" name="submitEmployeeData">
                                Save Employee
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
