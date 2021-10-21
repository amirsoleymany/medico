<head>
    <title>مدیریت صفحات ایجادشده</title>
</head>
<?php
include_once '../function/f-page.php';
/*if(strpos($select_permitions->permition,'made_page.php') !==false):*/
if(isset($_POST['submit'])){
    $info = $_POST['info'];
    insert_page($info);
    $result = 'ok_made_page';
    header("location:dashboard.php?page=setting_page&op={$result}");
}
?>
<div style="box-shadow: 0 0 20px 0 rgb(0 0 0), 0 5px 5px 0 rgb(0 0 0);background-color:#424f55;padding: 49px;">
    <form class="my-form" method="post" enctype="multipart/form-data">
    <div class="input-group mb-3" style="direction: ltr;">
        <input type="text" class="form-control" name="info[title]" style="direction: rtl;" placeholder="لطفا عنوان گروه صفحه را وارد نمایید" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
        <span class="input-group-text" id="basic-addon2"style="width: 138px;">عنوان صفحه</span>
    </div>
    <div class="input-group mb-3" style="direction: ltr;">
        <select class="form-control" aria-label="Default select example" style="direction: rtl;" name = "info[groupe_page]" required>
            <option value="">انتخاب گروه صفحه جدید </option>
            <?php
            $groupe_page = list_groupe_page_active();
            foreach ($groupe_page as $val) :
            ?>
            <option value="<?php echo $val->id;?>"><?php echo $val->title;?></option>>
            <?php  endforeach;?>
        </select>
        <span class="input-group-text" id="basic-addon2"style="width: 138px;"> گروه صفحه </span>
    </div>
    <br>
    <div class="input-group mb-3" style="direction: ltr;">
        <select class="form-control" aria-label="Default select example" style="direction: rtl;" name = "info[status]" required>
            <option value="">تنظیم وضعیت گروه صفحات </option>
            <option value="on">فعال جهت نمایش در سایت</option>
            <option value="off">غیرفعال و عدم نمایش در سایت</option>
        </select>
        <span class="input-group-text" id="basic-addon2"style="width: 138px;"> وضعیت صفحه </span>
    </div>
    <input type="submit" class="btn btn-primary" name="submit" style="float: left;" value="ایجادصفحه"> <br>
    </form>
</div>
<?php /*else:*/?><!--
    <div class="alert alert-danger alert-dismissible fade show" style="line-height: 28px;" role="alert">
        <strong>کاربر محترم!<br></strong> شما به بخش ایجاد صفحه جدید دسترسی ندارید
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
--><?php /*endif;*/?>

