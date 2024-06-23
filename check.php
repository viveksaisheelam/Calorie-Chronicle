<?php 
$conn = new mysqli('sql113.infinityfree.com', 'if0_35668161', 'pDaIsKhXBQhH8WY', 'if0_35668161_Project12');
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} 
echo "connection successfull";
?>