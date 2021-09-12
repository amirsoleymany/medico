<?php
include_once '../function/dbconnect.php';
include_once '../function/function.php';
?>
<!DOCTYPE html>
<html lang="fa_IR">
<head>
    <meta charset="UTF-8">
    <title>Title</title>


    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
</head>
<body>
<div class="topmenu">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="text-align: right;">
                <a class="btn btn-primary" href="#" style="background-color: #212121;border-color: #212121;">نمایش سایت</a>
                <a class="btn btn-danger" href="#" style="background-color: #abffd7;border-color: #abffd7;">خروج</a>

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
                        case 'new-user' :
                            include_once 'users/user-new users.php';
                            break;
                        case 'setting-user' :
                            include_once 'users/setting-user.php';
                            break;

                    }
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