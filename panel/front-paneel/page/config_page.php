<?php

include_once '../functions/f-slider.php';
if (isset($_POST['send'])) {
    $info = $_POST['info'];
    $dir = make_dir($info);
    insert_info_slider($info, $dir);
    header("location:" . $_SERVER['REQUEST_URI']);
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
    <form class="my-form" style=";padding: 51px;box-shadow: 0 0 20px 0 rgb(0 0 0), 0 5px 5px 0 rgb(0 0 0 );"
          method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-2" style="display: block;box-shadow: 0 0 20px 0 rgb(0 0 0), 0 5px 5px 0 rgb(0 0 0);">
                <p class="title-form" style="display: block;position: relative;top: 94px;text-align: center;"><span
                        style="font-size: 37px;font-weight: bolder;">پیکربندی</span> <br><span
                        style="outline: groove;padding: 8px;position: relative;top: 23px;">صفحه جدید</span></p>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div style="text-align-last: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="6em" height="6em" fill="currentColor"
                         class="bi bi-receipt-cutoff" viewBox="0 0 16 16">
                        <path
                            d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zM11.5 4a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z"></path>
                        <path
                            d="M2.354.646a.5.5 0 0 0-.801.13l-.5 1A.5.5 0 0 0 1 2v13H.5a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H15V2a.5.5 0 0 0-.053-.224l-.5-1a.5.5 0 0 0-.8-.13L13 1.293l-.646-.647a.5.5 0 0 0-.708 0L11 1.293l-.646-.647a.5.5 0 0 0-.708 0L9 1.293 8.354.646a.5.5 0 0 0-.708 0L7 1.293 6.354.646a.5.5 0 0 0-.708 0L5 1.293 4.354.646a.5.5 0 0 0-.708 0L3 1.293 2.354.646zm-.217 1.198l.51.51a.5.5 0 0 0 .707 0L4 1.707l.646.647a.5.5 0 0 0 .708 0L6 1.707l.646.647a.5.5 0 0 0 .708 0L8 1.707l.646.647a.5.5 0 0 0 .708 0L10 1.707l.646.647a.5.5 0 0 0 .708 0L12 1.707l.646.647a.5.5 0 0 0 .708 0l.509-.51.137.274V15H2V2.118l.137-.274z"></path>
                    </svg>
                </div>

            </div>

            <div class="col-md-9"
                 style="box-shadow: 0 0 20px 0 rgb(0 0 0), 0 5px 5px 0 rgb(0 0 0);padding: 44px;margin-right: 16px;">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">توجه!</h4><br>
                    <p>برای ایجاد صفحه جدید </p>
                    <hr>
                    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and
                        tidy.</p>
                </div>
                <input class="form-control inputbig" type="text" name="info[title]" placeholder="عنوان صفحه" required>
                <br>
                <input class="form-control inputbig" type="text" name="info[number]"
                       placeholder="تعداد اسلاید در این دسته اسلایدی را وارد نمایید" required>
                <br>
                <div class="input-group mb-3" style="direction: ltr;">
                    <select class="form-control" aria-label="Default select example" style="direction: rtl;"
                            name="status[0]" required>
                        <option value="">گروه صفحات</option>
                        <option value="on">نمایش ابزارک در سایت</option>
                        <option value="off">عدم نمایش ابزارک در سایت</option>
                    </select>
                </div>
                <br>
                <div class="custom-control custom-switch">
                    <input name="info[status]" type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                    <label>وضعیت دسته اسلایدی :</label>
                    <label class="custom-control-label" style="padding-right: 11px;"
                           for="customSwitch1">فعال|غیرفعال</label>
                </div>
                <br>
                <hr>
                <input type="submit" name="send" value=" ایجاد منو" class="btn btn-primary btn-addmenue"
                       style="margin-left: 5px;">
            </div>
            <br>
            <br>

        </div>
</div>
</form>
</body>
</html>
