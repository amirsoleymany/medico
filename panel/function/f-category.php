<?php
include_once 'dbconnect.php';

function add_category($info){
$title = $info['title'];
$sort = $info['sort'];
$parrent = $info['parrent'];
if(isset($info['status'])){
    $status = 'on';
}
else{
    $status = 'off';
}
    $pdo=connect_db();
    $query = $pdo->prepare("INSERT INTO category_tbl (title,sort,parrent,status) VALUES ('$title','$sort','$parrent','$status')");
    $query->execute();
}
function list_category(){
    $pdo=connect_db();
    $query = $pdo->prepare("SELECT * FROM category_tbl WHERE parrent = 0");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
function list_subcategory($id){
    $pdo=connect_db();
    $query = $pdo->prepare("SELECT * FROM category_tbl WHERE parrent = $id");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
function edit_category($id){
    $pdo=connect_db();
    $query = $pdo->prepare("SELECT * FROM category_tbl  WHERE id = $id");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
function update_category($id,$info){
    $title = $info['title'];
    $sort = $info['sort'];
    $parrent = $info['parrent'];
    if(isset($info['status'])){
        $status = 'on';
    }
    else{
        $status = 'off';
    }
    $pdo=connect_db();
    $query = $pdo->prepare("UPDATE category_tbl SET title ='$title',sort = '$sort',parrent = ' $parrent',status = '$status' WHERE id=$id");
    $query->execute();
}
function count_category(){
    $pdo=connect_db();
    $query = $pdo->prepare("SELECT * FROM category_tbl WHERE parrent = 0");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
function delete_category($id){
    $pdo=connect_db();
    $query = $pdo->prepare("DELETE FROM category_tbl WHERE id = $id");
    $query->execute();
}
/* توابع مربوط به فرانت اند سایت */

function list_menue(){
    $pdo=connect_db();
    $query = $pdo->prepare("SELECT * FROM category_tbl WHERE parrent = 0 AND status = 'on' ORDER BY sort ASC ");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
function list_submenue($id){
    $pdo=connect_db();
    $query = $pdo->prepare("SELECT * FROM category_tbl WHERE parrent = $id AND status = 'on' ORDER BY sort ASC ");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
function select_category($id){
    $pdo=connect_db();
    $query = $pdo->prepare("SELECT * FROM category_tbl WHERE id = '$id' ");
    $query->execute();
    $res=$query->fetch(PDO::FETCH_OBJ);
    return $res;
}
?>
