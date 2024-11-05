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
            <div class="w-50 bg-glass pt-2 pb-2 p-3 rounded-2">
                <form method="post" action="install_process.php" enctype="multipart/form-data">
                    <div class="row">
                        <h3 class="text-center mb-3">Installation Setup</h3>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <h5 class="text-center mb-3">Basic Info</h5>
                                <label for="hotel_name" class="form-label frm-label fw-bold">Hotel Name</label>
                                <input type="text" class="form-control frm-input" id="hotel_name" name="hotel_name" required>
                            </div>
                            <div class="mb-3">
                                <label for="hotel_logo" class="form-label frm-label fw-bold">Hotel Logo</label>
                                <input type="file" class="form-control frm-input" id="hotel_logo" name="hotel_logo" accept="image/*" required>
                                <small class="form-text text-white">Upload a logo (JPEG, PNG)</small>
                            </div>
                            <div class="mb-3">
                                <h5 class="mt-4 mb-3 text-center">Set Admin Password</h5>
                                <label for="admin_password" class="form-label frm-label fw-bold">Set Admin Password</label>
                                <input type="password" class="form-control frm-input" id="admin_password" name="admin_password" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <h5 class="mb-3 text-center">Add Receptionist</h5>
                                <label for="receptionist_username" class="form-label fw-bold frm-label">Receptionist Username</label>
                                <input type="text" class="form-control frm-input" id="receptionist_username" name="receptionist_username">
                            </div>
                            <div class="mb-3">
                                <label for="receptionist_password" class="form-label fw-bold frm-label">Receptionist Password</label>
                                <input type="password" class="form-control frm-input" id="receptionist_password" name="receptionist_password">
                            </div>
                             <div class="mb-3">
                                <h5 class="mt-5 pt-2 mb-3 text-center">Set Manager Password</h5>
                                <label for="manager_password" class="form-label frm-label fw-bold">Set Admin Password</label>
                                <input type="password" class="form-control frm-input" id="manager_password" name="manager_password">
                            </div>
                        </div>
                    </div>
                    <!-- Submit Button across both columns -->
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary fw-bold">Complete Setup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>