<?php
// $HOSTNAME='localhost';
// $USERNAME='root';
// $PASSWORD='';
// $DATABaSE='all';

$conn = new mysqli("localhost", "root", "", "all");

if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}
echo "";
?>