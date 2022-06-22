<?php
include('connection.php');

//determine page no
if(isset($_GET['page_no']) && $_GET['page_no'] != ""){
    $page_no =$_GET['page_no'];
}else{
    $page_no = 1;
}

//2. return number of admins
$stmt1 = $conn->prepare("SELECT count(*) from admin");
$stmt1->execute();
$stmt1->bind_result($total_admin);
$stmt1->store_result();
$stmt1->fetch();

//3 admin per page
$total_admin_per_page = 4;
$offset = ($page_no - 1) * $total_admin_per_page;
$total_no_of_pages = ceil( $total_admin/$total_admin_per_page);

//4.get products
$stmt2 = $conn->prepare("SELECT * from admin limit $offset ,$total_admin_per_page");
$stmt2->execute();
$admin = $stmt2->get_result();

?>