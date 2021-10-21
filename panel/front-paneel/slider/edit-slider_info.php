<head>
    <title>ویرایش دسته اسلایدی</title>
</head>
<?php
include_once '../function/f-slider.php';
$id = $_GET['id'];
$slider = select_slider($id);
if(isset($_POST['update'])){
    $info=$_POST['info'];
    $old_dir_name = $slider->dir;
    $dir = rename_dir($info,$old_dir_name);
    update_info_slider($info,$dir,$id);
    header("location:dashboard.php?page=setting-slider");
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
<div style="background: #ffffff;padding: 5%;box-shadow: inset 0 0 0px 0 rgb(33 33 33), 0 0px 20px 0 rgb(33 33 33);">
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
                <input class="form-control inputbig" type="text" name="info[title]"
                       placeholder="عنوان دسته اسلایدی را وارد نمایید" value="<?php echo $slider->title; ?>"  required>
                <br>
                <input class="form-control inputbig" type="text" name="info[number]"
                       placeholder="تعداد اسلاید در این دسته اسلایدی را وارد نمایید" value="<?php echo $slider->number_slide; ?>"  required>
                <br>
                <input class="form-control inputbig" type="text" name="info[dir]"
                       placeholder="نام پوشه جدید برای ذخیره سازی دسته اسلایدی را به انگلیسی وارد نمایید" value="<?php
                        $res = explode('/',$slider->dir);
                        $dir_name = end($res);
                        echo $dir_name;
                       ?>"  required>
                <br>
                <div class="custom-control custom-switch" style="direction: initial">
                    <input name="info[status]" type="checkbox" class="custom-control-input" id="customSwitch1"
                        <?php
                            if($slider->status == 'on'){
                                echo 'checked';
                            }
                        ?>>
                    <label class="custom-control-label" style="padding-right: 11px;" for="customSwitch1">وضعیت دسته اسلایدی : غیرفعال | فعال</label>
                </div>
                <br>
                <hr>
                <div style="direction: initial">
                <a class="btn btn-danger btn-addmenue" style="color: #FFFFFF" href="dashboard.php?page=setting-slider">بازگشت</a>
                <input type="submit" name="update" value=" ویرایش منو" class="btn btn-primary btn-addmenue" style="margin-left: 5px;">
                </div>
            </div>

            <br>
            <br>

        </div>
</div>
</form>

<br>
<br>

<?php include_once 'list_slider_info.php'; ?>

</div>
</body>
</html>
