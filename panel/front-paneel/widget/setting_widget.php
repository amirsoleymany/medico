<?php
include_once '../function/f-widget.php';
include_once '../function/function.php';
/*$select_permitions = select_user_permition($_SESSION['login_user']);
if(strpos($select_permitions->permition,'setting_widget.php') !==false):*/
if(isset($_POST['send'])){
    $title=$_POST['title'];
    $sort=$_POST['sort'];
    $code=$_POST['icon'];
    $status=$_POST['status'];
    add_widget($title,$sort,$code,$status);
}
?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تنظیمات پیکربندی ابزارک ها</title>
    <link rel="stylesheet" href="../../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">

</head>
<body>
<br>
<div style="background-color: #b2bec3 ">
    <form class="my-form" style="box-shadow: 0 0 20px 0 rgb(0 0 0), 0px 0px 0px 0 rgb(0 0 0);background-color: rgb(241 241 241);padding: 6%;" method="post" enctype="multipart/form-data">
        <div class="row">
        <div class="col-md-1"></div>
            <div class="col-md-10">
                <?php
                if(isset($_POST['send'])){
                 echo '<div class="alert alert-success" role="alert">
                        ثبت و ذخیره ابزارک (ها) با موفقیت انجام شد | 
                        <a href="dashboard.php?pages=setting-widget" style="color: #1595b1;">بازگشت</a> |   <a href="dashboard.php?pages=list-widget">مشاهده تمام ابزارک ها</a>
                        </div>' ;
                }
                if(!isset($_POST['send'])) :
                ?>
                <div style="box-shadow: 0 0 10px 0 rgb(0 0 0), 0px 0px 0px 0 rgb(0 0 0);background-color: rgb(241 241 241);padding: 41px;">
                    <h5 style="color: #000000;"> ابزارک شماره 1</h5><br>
                <div class="input-group mb-3" style="direction: ltr;">
                    <input type="text" class="form-control" name="title[0]" style="direction: rtl;" placeholder="لطفا نام ابزارک را وارد نمایید" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
                    <span class="input-group-text" id="basic-addon2">عنوان ابزارک</span>
                </div>
                <div class="input-group mb-3" style="direction: ltr;">
                    <input type="text" class="form-control" name="sort[0]" style="direction: rtl;" placeholder="لطفا ترتیب نمایش ابزارک در سایت را به عدد وارد نمایید" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
                    <span class="input-group-text" id="basic-addon2"    >ترتیب نمایش</span>
                </div>
                    <div class="input-group">
                        <span class="input-group-text">کد svg ابزارک</span>
                        <textarea class="form-control" aria-label="With textarea" name="icon[0]" style="direction: ltr;" required></textarea>
                    </div>
                <br>
                <div class="input-group mb-3" style="direction: ltr;">
                    <select class="form-control" aria-label="Default select example" style="direction: rtl;" name = "status[0]" required>
                        <option value="">انتخاب وضعیت نمایش ابزارک در سایت</option>
                        <option value="on">نمایش ابزارک در سایت</option>
                        <option value="off">عدم نمایش ابزارک در سایت</option>
                    </select>
                    <span class="input-group-text" id="basic-addon2">وضعیت ابزارک</span>
                </div>
                <div id="main_widget">

                </div>

                <span class="btn btn-primary" onclick="add_widget()" style="float: left;">+ افزودن ابزارک </span>
                    <br><br><br>
                    <?php include_once 'setting_number_widget.php';?>
                    <hr>
                    <div style="direction: initial">
                    <a class="btn btn-danger btn-addmenue" style="color: #FFFFFF" href="dashboard.php">بازگشت</a>
                    <input type="submit" name="send" value="ثبت و ذخیره ابزارک ها" class="btn btn-primary btn-addmenue" style="margin-left: 5px;">
                    </div>
                </div>
                <br>
            </div>
            <br>
            <br>

        </div>

</div>
</form>
<?php endif;?>
<br>


<script>
function add_widget(){
    var count = document.getElementsByClassName('count-widget').length+1;
    var count_plus = count+1;
    var widget =
        '<div class="count-widget">'+
        ' <hr>' +
        '<h5 style="color: #000000;"> ابزارک شماره '+count_plus+'</h5><br>'+
        '<div class="input-group mb-3" style="direction: ltr;">'+
    ' <input type="text" class="form-control" name="title['+count+']" placeholder="لطفا نام ابزارک را وارد نمایید" style="direction: rtl;">'+
    ' <span class="input-group-text" id="basic-addon2">عنوان ابزارک</span>'+
    ' </div>'+
        '<div class="input-group mb-3" style="direction: ltr;">'+
    '<input type="text" class="form-control" name="sort['+count+']" style="direction: rtl;" placeholder="لطفا ترتیب نمایش ابزارک در سایت را به عدد وارد نمایید">'+
    ' <span class="input-group-text" id="basic-addon2">ترتیب نمایش</span>'+
    ' </div>'+
    ' <div class="input-group">'+
    '<span class="input-group-text">کد svg ابزارک</span>'+
    '<textarea class="form-control" aria-label="With textarea" name="icon['+count+']" style="direction: ltr;"></textarea>'+
    '</div><br>'+
    '  <div class="input-group mb-3" style="direction: ltr;">'+
    '<select class="form-control" aria-label="Default select example" style="direction: rtl;" name = "status['+count+']">'+
    ' <option>انتخاب وضعیت نمایش ابزارک در سایت</option>'+
    '  <option value="1">نمایش ابزارک در سایت</option>'+
    ' <option value="2">عدم نمایش ابزارک در سایت</option>'+
    '  </select>'+
    ' <span class="input-group-text" id="basic-addon2">وضعیت ابزارک</span>'+
    '</div>'+
    '</div>';

    $('#main_widget').append(widget);

}
</script>
<?php /*else:*/?><!--
    <div class="alert alert-danger alert-dismissible fade show" style="line-height: 28px;" role="alert">
        <strong>کاربر محترم!<br></strong> شما به بخش پیکربندی افزودن ابزارک دسترسی ندارید
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
--><?php /*endif;*/?>
<br>

<?php
/*if(strpos($select_permitions->permition,'list_widget.php') !==false):*/

include_once 'list_widget.php'
?>
<?php /*else:*/?><!--
    <div class="alert alert-danger alert-dismissible fade show" style="line-height: 28px;" role="alert">
        <strong>کاربر محترم!<br></strong> شما به بخش مشاهده همه ابزارک ها دسترسی ندارید
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
--><?php /*endif;*/?>
</body>
    </html>
