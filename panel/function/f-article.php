<?php
include_once 'dbconnect.php';
include_once 'function.php';
function list_category_article(){
    $pdo=connect_db();
    $query = $pdo->prepare("SELECT * FROM category_tbl WHERE parrent = 0");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
function list_subcategory_article($id){
    $pdo=connect_db();
    $query = $pdo->prepare("SELECT * FROM category_tbl WHERE parrent = $id");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
function add_article($info,$category,$new_location,$status){
$title = $info['title'];
$text = $info['body'];
$author = $_SESSION['login_user'];
$date = date('Y/m/d');
$code_article = unique_code(8);
if(is_array($category)){
    $cat = implode(',',$category);
}
else{
    $cat = $category;
}

    $pdo = connect_db();
$query = $pdo->prepare("INSERT INTO article_tbl (code_article,title,text,cat_id,img,author,date,status) VALUES ('$code_article','$title','$text','$cat','$new_location','$author','$date','$status')");
$query->execute();
}
function list_article(){
    $pdo=connect_db();
    $query = $pdo->prepare("SELECT * FROM article_tbl ORDER BY id DESC ");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
function category_article($cat_id){
        $pdo=connect_db();
        $query = $pdo->prepare("SELECT * FROM category_tbl WHERE id IN ($cat_id)");
        $query->execute();
        $res=$query->fetchAll(PDO::FETCH_OBJ);
        return $res;
}
function edit_article($id){
    $pdo=connect_db();
    $query = $pdo->prepare("SELECT * FROM article_tbl WHERE id = $id");
    $query->execute();
    $res=$query->fetch(PDO::FETCH_OBJ);
    return $res;
}
function update_article($id,$info,$category,$new_location,$status){
    $title = $info['title'];
    $text = $info['body'];
    $author = $_SESSION['login_user'];
    $date = date('Y/m/d');
    if(is_array($category)){
        $cat = implode(',',$category);
    }
    else{
        $cat = $category;
    }
    $pdo = connect_db();
    $query = $pdo->prepare("UPDATE article_tbl SET title = '$title',text = '$text', cat_id = '$cat',img = '$new_location',author = '$author',date = '$date',status = '$status' WHERE id = '$id'");
    $query->execute();
}
function count_article(){
    $pdo=connect_db();
    $query = $pdo->prepare("SELECT * FROM article_tbl ");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
function delete_article($id){
    $pdo=connect_db();
    $query = $pdo->prepare("DELETE FROM article_tbl WHERE  id = $id");
    $query->execute();
}
function limit_text_article($text, $limit){
    $extext = explode(' ', $text);    // تبدیل متن با هر فاصله به یک آرایه
    $esa= array_splice($extext,0,$limit);   // جداسازی اعضای آرایه از صفر تا مقداری لیمیت
    $ima = implode(' ', $esa); // اتصال اعضای آرایه باقی مانده یا همان کلمات با هر فاصله به هم
    return $ima;
}
function single_article($id){
    $pdo=connect_db();
    $query = $pdo->prepare("SELECT * FROM article_tbl WHERE id = $id");
    $query->execute();
    $res=$query->fetch(PDO::FETCH_OBJ);
    return $res;
}
function submit_comment($id_article,$author,$text){
    $parrent = 0;
    $date = date('Y/m/d');
    $status_comment = 'save';
    $status_reply = 'save';
    $code_comment = unique_code(4);
    $pdo=connect_db();
    $query = $pdo->prepare("INSERT INTO comment_tbl (code_comment,id_article,parrent,author,text,date,status_comment,status_reply) VALUES ('$code_comment','$id_article','$parrent','$author','$text','$date','$status_comment','$status_reply')");
    $query->execute();
    return true;
}
function list_comment(){
    $pdo=connect_db();
    $query = $pdo->prepare("SELECT * FROM comment_tbl WHERE parrent = 0 ORDER BY id_comment DESC ");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
function delete_comment($id_comment){
    $pdo=connect_db();
    $query = $pdo->prepare("DELETE FROM comment_tbl WHERE  id_comment = $id_comment");
    $query->execute();
}
function title_article($id_article){
    $pdo=connect_db();
    $query = $pdo->prepare("SELECT * FROM article_tbl WHERE id = $id_article ");
    $query->execute();
    $res=$query->fetch(PDO::FETCH_OBJ);
    return $res;
}
function reply_comment($id_comment){
    $pdo=connect_db();
    $query = $pdo->prepare("SELECT * FROM comment_tbl WHERE id_comment = $id_comment ");
    $query->execute();
    $res=$query->fetch(PDO::FETCH_OBJ);
    return $res;
}

function reply_publish($id_comment,$id_article,$reply_text,$reply_author,$match_code){
    $parrent = $id_comment;
    $reply_date = date('Y/m/d');
    $code_comment = unique_code(4);
    switch ($match_code){
        case 'publish1' :
            $status_comment = 'publish';
            $status_reply = 'publish';
        break;
        case 'publish2' :
            $status_comment = 'save';
            $status_reply = 'save';
            break;
        case 'publish3' :
            $status_comment = 'publish';
            $status_reply = 'save';
            break;
    }

    $pdo=connect_db();
    $query1=$pdo->prepare("UPDATE comment_tbl SET status_comment = '$status_comment',status_reply = '$status_reply' WHERE id_comment = $id_comment");
    $query1->execute();
    $query2 = $pdo->prepare("INSERT INTO comment_tbl (code_comment,id_article,parrent,author,text,date,status_comment,status_reply) VALUES ('$code_comment','$id_article','$parrent','$reply_author','$reply_text','$reply_date','$status_comment','$status_reply')");
    $query2->execute();
}

function list_reply($id_comment){
    $pdo=connect_db();
    $query = $pdo->prepare("SELECT * FROM comment_tbl WHERE parrent = $id_comment");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
function view_comment($id_article){
    $pdo=connect_db();
    $query = $pdo->prepare("SELECT * FROM comment_tbl WHERE parrent = 0 AND Status_comment = 'publish' AND id_article = '$id_article' ORDER BY id_comment DESC ");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
function view_reply($id_comment){
    $pdo=connect_db();
    $query = $pdo->prepare("SELECT * FROM comment_tbl WHERE parrent = '$id_comment' AND Status_reply = 'publish' ORDER BY id_comment DESC ");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
function select_article($id){
    $pdo=connect_db();
    $query = $pdo->prepare("SELECT * FROM article_tbl WHERE cat_id LIKE '$id' ");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}
?>
