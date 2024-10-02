<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content card-bg-glass">
            <div class="modal-header">
                <h5 class="modal-title" id="addUserModalLabel">Add New User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="userName" class="frm-label form-label">User Name</label>
                        <input type="text" class="frm-input form-control" id="userName" required>
                    </div>
                    <div class="mb-3">
                        <label for="userPosition" class="frm-label form-label">Position</label>
                        <input type="text" class="frm-input form-control" id="userPosition" required>
                    </div>
                    <div class="mb-3">
                        <label for="userEmail" class="frm-label form-label">Email</label>
                        <input type="email" class="frm-input form-control" id="userEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="userSalary" class="frm-label form-label">Salary</label>
                        <input type="number" class="frm-input form-control" id="userSalary" required>
                    </div>
                    <button type="submit" class="button w-100">
                        Save User
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
