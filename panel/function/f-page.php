<?php
include_once 'dbconnect.php';
include_once 'function.php';

function insert_gp_page($info){
    $title =  $info['title'];
    $description = $info['description'];
    $status = $info['status'];
    $author = $_SESSION['login_user'];
    $date = date('Y/m/d');
    $code_groupe = unique_code(6);
    $pdo=connect_db();
    $query=$pdo->prepare("INSERT INTO groupe_page_tbl (code,title,description,author,date,status) VALUES ('$code_groupe','$title','$description','$author','$date','$status')");
    $query->execute();
}
function list_groupe_page(){
    $pdo = connect_db();
    $query = $pdo->prepare("SELECT * FROM groupe_page_tbl ORDER BY id DESC");
    $query->execute();
    $res = $query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
function list_groupe_page_active(){
    $pdo = connect_db();
    $query = $pdo->prepare("SELECT * FROM groupe_page_tbl WHERE status = 'on' ORDER BY id DESC");
    $query->execute();
    $res = $query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
function limit_description($text, $limit){
    $extext = explode(' ', $text);    // تبدیل متن با هر فاصله به یک آرایه
    $esa= array_splice($extext,0,$limit);   // جداسازی اعضای آرایه از صفر تا مقداری لیمیت
    $ima = implode(' ', $esa); // اتصال اعضای آرایه باقی مانده یا همان کلمات با هر فاصله به هم
    return $ima;
}
function select_groupe_page($id){
    $pdo = connect_db();
    $query = $pdo->prepare("SELECT * FROM groupe_page_tbl WHERE id = '$id'");
    $query->execute();
    $res = $query->fetch(PDO::FETCH_OBJ);
    return $res;
}
function update_gp_page($id,$info){
    $title =  $info['title'];
    $description = $info['description'];
    $status = $info['status'];
    $author = $_SESSION['login_user'];
    $date = date('Y/m/d');
    $pdo=connect_db();
    $query = $pdo->prepare("UPDATE groupe_page_tbl SET title = '$title',description = '$description' , author = '$author',date = '$date', status = '$status' WHERE  id = '$id'");
    $query->execute();
}
function delete_gp_page($id){
    $pdo=connect_db();
    $query = $pdo->prepare("DELETE FROM groupe_page_tbl WHERE  id = '$id'");
    $query->execute();
}
function insert_page($info){
    $title =  $info['title'];
    $id = $info['groupe_page'];
    $status = $info['status'];
    $author = $_SESSION['login_user'];
    $date = date('Y/m/d');
    $code_page = unique_code(6);
    $pdo=connect_db();
    $query=$pdo->prepare("INSERT INTO pages_tbl (code_page,id_groupe,title,author,date,status) VALUES ('$code_page','$id','$title','$author','$date','$status')");
    $query->execute();
}
function list_pages(){
    $pdo = connect_db();
    $query = $pdo->prepare("SELECT * FROM pages_tbl  ORDER BY id DESC");
    $query->execute();
    $res = $query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
function select_page($id){
    $pdo = connect_db();
    $query = $pdo->prepare("SELECT * FROM pages_tbl WHERE id = '$id'");
    $query->execute();
    $res = $query->fetch(PDO::FETCH_OBJ);
    return $res;
}
function update_page($id_page,$info){
    $title =  $info['title'];
    $id = $info['groupe_page'];
    $status = $info['status'];
    $author = $_SESSION['login_user'];
    $date = date('Y/m/d');
    $pdo=connect_db();
    $query=$pdo->prepare("UPDATE pages_tbl SET id_groupe = '$id',title = '$title',author = '$author',date = '$date' , status = '$status' WHERE  id = '$id_page'");
    $query->execute();
}
function delete_page($id){
    $pdo=connect_db();
    $query = $pdo->prepare("DELETE FROM pages_tbl WHERE  id = '$id'");
    $query->execute();
}
function count_page($id_gp_page){
    $pdo = connect_db();
    $query = $pdo->prepare("SELECT * FROM pages_tbl  WHERE id_groupe = '$id_gp_page'");
    $query->execute();
    $res = $query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
function insert_single_page($info,$title,$page,$status){
    $title_single_page = $info['title'];
    $description = $info['description'];
    $video_code = $info['video_code'];
    $btn1 = array($title['btn1'],$page['btn1'],$status['btn1']);
    $btn2 = array($title['btn2'],$page['btn2'],$status['btn2']);
    $btn_title = array($btn1[0],$btn2[0]);
    $link_page = array($btn1[1],$btn2[1]);
    $status = array($btn1[2],$btn2[2],$status['single_page']);
    $new_btn_title=implode(',', $btn_title);
    $new_link_page=implode(',',$link_page);
    $new_status=implode(',',$status);
    $author = $_SESSION['login_user'];
    $date = date('Y/m/d');
    $pdo=connect_db();
    $query=$pdo->prepare("INSERT INTO single_page_tbl (title,description,video_code,btn_title,link_page,author,date,status) VALUES ('$title_single_page',' $description','$video_code','$new_btn_title','$new_link_page','$author','$date','$new_status')");
    $query->execute();
}
function select_single_page(){
    $pdo = connect_db();
    $query = $pdo->prepare("SELECT * FROM single_page_tbl");
    $query->execute();
    $res = $query->fetch(PDO::FETCH_OBJ);
    return $res;
}
function update_single_page($id,$info,$title,$page,$status){
    $title_single_page = $info['title'];
    $description = $info['description'];
    $video_code = $info['video_code'];
    $btn1 = array($title['btn1'],$page['btn1'],$status['btn1']);
    $btn2 = array($title['btn2'],$page['btn2'],$status['btn2']);
    $btn_title = array($btn1[0],$btn2[0]);
    $link_page = array($btn1[1],$btn2[1]);
    $status = array($btn1[2],$btn2[2],$status['single_page']);
    $new_btn_title=implode(',', $btn_title);
    $new_link_page=implode(',',$link_page);
    $new_status=implode(',',$status);
    $author = $_SESSION['login_user'];
    $date = date('Y/m/d');
    $pdo=connect_db();
    $query=$pdo->prepare("UPDATE single_page_tbl SET title = '$title_single_page',description = '$description',video_code = '$video_code',btn_title = '$new_btn_title',link_page = '$new_link_page',author = '$author',date = '$date',status = '$new_status' WHERE id = '$id'");
    $query->execute();
}
?>
