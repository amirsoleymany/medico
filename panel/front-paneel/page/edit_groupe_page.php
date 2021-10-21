<head>
    <title>ویرایش گروه صفحات ایجادشده</title>
</head>
<?php
include_once '../function/f-page.php';
if(isset($_POST['update'])){
    $info = $_POST['info'];
    update_gp_page($id,$info);
    $result = 'ok_update';
    header("location:dashboard.php?page=setting_page&op={$result}");
}
?>
<div style="box-shadow: 0 0 20px 0 rgb(0 0 0), 0 5px 5px 0 rgb(0 0 0);background-color:#424f55;padding: 49px;">
    <form class="my-form" method="post" enctype="multipart/form-data">
        <div class="input-group mb-3" style="direction: ltr;">
            <input type="text" class="form-control" name="info[title]" style="direction: rtl;" placeholder="لطفا عنوان گروه صفحه را وارد نمایید" aria-label="Recipient's username" aria-describedby="basic-addon2" value = "<?php echo $res->title; ?>" required>
            <span class="input-group-text" id="basic-addon2"style="width: 138px;">عنوان گروه مربوطه</span>
        </div>
        <div class="input-group">
            <span class="input-group-text"> شرح گروه مربوطه</span>
            <textarea class="form-control" aria-label="With textarea" name="info[description]" style="direction: rtl;" placeholder="لطفا مختصری در خصوص گروه جدید توضیح دهید" required><?php echo $res->description; ?></textarea>
        </div>
        <br>
        <div class="input-group mb-3" style="direction: ltr;">
            <select class="form-control" aria-label="Default select example" style="sdirection: rtl;" name = "info[status]" required>
                <option value="">تنظیم وضعیت گروه صفحات </option>
                <option value="on" <?php
                if($res->status == 'on'){
                    echo 'selected';
                }
                ?>>فعال جهت ایجاد زیرصفحه اختصاصی</option>
                <option value="off"<?php
                if($res->status == 'off'){
                    echo 'selected';
                }
                ?>>غیرفعال و عدم دسترسی جهت ایجاد زیرصفحه اختصاصی</option>
            </select>
            <span class="input-group-text" id="basic-addon2"style="width: 138px;"> وضعیت گروه </span>
        </div>
        <input type="submit" class="btn btn-primary" name = "update" style="float: left;" value="ویرایش گروه صفحه"> <br>
    </form>
</div>



