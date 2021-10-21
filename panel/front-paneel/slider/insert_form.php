<head>
    <title>افزودن دسته اسلایدی جدید</title>
</head>
<?php
include_once '../function/f-slider.php';
include_once '../function/function.php';
/*$select_permitions = select_user_permition($_SESSION['login_user']);
if(strpos($select_permitions->permition,'insert_form.php') !==false):*/
if(isset($_POST['send'])){
    $info=$_POST['info'];
    $dir = make_dir($info);
    insert_info_slider($info,$dir);
    header("location:".$_SERVER['REQUEST_URI']);
}
?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">


</head>
<body>
<br>
<div style="background-color: #b2bec3 ">
    <form class="my-form" style="box-shadow: 0 0 10px 0 rgb(0 0 0), 0px 0px 0px 0 rgb(0 0 0);background-color: rgb(241 241 241);padding: 41px;" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h5>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.7em" height="1.7em" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
                        <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                        <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z"></path>
                    </svg>
                    افزودن دسته اسلایدی جدید
                </h5>
                <br>
                <input class="form-control inputbig" type="text" name="info[title]" placeholder="عنوان دسته اسلایدی را وارد نمایید" required>
                <br>
                <input class="form-control inputbig" type="text" name="info[number]" placeholder="تعداد اسلاید در این دسته اسلایدی را وارد نمایید" required>
                <br>
                <input class="form-control inputbig" type="text" name="info[dir]" placeholder="نام پوشه جدید برای ذخیره سازی دسته اسلایدی را به انگلیسی وارد نمایید" required>
                <br>
                <div class="custom-control custom-switch" style="direction: initial">
                    <input name="info[status]" type="checkbox" class="custom-control-input" id="customSwitch1" checked >
                    <label class="custom-control-label" style="padding-right: 11px;" for="customSwitch1">وضعیت دسته اسلایدی : غیرفعال | فعال</label>
                </div><br> <hr>
                <input type="submit" name="send" value=" ایجاد منو" class="btn btn-primary btn-addmenue" style="margin-left: 5px;">
            </div>
            <br>
            <br>

        </div>
</div>
</form>
</body>
</html>
<?php /*else:*/?><!--
    <div class="alert alert-danger alert-dismissible fade show" style="line-height: 28px;" role="alert">
        <strong>کاربر محترم!<br></strong> شما به بخش افزودن دسته اسلایدی جدید دسترسی ندارید
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
--><?php /*endif;*/?>