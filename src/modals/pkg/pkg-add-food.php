<!-- Modal for Adding Food Package -->
<div class="modal fade" id="addFoodPackageModal" tabindex="-1" aria-labelledby="addFoodPackageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-glass">
            <div class="modal-header">
                <h5 class="modal-title" id="addFoodPackageModalLabel">Add Food Package</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="foodType" class="frm-label">Food Type</label>
                        <input type="text" class="frm-input" id="foodType" required>
                    </div>
                    <div class="mb-3">
                        <label for="foodPrice" class="frm-label">Price</label>
                        <input type="number" class="frm-input" id="foodPrice" required>
                    </div>
                    <div class="mb-3">
                        <label for="foodDuration" class="frm-label">Duration (days)</label>
                        <input type="number" class="frm-input" id="foodDuration" required>
                    </div>
                    <div class="mb-3">
                        <label for="foodDescription" class="frm-label">Description</label>
                        <textarea class="frm-input" id="foodDescription" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn button">Add Food Package</button>
                </form>
            </div>
        </div>
    </div>
</div>