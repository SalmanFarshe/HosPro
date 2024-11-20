<?php
require_once("../config/config.php");

if (isset($_POST['id'])) {
    $package_id = $_POST['id'];
    $package_name = $_POST['name'];
    $package_price = $_POST['price'];
    $package_availability = $_POST['availability'];
    $package_description = $_POST['description'];

    $query = "UPDATE food_package_details 
              SET food_package_name = '$package_name',
                  food_package_price = '$package_price',
                  food_package_availability = '$package_availability',
                  food_package_details = '$package_description'
              WHERE food_package_id = '$package_id'";

    if (mysqli_query($connection, $query)) {
        echo "success";
    } else {
        echo "error: " . mysqli_error($connection);
    }
}
?>
