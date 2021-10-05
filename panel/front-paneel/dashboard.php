<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="fa_IR">
<head>
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
                <a class="btn btn-primary" href="#">نمایش سایت</a>
                <a class="btn btn-danger" href="#">خروج</a>

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

                        case 'status-report' :
                            include_once 'users/status-report.php';
                            break;

                        case 'log-login-user' :
                            include_once 'users/log-login-user.php';
                            break;

                        case 'example_client' :
                            include_once 'users/example_client.php';
                            break;

                        case 'edit_info_user' :
                            include_once 'users/edit_info_user.php';
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