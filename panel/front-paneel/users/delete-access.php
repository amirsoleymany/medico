<head>
    <title>حذف مجوز دسترسی</title>
</head>
<?php
include_once '../function/f-users.php';
$id = $_GET['id'];
delete_access($id);
header("location:dashboard.php?page=config-access");
?>
