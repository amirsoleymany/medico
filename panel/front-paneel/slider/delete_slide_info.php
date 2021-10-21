<head>
    <title>حذف دسته اسلایدی</title>
</head>
<?php
include_once '../function/f-slider.php';
$id = $_GET['id'];
$res = select_slide($id);
unlink($res->dir);
delete_info_slider($id);
header("location:dashboard.php?page=import-slider&id={$res->parent}");
?>
