<?php
include_once '../function/f-category.php';
$id_comment = $_GET['id_comment'];
delete_category($id_comment);
header("location: dashboard.php?pages=list-comment");
?>

