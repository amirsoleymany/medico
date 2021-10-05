<?php
include_once '../function/f-users.php';
include_once '../function/function.php';
include_once '../function/jdf.php';
$users=nomber_users();
$user=count($users);
$status_on=status_online();
$online=count($status_on);
$status_off=status_offline();
$offline=count($status_off);
$permition=nomber_permition();
$nomber=count($permition);
$permition_on=status_permition();
$status=count($permition_on);
?>
<!doctype html>
<html lang="fa">
<head>
    <style>
        #header{
            background: #7100ff;
            border-radius: 20px 0%;
            top: 6px;
            position: relative;
        }
        #header_1{
            background: #ff5555;
            border-radius: 0% 20px;
            top: 6px;
            position: relative;
        }
        .btn-light{
            font-size: 12px;
        }
        .btn-dark{
            font-size: 12px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>پیشخوان</title>
</head>
<body>
<div style="box-shadow: 0 0 20px 0 rgb(0 0 0), 0px 0px 0px 0 rgb(0 0 0);background-color: rgb(241 241 241);padding: 10%;">
    <div class="row">
        <div class="card text-white bg-dark col-md-4" style="max-width: 18rem;margin: auto;text-align: center;">
            <div class="card-header" id="header">تعداد کاربران | سامانه</div>
            <div class="card-body">
                <h5 class="card-title">کاربران سامانه:</h5>
                <p class="card-text"><?php echo $user; ?></p>
                <a href="http://localhost/medico/panel/front-paneel/dashburd.php?page=setting-user" class="btn btn-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"></path>
                    </svg>
                    ایجاد حساب کاربری</a>
            </div>
        </div>

        <div class="card text-white bg-dark col-md-4" style="max-width: 18rem;margin: auto;text-align: center;">
            <div class="card-header" id="header">تعداد کاربران آنلاین | سامانه</div>
            <div class="card-body">
                <h5 class="card-title">کاربران آنلاین:</h5>
                <p class="card-text"><?php echo $online; ?></p>
                <a href="http://localhost/medico/panel/front-paneel/dashburd.php?page=status-report" class="btn btn-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"></path>
                    </svg>
                    مشاهده گزارش کاربران آنلاین</a>
            </div>
        </div>

        <div class="card text-white bg-dark col-md-4" style="max-width: 18rem;margin: auto;text-align: center;">
            <div class="card-header" id="header">تعداد کاربران آفلاین | سامانه</div>
            <div class="card-body">
                <h5 class="card-title">کاربران آفلاین:</h5>
                <p class="card-text"><?php echo  $offline; ?></p>
                <a href="http://localhost/medico/panel/front-paneel/dashburd.php?page=status-report" class="btn btn-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"></path>
                    </svg>
                    مشاهده گزارش کاربران آفلاین</a>
            </div>
        </div>
    </div>
    <div class="row" style="position: relative;top: 7px;">
        <div class="card text-white bg-secondary col-md-4" style="max-width: 18rem;margin: auto;text-align: center;">
            <div class="card-header" id="header_1" style="background: #1ed585; border-radius: 25px 0px 25px 25px;">تاریخ و ساعت | سامانه</div>
            <div class="card-body">
                <h5 class="card-title">تاریخ و ساعت:</h5>
                <p class="card-text"><?php echo "تاریخ:"." ".jdate('Y/n/j'); ?></p>
                <hr>
                <p class="card-text"><?php echo "ساعت:"." ".jdate('H:i:s'); ?></p>
            </div>
        </div>

        <div class="card text-dark bg-light col-md-4" style="max-width: 18rem;margin: auto;text-align: center;">
            <div class="card-header" id="header_1">مجوز دسترسی | سامانه</div>
            <div class="card-body">
                <h5 class="card-title">تعداد مجوز ها: </h5>
                <p class="card-text"><?php echo $nomber; ?></p>
                <a href="http://localhost/medico/panel/front-paneel/dashburd.php?page=config-access" class="btn btn-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"></path>
                    </svg>
                    ایجاد مجوز دسترسی</a>
            </div>
        </div>

        <div class="card text-dark bg-light col-md-4" style="max-width: 18rem;margin: auto;text-align: center;">
            <div class="card-header" id="header_1">مجوز های فعال | سیستم</div>
            <div class="card-body">
                <h5 class="card-title">تعداد مجوز های فعال:</h5>
                <p class="card-text"><?php echo $status ;?></p>
                <a href="http://localhost/medico/panel/front-paneel/dashburd.php?page=config-access" class="btn btn-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"></path>
                    </svg>
                    ایجاد مجوز دسترسی</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
