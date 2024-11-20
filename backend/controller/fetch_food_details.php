<?php
require_once("../config/config.php");

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($connection, $_GET['id']);

    $query = "SELECT * FROM food_package_details WHERE food_package_id = '$id'";
    $result = mysqli_query($connection, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
        echo json_encode($data);
    } else {
        echo json_encode(["error" => "No data found."]);
    }
} else {
    echo json_encode(["error" => "Invalid request."]);
}
?>
