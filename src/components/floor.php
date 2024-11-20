<div class="mb-4 card-bg-glass p-4">
    <h4>Floor <?php echo $floor; ?></h4>
    <div class="table-responsive">
        <table class="table table-bordered text-white">
            <tbody>
                <tr>
                    <?php
                    // Sample room data for dynamic generation
                    $rooms = [
                        ['number' => '101', 'type' => 'Deluxe', 'capacity' => '2 People', 'price' => '$100/night'],
                        ['number' => '102', 'type' => 'Standard', 'capacity' => '3 People', 'price' => '$80/night'],
                        ['number' => '103', 'type' => 'Suite', 'capacity' => '4 People', 'price' => '$150/night'],
                        // Add more rooms as needed
                    ];

                    foreach ($rooms as $room) { ?>
                        <td class="room-box p-3">
                            <div class="row">
                                <div class="room-number col-6 mb-2">
                                    <strong>Room <?php echo $room['number']; ?></strong>
                                    <p class="room-details">Type: <?php echo $room['type']; ?><br>Capacity: <?php echo $room['capacity']; ?><br>Price: <?php echo $room['price']; ?></p>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn-sm btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#roomDetailsModal" data-room="<?php echo $room['number']; ?>">
                                        Details
                                    </button>
                                    <button type="button" class="btn-sm btn btn-info mt-2" data-bs-toggle="modal" data-bs-target="#editRoomModal" data-room="<?php echo $room['number']; ?>">
                                        Edit
                                    </button>
                                </div>
                            </div>    
                        </td>
                    <?php } ?>
                </tr>
            </tbody>
        </table>
    </div>
</div>
