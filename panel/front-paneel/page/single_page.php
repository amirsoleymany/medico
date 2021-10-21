
<head>
    <title>پیکربندی تک صفحه</title>
</head>
<?php
include_once '../function/f-page.php';
$is_update = false ;
$res = select_single_page();
if($res->id !=""){
    $is_update = true;
    $res_title_btn = explode(',',$res->btn_title);
    $res_link_page = explode(',',$res->link_page);
    $res_status = explode(',',$res->status);
}
if(isset($_POST['made_single_page'])){
$info = $_POST['info'];
$title = $_POST['title'];
$page = $_POST['page'];
$status = $_POST['status'];
insert_single_page($info,$title,$page,$status);
$result = 'ok_made_single_page';
header("location:dashboard.php?page=single_page&op={$result}");
}
?>
<?php
if(isset($_POST['update_single_page'])){
    $info = $_POST['info'];
    $title = $_POST['title'];
    $page = $_POST['page'];
    $status = $_POST['status'];
    update_single_page($res->id,$info,$title,$page,$status);
    $result = 'ok_update_single_page';
    header("location:dashboard.php?page=single_page&op={$result}");
}
?>
<div style="box-shadow: 0 0 20px 0 rgb(0 0 0), 0 5px 5px 0 rgb(0 0 0);background-color:#b2bec3;padding: 176px;">
    <div class="alert alert-success" role="alert" >
        <h4 class="alert-heading">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16" id="tools"><path d="M1 0L0 1l2.2 3.081a1 1 0 00.815.419h.07a1 1 0 01.708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 000 13a3 3 0 105.878-.851l2.654-2.617.968.968-.305.914a1 1 0 00.242 1.023l3.356 3.356a1 1 0 001.414 0l1.586-1.586a1 1 0 000-1.414l-3.356-3.356a1 1 0 00-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0016 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 00-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 01-.293-.707v-.071a1 1 0 00-.419-.814L1 0zm9.646 10.646a.5.5 0 01.708 0l3 3a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"></path></svg>
            پیکربندی تک صفحه !</h4><br>
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
    </div>
    <?php
    if(isset($_GET['op'])) :
        if($_GET['op'] == 'ok_made_single_page'):
            ?>
            <div class="alert alert-primary" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
                    <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"></path>
                    <path d="M8.354 10.354l7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"></path>
                </svg>
                ایجاد صفحه جدید با موفقیت انجام شد .<br>
            </div>
        <?php endif; ?>
    <?php endif; ?>
    <?php
    if(isset($_GET['op'])) :
        if($_GET['op'] == 'ok_update_single_page'):
            ?>
            <div class="alert alert-primary" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
                    <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"></path>
                    <path d="M8.354 10.354l7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"></path>
                </svg>
                ویرایش تک صفحه با موفقیت انجام شد .<br>
            </div>
        <?php endif; ?>
    <?php endif; ?>
    <form class="my-form" method="post" enctype="multipart/form-data" style="box-shadow: 0 0 20px 0 rgb(0 0 0), 0 5px 5px 0 rgb(0 0 0);background-color: #354a51;padding: 76px;">
        <div class="input-group mb-3" style="direction: ltr;">
            <input type="text" class="form-control" name="info[title]" style="direction: rtl;" placeholder="لطفا عنوان تک صفحه را وارد نمایید" aria-label="Recipient's username" aria-describedby="basic-addon2" value="<?php if($is_update){ echo $res->title;} ?>" required>
            <span class="input-group-text" id="basic-addon2"style="width: 151px;"> عنوان تک صفحه</span>
        </div>
        <div class="input-group">
            <span class="input-group-text"> محتوی قابل نمایش</span>
            <textarea class="form-control" aria-label="With textarea" name="info[description]" style="direction: rtl;" maxlength="300" placeholder="'لطفا متن محتوی تک صفحه را بنویسید" required><?php if($is_update){ echo $res->description;} ?></textarea>
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-text" style="width: 151px;"> کد امبد ویدیو صفحه</span>
            <textarea class="form-control"style="direction: ltr;" aria-label="With textarea" name="info[video_code]"  placeholder="Video Embed Code..." required><?php if($is_update){ echo $res->video_code;} ?></textarea>
        </div>
        <br>

           <?php echo $res->video_code; ?>

        <br>
        <div class="row">
            <div class="col-md-4">
                <div class="input-group mb-3" style="direction: ltr;">
                    <input type="text" class="form-control" name="title[btn1]" style="direction: rtl;" placeholder="کلید اول" aria-label="Recipient's username" aria-describedby="basic-addon2" value="<?php if($is_update){ echo $res_title_btn[0];} ?>"required>
                    <span class="input-group-text" id="basic-addon2"style="width: 151px;"> عنوان کلید اول </span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3" style="direction: ltr;">
                    <select class="form-control" aria-label="Default select example" style="direction: rtl;" name = "page[btn1]" required>
                        <option value="">هیچکدام </option>
                        <?php
                        $pages = list_pages();
                        foreach ($pages as $page) :
                            ?>
                            <option value="<?php echo $page->id ?>"
                            <?php if($page->id == $res_link_page[0]){
                                echo 'selected';
                            } ?>
                            ><?php echo $page->title ?></option>
                        <?php endforeach; ?>
                    </select>
                    <span class="input-group-text" id="basic-addon2"style="width: 151px;"> لینک کلیداول صفحه </span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3" style="direction: ltr;">
                    <select class="form-control" aria-label="Default select example" style="direction: rtl;" name = "status[btn1]" required>
                        <option value="">انتخاب وضعیت</option>
                        <option value="on"<?php
                        if($is_update){
                            if($res_status[0] == 'on'){
                                echo 'selected';
                            }
                        }
                        ?>>فعال | نمایش در سایت</option>
                        <option value="off"<?php
                        if($is_update){
                            if($res_status[0] == 'off'){
                                echo 'selected';
                            }
                        }
                        ?>>غیرفعال | عدم نمایش در سایت</option>
                    </select>
                    <span class="input-group-text" id="basic-addon2"style="width: 151px;"> وضعیت کلیداول </span>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <div class="input-group mb-3" style="direction: ltr;">
                    <input type="text" class="form-control" name="title[btn2]" style="direction: rtl;" placeholder="کلید دوم" aria-label="Recipient's username" aria-describedby="basic-addon2" value=" <?php if($is_update){ echo $res_title_btn[1];} ?>" required>
                    <span class="input-group-text" id="basic-addon2"style="width: 151px;"> عنوان کلید دوم </span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3" style="direction: ltr;">
                    <select class="form-control" aria-label="Default select example" style="direction: rtl;" name = "page[btn2]" required>
                        <option value="">هیچکدام </option>
                        <?php
                        $pages = list_pages();
                        foreach ($pages as $page) :
                        ?>
                        <option value="<?php echo $page->id ?>"<?php echo $page->id ?>"
                            <?php if($page->id == $res_link_page[1]){
                            echo 'selected';
                        } ?>><?php echo $page->title ?></option>
                        <?php endforeach; ?>
                    </select>
                    <span class="input-group-text" id="basic-addon2"style="width: 151px;"> لینک کلیددوم صفحه </span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3" style="direction: ltr;">
                    <select class="form-control" aria-label="Default select example" style="direction: rtl;" name = "status[btn2]" required>
                        <option value=""> انتخاب وضعیت</option>
                        <option value="on"<?php
                        if($is_update){
                            if($res_status[1] == 'on'){
                                echo 'selected';
                            }
                        }
                        ?>>فعال | نمایش در سایت</option>
                        <option value="off"<?php
                        if($is_update){
                            if($res_status[1] == 'off'){
                                echo 'selected';
                            }
                        }
                        ?>>غیرفعال | عدم نمایش در سایت</option>
                    </select>
                    <span class="input-group-text" id="basic-addon2"style="width: 151px;"> وضعیت کلیددوم </span>
                </div>
            </div>
        </div>
        <br>
        <div class="input-group mb-3" style="direction: ltr;">
            <select class="form-control" aria-label="Default select example" style="direction: rtl;" name = "status[single_page]" required>
                <option value="">تنظیم وضعیت نمایش تک صفحه در سایت </option>
                <option value="on"<?php
                if($is_update){
                    if($res_status[2] == 'on'){
                        echo 'selected';
                    }
                }
                ?>>فعال | نمایش در سایت</option>
                <option value="off"<?php
                if($is_update){
                    if($res_status[2] == 'off'){
                        echo 'selected';
                    }
                }
                ?>>غیرفعال | عدم نمایش در سایت</option>
            </select>
            <span class="input-group-text" id="basic-addon2"style="width: 151px;"> وضعیت نمایش </span>
        </div>
        <?php if($is_update): ?>
        <input type="submit" class="btn btn-primary" name = "update_single_page" style="float: left;" value="ویرایش تک صفحه">
        <?php else : ?>
        <input type="submit" class="btn btn-primary" name = "made_single_page" style="float: left;" value="ایجاد تک صفحه">
        <?php endif; ?>
    </form>
</div>


