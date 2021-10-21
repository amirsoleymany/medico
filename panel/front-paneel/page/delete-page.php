<head>
    <title>حذف صفحات ایجاد شده</title>
</head>
<?php
$id = $_GET['id'];
include_once '../function/f-page.php';
delete_page($id);
$result = "ok_delete_page";
header("location:dashboard.php?page=setting_page&op={$result}");
?>
