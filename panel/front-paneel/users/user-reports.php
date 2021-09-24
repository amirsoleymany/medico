<?php
include_once '../function/function.php';
include_once '../function/f-users.php';
$users=nomber_users();
$user=count($users);
$status_on=status_online();
$online=count($status_on);
$status_off=status_offline();
$offline=count($status_off)
?>
<!doctype html>
<html lang="fa">
<head>
    <title>گزارش کاربران سیستم</title>
</head>
<body>

<div class="row row-cols-1 row-cols-md-2 g-6">
    <div class="col">
        <div class="card text-white bg-dark h-100" style="display: flex;flex-direction: row-reverse;">
            <div class="card-body">
                <h5 class="card-title">تعداد کل کاربران سامانه:</h5>
                <p class="card-text"><?php echo "تعداد کاربران:"." ".$user; ?></p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card text-white bg-dark h-100">
            <div class="card-body">
                <h5 class="card-title">تعداد کاربران آنلاین:</h5>
                <p class="card-text"><?php echo "کاربران آنلاین:"." ".$online; ?></p>
            </div>
        </div>
    </div>
</div>
<br>
<div class="row row-cols-1 row-cols-md-2 g-6">
    <div class="col">
        <div class="card text-white bg-dark h-100">
            <div class="card-body">
                <h5 class="card-title">تعداد کاربران آفلاین:</h5>
                <p class="card-text"><?php echo "کاربران آفلاین:"." ".$offline; ?></p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card text-white bg-dark h-100">
            <div class="card-body">
                <h5 class="card-title">کاربران ثبت نامی جدید | شبانه روز گدشته:</h5>
                <p class="card-text"></p>
            </div>
        </div>
    </div>
</div>





</body>
</html>
