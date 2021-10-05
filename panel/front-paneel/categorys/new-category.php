<?php
include_once '../function/f-category.php';
include_once '../function/dbconnect.php';
include_once '../function/function.php';
/*$select_permitions = select_user_permition($_SESSION['login_user']);
if(strpos($select_permitions->permition,'add-category.php') !==false):*/
    if(isset($_POST['send'])){
        $info=$_POST['info'];
        add_category($info);
        header("location:dashboard.php?pages=list-category");
    }
    ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>افزودن دسته جدید</title>
        <link rel="stylesheet" href="../../css/owl.carousel.min.css">
        <link rel="stylesheet" href="../../css/owl.theme.default.min.css">
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/style.css">


    </head>
    <body>
    <div style="background: #ffffff;padding: 5%;box-shadow: inset 0 0 0px 0 rgb(33 33 33), 0 0px 20px 0 rgb(33 33 33);">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-9" style="margin-right: 46px;">
                <form class="my-form" method="post" enctype="multipart/form-data" style="box-shadow: 0 0 20px 0 rgb(0 0 0), 0px 0px 0px 0 rgb(0 0 0);background-color:  rgb(241 241 241);padding: 41px;">
                <p class="title-form">افزودن دسته جدید</p>
                <input class="form-control inputbig" type="text" name="info[title]" placeholder="عنوان را اینجا وارد کنید" required>
                <br>
                <input class="form-control inputbig" type="text" name="info[sort]" placeholder="ترتیب نمایش را بصورت عددی ایجاد کنید" required>
                <br>
                <select class="form-control" aria-label="Default select example" name="info[parrent]" required>
                    <option value="0">انتخاب به عنوان سرگروه منو</option>
                    <?php
                    $res = list_category();
                    foreach ($res as $val) :?>
                        <option value="<?php echo $val->id;?>>"><?php echo $val->title;?></option>
                    <?php endforeach;?>
                </select><br>
                <div class="custom-control custom-switch" style="direction: initial;">
                    <input name="info[status]" type="checkbox" class="custom-control-input" id="customSwitch1" checked >
                    <label class="custom-control-label" for="customSwitch1">فعال|غیرفعال</label>
                </div><br> <hr>
                    <div style="direction: initial;">
                <a class="btn btn-danger" href="http://localhost/medico/panel/front-paneel/dashboard.php">بازگشت</a>
                <input type="submit" name="send" value=" ایجاد منو" class="btn btn-primary btn-addmenue" style="margin-left: 5px;">
                    </div>
                </form>
            </div>
        </div>
    </div>
    </body>
    </html>
<?php /*else:*/?><!--
    <div class="alert alert-danger alert-dismissible fade show" style="line-height: 28px;" role="alert">
        <strong>کاربر محترم!<br></strong> شما به بخش افزودن جدید دسترسی ندارید
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
--><?php /*endif;*/?>