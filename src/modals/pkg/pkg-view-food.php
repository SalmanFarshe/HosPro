<!-- Modal for Viewing Food Package -->
<div class="modal fade" id="viewFoodModal" tabindex="-1" aria-labelledby="viewFoodModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-glass">
            <div class="modal-header">
                <h5 class="modal-title" id="viewFoodModalLabel">Food Package Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>ID:</strong> <span id="food_package_id"></span></p>
                <p><strong>Package Name:</strong> <span id="food_package_name"></span></p>
                <p><strong>Description:</strong> <span id="food_package_details"></span></p>
                <p><strong>Price:</strong> <span id="food_package_price"></span></p>
                <p><strong>Availability:</strong> <span id="food_package_availability"></span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn button2" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
