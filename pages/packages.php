<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages | HosPro</title>
    <?php require_once('../src/components/links.php'); ?>
    <link rel="stylesheet" href="../assets/css/package.css">
</head>
<body>
    <div class="dashboard">
        <?php require_once('../src/components/sidenav.php'); ?>
        <div class="dashboard-app">
            <div class="row">
                <div class="col-md-4">
                    <!-- Room Package Section -->
                    <div class="card card-bg-glass mb-4">
                        <div class="card-header">
                            <h4>Room Package</h4>
                        </div>
                        <div class="card-body">
                            <!-- Room Categories -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="roomCategory" id="deluxeRoom" value="deluxe">
                                        <label class="form-check-label" for="deluxeRoom">
                                            Deluxe Room (Price: $200 per night)
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="roomCategory" id="standardRoom" value="standard">
                                        <label class="form-check-label" for="standardRoom">
                                            Standard Room (Price: $150 per night)
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="roomCategory" id="suiteRoom" value="suite">
                                        <label class="form-check-label" for="suiteRoom">
                                            Suite Room (Price: $300 per night)
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>        
                </div>         
                <div class="col-md-4">
                    <!-- Food Package Section -->
                    <div class="card card-bg-glass mb-4">
                        <div class="card-header">
                            <h4>Food Package</h4>
                        </div>
                        <div class="card-body">
                            <!-- Meal Times -->
                            <h5>Select Meals:</h5>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="breakfast" value="breakfast">
                                        <label class="form-check-label" for="breakfast">
                                            Breakfast
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="lunch" value="lunch">
                                        <label class="form-check-label" for="lunch">
                                            Lunch
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="dinner" value="dinner">
                                        <label class="form-check-label" for="dinner">
                                            Dinner
                                        </label>
                                    </div>
                                </div>
                            </div>
        
                            <!-- Food Customization -->
                            <h5 class="mt-3">Customize Your Food</h5>
                            <div class="form-group card-bg-glass">
                                <label for="foodChoices">Choose your food (optional):</label>
                                <select class="form-control" id="foodChoices" multiple>
                                    <option value="pizza">Pizza</option>
                                    <option value="pasta">Pasta</option>
                                    <option value="burger">Burger</option>
                                    <option value="salad">Salad</option>
                                    <option value="steak">Steak</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>         
                <div class="col-md-4">
                    <!-- Total Calculation Section -->
                    <div class="card mb-4 card-bg-glass">
                        <div class="card-header">
                            <h4>Total Cost</h4>
                        </div>
                        <div class="card-body">
                            <p><strong>Room Package:</strong> <span id="roomCost">$0.00</span></p>
                            <p><strong>Food Package:</strong> <span id="foodCost">$0.00</span></p>
                            <h5><strong>Total:</strong> <span id="totalCost">$0.00</span></h5>
                        </div>
                    </div>
                </div>         
            </div>   
<!-- Global Food Menu Card -->
                <div class="row mt-5">
                    <div class="col-md-12">
                        <div class="card card-bg-glass">
                            <div class="card-body">
                                <h5 class="card-title">Select Your Own Food</h5>
                                <p class="card-text">Customize your food package by selecting your preferred dishes from the global food menu.</p>
                                <form>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="food1">
                                        <label class="form-check-label" for="food1">Chicken Sandwich - $10</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="food2">
                                        <label class="form-check-label" for="food2">Pasta Alfredo - $15</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="food3">
                                        <label class="form-check-label" for="food3">Caesar Salad - $8</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="food4">
                                        <label class="form-check-label" for="food4">Grilled Salmon - $20</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="food5">
                                        <label class="form-check-label" for="food5">Chocolate Cake - $7</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3">Add to Package</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="container mt-5">
                <div class="row">
                    <!-- Deluxe Room Card -->
                    <div class="col-md-4">
                        <div class="card card-bg-glass">
                            <img src="../assets/img/delux.jpg" class="card-img-top" alt="Deluxe Room">
                            <div class="card-body">
                                <h5 class="card-title">Deluxe Room</h5>
                                <p class="card-text">
                                    A luxurious room offering modern amenities including a king-sized bed, 
                                    private balcony, free Wi-Fi, air conditioning, and a flat-screen TV. 
                                    Perfect for a comfortable and relaxing stay.
                                </p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item card-bg-glass"><strong>Size:</strong> 40m²</li>
                                    <li class="list-group-item card-bg-glass"><strong>View:</strong> Sea View</li>
                                    <li class="list-group-item card-bg-glass"><strong>Price:</strong> $200 per night</li>
                                </ul>
                                <a href="#" class="btn btn-primary mt-3">Select Deluxe Room</a>
                            </div>
                        </div>
                    </div>

                    <!-- Standard Room Card -->
                    <div class="col-md-4">
                        <div class="card card-bg-glass">
                            <img src="../assets/img/standard.jpg" class="card-img-top" alt="Standard Room">
                            <div class="card-body">
                                <h5 class="card-title">Standard Room</h5>
                                <p class="card-text">
                                    A comfortable and affordable room with essential facilities including 
                                    a queen-sized bed, free Wi-Fi, air conditioning, and a work desk. 
                                    Ideal for budget-conscious travelers.
                                </p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item card-bg-glass"><strong>Size:</strong> 30m²</li>
                                    <li class="list-group-item card-bg-glass"><strong>View:</strong> Garden View</li>
                                    <li class="list-group-item card-bg-glass"><strong>Price:</strong> $150 per night</li>
                                </ul>
                                <a href="#" class="btn btn-primary mt-3">Select Standard Room</a>
                            </div>
                        </div>
                    </div>

                    <!-- Suite Room Card -->
                    <div class="col-md-4">
                        <div class="card card-bg-glass">
                            <img src="../assets/img/suites.jpg" class="card-img-top" alt="Suite Room">
                            <div class="card-body">
                                <h5 class="card-title">Suite Room</h5>
                                <p class="card-text">
                                    A spacious suite offering premium amenities, a king-sized bed, 
                                    a separate living area, free Wi-Fi, minibar, and a luxurious bathroom 
                                    with a Jacuzzi. Ideal for those seeking luxury.
                                </p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item card-bg-glass"><strong>Size:</strong> 60m²</li>
                                    <li class="list-group-item card-bg-glass"><strong>View:</strong> City View</li>
                                    <li class="list-group-item card-bg-glass"><strong>Price:</strong> $300 per night</li>
                                </ul>
                                <a href="#" class="btn btn-primary mt-3">Select Suite Room</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <!-- Breakfast Package Card -->
                    <div class="col-md-4">
                        <div class="card card-bg-glass">
                            <img src="../assets/img/breakfast.jpg" class="card-img-top" alt="Breakfast Package">
                            <div class="card-body">
                                <h5 class="card-title">Breakfast Package</h5>
                                <p class="card-text">
                                    Start your day with a delicious breakfast, including fresh juice, coffee, 
                                    eggs, bread, and more. A healthy and hearty way to kick off the day.
                                </p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item card-bg-glass"><strong>Includes:</strong> Eggs, Toast, Coffee</li>
                                    <li class="list-group-item card-bg-glass"><strong>Price:</strong> $20</li>
                                </ul>
                                <a href="#" class="btn btn-primary mt-3">Select Breakfast Package</a>
                            </div>
                        </div>
                    </div>

                    <!-- Lunch Package Card -->
                    <div class="col-md-4">
                        <div class="card card-bg-glass">
                            <img src="../assets/img/lunch.jpg" class="card-img-top" alt="Lunch Package">
                            <div class="card-body">
                                <h5 class="card-title">Lunch Package</h5>
                                <p class="card-text">
                                    Enjoy a fulfilling lunch with a variety of dishes including soups, salads, 
                                    grilled meats, and more. A complete meal to recharge your day.
                                </p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item card-bg-glass"><strong>Includes:</strong> Soup, Salad, Chicken</li>
                                    <li class="list-group-item card-bg-glass"><strong>Price:</strong> $35</li>
                                </ul>
                                <a href="#" class="btn btn-primary mt-3">Select Lunch Package</a>
                            </div>
                        </div>
                    </div>

                    <!-- Dinner Package Card -->
                    <div class="col-md-4">
                        <div class="card card-bg-glass">
                            <img src="../assets/img/dinner.jpg" class="card-img-top" alt="Dinner Package">
                            <div class="card-body">
                                <h5 class="card-title">Dinner Package</h5>
                                <p class="card-text">
                                    End your day with a luxurious dinner featuring gourmet cuisine, wine, and 
                                    dessert. Perfect for a relaxing evening after a long day.
                                </p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item card-bg-glass"><strong>Includes:</strong> Steak, Wine, Dessert</li>
                                    <li class="list-group-item card-bg-glass"><strong>Price:</strong> $50</li>
                                </ul>
                                <a href="#" class="btn btn-primary mt-3">Select Dinner Package</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/js/app.js"></script>
</body>
</html>