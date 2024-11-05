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
                                <input type="file" class="form-control frm-input" id="hotel_logo" name="hotel_logo" accept="image/*">
                                <small class="form-text text-white">Upload a logo (JPEG, PNG)</small>
                            </div>
                            <div class="mb-3">
                                <label for="admin_password" class="form-label frm-label fw-bold">Set Admin Password</label>
                                <input type="password" class="form-control frm-input" id="admin_password" name="admin_password" required>
                            </div>
                        </div>
                    </div>
                    <!-- Submit Button across both columns -->
                    <div class="text-center mt-4">
                        <button type="submit" name="submit_installation_data" class="btn btn-primary fw-bold">Complete Setup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>