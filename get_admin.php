<?php
include('connection.php');

$stmt = $conn->prepare("SELECT * from admin");

$stmt->execute();

$admin = $stmt->get_result();

?>