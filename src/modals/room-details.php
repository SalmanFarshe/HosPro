<!-- Room Details Modal -->
<div class="modal fade" id="roomDetailsModal" tabindex="-1" aria-labelledby="roomDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content card-bg-glass">
            <div class="modal-header">
                <h5 class="frm-label" id="roomDetailsModalLabel">Room Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <label class="frm-label">Room Number:</label>
                        <p class="frm-input" id="room-number"></p>

                        <label class="frm-label">Type:</label>
                        <p class="frm-input" id="room-type"></p>

                        <label class="frm-label">Capacity:</label>
                        <p class="frm-input" id="room-capacity"></p>

                        <label class="frm-label">Price:</label>
                        <p class="frm-input" id="room-price"></p>
                    </div>
                    <div class="col-md-6">
                        <label class="frm-label">Bed:</label>
                        <p class="frm-input" id="room-bed"></p>

                        <label class="frm-label">Bathroom:</label>
                        <p class="frm-input" id="room-bath"></p>

                        <label class="frm-label">Facilities:</label>
                        <p class="frm-input" id="room-facilities"></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="button" data-bs-dismiss="modal">
                    <a href="#" class="button_link">Close</a>
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Edit Room Modal -->
<div class="modal fade" id="editRoomModal" tabindex="-1" aria-labelledby="editRoomModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content card-bg-glass">
            <div class="modal-header">
                <h5 class="frm-label" id="editRoomModalLabel">Edit Room</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="editRoomNumber" class="frm-label">Room Number</label>
                                <input type="text" class="form-control frm-input" id="editRoomNumber" value="101">
                            </div>
                            <div class="mb-3">
                                <label for="editRoomType" class="frm-label">Room Type</label>
                                <input type="text" class="form-control frm-input" id="editRoomType" value="Deluxe">
                            </div>
                            <div class="mb-3">
                                <label for="editRoomCapacity" class="frm-label">Capacity</label>
                                <input type="number" class="form-control frm-input" id="editRoomCapacity" value="2">
                            </div>
                            <div class="mb-3">
                                <label for="editRoomPrice" class="frm-label">Price</label>
                                <input type="text" class="form-control frm-input" id="editRoomPrice" value="$100">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="editRoomBed" class="frm-label">Bed Type</label>
                                <input type="text" class="form-control frm-input" id="editRoomBed" value="King Size Bed">
                            </div>
                            <div class="mb-3">
                                <label for="editRoomBath" class="frm-label">Bathroom</label>
                                <input type="text" class="form-control frm-input" id="editRoomBath" value="En-suite bathroom with shower and bathtub">
                            </div>
                            <div class="mb-3">
                                <label for="editRoomFacilities" class="frm-label">Facilities</label>
                                <input type="text" class="form-control frm-input" id="editRoomFacilities" value="Free Wi-Fi, Air Conditioning, Flat-Screen TV, Minibar, 24-hour Room Service, Sea View Balcony">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="button">
                        <a href="#" class="button_link">Save Changes</a>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
