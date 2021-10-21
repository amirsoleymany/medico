<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="fa_IR">
<head>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>
    <meta charset="UTF-8">
    <title>داشبورد</title>


    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
</head>
<body>
<div class="topmenu">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="text-align: right;">
                <a class="btn btn-primary" href="../../fr-html/index.php">نمایش سایت</a>
                <a class="btn btn-danger" href="../function/logout.php">خروج</a>

            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="admin-container">
        <div class="row">
            <?php include_once 'dashburd-menu.php'; ?>
            <div class="col-md-10">
                <div class="content-panel">
                    <div class="container-fluid">
                <?php
                if (isset($_GET['page'])){
                    switch ($_GET['page']){
                        case 'setting-user' :
                            include_once 'users/setting-user.php';
                            break;

                        case 'config-access' :
                            include_once 'users/config-access.php';
                            break;

                        case 'delete-access' :
                            include_once 'users/delete-access.php';
                            break;

                        case 'status-report' :
                            include_once 'users/status-report.php';
                            break;

                        case 'log-login-user' :
                            include_once 'users/log-login-user.php';
                            break;

                        case 'example_client' :
                            include_once 'users/example_client.php';
                            break;

                        case 'edit-info-user' :
                            include_once 'users/edit-info-user.php';
                            break;

                        case 'new-category' :
                            include_once 'categorys/new-category.php';
                            break;

                        case 'list-category' :
                            include_once 'categorys/list-category.php';
                            break;

                        case 'delete-category' :
                            include_once 'categorys/delete-category.php';
                            break;

                        case 'edit-category' :
                            include_once 'categorys/edit-category.php';
                            break;

                        case 'add-article' :
                            include_once 'article/add-article.php';
                            break;

                        case 'list_article' :
                            include_once 'article/list-article.php';
                            break;

                        case 'edit-article' :
                            include_once 'article/edit-article.php';
                            break;

                        case 'delete-article' :
                            include_once 'article/delete-article.php';
                            break;

                        case 'list-users' :
                            include_once 'users/list_users.php';
                            break;

                        case 'setting-slider' :
                            include_once 'slider/setting-slider.php';
                            break;

                        case 'edit_slider_info' :
                            include_once 'slider/edit-slider_info.php';
                            break;

                        case 'import-slider' :
                            include_once 'slider/import-slider.php';
                            break;

                        case 'edit_slide_info' :
                            include_once 'slider/edit_slide_info.php';
                            break;

                        case 'delete_slide_info' :
                            include_once 'slider/delete_slide_info.php';
                            break;

                        case 'delete-slider_info' :
                            include_once 'slider/delete-slider_info.php';
                            break;

                        case 'list-slider' :
                            include_once 'slider/list-slider.php';
                            break;

                        case 'take-turns' :
                            include_once 'patients/take-turns.php';
                            break;

                        case 'setting_widget' :
                            include_once 'widget/setting_widget.php';
                            break;

                        case 'edit-widget' :
                            include_once 'widget/edit_widget.php';
                            break;

                        case 'delete-widget' :
                            include_once 'widget/delete_widget.php';
                            break;

                        case 'setting_page' :
                            include_once 'page/setting_page.php';
                            break;

                        case 'delete-groupe-page' :
                            include_once 'page/delete-groupe-page.php';
                            break;

                        case 'delete-page' :
                            include_once 'page/delete-page.php';
                            break;

                        case 'single_page' :
                            include_once 'page/single_page.php';
                            break;
                    }
                }
                else{
                    include_once 'counter.php';
                }
                ?>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>

<script src="bootstrap/js/jquery-1.11.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/main.js"></script>

</body>
</html>