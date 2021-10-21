<?php
include_once 'dbconnect.php';

function make_dir($info){
$info_dir = $info['dir'];
$main_dir = "../img/select_slider/$info_dir";
mkdir("$main_dir");
return $main_dir;
}

function insert_info_slider($info,$dir){
$title = $info['title'];
$number = $info['number'];
if ($info['status'] != 'on'){
    $status = 'off';
}
else{
    $status = 'on';
    $other_status = 'off';
    $pdo=connect_db();
    $query = $pdo->prepare("UPDATE slider_tbl SET status = '$other_status' WHERE parent = 0");
    $query->execute();
}
$author = $_SESSION['login_user'];
$date = date('Y/m/d');
$parent = 0;
    $pdo=connect_db();
    $query = $pdo->prepare("INSERT INTO slider_tbl (title,number_slide,parent,dir,date,author,status) VALUES ('$title','$number','$parent','$dir','$date','$author','$status')");
    $query->execute();
}

function list_slider_gp(){
    $pdo=connect_db();
    $query = $pdo->prepare("SELECT * FROM slider_tbl WHERE parent = 0 ORDER BY id DESC ");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}

function select_slider($id){
    $pdo=connect_db();
    $query = $pdo->prepare("SELECT * FROM slider_tbl WHERE id = '$id' ");
    $query->execute();
    $res=$query->fetch(PDO::FETCH_OBJ);
    return $res;
}
function rename_dir($info,$old_dir_name){
    $info_dir = $info['dir'];
    $main_dir = "../img/slider/$info_dir";
    $new_main_dir = rename($old_dir_name, $main_dir);
    return $main_dir;
}
function update_info_slider($info,$dir,$id){
    $title = $info['title'];
    $number = $info['number'];
    if ($info['status'] != 'on'){
        $status = 'off';
    }
    else{
        $status = 'on';
        $other_status = 'off';
        $pdo=connect_db();
        $query = $pdo->prepare("UPDATE slider_tbl SET status = '$other_status' WHERE parent = 0");
        $query->execute();
    }
    $parent = 0;
    $author = $_SESSION['login_user'];
    $date = date('Y/m/d');
    $pdo=connect_db();
    $query = $pdo->prepare("UPDATE slider_tbl SET title = '$title',number_slide = '$number',parent = '$parent',dir='$dir',date = '$date',author = '$author',status = '$status' WHERE id = '$id'");
    $query->execute();
    //header(" location: dashboard.php?pages=setting-slider");
}
function delete_info_slider($id){
    $pdo=connect_db();
    $query = $pdo->prepare("DELETE FROM slider_tbl WHERE  id = '$id'");
    $query->execute();
}

function select_parent_slider_groupe(){
    $pdo=connect_db();
    $query = $pdo->prepare("SELECT * FROM slider_tbl WHERE parent = 0 ");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
function upload_slider($slider_name,$tmp_name_slider,$dir){
    $slider_name_explode = explode('.',$slider_name);
    $slider_format = end($slider_name_explode);
    $slider_new_name = time().".".$slider_format;
    $new_location = $dir."/".$slider_new_name;
    move_uploaded_file($tmp_name_slider,$dir."/".$slider_name);
    return $dir."/".$slider_name;
}
function insert_slider($id,$slider_number,$number,$new_location){
    $number_slide = 1;
    $author = $_SESSION['login_user'];
    $date = date('Y/m/d');
    $status = 'on';
    $pdo=connect_db();
    $query = $pdo->prepare("INSERT INTO slider_tbl (title,number_slide,parent,dir,date,author,status) VALUES ('$slider_number','$number_slide','$id','$new_location','$date','$author','$status')");
    $query->execute();
}
function list_slide_gp($id){
    $pdo=connect_db();
    $query = $pdo->prepare("SELECT * FROM slider_tbl WHERE parent = '$id' ");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
function category_slide($id){
    $pdo=connect_db();
    $query = $pdo->prepare("SELECT * FROM slider_tbl WHERE id = '$id' ");
    $query->execute();
    $res=$query->fetch(PDO::FETCH_OBJ);
    return $res;
}
function select_slide($id){
    $pdo=connect_db();
    $query = $pdo->prepare("SELECT * FROM slider_tbl WHERE id = '$id' ");
    $query->execute();
    $res=$query->fetch(PDO::FETCH_OBJ);
    return $res;
}
function update_slider($main_id,$id,$slider_name,$tmp_name_slider){
    $pdo=connect_db();
    $query = $pdo->prepare("SELECT * FROM slider_tbl WHERE id = '$main_id' ");
    $query->execute();
    $res1=$query->fetch(PDO::FETCH_OBJ);
    $new_res1 = $res1->dir;
    unlink($new_res1);
    $query = $pdo->prepare("SELECT * FROM slider_tbl WHERE id = '$id' ");
    $query->execute();
    $res2=$query->fetch(PDO::FETCH_OBJ);
    move_uploaded_file($tmp_name_slider,$res2->dir."/".$slider_name);
    $date = date('Y/m/d');
    $author = $_SESSION['login_user'];
    $dir = $res2->dir."/".$slider_name;
    $query = $pdo->prepare("UPDATE slider_tbl SET dir = '$dir',date = '$date',author = '$author' WHERE id = '$main_id'");
    $query->execute();
}
function select_all_slide(){
    $pdo=connect_db();
    $query = $pdo->prepare("SELECT * FROM slider_tbl WHERE parent != 0");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
function category_slider($id){
    $res1 = category_slide($id);
    $pdo=connect_db();
    $query = $pdo->prepare("SELECT * FROM slider_tbl WHERE id = '$res1->parent'");
    $query->execute();
    $res2=$query->fetch(PDO::FETCH_OBJ);
    return $res2;
}
function show_slider(){
    $pdo=connect_db();
    $query = $pdo->prepare("SELECT * FROM slider_tbl WHERE parent = 0 and status = 'on'");
    $query->execute();
    $res1=$query->fetch(PDO::FETCH_OBJ);
    $query = $pdo->prepare("SELECT * FROM slider_tbl WHERE parent = $res1->id");
    $query->execute();
    $res2=$query->fetchAll(PDO::FETCH_OBJ);
    return $res2;
}
?>

