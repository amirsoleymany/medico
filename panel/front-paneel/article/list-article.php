<head>
    <title>مشاهده مقالات</title>
</head>
<?php

include_once '../function/f-article.php';
include_once '../function/function.php';
/*$select_permitions = select_user_permition($_SESSION['login_user']);
if(strpos($select_permitions->permition,'list-article.php') !==false):*/
$row= 1;
?>
<div style="background: #ffffff;padding: 5%;box-shadow: inset 0 0 0px 0 rgb(33 33 33), 0 0px 20px 0 rgb(33 33 33);">
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <span class="btn btn-light"  style="margin-right: 10px">تعداد کل :
                                <?php
                                $count = count(count_article());
                                echo $count;
                                ?>
                </span>
                <a class="btn btn-primary" href="dashboard.php?page=add-article">افزودن نوشته جدید</a>
            </header>
            <table class="table table-striped table-advance table-hover" style="margin-top:8px;">
                <thead>
                <tr>
                    <th>ردیف</th>
                    <th>کد محتوی</th>
                    <th>عنوان نوشته</th>
                    <th>محتوی نوشته</th>
                    <th>دسته بندی</th>
                    <th>وضعیت انتشار</th>
                    <th>نویسنده</th>
                    <th>تاریخ ایجاد</th>
                    <th>تصویر</th>
                    <?php /*if(strpos($select_permitions->permition,'edit-article.php') !==false):
                    */?>
                    <th>ویرایش</th>
                    <?php /*endif;*/?><!--
                    --><?php /*if(strpos($select_permitions->permition,'delete-article.php') !==false):
                    */?>
                    <th>حذف</th>
                    <?php /*endif;*/?>

                </tr>
                </thead>
                <tbody>
                <?php
                $list_art = list_article();
                foreach ($list_art as $article) :
                    ?>
                    <tr>
                        <td><?php echo $row++;?></td>
                        <td> <button type="button" class="btn btn-outline-dark" ><?php echo $article->code_article ;?></button> </td>
                        <td><a class="title" href="#"> <?php echo $article->title ?> </a></td>
                        <td style="width: 9cm;">
                            <?php
                            $text = limit_text_article($article->text,30)."...";
                            echo $text;
                            ?></td>
                        <td>
                            <?php
                            $cat = category_article($article->cat_id);
                            foreach($cat as $item){
                                echo $item->title." "."|". " ";
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            switch ($article->status){
                                case 'publish' :
                                    echo '<button type="button" class="btn btn-outline-success">منتشر شده</button>';
                                    break;
                                case 'save' :
                                    echo '<button type="button" class="btn btn-outline-primary">پیش نویس</button>';
                                    break;
                            }
                            ?>
                        </td>
                        <td><?php echo $article->author ?></td>
                        <td><?php echo $article->date ?></td>
                        <td><img src="<?php echo $article->img ?>" width="100" height="60"></td>
                        <?php /*if(strpos($select_permitions->permition,'edit-article.php') !==false):
                        */?>
                        <td><a href="dashboard.php?page=edit-article&id=<?php echo $article->id; ?>" class="btn btn-primary btn-xs"  >
                                <svg class="bi bi-pencil" width="1.2em" height="1.2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z" clip-rule="evenodd"></path>
                                    <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 00.5.5H4v.5a.5.5 0 00.5.5H5v.5a.5.5 0 00.5.5H6v-1.5a.5.5 0 00-.5-.5H5v-.5a.5.5 0 00-.5-.5H3z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </td>
                        <?php /*endif; */?><!--
                        --><?php /*if(strpos($select_permitions->permition,'delete-article.php') !==false):
                        */?>
                        <td><a href="dashboard.php?page=delete-article&id=<?php echo $article->id; ?>" class="btn btn-danger btn-xs">
                                <svg class="bi bi-trash" width="1.2em" height="1.2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.5 5.5A.5.5 0 016 6v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V6z"></path>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 01-1 1H13v9a2 2 0 01-2 2H5a2 2 0 01-2-2V4h-.5a1 1 0 01-1-1V2a1 1 0 011-1H6a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM4.118 4L4 4.059V13a1 1 0 001 1h6a1 1 0 001-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </td>
                        <?php /*endif; */?>
                    </tr>
                <?php endforeach; ?>
                </tbody>

            </table>
        </section>
    </div>
</div>
</div>
<?php /*else:*/?><!--
    <div class="alert alert-danger alert-dismissible fade show" style="line-height: 28px;" role="alert">
        <strong>کاربر محترم!<br></strong> شما به بخش مشاهده لیست نوشته ها دسترسی ندارید
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
--><?php /*endif;*/?>


