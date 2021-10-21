<head>
    <title>ویرایش ابزارک</title>
</head>
<?php
include_once '../function/f-widget.php';
$id = $_GET['id'];
$widget = select_widget($id);
if(isset($_POST['update'])){
    $title = $_POST['title'];
    $sort = $_POST['sort'];
    $svg_code = $_POST['icon'];
    $status = $_POST['status'];
    update_widget($id,$title,$sort,$svg_code,$status);
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
            <div class="col-md-1">

            </div>

            <div class="col-md-10">

                <div class="alert alert-success" role="alert" >
                    <h4 class="alert-heading">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16" id="tools"><path d="M1 0L0 1l2.2 3.081a1 1 0 00.815.419h.07a1 1 0 01.708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 000 13a3 3 0 105.878-.851l2.654-2.617.968.968-.305.914a1 1 0 00.242 1.023l3.356 3.356a1 1 0 001.414 0l1.586-1.586a1 1 0 000-1.414l-3.356-3.356a1 1 0 00-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0016 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 00-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 01-.293-.707v-.071a1 1 0 00-.419-.814L1 0zm9.646 10.646a.5.5 0 01.708 0l3 3a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"></path></svg>
                        ویرایش پیکربندی ابزارک !</h4><br>
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
                    <hr>
                    <p class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z"></path>
                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
                        </svg> اگر نیاز به افزودن بیش از یک ابزارک دارید لطفا روی " + افزودن ابزارک " کلیک کنید. </p>
                </div><hr>
                <?php
                if(isset($_POST['update'])):
                ?>
                <div class="alert alert-success" role="alert"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
                        <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"></path>
                        <path d="M8.354 10.354l7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"></path>
                    </svg>
                    ویرایش ابزارک با عنوان" <?php echo $widget->title ?>"  با موفقیت انجام شد.<br> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M3.5 10a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 0 0 1h2A1.5 1.5 0 0 0 14 9.5v-8A1.5 1.5 0 0 0 12.5 0h-9A1.5 1.5 0 0 0 2 1.5v8A1.5 1.5 0 0 0 3.5 11h2a.5.5 0 0 0 0-1h-2z"></path>
                        <path fill-rule="evenodd" d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"></path>
                    </svg> شما می توانید برای ویرایش ابزارک های دیگر به لیست ابزارک ها در پایین این صفحه مراجعه کنید.
                </div>
                <?php endif; ?>
                <div style="box-shadow: 0 0 20px 0 rgb(0 0 0), 0 5px 5px 0 rgb(0 0 0);background-color: rgb(0 123 255 /10% );padding: 41px;">
                    <h5 style="color: white;"> ویرایش ابزارک</h5><br>
                    <div class="input-group mb-3" style="direction: ltr;">
                        <input type="text" class="form-control" name="title" style="direction: rtl;" placeholder="لطفا نام ابزارک را وارد نمایید" aria-label="Recipient's username" aria-describedby="basic-addon2" value="<?php echo $widget->title ?>" required>
                        <span class="input-group-text" id="basic-addon2"style="width: 114px;">عنوان ابزارک</span>
                    </div>
                    <div class="input-group mb-3" style="direction: ltr;">
                        <input type="text" class="form-control" name="sort" style="direction: rtl;" placeholder="لطفا ترتیب نمایش ابزارک در سایت را به عدد وارد نمایید" aria-label="Recipient's username" aria-describedby="basic-addon2" value="<?php echo $widget->sort ?>" required>
                        <span class="input-group-text" id="basic-addon2"style="width: 114px;">ترتیب نمایش</span>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text">کد svg ابزارک</span>
                        <textarea class="form-control" aria-label="With textarea" name="icon" style="direction: ltr;" rows="" required><?php echo $widget->svg_code ?></textarea>
                    </div>
                    <br>
                    <div class="input-group mb-3" style="direction: ltr;">
                        <select class="form-control" aria-label="Default select example" style="direction: rtl;" name = "status" required>
                            <option value="">انتخاب وضعیت نمایش ابزارک در سایت</option>
                            <option value="on" <?php
                            if($widget->status == 'on'){
                                echo "selected";
                            }
                            ?>>نمایش ابزارک در سایت</option>
                            <option value="off"<?php
                            if($widget->status == 'off'){
                                echo "selected";
                            }
                            ?>>عدم نمایش ابزارک در سایت</option>
                        </select>
                        <span class="input-group-text" id="basic-addon2"style="width: 114px;">وضعیت ابزارک</span>
                    </div>
                </div>
                <br><hr>
                <a class="btn btn-dark btn-addmenue" style="color: #FFFFFF" href="dashboard.php?page=list-widget">بازگشت</a>
                <input type="submit" name="update" value="ویرایش ابزارک" class="btn btn-primary btn-addmenue" style="margin-left: 5px;">
            </div>
            <br>
            <br>

        </div>
</div>
</form>
<br><hr>
<?php
include_once 'list_widget.php';
?>
</body>
</html>


