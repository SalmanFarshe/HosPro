<?php
require_once("../config/config.php");

if (isset($_POST['id'])) {
    $package_id = $_POST['id'];

    $query = "SELECT * FROM food_package_details WHERE food_package_id = '$package_id'";
    $result = mysqli_query($connection, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
        echo json_encode($data);  // Return the data as a JSON response
    } else {
        echo json_encode(['error' => 'Package not found']);
    }
}
?>
