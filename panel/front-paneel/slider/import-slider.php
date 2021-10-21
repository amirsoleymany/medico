<head>
    <title>افزودن اسلایدر به گروه اسلایدی</title>
</head>
<?php
include_once '../function/f-slider.php';
include_once '../function/function.php';
$id = $_GET['id'];
$slider = select_slider($id);
if(isset($_POST['update'])) {
    if (!empty($_FILES["file"]["name"][0])) {
        foreach ($_FILES["file"]["name"] as $index => $value) {

            $slider_name = $_FILES["file"]["name"][$index];
            $tmp_name_slider = $_FILES["file"]["tmp_name"][$index];
            $slider_number = "اسلاید شماره-"."$index+1";
            $number = $index;
            $new_location =  upload_slider($slider_name,$tmp_name_slider,$slider->dir);
            insert_slider($id,$slider_number,$number,$new_location);
        }
    }
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
</head>
<body>
<div style="background: #ffffff;padding: 5%;box-shadow: inset 0 0 0px 0 rgb(33 33 33), 0 0px 20px 0 rgb(33 33 33);">
<div style="background-color: #b2bec3 ">
    <form class="my-form" style="box-shadow: 0 0 10px 0 rgb(0 0 0), 0px 0px 0px 0 rgb(0 0 0);background-color: rgb(241 241 241);padding: 41px;" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h5>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.7em" height="1.7em" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
                        <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                        <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z"></path>
                    </svg>
                    افزودن دسته اسلایدی جدید
                </h5>
                <br>
                <?php
                $number_slide = $slider->number_slide;
                for($i = 0 ; $i < $number_slide ; $i++) :
                    ?>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupFile02">
                             اسلاید شماره-<?php echo $i+1 ?>
                        </label>
                        <input type="file" class="form-control" id="inputGroupFile02" name="file[]" required >
                    </div>
                    <br>
                <?php endfor;?>
                <hr>
                <div style="direction: initial">
                <a class="btn btn-danger btn-addmenue" style="color: #FFFFFF" href="dashboard.php?page=setting-slider">بازگشت</a>
                <input type="submit" name="update" value="ثبت و ذخیره" class="btn btn-primary btn-addmenue" style="margin-left: 5px;">
                </div>
            </div>
            <br>
            <br>

        </div>
</div>
</form>
<br>
<br><hr>
<?php
include_once 'list_slide_info.php';
?>
</div>
</body>
</html>
