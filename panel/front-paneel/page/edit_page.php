<?php
if(isset($_POST['update_page'])){
$info = $_POST['info'];
    update_page($res->id,$info);
    $result = 'ok_update_page';
    header("location:dashboard.php?page=setting-page&op={$result}");
}
?>
<head>
    <title>ویرایش صفحات ایجاد شده</title>
</head>
<div style="box-shadow: 0 0 20px 0 rgb(0 0 0), 0 5px 5px 0 rgb(0 0 0);background-color:#424f55;padding: 49px;">
    <form class="my-form" method="post" enctype="multipart/form-data">
        <div class="input-group mb-3" style="direction: ltr;">
            <input type="text" class="form-control" name="info[title]" style="direction: rtl;" placeholder="لطفا عنوان گروه صفحه را وارد نمایید" aria-label="Recipient's username" aria-describedby="basic-addon2" value = "<?php echo $res->title; ?>" required>
            <span class="input-group-text" id="basic-addon2"style="width: 138px;">عنوان صفحه</span>
        </div>
        <div class="input-group mb-3" style="direction: ltr;">
            <select class="form-control" aria-label="Default select example" style="direction: rtl;" name = "info[groupe_page]" required>
                <option value="">انتخاب گروه صفحه جدید </option>
                <?php
                $groupe_page = list_groupe_page_active();
                foreach ($groupe_page as $val) :
                    ?>
                    <option value="<?php echo $val->id;?>"
                    <?php if($val->id == $res->id_groupe) {
                        echo 'selected';
                    } ?>
                    ><?php echo $val->title;?></option>
                <?php  endforeach;?>
            </select>
            <span class="input-group-text" id="basic-addon2"style="width: 138px;"> گروه صفحه </span>
        </div>
        <br>
        <div class="input-group mb-3" style="direction: ltr;">
            <select class="form-control" aria-label="Default select example" style="direction: rtl;" name = "info[status]" required>
                <option value="">تنظیم وضعیت گروه صفحات </option>
                <option value="on" <?php
                if($val->status == 'on'){
                    echo 'selected';
                }
                ?>>فعال جهت نمایش در سایت</option>
                <option value="off"<?php
                if($val->status == 'off'){
                    echo 'selected';
                }
                ?>
                >غیرفعال و عدم نمایش در سایت</option>
            </select>
            <span class="input-group-text" id="basic-addon2"style="width: 138px;"> وضعیت صفحه </span>
        </div>
        <input type="submit" class="btn btn-primary" name="update_page" style="float: left;" value="ویرایش صفحه"> <br>
    </form>
</div>

