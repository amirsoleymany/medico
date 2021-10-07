<?php
include_once '../function/f-category.php';
$id_comment = $_GET['id'];
delete_category($id_comment);
header("location:dashboard.?page=list-category");
?>

