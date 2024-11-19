<!-- Modal for Editing Room Package -->
<div class="modal fade" id="editRoomModal" tabindex="-1" aria-labelledby="editRoomModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-glass">
            <div class="modal-header">
                <h5 class="modal-title" id="editRoomModalLabel">Edit Room Package</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="roomPackageName" class="form-label text-primary">Package Name</label>
                        <input type="text" class="form-control frm-input" id="roomPackageName" value="Deluxe Room Package">
                    </div>
                    <div class="mb-3">
                        <label for="roomPackagePrice" class="form-label text-primary">Price</label>
                        <input type="text" class="form-control frm-input" id="roomPackagePrice" value="$300">
                    </div>
                    <div class="mb-3">
                        <label for="foodAvailability" class="frm-label">Availability</label>
                        <input type="number" class="frm-input" id="foodAvailability" value="20" required>
                    </div>
                    <div class="mb-3">
                        <label for="roomPackageDescription" class="form-label text-primary">Description</label>
                        <textarea class="form-control frm-input" id="roomPackageDescription">Includes 3 days stay with complimentary breakfast.</textarea>
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