<head>
    <title>حذف ابزارک</title>
</head>
<?php

include_once '../function/f-widget.php';
$id = $_GET['id'];
delete_widget($id);
header("location:dashboard.php?page=setting_widget");
?>
