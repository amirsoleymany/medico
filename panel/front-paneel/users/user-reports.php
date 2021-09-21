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

<div style="background-color: #f1f1f1;position: relative;border-radius: 7px;">
    <form method="post" name="status">
    <div class="row" style="padding: 10px;position: relative;">
        <div class="card text-white bg-dark col-md-6" style="max-width: 18rem;position: relative;right: 21%;">
            <div class="card-body">
                <h6 class="card-title">تعداد کل کاربران سامانه:</h6>
                <p class="card-text"><?php echo $user; ?></p>
            </div>
        </div>

        <div class="card text-white bg-dark col-md-6" style="max-width: 18rem;position: relative;right: 22%;">
            <div class="card-body">
                <h6 class="card-title">کاربران ثبت نامی جدید ۱ شبانه روز گذشته: </h6>
                <p class="card-text"></p>
            </div>
        </div>
    </div>

    <div class="row" style=padding:10px;position:relative;bottom:9px;">
        <div class="card text-white bg-dark col-md-6" style="max-width: 18rem;position: relative;right: 21%;">
            <div class="card-body">
                <h6 class="card-title">تعداد کل کاربران آنلاین | سیستم:</h6>
                <p class="card-text"><?php echo $online; ?></p>
            </div>
        </div>

        <div class="card text-white bg-dark col-md-6" style="max-width: 18rem;position: relative;right: 22%;">
            <div class="card-body">
                <h6 class="card-title">تعداد کاربران آفلاین | سیستم: </h6>
                <p class="card-text"><?php echo $offline; ?></p>
            </div>
        </div>
    </div>
    </form>
</div>

</body>
</html>
