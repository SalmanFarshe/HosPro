<!-- Modal for Editing Food Package -->
<div class="modal fade" id="editFoodModal" tabindex="-1" aria-labelledby="editFoodModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-glass">
            <div class="modal-header">
                <h5 class="modal-title" id="editFoodModalLabel">Edit Food Package</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="foodPackageName" class="form-label text-primary">Package Name</label>
                        <input type="text" class="form-control frm-input" id="foodPackageName" value="Breakfast Package">
                    </div>
                    <div class="mb-3">
                        <label for="foodPackagePrice" class="form-label text-primary">Price</label>
                        <input type="text" class="form-control frm-input" id="foodPackagePrice" value="$50">
                    </div>
                    <div class="mb-3">
                        <label for="foodAvailability" class="frm-label">Availability</label>
                        <input type="number" class="frm-input" id="foodAvailability" value="20" required>
                    </div>
                    <div class="mb-3">
                        <label for="foodPackageDescription" class="form-label text-primary">Description</label>
                        <textarea class="form-control frm-input" id="foodPackageDescription">Includes continental breakfast with a variety of options.</textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn button2" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn button">Save Changes</button>
            </div>
        </div>
    </div>
</div>