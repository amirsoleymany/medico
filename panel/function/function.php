<?php
include_once 'dbconnect.php';
function upload_pics($pic,$location){
    $img_name = $pic['name'];
    $img_tmp = $pic['tmp_name'];
    $img_explode = explode('.',$img_name);
    $img_format = end($img_explode);
    $img_newname = time().".".$img_format;
    $new_location = $location.$img_newname;
    move_uploaded_file($img_tmp,$new_location);
    return $new_location;
}
function unique_code($limit)
{
    return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
}
function select_user_permition($username){
    $pdo=connect_db();
    $query1=$pdo->prepare("SELECT * FROM users_tbl WHERE username = '$username' ");
    $query1->execute();
    $res1=$query1->fetch(PDO::FETCH_OBJ);
    $query2=$pdo->prepare("SELECT * FROM permition_tbl WHERE id = $res1->permition ");
    $query2->execute();
    $res2=$query2->fetch(PDO::FETCH_OBJ);
    return $res2;
}
?>
