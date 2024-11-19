<?php
require_once('../backend/config/config.php');
?>

<div class="modal fade" id="addEventModal" tabindex="-1" aria-labelledby="addEventModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content card-bg-glass">
            <div class="modal-header">
                <h5 class="modal-title" id="addUserModalLabel">Add Events</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form id="addEventForm" action="" method="post">
                    <div class="row">
                        <!-- Left Column -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="eventName" class="form-label frm-label">Event Name</label>
                                <input type="text" name="event_name" class="form-control frm-input" id="eventName" required>
                            </div>
                            <div class="mb-3">
                                <label for="eventDate" class="form-label frm-label">Event Date</label>
                                <input type="date" name="event_date" class="form-control frm-input" id="eventDate" required>
                            </div>
                            <div class="mb-3">
                                <label for="eventCategory" class="form-label frm-label">Category</label>
                                <select name="event_category" class="form-select select-cat" id="eventCategory" required>
                                    <option value="Conference">Conference</option>
                                    <option value="Workshop">Workshop</option>
                                    <option value="Seminar">Seminar</option>
                                    <option value="Program">Program</option>
                                </select>
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="eventDescription" class="form-label frm-label">Event Description</label>
                                <textarea class="form-control frm-input" name="event_description" id="eventDescription" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="eventPrice" class="form-label frm-label">Event Price</label>
                                <input type="number" name="event_price" class="form-control frm-input" id="eventPrice" required>
                            </div>
                            <div class="mb-3">
                                <label for="eventStatus" class="form-label frm-label">Event Status</label>
                                <select class="form-select select-sts" name="event_status" id="eventStatus">
                                    <option value="Upcoming">Upcoming</option>
                                    <option value="Ongoing">Ongoing</option>
                                    <option value="Completed">Completed</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="modal-footer">
                        <button type="submit" class="button w-100" name="submit">
                            <a href="#" class="button_link">
                                Add Event
                            </a>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
if (isset($_POST['submit'])) {
    $event_name = $_POST['event_name'];
    $event_date = $_POST['event_date'];
    $event_category = $_POST['event_category'];
    $event_price = $_POST['event_price'];
    $event_description = $_POST['event_description'];
    $event_status = $_POST['event_status'];
    $add_event_query = "INSERT INTO `events_details` (`events_name`, `event_date`, `event_price`, `event_description`, `event_category`, `event_status`) VALUES ( '$event_name', '$event_date', '$event_price', '$event_description', '$event_category', '$event_status')";

    $result = mysqli_query($connection, $add_event_query);
    if ($result) {
    } else {
        die("Connection failed");
    }
}
?>