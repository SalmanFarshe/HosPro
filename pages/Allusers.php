<!DOCTYPE html>
<html lang="en">

<head>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All Users | HosPro</title>
    <style>
    .container {
        width: 100%;
        margin: 0 auto;
    }

    /* Table Styles */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    th {
        background-color: #f2f2f2;
    }

    /* Pagination Styles */
    .pagination {
        margin-top: 20px;
        text-align: center;
    }

    .pagination a {
        margin: 0 5px;
        text-decoration: none;
        padding: 8px 16px;
        border: 1px solid #ddd;
        color: #333;
        display: inline-block;
    }

    .pagination a.active {
        background-color: #4CAF50;
        color: white;
        border: 1px solid #4CAF50;
    }

    .pagination a:hover {
        background-color: #ddd;
    }

    /* Responsive Design */
    .table-container {
        width: 100%;
        overflow-x: auto;
        /* Horizontal scroll on smaller screens */
    }
    .box{
        float: right;
    }

    /* @media (max-width: 768px) {
        table {
            width: 100%;
            font-size: 14px;
        }

        th,
        td {
            padding: 6px;
        }
    }

    @media (max-width: 480px) {

        th,
        td {
            padding: 4px;
            font-size: 12px;
        }

        .pagination a {
            padding: 5px 10px;
            font-size: 12px;
        }
    } */
    </style>
</head>

<body>


    <div>
        <form class="box my-4" action="your-server-side-script" method="GET">
            <label for="search">Search:</label>
            <input type="text" id="search" name="search" value="">
            <input type="submit" value="Search">
        </form>


        <div class="table-container">

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Booking Id</th>
                        <th>Phone No.</th>
                        <th>Address</th>
                        <th>Payment</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Air John Doe</td>
                        <td>john@example.com</td>
                        <td>000101</td>
                        <td>01234567890</td>
                        <td>ashulia ,savar</td>
                        <td>
                            paid : 1500 <br>
                            due : 1500
                        </td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Bir Jane Smith</td>
                        <td>jane@example.com</td>
                        <td>000101</td>
                        <td>01234567890</td>
                        <td>ashulia ,savar</td>
                        <td>
                            paid : 1500 <br>
                            due : 1500
                        </td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Cir John Doe</td>
                        <td>john@example.com</td>
                        <td>000101</td>
                        <td>01234567890</td>
                        <td>ashulia ,savar</td>
                        <td>
                            paid : 1500 <br>
                            due : 1500
                        </td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Dir Jane Smith</td>
                        <td>jane@example.com</td>
                        <td>000101</td>
                        <td>01234567890</td>
                        <td>ashulia ,savar</td>
                        <td>
                            paid : 1500 <br>
                            due : 1500
                        </td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>John Doe</td>
                        <td>john@example.com</td>
                        <td>000101</td>
                        <td>01234567890</td>
                        <td>ashulia ,savar</td>
                        <td>
                            paid : 1500 <br>
                            due : 1500
                        </td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Jane Smith</td>
                        <td>jane@example.com</td>
                        <td>000101</td>
                        <td>01234567890</td>
                        <td>ashulia ,savar</td>
                        <td>
                            paid : 1500 <br>
                            due : 1500
                        </td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Zi John Doe</td>
                        <td>john@example.com</td>
                        <td>000101</td>
                        <td>01234567890</td>
                        <td>ashulia ,savar</td>
                        <td>
                            paid : 1500 <br>
                            due : 1500
                        </td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Xin Jane Smith</td>
                        <td>jane@example.com</td>
                        <td>000101</td>
                        <td>01234567890</td>
                        <td>ashulia ,savar</td>
                        <td>
                            paid : 1500 <br>
                            due : 1500
                        </td>
                        <td>Yes</td>
                    </tr>
                </tbody>
            </table>
        </div>


        <div class="pagination box mb-4">
            <a href="?page=1" class="active">1</a>
            <a href="?page=2">2</a>
            <a href="?page=3">3</a>
            <a href="?page=4">4</a>
        </div>
    </div>

</body>

</html>