<!-- Modal for Adding Room Package -->
<div class="modal fade" id="addRoomPackageModal" tabindex="-1" aria-labelledby="addRoomPackageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-glass">
            <div class="modal-header">
                <h5 class="modal-title" id="addRoomPackageModalLabel">Add Room Package</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="roomType" class="frm-label">Room Type</label>
                        <input type="text" class="frm-input" id="roomType" required>
                    </div>
                    <div class="mb-3">
                        <label for="roomPrice" class="frm-label">Price</label>
                        <input type="number" class="frm-input" id="roomPrice" required>
                    </div>
                    <div class="mb-3">
                        <label for="roomDuration" class="frm-label">Duration (nights)</label>
                        <input type="number" class="frm-input" id="roomDuration" required>
                    </div>
                    <div class="mb-3">
                        <label for="roomDescription" class="frm-label">Description</label>
                        <textarea class="frm-input" id="roomDescription" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn button">Add Room Package</button>
                </form>
            </div>
        </div>
    </div>
</div>