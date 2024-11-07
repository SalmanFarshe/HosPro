<?php
    require_once("root.php");
    require_once(BASE_PATH . 'backend/config/config.php');

    $table_name = "admin_details";
    $check_table_query = "SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = '$dbname' AND TABLE_NAME = '$table_name'";
    $has_table = mysqli_query($connection, $check_table_query);
    if (mysqli_num_rows($has_table) > 0) {
        //redirecting if the installation already completed
        echo '<meta http-equiv="refresh" content="0; url=http://localhost/01.HosPro/pages/admin.php">';
    } else {
        $admin_details_table = "CREATE TABLE IF NOT EXISTS admin_details (
            id INT PRIMARY KEY AUTO_INCREMENT,
            hotel_name VARCHAR(100) NOT NULL,
            hotel_logo VARCHAR(255),
            admin_password VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";
        mysqli_query($connection, $admin_details_table);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Installation Setup | HosPro</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="root-page-wrapper">
        <div class="root-page-inner-wrapper">
            <div class="w-25 bg-glass pt-2 pb-2 p-3 rounded-2">
                <form method="post" action="install_process.php" enctype="multipart/form-data">
                    <div class="row">
                        <h3 class="text-center mb-3">Installation Setup</h3>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="hotel_name" class="form-label frm-label fw-bold">Hotel Name</label>
                                <input type="text" class="form-control frm-input" id="hotel_name" name="hotel_name" required>
                            </div>
                            <div class="mb-3">
                                <label for="hotel_logo" class="form-label frm-label fw-bold">Hotel Logo</label>
                                <input type="file" class="form-control frm-input" id="hotel_logo" name="hotel_logo" accept="image/*" required>
                                <small class="form-text text-white">Upload a logo (JPEG, PNG)</small>
                            </div>
                            <div class="mb-3">
                                <label for="admin_password" class="form-label frm-label fw-bold">Set Admin Password</label>
                                <input type="password" class="form-control frm-input" id="admin_password" name="admin_password" required>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" name="submit_installation_data" class="btn btn-primary fw-bold">Complete Setup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>