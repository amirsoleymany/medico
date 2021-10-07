<head>
    <title>حذف نوشته ها</title>
</head>
<?php
include_once '../function/f-article.php';
$id = $_GET['id'];
$found_url_img = edit_article($id);
unlink($found_url_img->img);
delete_article($id);
header("location: dashboard.php?pages=setting-page");
?>