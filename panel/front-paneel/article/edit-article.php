<head>
    <title>ویرایش نوشته</title>
</head>
<?php
include_once  '../function/f-article.php';
include_once '../function/function.php';

$id = $_GET['id'];
$info_article = edit_article($id);
if(isset($_POST['update']) or isset($_POST['save'])){
    if(isset($_POST['update'])){
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
        $new_loc = $info_article->img;
    }
    update_article($id,$info,$category,$new_loc,$status);
    header("location:".$_SERVER['REQUEST_URI']);
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
                        <input class="form-control inputbig" type="text" name="info[title]"placeholder="عنوان را اینجا وارد کنید" value="<?php echo $info_article->title;?>">

                        <br>
                        <textarea class="form-control" name="info[body]" id="mytextarea" aria-hidden="true" rows="12"> <?php echo $info_article->text;?> </textarea>

                        <br>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div style="background: #f1f1f1;padding: 5%;box-shadow: 0px 0px 10px 0px rgb(33 33 33), 0 0px 0px -1px rgb(33 33 33);">
                        <div class="box-widget"><br>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                            </svg>
                         اطلاعات انتشار نوشته
                            <hr>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check"  style="margin-right: 2px; margin-top: 5px;"  viewBox="0 0 16 16">
                                <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"></path>
                            </svg>
                            تاریخ و زمان انتشار :
                            <input class="form-control inputbig" style="margin-top: 12px;" type="text" value="<?php echo $info_article->date;?>" readonly>
                            <br>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"></path>
                            </svg>
                            کاربر نویسنده :
                            <input class="form-control inputbig" style="margin-top: 12px;" type="text"  value="<?php echo $info_article->author;?>" readonly>

                        </div>
                            <div class="box-widget">
                                <br>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-image" viewBox="0 0 16 16">
                                    <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                                    <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z"></path>
                                </svg>
                                تصویر شاخص
                                <hr>
                                <img src="<?php echo $info_article->img;?>" style="width: 100%; height: 100%;">
                                <br>
                                <hr>
                                <input type="file" name="pic" style="margin-right: 35px;">
                            </div>
                        <div class="box-widget">
                            <h5>دسته بندی نوشته : </h5>
                            <?php
                                $list_category = list_category_article();
                                foreach ($list_category as $category):
                                ?>
                                <div class="custom-control custom-checkbox">
                                    <div class="boxcheck">
                                        <input name="cat[]" value="<?php echo $category->id?>" type="checkbox"
                                            class="custom-control-input" id="<?php echo $category->id?>"
                                            <?php if(strpos($info_article->cat_id,$category->id) !==false){ echo "checked";}?>>
                                        <label class="custom-control-label" for="<?php echo $category->id?>"><?php echo $category->title ?></label>

                                            <?php  $subcategories = list_subcategory_article($category->id);
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
                                                    <input name="cat[]" value="<?php echo $subcat->id?>" type="checkbox" class="custom-control-input" id="<?php echo $subcat->id?>"
                                                        <?php if(strpos($info_article->cat_id,$subcat->id) !==false){ echo "checked";}?> >
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
                                <h5>انتشار : </h5>
                                <button class="btn btn-primary form-control" type="submit" name="update">
                                    ویرایش و انتشار
                                </button>
                                <button class="btn btn-primary form-control" type="submit" name="save" style="margin-top: 10px;">
                                    پیش نویس
                                </button>
                                <hr>
                                <a class="btn btn-danger form-control" style="color: #FFFFFF" type="submit" name="back" href="dashboard.php?page=list_article">
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



