<head>
    <title>حذف گروه صفحات ایجادشده</title>
</head>
<?php
$id = $_GET['id'];
include_once '../function/f-page.php';
delete_gp_page($id);
$result = "ok_delete";
header("location:dashboard.php?page=setting_page&op={$result}");
?>
