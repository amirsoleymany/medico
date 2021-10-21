<?php
include_once '../function/function.php';
include_once '../function/f-slider.php';
/*$select_permitions = select_user_permition($_SESSION['login_user']);
if(strpos($select_permitions->permition,'list_slider_info.php') !==false):*/
?>
<head>
    <title>مشاهده همه دسته های اسلایدی</title>
</head>
<table class="table table-striped table-advance table-hover">
    <thead>
    <tr>
        <th>عنوان گروه</th>
        <th>تعداد اسلاید</th>
        <th>تاریخ ایحاد</th>
        <th>کاربر</th>
        <th>وضعیت</th>
        <th>مسیر</th>
    <?php /*if(strpos($select_permitions->permition,'edit-slider_info.php') !==false):*/?>
    <th>ویرایش</th>
    <?php /*endif;*/?>
    <?php /*if(strpos($select_permitions->permition,'import-slider.php') !==false):*/?>
    <th>افزودن اسلاید</th>
    <?php /*endif;*/?>
    <?php /*if(strpos($select_permitions->permition,'delete_slide_info.php') !==false):*/?>
    <th>حذف</th>
    <?php /*endif;*/?>

    </tr>
    </thead>
    <tbody>
    <?php
    $list_slider_gp = list_slider_gp();
    foreach ($list_slider_gp as $slide) :
        ?>
        <tr>
            <td><a class="title" href="#"> <?php echo $slide->title; ?> </a></td>
            <td><?php echo $slide->number_slide; ?></td>
            <td><?php echo $slide->date;  ?></td>
            <td><?php echo $slide->author;  ?></td>
            <td>
                <?php if($slide->status == 'on'): ?>
                <a class="btn btn-success" style="color: #FFFFFF;position: relative;right: 17px;">نمایش در سایت</a>
                <?php else : ?>
                    <a class="btn btn-danger" style="color: #FFFFFF">عدم نمایش در سایت</a>
                <?php endif;?>
            </td>
            <td><?php echo $slide->dir;  ?></td>
        <?php /*if(strpos($select_permitions->permition,'edit-slider_info.php') !==false):*/?>
        <td><a href="dashboard.php?page=edit_slider_info&id=<?php echo $slide->id; ?>" class="btn btn-primary btn-xs">
                <svg class="bi bi-pencil" width="1.2em" height="1.2em"
                     viewBox="0 0 16 16" fill="currentColor"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M11.293 1.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"
                          clip-rule="evenodd"></path>
                    <path fill-rule="evenodd"
                          d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 00.5.5H4v.5a.5.5 0 00.5.5H5v.5a.5.5 0 00.5.5H6v-1.5a.5.5 0 00-.5-.5H5v-.5a.5.5 0 00-.5-.5H3z"
                          clip-rule="evenodd"></path>
                </svg>

            </td>
        <?php /*endif;*/?>

            <?php /*if(strpos($select_permitions->permition,'import-slider.php') !==false):*/?>
            <td><a href="dashboard.php?page=import-slider&id=<?php echo $slide->id; ?>" class="btn btn-success btn-xs">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"></path>
                    </svg>
                    <?php /*endif;*/?>
            </td>
        <?php /*if(strpos($select_permitions->permition,'delete_slide_info.php') !==false):*/?>
        <td><a href="dashboard.php?page=delete-slider_info&id=<?php echo $slide->id; ?>" class="btn btn-danger btn-xs">
                    <svg class="bi bi-trash" width="1.2em" height="1.2em"
                         viewBox="0 0 16 16" fill="currentColor"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.5 5.5A.5.5 0 016 6v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V6z"></path>
                        <path fill-rule="evenodd"
                              d="M14.5 3a1 1 0 01-1 1H13v9a2 2 0 01-2 2H5a2 2 0 01-2-2V4h-.5a1 1 0 01-1-1V2a1 1 0 011-1H6a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM4.118 4L4 4.059V13a1 1 0 001 1h6a1 1 0 001-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"
                              clip-rule="evenodd"></path>
                    </svg>
                </a>
            </td>
        <?php /*endif;*/?>

        </tr>
    <?php endforeach;?>
    </tbody>

</table>
<?php /*else:*/?><!--
    <div class="alert alert-danger alert-dismissible fade show" style="line-height: 28px;" role="alert">
        <strong>کاربر محترم!<br></strong> شما به بخش مشاهده همه دسته های اسلایدی دسترسی ندارید
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
--><?php /*endif;*/?>