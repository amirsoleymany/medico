<?php
include_once 'dbconnect.php';
include_once 'jdf.php';
include_once 'function.php';
function insert_info_user($info,$img){
    $mellicode=$info['mellicode'];$fullname = $info['fullname'];$fathername=$info['fathername'];$birthday=$info['birthday'];$degree=$info['degree'];$field=$info['field'];$phone=$info['phone'];$state=$info['state'];
    $city=$info['city'];$email=$info['email'];$linkedin=$info['linkedin'];$instagram=$info['instagram'];$telegram=$info['telegram'];$life_address=$info['life_address'];$office_address=$info['office_address'];$top_skill=$info['top_skill'];$desc_skill=$info['desc_skill'];
    $permition=$info['permition'];$author=$_SESSION['login_user'];$date_register=date('Y/m/d');$status=$info['status'];
    $main_dir = "../front-paneel/bootstrap/img/users/$fullname";
    $new_state = select_state_by_id($state);
    $name_state = $new_state->name;
    mkdir($main_dir);
    if(!$img['name'] == ""){
        $dir_pics = upload_pics($img,"../front-paneel/bootstrap/img/users/$fullname/");
    }
    $password = sha1($mellicode);
    $pdo=connect_db();
    $query=$pdo->prepare("INSERT INTO users_tbl (username, password, mellicode, fullname, fathername, birthday, degree, field, phone, state, city, email, linkediin, instagram, telegram, life_address, office_address, top_skill, desc_skill, img, permition, author, date_register, status) VALUES ('$email', '$password', '$mellicode', '$fullname', '$fathername', '$birthday', '$degree', '$field', '$phone', '$name_state', '$city', '$email', '$linkedin', '$instagram', '$telegram', '$life_address', '$office_address', '$top_skill', '$desc_skill', '$dir_pics', '$permition', '$author', '$date_register', '$status')");
    $query->execute();
}
function select_state(){
    $pdo=connect_db();
    $query=$pdo->prepare("SELECT * FROM provinces");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
function select_state_by_id($id){
    $pdo=connect_db();
    $query=$pdo->prepare("SELECT * FROM provinces WHERE id = '$id'");
    $query->execute();
    $res=$query->fetch(PDO::FETCH_OBJ);
    return $res;
}
function select_city($id){
    $pdo=connect_db();
    $query=$pdo->prepare("SELECT * FROM cities WHERE province_id = '$id'");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
function select_permition_url($id){
    $pdo=connect_db();
    $query=$pdo->prepare("SELECT * FROM permition_tbl WHERE id = '$id'");
    $query->execute();
    $res=$query->fetch(PDO::FETCH_OBJ);
    return $res;
}
function select_permition_url1(){
    $pdo=connect_db();
    $query=$pdo->prepare("SELECT * FROM permition_tbl");
    $query->execute();
    $res=$query->fetch(PDO::FETCH_OBJ);
    return $res;
}
function select_user_with_session($session){
    $pdo=connect_db();
    $query=$pdo->prepare("SELECT * FROM users_tbl WHERE username= '$session'");
    $query->execute();
    $res=$query->fetch(PDO::FETCH_OBJ);
    return $res;
}
function insert_info_file($items,$xlsxfile,$location){
    $new_location = upload_pics($xlsxfile, $location);
    $title = $items['title'];
    $description = $items['description'];
    $code = unique_code(6);
    $type = '../img/excel_icon.png';
    $author = $_SESSION['login_user'];
    $date = date('Y/m/d');
    $part = 'register_bulk_user';
    $pdo = connect_db();
    $query = $pdo->prepare("INSERT INTO upload_file_tbl (code,name,description,type,path,author,date,part) VALUES ('$code','$title','$description','$type','$new_location','$author','$date','$part')");
    $query->execute();
}
function update_info_bulk_user(){
    $author = $_SESSION['login_user'];
    $date = date('Y/m/d');
    $pdo=connect_db();
    $query=$pdo->prepare("SELECT * FROM users_tbl WHERE author = 'system'");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    foreach ($res as $user){
        $username = $user->email;
        $password = sha1($user->phone);
        $query1=$pdo->prepare("UPDATE users_tbl SET username = '$username', password = '$password', author = '$author' , date_register = '$date'  WHERE id='$user->id'");
        $query1->execute();
    }
}
function page_title($url) {
    $fp = file_get_contents($url);
    if (!$fp) return null;
    $res = preg_match("/<title>(.*)<\/title>/siU", $fp, $title_matches);
    if (!$res) return null;
    // Clean up title: remove EOL's and excessive whitespace.
    $title = preg_replace('/\s+/', ' ', $title_matches[1]);
    $title = trim($title);
    return $title;
}
function insert_permition($title,$status,$page){
    $code =unique_code(6);
    $author = $_SESSION['login_user'];
    $date = jdate('Y/n/j');
    $result = array();
    $pdo=connect_db();
    $query=$pdo->prepare("INSERT INTO permition_tbl (code,name,permition,author,date,status) VALUES ('$code','$title','$page','$author','$date','$status')");
    $query->execute();
}
function list_upload_file(){
    $pdo=connect_db();
    $query=$pdo->prepare("SELECT * FROM upload_file_tbl WHERE part = 'register_bulk_user'");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
function nomber_users(){
    $pdo=connect_db();
    $query=$pdo->prepare("SELECT * FROM users_tbl");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
function status_online(){
    $pdo=connect_db();
    $query=$pdo->prepare("SELECT status FROM users_tbl WHERE status = 'ON';");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
function status_offline(){
    $pdo=connect_db();
    $query=$pdo->prepare("SELECT status FROM users_tbl WHERE status = 'OFF';");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
function nomber_permition(){
    $pdo=connect_db();
    $query=$pdo->prepare("SELECT * FROM `permition_tbl`");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
function status_permition(){
    $pdo=connect_db();
    $query=$pdo->prepare("SELECT * FROM `permition_tbl` WHERE status='ON'");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
function list_permition(){
    $pdo=connect_db();
    $query=$pdo->prepare("SELECT * FROM permition_tbl ORDER BY id DESC ");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
function list_access($id){
    $pdo=connect_db();
    $query=$pdo->prepare("SELECT * FROM permition_tbl WHERE id= '$id'");
    $query->execute();
    $res=$query->fetch(PDO::FETCH_OBJ);
    return $res;
}
function list_name_permition($id){
    $result = array();
    $res = list_access($id);
    $permitions = explode(',',$res->permition);
    foreach ($permitions as $key=>$permition){
        $pdo=connect_db();
        $query=$pdo->prepare("SELECT * FROM name_page WHERE page = '$permition' ");
        $query->execute();
        $res1=$query->fetch(PDO::FETCH_OBJ);
        $result[$key] = $res1->name;
    }
    return $result;
}
function update_permition($id,$title,$status,$page){
    $author = $_SESSION['login_user'];
    $date = date('Y/m/d');
    $pdo=connect_db();
    $query=$pdo->prepare("UPDATE permition_tbl SET name = '$title',permition = '$page', author = '$author' , date = '$date' , status = '$status' WHERE id='$id'");
    $query->execute();
}
function select_bulk_user(){
    $pdo=connect_db();
    $query=$pdo->prepare("SELECT * FROM users_tbl ");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
function select_permition_name(){
    $pdo=connect_db();
    $query=$pdo->prepare("SELECT * FROM permition_tbl WHERE status = 'on'");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
function search_with_permition($id_permition){
    $pdo=connect_db();
    $query=$pdo->prepare("SELECT * FROM users_tbl WHERE permition = '$id_permition' ");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
function show_permition_name($user_permition){
    $pdo=connect_db();
    $query=$pdo->prepare("SELECT * FROM permition_tbl WHERE id = '$user_permition'");
    $query->execute();
    $res=$query->fetch(PDO::FETCH_OBJ);
    return $res;
}
function delete_info_user($id){
    $pdo=connect_db();
    $query=$pdo->prepare("DELETE FROM users_tbl WHERE id = '$id'");
    $query->execute();
}
function update_info_user($id,$info,$img){
    $mellicode=$info['mellicode'];$fullname = $info['fullname'];$fathername=$info['fathername'];$birthday=$info['birthday'];$degree=$info['degree'];$field=$info['field'];$phone=$info['phone'];$state=$info['state'];
    $city=$info['city'];$email=$info['email'];$linkedin=$info['linkedin'];$instagram=$info['instagram'];$telegram=$info['telegram'];$life_address=$info['life_address'];$office_address=$info['office_address'];$top_skill=$info['top_skill'];$desc_skill=$info['desc_skill'];
    $permition=$info['permition'];$author=$_SESSION['login_user'];$date_register=date('Y/m/d');$status=$info['status'];
    $new_state = select_state_by_id($state);
    $name_state = $new_state->name;
    $last_info = select_user_info($id);
    if(!$img['name'] == ""){
        $main_dir = "../img/users/$fullname";
        mkdir($main_dir);
        unlink($last_info->img);
        $dir_pics = upload_pics($img,"../img/users/$fullname/");
    }
    else{
        $dir_pics = $last_info->img;
    }
    $password = sha1($mellicode);
    $pdo=connect_db();
    $query=$pdo->prepare("UPDATE users_tbl SET username = '$email', password = '$password', mellicode = '$mellicode', fullname = '$fullname', fathername = '$fathername', birthday = '$birthday', degree = '$degree', field = '$field', phone = '$phone', state = '$name_state', city = '$city', email = '$email', likedin = '$linkedin', instagram = '$instagram', telegram = '$telegram', life_address = '$life_address', office_address = '$office_address', top_skill = '$top_skill', desc_skill = '$desc_skill', img = '$dir_pics', permition = '$permition', author = '$author', date_register = '$date_register', status = '$status' WHERE id = '$id'" );
    $query->execute();
}
function select_serch_info($info){
    $pdo=connect_db();
    $query=$pdo->prepare("SELECT * FROM users_tbl WHERE fullname LIKE '%$info%' OR mellicode LIKE '%$info%' ");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
function delete_access($id){
    $pdo=connect_db();
    $query = $pdo->prepare("DELETE FROM  permition_tbl WHERE  id = '$id'");
    $query->execute();
}
?>