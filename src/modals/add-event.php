<?php
require_once('../backend/config/config.php');
?>

<div class="modal fade" id="addEventModal" tabindex="-1" aria-labelledby="addEventModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content card-bg-glass">
            <div class="modal-body">
                
                <form id="addEventForm" action="events.php" method="post">
                    <div class="mb-3">
                        <label for="eventName" class="form-label frm-label">Event Name</label>
                        <input type="text" name="event_name" class="form-control frm-input" id="eventName" required>
                    </div>
                    <div class="mb-3">
                        <label for="eventDate" class="form-label frm-label">Event Date</label>
                        <input type="date" name="date" class="form-control frm-input" id="eventDate" required>
                    </div>
                    <div class="mb-3">
                        <label for="eventCategory" class="form-label frm-label">Category</label>
                        <select name="category" class="form-select select-cat" id="eventCategory" required>
                            <option value="conference">Conference</option>
                            <option value="workshop">Workshop</option>
                            <option value="seminar">Seminar</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="eventDescription" class="form-label frm-label">Description</label>
                        <textarea class="form-control frm-input" name="description" id="eventDescription" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="eventStatus" class="form-label frm-label">Status</label>
                        <select class="form-select select-sts" name="status" id="eventStatus">
                            <option value="upcoming">Upcoming</option>
                            <option value="ongoing">Ongoing</option>
                            <option value="completed">Completed</option>
                        </select>
                    </div>
                    <button type="submit" class="button w-100" name="submit">
                        <a href="#" class="button_link">
                            Add Event
                        </a>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php 
if (isset($_POST['submit'])) {
    $event_name = $_POST['event_name'];
    $date = $_POST['date'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $sql = "INSERT INTO `events_details` (`events_name`, `event_date`, `event_amount`) VALUES ( '$event_name', '$date', '$category')";
  
    $result = mysqli_query($connection, $sql);
    if($result){
        
    }
    else{
      die("Connection failed");
    }
  }
?>