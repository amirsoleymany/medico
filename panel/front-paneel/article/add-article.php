<head>
    <title>افزودن نوشته جدید</title>

</head>
<?php
include_once '../function/f-article.php';
include_once '../function/function.php';
/*$select_permitions = select_user_permition($_SESSION['login_user']);
if(strpos($select_permitions->permition,'add-article.php') !==false):*/
if(isset($_POST['send']) or isset($_POST['save'])){
    if(isset($_POST['send'])){
        $status = 'publish';
    }
    elseif (isset($_POST['save'])){
        $status = 'save';
    }
$info = $_POST['info'];
$category = $_POST['cat'];
$pics = $_FILES['pic'];
    if(!$pics['name'] == ""){
    $new_loc = upload_pics($pics,"../img/");
    }
    else{
    $new_loc = "فاقد تصویر";
    }
add_article($info,$category,$new_loc,$status);
}
?>
<div style="background: #ffffff;padding: 5%;box-shadow: inset 0 0 0px 0 rgb(33 33 33), 0 0px 20px 0 rgb(33 33 33);">
<div class="container-fluid" style="padding: 0">
    <div class="row">

        <div class="col-md-12">
            <h5 class="title-form">افزودن نوشته جدید</h5>
            <hr>
            <form class="my-form" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-8">
                        <div style="background: #f1f1f1;padding: 5%;box-shadow: 0px 0px 10px 0px rgb(33 33 33), 0 0px 0px -1px rgb(33 33 33);">
                        <input class="form-control inputbig" type="text" name="info[title]"placeholder="عنوان را اینجا وارد کنید" style="background-color: #ffffff;">

                        <br>
                        <textarea class="form-control" name="info[body]" id="mytextarea" aria-hidden="true" rows="12"></textarea>

                        <br>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div style="background: #f1f1f1;padding: 5%;box-shadow: 0px 0px 10px 0px rgb(33 33 33), 0 0px 0px -1px rgb(33 33 33);">
                     <div class="box-widget">
                            <h5>دسته بندی نوشته : </h5>
                        <?php
                        $categories = list_category_article();
                        foreach ($categories as $cat) :
                        ?>
                            <div class="custom-control custom-checkbox">
                                <div class="boxcheck">
                                    <input name="cat[]" value="<?php echo $cat->id?>" type="checkbox"
                                           class="custom-control-input" id="<?php echo $cat->id?>">
                                    <label class="custom-control-label" for="<?php echo $cat->id?>"><?php echo $cat->title ?></label>

                        <?php
                        $subcategories = list_subcategory_article($cat->id);
                        foreach ($subcategories as $subcat) : ?>
                                    <div class="custom-control custom-checkbox ">
                                        <div class="boxcheck">
                                            <svg class="bi bi-arrow-return-left" width="1em"
                                                 height="1em" viewBox="0 0 16 16"
                                                 fill="currentColor"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                      d="M5.854 5.646a.5.5 0 010 .708L3.207 9l2.647 2.646a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z"
                                                      clip-rule="evenodd"></path>
                                                <path fill-rule="evenodd"
                                                      d="M13.5 2.5a.5.5 0 01.5.5v4a2.5 2.5 0 01-2.5 2.5H3a.5.5 0 010-1h8.5A1.5 1.5 0 0013 7V3a.5.5 0 01.5-.5z"
                                                      clip-rule="evenodd"></path>
                                            </svg>
                                            <input name="cat[]" value="<?php echo $subcat->id?>" type="checkbox" class="custom-control-input" id="<?php echo $subcat->id?>">
                                            <label class="custom-control-label"
                                                   for="<?php echo $subcat->id?>"> <?php echo $subcat->title ?> </label>
                                        </div>
                                    </div>
                        <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        </div>

                        <div class="box-widget">
                            <h5>تصویر شاخص</h5>
                            <input type="file" name="pic">
                        </div>
                            <div class="box-widget">
                                <h5>انتشار : </h5>
                                <button class="btn btn-primary form-control" type="submit" name="send">
                                    انتشار نوشته
                                </button>
                                <button class="btn btn-primary form-control" type="submit" name="save" style="margin-top: 10px;">
                                    ذخیره پیش نویس
                                </button>
                                <hr>
                                <a class="btn btn-danger form-control" type="submit" name="back" href="dashboard.php?page=list_article">
                                    بازگشت
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>

    </div>
</div>
<!--    <?php /*else:*/?>
        <div class="alert alert-danger alert-dismissible fade show" style="line-height: 28px;" role="alert">
            <strong>کاربر محترم!<br></strong> شما به بخش افزودن نوشته جدید دسترسی ندارید
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    --><?php /*endif;*/?>

