<head>
    <title>حذف اسلایدرها</title>
</head>
<?php
include_once '../function/f-slider.php';
$id = $_GET['id'];
$res = select_slider($id);
rmdir($res->dir);
delete_info_slider($id);
header("location:dashboard.php?page=setting-slider");
?>