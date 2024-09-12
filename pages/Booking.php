<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

    <style>
        .book {
            border: 2px black solid;
            margin: 5%;
            margin-left: 10%;
            margin-right: 10%;
            padding: 3%;
        }
    </style>

</head>

<body>
    <div class="book rounded-3 d-flex justify-content-center align-items-center">
        <div class="">
            <div class="">
                <div class="">
                    <div class="text-center">
                        <h5 class="fs-2 pb-4">Booking Form</h5>
                    </div>

                    <div class="">
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="" placeholder="Your Full Name">
                            </div>
                            <div class="mb-3 col-6">
                                <label for="" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="" placeholder="Your Phone Number">
                            </div>
                            <div class="mb-3 col-6">
                                <label for="" class="form-label">Room Type</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select Your Room Type</option>
                                    <option value="Luxuryr">Luxury Room</option>
                                    <option value="deluxs">Delux Room</option>
                                    <option value="premierr">Premier Room</option>
                                    <option value="double">Claasie Room</option>
                                    <option value="single">Normal Room</option>
                                </select>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="" class="form-label">No. of Guest</label>
                                <input type="text" class="form-control" id="" placeholder="">
                            </div>

                            <div class="mb-3 col-6">
                                <label for="inputAddress" class="form-label">Address</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                            </div>
                            <div class="mb-3 col-6">
                                <label for="inputAddress2" class="form-label">Address 2</label>
                                <input type="text" class="form-control" id="inputAddress2"
                                    placeholder="Apartment, studio, or floor">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="inputCity" class="form-label">City</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="inputState" class="form-label">Country</label>
                                <select id="inputState" class="form-select">
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
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Zip</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>

                            <div class="mb-3 col-6">
                                <label for="" class="form-label">Arrival Date</label>
                                <input type="date" class="form-control" id="" placeholder="Write Description Here">
                            </div>
                            <div class="mb-3 col-6">
                                <label for="" class="form-label">Arrival Time</label>
                                <input type="time" class="form-control" id="" placeholder="Write Description Here">
                            </div>

                            <div class="mb-3 col-6">
                                <label for="" class="form-label">Departure Date</label>
                                <input type="date" class="form-control" id="" placeholder="Write Description Here">
                            </div>
                            <div class="mb-3 col-6">
                                <label for="" class="form-label">Departure Time</label>
                                <input type="time" class="form-control" id="" placeholder="Write Description Here">
                            </div>
                            <div class="mb-3 col-6">
                                <label for="" class="form-label">Do you have any special request?</label>
                                <textarea class="form-control" id="" placeholder="Write Here"></textarea>
                            </div>

                        </div>
                    </div>

                    <div class="">
                        <button type="button" class="btn btn-success w-100">Booking</button>
                    </div>
                </div>
            </div>
        </div>




    </div>
</body>

</html>