<?php
include_once '../../functions/f-slider.php';
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

    <link rel="stylesheet" href="../../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">

</head>
<body>

<br>
<div style="background-color: #b2bec3 ">
    <form class="my-form" style=";padding: 51px;box-shadow: 0 0 20px 0 rgb(0 0 0), 0 5px 5px 0 rgb(0 0 0 );" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-2" style="display: block;box-shadow: 0 0 20px 0 rgb(0 0 0), 0 5px 5px 0 rgb(0 0 0);">
                <p class="title-form" style="display: block;position: relative;top: 94px;text-align: center;"><span style="font-size: 37px;font-weight: bolder;">پیکربندی</span> <br><span style="outline: groove;padding: 8px;position: relative;top: 23px;">گروه صفحات</span></p>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div style="text-align-last: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="6em" height="6em" fill="currentColor" class="bi bi-collection" viewBox="0 0 16 16">
                        <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z"></path>
                    </svg>
                </div>

            </div>

            <div class="col-md-9" style="box-shadow: 0 0 20px 0 rgb(0 0 0), 0 5px 5px 0 rgb(0 0 0);padding: 44px;margin-right: 16px;">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">توجه!</h4><br>
                    <p>برای ایجاد صفحه جدید  </p>
                    <hr>
                    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                </div>
                <input class="form-control inputbig" type="text" name="info[title]" placeholder="عنوان صفحه" required>
                <br>
                <input class="form-control inputbig" type="text" name="info[number]" placeholder="تعداد اسلاید در این دسته اسلایدی را وارد نمایید" required>
                <br>
                <div class="input-group mb-3" style="direction: ltr;">
                    <select class="form-control" aria-label="Default select example" style="direction: rtl;" name = "status[0]" required>
                        <option value="">گروه صفحات</option>
                        <option value="on">نمایش ابزارک در سایت</option>
                        <option value="off">عدم نمایش ابزارک در سایت</option>
                    </select>
                </div><br>
                <div class="custom-control custom-switch">
                    <input name="info[status]" type="checkbox" class="custom-control-input" id="customSwitch1" checked >
                    <label >وضعیت دسته اسلایدی :</label>
                    <label class="custom-control-label" style="padding-right: 11px;" for="customSwitch1">فعال|غیرفعال</label>
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

