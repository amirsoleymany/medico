<?php
include_once '../function/f-users.php';
include_once '../function/function.php';
$select_permitions = select_user_permition($_SESSION['login_user']);
if(strpos($select_permitions->permition,'config-access.php') !==false):
$update = false;
if(isset($_GET['id_page'])){
    $update = true;
    $id = $_GET['id_page'];
    $up_permition = select_permition_url($id);
    $new_up_permition = explode(',',$up_permition->permition);
}
if(isset($_POST['send_access'])){
    $page = $_POST['page'];
    $new_permition=implode(',',$_POST['page']);
    $title = $_POST['title'];
    $status = $_POST['status'];
    insert_permition($title,$status,$new_permition);
    $result = 'ok_made_access';
    header("location:dashboard.php?page=config-access&op={$result}");
}
if(isset($_POST['update_access'])){
    $page = $_POST['page'];
    $new_permition=implode(',',$_POST['page']);
    $title = $_POST['title'];
    $status = $_POST['status'];
    update_permition($id,$title,$status,$new_permition);
    $result = 'ok_update_access';
    header("location:dashboard.php?page=config-access&op={$result}");
}
?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>ایجادو ویرایش مجوز دسترسی</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="../bootstrap/js/popper.min.js">
    <link rel="stylesheet" href="../bootstrap/js/bootstrap.min.js">

</head>
<body>
<br>
<div style="background-color:#ffffff;">
    <form class="my-form" style=";padding: 51px;box-shadow: 0 0 20px 0 rgb(0 0 0), 0px 0px 0px 0 rgb(0 0 0);" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-9" style="margin-right: 46px;">

                <div class="alert alert-success" role="alert" style="color: #ffffff;background-color: #6c757d;border-color: #000000;">
                    <h4 class="alert-heading">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16" id="tools"><path d="M1 0L0 1l2.2 3.081a1 1 0 00.815.419h.07a1 1 0 01.708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 000 13a3 3 0 105.878-.851l2.654-2.617.968.968-.305.914a1 1 0 00.242 1.023l3.356 3.356a1 1 0 001.414 0l1.586-1.586a1 1 0 000-1.414l-3.356-3.356a1 1 0 00-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0016 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 00-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 01-.293-.707v-.071a1 1 0 00-.419-.814L1 0zm9.646 10.646a.5.5 0 01.708 0l3 3a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"></path></svg>
                        پیکربندی دسترسی ها !</h4><br>
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                            <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"></path>
                            <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"></path>
                        </svg> برای افزودن ابزارک جدید به سایت به دو ورودی نیاز است .<br><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                            <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"></path>
                            <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"></path>
                        </svg> در بخش اول شما محتوی لازم برای نمایش ابزارک را مشخص می کنید .<br> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                            <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"></path>
                            <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"></path>
                        </svg> در بخش دوم کد svg تصویر مربوط به ابزارک مورد نظر را قرار دهید.<br><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                            <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"></path>
                        </svg> لطفا در هنگام قرار دادن کد svg ، ویژگی طول (Height) و عرض (Width) آن را حذف نمایید. </p>
                    <hr style="border-top-color: #ffffff;">
                    <p class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z"></path>
                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
                        </svg> اگر نیاز به افزودن بیش از یک ابزارک دارید لطفا روی " + افزودن ابزارک " کلیک کنید. </p>
                </div>

                <hr>
                <?php
                if(isset($_GET['op'])) :
                if($_GET['op'] == 'ok_update_access'):
                ?>
                    <div class="alert alert-primary" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
                            <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"></path>
                            <path d="M8.354 10.354l7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"></path>
                        </svg>
                        ویرایش مجوز دسترسی با موفقیت انجام شد.<br>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M3.5 10a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 0 0 1h2A1.5 1.5 0 0 0 14 9.5v-8A1.5 1.5 0 0 0 12.5 0h-9A1.5 1.5 0 0 0 2 1.5v8A1.5 1.5 0 0 0 3.5 11h2a.5.5 0 0 0 0-1h-2z"></path>
                            <path fill-rule="evenodd" d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"></path>
                        </svg>
                        جهت بررسی موارد بیشتر می توانید به " لیست دسترسی ها " پایین صفحه مراجعه کنید.
                    </div>
                <?php endif; ?>
                <?php endif; ?>
                <?php
                if(isset($_GET['op'])) :
                if($_GET['op'] == 'ok_delete_access'):
                ?>
                    <div class="alert alert-danger" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
                            <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"></path>
                            <path d="M8.354 10.354l7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"></path>
                        </svg>
                        حذف مجوز دسترسی با موفقیت انجام شد.<br>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M3.5 10a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 0 0 1h2A1.5 1.5 0 0 0 14 9.5v-8A1.5 1.5 0 0 0 12.5 0h-9A1.5 1.5 0 0 0 2 1.5v8A1.5 1.5 0 0 0 3.5 11h2a.5.5 0 0 0 0-1h-2z"></path>
                            <path fill-rule="evenodd" d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"></path>
                        </svg>
                        جهت بررسی موارد بیشتر می توانید به " لیست دسترسی ها " پایین صفحه مراجعه کنید.
                    </div>
                <?php endif; ?>
                <?php endif; ?>
                <?php
                if(!isset($_POST['update_access'])) :
                ?>
                <div style="box-shadow: 0 0 20px 0 rgb(0 0 0), 0px 0px 0px 0 rgb(0 0 0);background-color:  rgb(241 241 241);padding: 41px;">
                    <?php if($update) : ?>
                        <h5 style="color: #000000;"> ویرایش مجوز دسترسی کد <?php echo $up_permition->code; ?> </h5><br>
                    <?php else : ?>
                        <h5 style="color: #000000;"> ایجاد مجوز دسترسی </h5><br>
                    <?php endif; ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-3" style="direction: ltr;">
                            <input type="text" class="form-control" name="title" style="direction: rtl;font-size: 12px;" placeholder="لطفا عنوان مجوز را وارد نمایید" aria-label="Recipient's username" aria-describedby="basic-addon2" value=""<?php if($update) echo $up_permition->name;?>"  required>
                            <span class="input-group-text" id="basic-addon2"style="width: 46%;font-size: 12px;">عنوان مجوز | سمت در سیستم</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3" style="direction: ltr;">
                            <select class="form-control" aria-label="Default select example" style="direction: rtl;font-size: 12px;" name = "status" required>
                                <option value="" selected disabled>انتخاب وضعیت مجوز دسترسی</option>
                                <option value="on" <?php if ($update){if ($up_permition->status == 'on') echo 'selected';} ?>>فعال | دسترسی تعیین مجوز کاربر</option>
                                <option value="off" <?php if ($update){if ($up_permition->status == 'off') echo 'selected';} ?>>غیر فعال | ذخیره به عنوان مجوز پیش نویس</option>
                            </select>
                            <span class="input-group-text" id="basic-addon2"style="font-size: 12px;width: 25%;">وضعیت مجوز</span>
                        </div>
                    </div>
                </div>

                <div class="row" >
                    <div class="col-md-4" style="font-size: 17px;">
                        <h5>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"></path>
                            </svg>
                            مدیریت کاربران</h5><br>
                        <?php
                        $dir_Category = 'users/';
                        $scan_dir_Category = scandir($dir_Category);
                        foreach ($scan_dir_Category as $key=>$file) :
                            $tempext=explode(".",$file);
                            if (end($tempext)=="php") :
                                $title = page_title ("users/".$file).'';
                                if ($title!='') :
                                    ?>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name = page[] type="checkbox" id="<?php echo 'users'.$key; ?>" value="<?php echo $file;?>"  <?php if($update){if(strpos($up_permition->permition , $file) !==false){ echo 'checked';}} ?>>
                                        <label class="form-check-label" for="<?php echo 'users'.$key; ?>"><?php echo $title; ?></label>
                                    </div>

                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>

                    <div class="col-md-4" style="font-size: 17px;">
                        <h5>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"></path>
                            </svg>
                            مدیریت اسلایدر ها</h5><br>
                        <?php
                        $dir_Category = 'slider/';
                        $scan_dir_Category = scandir($dir_Category);
                        foreach ($scan_dir_Category as $key=>$file) :
                            $tempext=explode(".",$file);
                            if (end($tempext)=="php") :
                                $title = page_title ("slider/".$file).'';
                                if ($title!='') :
                                    ?>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name = page[] type="checkbox" id="<?php echo 'slider'.$key; ?>" value="<?php echo $file;?>"  <?php if($update){if(strpos($up_permition->permition , $file) !==false){ echo 'checked';}} ?>>
                                        <label class="form-check-label" for="<?php echo 'slider'.$key; ?>"><?php echo $title; ?></label>
                                    </div>

                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>

                    <div class="col-md-4" style="font-size: 17px;">
                        <h5>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-file-text" viewBox="0 0 16 16">
                                <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"></path>
                                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"></path>
                            </svg>
                            مدیریت دسته ها</h5><br>
                        <?php
                        $dir_Category = 'categorys/';
                        $scan_dir_Category = scandir($dir_Category);
                        foreach ($scan_dir_Category as $key=>$file) :
                            $tempext=explode(".",$file);
                            if (end($tempext)=="php") :
                                $title = page_title ("categorys/".$file).'';
                                if ($title!='') :
                                    ?>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name = page[] type="checkbox" id="<?php echo 'categorys'.$key; ?>" value="<?php echo $file;?>"  <?php if($update){if(strpos($up_permition->permition , $file) !==false){ echo 'checked';}} ?>>
                                        <label class="form-check-label" for="<?php echo 'categorys'.$key; ?>"><?php echo $title; ?></label>
                                    </div>

                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                    <br>

                    <div class="row">
                        <div class="col-md-4" style="font-size: 17px;">
                            <h5>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-chat-text" viewBox="0 0 16 16">
                                    <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"></path>
                                    <path d="M4 5.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zM4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8zm0 2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"></path>
                                </svg>
                                مدیریت نوشته ها</h5><br>
                            <?php
                            $dir_Category = 'article/';
                            $scan_dir_Category = scandir($dir_Category);
                            foreach ($scan_dir_Category as $key=>$file) :
                                $tempext=explode(".",$file);
                                if (end($tempext)=="php") :
                                    $title = page_title ("article/".$file).'';
                                    if ($title!='') :
                                        ?>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name = page[] type="checkbox" id="<?php echo 'article'.$key; ?>" value="<?php echo $file;?>"  <?php if($update){if(strpos($up_permition->permition , $file) !==false){ echo 'checked';}} ?>>
                                            <label class="form-check-label" for="<?php echo 'article'.$key; ?>"><?php echo $title; ?></label>
                                        </div>

                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <hr>
                    <?php
                    if($update):
                    ?><input type="submit" name="update_access" value="ویرایش مجوز"  class="btn btn-primary btn-addmenue" style="margin-left: 5px;">
                        <br>
                    <?php else: ?>
                        <input type="submit" name="send_access" value="ایجاد مجوز"  class="btn btn-primary btn-addmenue" style="margin-left: 5px;">
                        <br>
                    <?php endif; ?>
                </div>
            </div>
            <br>
            <br>
        </div>
        <br>
        <br>
        <?php include_once 'list-access.php'; ?>
     </div>
</form>
<?php endif;?>
</body>
</html>
<?php else:?>
    <div class="alert alert-danger alert-dismissible fade show" style="line-height: 28px;" role="alert">
        <strong>کاربر محترم!<br></strong> شما به بخش ایجاد و ویرایش مجوز دسترسی ندارید
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif;?>