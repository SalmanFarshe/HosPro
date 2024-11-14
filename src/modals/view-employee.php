<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content card-bg-glass">
            <div class="modal-header">
                <h5 class="modal-title" id="profileModalLabel">Employee Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="../../../01.HosPro/assets/img/Dark-Logo_HosPro.png" alt="Employee Photo" class="img-fluid rounded">
                    </div>
                    <div class="col-md-8">
                        <h3></h3>
                        <p><strong>Position:</strong></p>
                        <p><strong>Email:</strong></p>
                        <p><strong>Phone:</strong></p>
                        <p><strong>Address:</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function viewEmployeeProfile(employeeId) {
    // AJAX request
    $.ajax({
        url: '../backend/controller/get-employee-profile.php',
        type: 'POST',
        data: { id: employeeId },
        success: function(response) {
            // Parse the JSON response
            const data = JSON.parse(response);

            // Populate the modal with employee data
            $('#profileModalLabel').text('Employee Profile: ' + data.employee_full_name);
            $('.modal-body .col-md-8 h3').text(data.employee_full_name);
            $('.modal-body .col-md-8 p:nth-of-type(1)').html('<strong>Position:</strong> ' + data.employee_role);
            $('.modal-body .col-md-8 p:nth-of-type(2)').html('<strong>Email:</strong> ' + data.employee_email);
            $('.modal-body .col-md-8 p:nth-of-type(3)').html('<strong>Phone:</strong> ' + data.employee_phn);
            $('.modal-body .col-md-8 p:nth-of-type(4)').html('<strong>Address:</strong> ' + data.employee_address);
        }
    });
}
</script>
