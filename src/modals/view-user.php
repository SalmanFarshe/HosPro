<div class="modal fade" id="profileUserModal" tabindex="-1" aria-labelledby="profileUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content card-bg-glass">
            <div class="modal-header">
                <h5 class="modal-title" id="profileUserModalLabel">User Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="../../../01.HosPro/assets/img/Dark-Logo_HosPro.png" alt="User Photo" class="img-fluid rounded">
                    </div>

                    <div class="col-md-8">

                        <!-- <h3>John Doe</h3>
                        <p><strong>Phone:</strong> +880 1234567890</p>
                        <p><strong>Address:</strong> Ashulia,Savar,Dhaka</p>
                        <p><strong>Booking Date:</strong> January 1, 2020</p>
                        <p><strong>Status</strong> Present </p> -->

                        <?php
                        // Establish the database connection
                        $conn = new mysqli("localhost", "root", "", "hosprodb");

                        // Check if `id` is passed as a GET parameter
                        if (isset($_GET['id'])) {
                            $user_id = $_GET['id'];

                            // Fetch the details of the individual user
                            $list_events_query = "SELECT * FROM user_details WHERE user_id = $user_id";
                            $result = mysqli_query($conn, $list_events_query);

                            if ($result) {
                                $row = mysqli_fetch_assoc($result);

                                if ($row) {
                        ?>
                                    <div class="col-7">
                                        <h3><strong>Name: </strong> <?php echo $row['user_name']; ?></h3>
                                        <p><strong>Phone: </strong> <?php echo $row['user_phn']; ?></p>
                                        <p><strong>Address: </strong> <?php echo $row['user_address']; ?></p>
                                        <p><strong>Booking Date: </strong> <?php echo $row['user_reg_date']; ?></p>
                                        <p><strong>Status: </strong> Present</p>
                                    </div>
                        <?php
                                } else {
                                    echo "<p>No user found with ID: $user_id</p>";
                                }
                            } else {
                                die("Error fetching data: " . $conn->error);
                            }
                        } else {
                            echo "<p>No user ID specified.</p>";
                        }
                        ?>


                        <?php
                        // $list_events_query = "SELECT * FROM user_details";
                        // $result = mysqli_query($conn, $list_events_query);
                        // if (!$result) {
                        //     die("Invalid query!");
                        // }
                        // while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <!-- <div class="col-7">
                                <h3><strong>Name: </strong> <?php echo $row['user_name'] ?></h3>
                                <p><strong>Email: </strong> <?php echo $row['hotel_email'] ?></p>
                                <p><strong>Phone: </strong> <?php echo $row['user_phn'] ?></p>
                                <p><strong>Address: </strong> <?php echo $row['user_address'] ?></p>

                                <p><strong>Booking Date:</strong> <?php echo $row['user_reg_date'] ?></p>
                                <p><strong>Status: </strong> Present</p>
                            </div> -->
                        <?php
                        // }
                        ?>
                        <!-- <div class="col-5">
                                        <img src="<?php echo $row['hotel_logo']; ?>" alt="Hotel Logo" class="w-100 m-auto">
                                    </div> -->


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>