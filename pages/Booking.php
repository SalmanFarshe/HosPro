<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking | HosPro</title>
    <?php require_once('../src/components/links.php'); ?>
    <link rel="stylesheet" href="../assets/css/customize.css">
    <link rel="stylesheet" href="../assets/css/billandpayment.css">
    <link rel="stylesheet" href="../assets/css/dash.css">
</head>
<body>
    <div class="dashboard align-items-center justify-content-center">
        <div>
            <div class="container my-4">
                <div class="row customiser_wrapper justify-items-center card-bg-glass py-3">

                <div class="text-center">
                        <h5 class="fs-2 pb-4">Booking Form</h5>
                    </div>

                    <div class="">
                        <div class="row">
                            <div class="mb-1 col-6">
                                <label for="" class="form-label">Full Name</label>
                                <input type="text" class="frm-input form-control" id="" placeholder="Your Full Name">
                            </div>
                            <div class="mb-1 col-6">
                                <label for="" class="form-label">Phone Number</label>
                                <input type="text" class="frm-input form-control" id="" placeholder="Your Phone Number">
                            </div>
                            <div class="mb-1 col-6">
                                <label for="" class="form-label">Room Type</label>
                                <select class="form-select frm-input" aria-label="Default select example">
                                    <option selected>Select Your Room Type</option>
                                    <option value="Luxuryr">Luxury Room</option>
                                    <option value="deluxs">Delux Room</option>
                                    <option value="premierr">Premier Room</option>
                                    <option value="double">Claasie Room</option>
                                    <option value="single">Normal Room</option>
                                </select>
                            </div>
                            <div class="mb-1 col-6">
                                <label for="" class="form-label">No. of Guest</label>
                                <input type="text" class="frm-input form-control" id="" placeholder="">
                            </div>

                            <div class="mb-1 col-6">
                                <label for="inputAddress" class="form-label">Address</label>
                                <input type="text" class="frm-input form-control" id="inputAddress" placeholder="1234 Main St">
                            </div>
                            <div class="mb-1 col-6">
                                <label for="inputAddress2" class="form-label">Address 2</label>
                                <input type="text" class="frm-input form-control" id="inputAddress2"
                                    placeholder="Apartment, studio, or floor">
                            </div>
                            <div class="mb-1 col-md-6">
                                <label for="inputCity" class="form-label">City</label>
                                <input type="text" class="frm-input form-control" id="inputCity">
                            </div>
                            <div class="mb-1 col-md-4">
                                <label for="inputState" class="form-label">Country</label>
                                <select id="inputState" class="form-select frm-input">
                                    <option selected>Choose...</option>
                                    <option>Bangladesh</option>
                                    <option>Pakistan</option>
                                    <option>Nepal</option>
                                    <option>Sri Lanka</option>
                                    <option>India</option>
                                    <option>Indonisia</option>
                                    <option>Maldives</option>
                                    <option>Singapore</option>
                                    <option>Malesiya</option>
                                    <option>China</option>
                                </select>
                            </div>
                            <div class="mb-1 col-md-2">
                                <label for="inputZip" class="form-label">Zip</label>
                                <input type="text" class="frm-input form-control" id="inputZip">
                            </div>

                            <div class="mb-1 col-6">
                                <label for="" class="form-label">Arrival Date</label>
                                <input type="date" class="frm-input form-control" id="" placeholder="Write Description Here">
                            </div>
                            <div class="mb-1 col-6">
                                <label for="" class="form-label">Arrival Time</label>
                                <input type="time" class="frm-input form-control" id="" placeholder="Write Description Here">
                            </div>

                            <div class="mb-1 col-6">
                                <label for="" class="form-label">Departure Date</label>
                                <input type="date" class="frm-input form-control" id="" placeholder="Write Description Here">
                            </div>
                            <div class="mb-1 col-6">
                                <label for="" class="form-label">Departure Time</label>
                                <input type="time" class="frm-input form-control" id="" placeholder="Write Description Here">
                            </div>
                            <div class="mb-1 col-6">
                                <label for="" class="form-label">Do you have any special request?</label>
                                <textarea class="frm-input form-control" id="" placeholder="Write Here"></textarea>
                            </div>

                        </div>
                    </div>
                    <div class="">
                        <button type="button" class="btn btn-success w-100 button m-1">Booking</button>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <script src="../assets/js/chart.js"></script>
</body
</html>