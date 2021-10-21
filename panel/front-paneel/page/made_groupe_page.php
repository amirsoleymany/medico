<head>
    <title>ایجاد گروه صفحات</title>
</head>
<?php
include_once '../function/f-page.php';
include_once '../function/function.php';
/*$select_permitions = select_user_permition($_SESSION['login_user']);
if(strpos($select_permitions->permition,'made_groupe_page.php') !==false):*/
if(isset($_POST['made_groupe_page'])){
$info = $_POST['info'];
    insert_gp_page($info);
    header("location:dashboard.php?page=setting_page");
}
?>
<div style="box-shadow: 0 0 20px 0 rgb(0 0 0), 0 5px 5px 0 rgb(0 0 0);background-color:#424f55;padding: 49px;">
    <form class="my-form" method="post" enctype="multipart/form-data">
    <div class="input-group mb-3" style="direction: ltr;">
        <input type="text" class="form-control" name="info[title]" style="direction: rtl;" placeholder="لطفا عنوان گروه صفحه را وارد نمایید" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
        <span class="input-group-text" id="basic-addon2"style="width: 138px;">عنوان گروه مربوطه</span>
    </div>
    <div class="input-group">
        <span class="input-group-text"> شرح گروه مربوطه</span>
        <textarea class="form-control" aria-label="With textarea" name="info[description]" style="direction: rtl;" placeholder="لطفا مختصری در خصوص گروه جدید توضیح دهید" required></textarea>
    </div>
    <br>
    <div class="input-group mb-3" style="direction: ltr;">
        <select class="form-control" aria-label="Default select example" style="direction: rtl;" name = "info[status]" required>
            <option value="">تنظیم وضعیت گروه صفحات </option>
            <option value="on">فعال جهت ایجاد زیرصفحه اختصاصی</option>
            <option value="off">غیرفعال و عدم دسترسی جهت ایجاد زیرصفحه اختصاصی</option>
        </select>
        <span class="input-group-text" id="basic-addon2"style="width: 138px;"> وضعیت گروه </span>
    </div>
    <input type="submit" class="btn btn-primary" name = "made_groupe_page" style="float: left;" value="ایجاد گروه صفحه"> <br>
    </form>
</div>

<?php /*else:*/?><!--
    <div class="alert alert-danger alert-dismissible fade show" style="line-height: 28px;" role="alert">
        <strong>کاربر محترم!<br></strong> شما به بخش ایجاد گروه صفحه جدید دسترسی ندارید
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
--><?php /*endif;*/?>


