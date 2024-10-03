<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emploee | HosPro</title>
    <?php require_once('../src/components/links.php'); ?>
    <link rel="stylesheet" href="../assets/css/billandpayment.css">
</head>
<body>
    <div class="dashboard">
        <?php require_once('../src/components/sidenav.php'); ?>
        <div class="dashboard-app">
            <div class="card card-bg-glass">
                <div class="text-center">
                    <div class="">
                        <img src="../assets/img/Dark-Logo_HosPro.png" alt="User Photo" class="img-fluid rounded">
                    </div>
                    <div class="">
                        <h3><strong>Company Name: </strong>HosPro</h3>
                        <p><strong>Email:</strong> HosPro24/7@gamil.com</p>
                        <p><strong>Phone:</strong> +880 1234567890</p>
                        <p><strong>Address:</strong> Ashulia,Savar,Dhaka</p>
                        <p><strong>Status:</strong> Present </p>
                        
                    </div>
                    <button type="button" class="button" data-bs-toggle="modal" data-bs-target="#updateProfileModal">
                            <a href="#" class="button_link">
                                Update Profile <i class="fa-solid fa-angles-up"></i>
                            </a>
                        </button>
                </div>

            </div>

            <?php require_once("../src/modals/update-profile.php"); ?>
        </div>
        
    </div>
    <script src="../assets/js/chart.js"></script>

</body>
</html>