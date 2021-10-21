<?php
include_once 'dbconnect.php';

function add_widget($title,$sorts,$code,$status){
    foreach ($title as $key=> $title) {
        $sort=$sorts[$key];
        $svg_code=$code[$key];
        $st = $status[$key];
        $author = $_SESSION['login_user'];
        $date = date('Y/m/d');
        $pdo = connect_db();
        $query = $pdo->prepare("INSERT INTO widget_tbl (title,sort,svg_code,author,date,status) VALUES('$title','$sort','$svg_code','$author','$date','$st')");
        $query->execute();
    }
}
function list_widget (){
    $pdo = connect_db();
    $query = $pdo->prepare("SELECT * FROM widget_tbl ORDER BY id DESC");
    $query->execute();
    $res = $query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
function select_widget($id){
    $pdo=connect_db();
    $query = $pdo->prepare("SELECT * FROM widget_tbl WHERE id = '$id' ");
    $query->execute();
    $res=$query->fetch(PDO::FETCH_OBJ);
    return $res;
}
function update_widget($id,$title,$sort,$svg_code,$status){
    $author = $_SESSION['login_user'];
    $date = date('Y/m/d');
    $pdo=connect_db();
    $query = $pdo->prepare("UPDATE widget_tbl SET title = '$title',sort = '$sort' , svg_code = '$svg_code',author = '$author',date = '$date', status = '$status' WHERE  id = '$id'");
    $query->execute();
}
function delete_widget($id){
    $pdo=connect_db();
    $query = $pdo->prepare("DELETE FROM widget_tbl WHERE  id = '$id'");
    $query->execute();
}
function show_widget (){
    $pdo = connect_db();
    $query = $pdo->prepare("SELECT * FROM widget_tbl WHERE status = 'on' ORDER BY id DESC");
    $query->execute();
    $res = $query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
?>
