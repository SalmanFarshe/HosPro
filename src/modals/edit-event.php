<div class="modal fade" id="editEventModal" tabindex="-1" aria-labelledby="addEventModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content card-bg-glass">
            <div class="modal-body">
                <form id="addEventForm">
                    <div class="mb-3">
                        <label for="eventName" class="form-label frm-label">Event Name</label>
                        <input type="text" class="form-control frm-input" id="eventName" required>
                    </div>
                    <div class="mb-3">
                        <label for="eventDate" class="form-label frm-label">Event Date</label>
                        <input type="date" class="form-control frm-input" id="eventDate" required>
                    </div>
                    <div class="mb-3">
                        <label for="eventCategory" class="form-label frm-label">Category</label>
                        <select class="form-select select-cat" id="eventCategory" required>
                            <option value="conference">Conference</option>
                            <option value="workshop">Workshop</option>
                            <option value="seminar">Seminar</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="eventDescription" class="form-label frm-label">Description</label>
                        <textarea class="form-control frm-input" id="eventDescription" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="eventStatus" class="form-label frm-label">Status</label>
                        <select class="form-select select-sts" id="eventStatus">
                            <option value="upcoming">Upcoming</option>
                            <option value="ongoing">Ongoing</option>
                            <option value="completed">Completed</option>
                        </select>
                    </div>
                    <button type="submit" class="button w-100">
                        <a href="#" class="button_link">
                            Update Event
                        </a>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>