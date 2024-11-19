<?php
    require_once("root.php");
    require_once(BASE_PATH . 'backend/config/config.php');
    $table_name = "user_details";
    $check_table_query = "SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = '$dbname' AND TABLE_NAME = '$table_name'";
    $has_table = mysqli_query($connection, $check_table_query);
    if (mysqli_num_rows($has_table) > 0) {
        //redirecting if the installation already completed
        echo '<meta http-equiv="refresh" content="0; url=http://localhost/01.HosPro/pages/admin.php">';
    } else {
        require_once(BASE_PATH . 'backend/config/create_tables.php');
    }
    if (isset($_POST["submit_installation_data"])) {    
        $hotel_name = $_POST["hotel_name"];
        if (isset($_FILES["hotel_logo"]) && $_FILES["hotel_logo"]["error"] == 0) {
            $hotel_logo = $_FILES["hotel_logo"]["name"];
            $target_dir = "assets/img/uploads/";
            $target_file = $target_dir . basename($hotel_logo);
            if (move_uploaded_file($_FILES["hotel_logo"]["tmp_name"], $target_file)) {
                $admin_password = $_POST["admin_password"];
                $insert_installation_details = "INSERT INTO admin_details (hotel_name, hotel_logo, hotel_email, hotel_address, hotel_phn, admin_password, receptionist_password, manager_password) VALUES ('$hotel_name', '$hotel_logo', '$hotel_email', '$hotel_address', '$hotel_phn', '$admin_password', '$receptionist_password', '$manager_password')";
                mysqli_query($connection, $insert_installation_details);
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "No file uploaded or an error occurred.";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Installing | Hotel Management System</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</head>
<body onload="install_progress()">
    <div class="root-page-wrapper">
        <div class="root-page-inner-wrapper">
            <div class="hospro-content-wrapper bg-glass">
                <div class="">
                    <div class="container">
                        <h3 class="text-center">Installation Progress</h2>
                        <div class="progress">
                            <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                0%
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <button id="runProgramButton" class="text-center m-auto btn btn-primary" onclick="runProgram()">Run Program</button>
                        </div>
                    </div>        
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/installprogress.js"></script>
</body>
</html>
