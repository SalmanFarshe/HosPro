<?php
    require_once("root.php");
    require_once(BASE_PATH . 'backend/config/config.php');
    require_once(BASE_PATH . 'backend/config/create_tables.php');
?>
<!-- this file contains the root directory of the system -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Installing | Hotel Management System</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <style>
        .progress {
            height: 12px;
        }
        #runProgramButton {
            display: none;
        }
    </style>
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
