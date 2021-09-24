<?php
include_once '../function/function.php';
include_once '../function/f-users.php';
include_once '../function/jdf.php';
$session = $_SESSION['login_user'];
$user_info = select_user_with_session($session);
$user_permition = select_permition_url1();
?>
<!doctype html>
<html lang="fa">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="../bootstrap/js/popper.min.js">
    <link rel="stylesheet" href="../bootstrap/js/bootstrap.min.js">
    <title>گزارش ورود به سیستم</title>
</head>
<body>
<div style="padding: 7%;color: white;background: linear-gradient(0deg, #8E54E9, #4776E6);">
    <div class="card-header" style="background: #343a40;color: white;border-radius: 10px;">
    <div class="row">
        <div class="col-md-2" style="margin: auto;">
            <p>
                <?php echo "تاریخ:"." ".jdate('Y/n/j'); ?>
                <br><hr>
                <?php echo "ساعت:"." ".jdate('H:i:s'); ?>
            </p>
        </div>
        <div class="card col-md-6" style="margin: auto;">
            <div class="card-body text-dark" style="text-align: center">
                   <b>دریافت گزارش ورود به سیستم | کاربر | سامانه متمرکز مدیکو</b>
            </div>
        </div>
        <div class="col-md-2" style="margin: auto;">
            <input class="btn btn-light" type="submit" name="print" value="چاپ گزارش جاری">
            <br>
            <br>
                <p style="font-size: 14px;"><?php echo "کاربر جاری:"." ".$user_info->fullname; ?></p>
        </div>
        </div>
    </div>
    <hr>
    <form method="post">
    <div class="card-body" style="background: #343a40;color: black;border-radius: 10px;">
    <div class="row" style="font-size: 12px; text-align: right;">
        <div class="card col-md-2" style="margin: auto;">
            <div class="card-body text-dark" style="text-align: center">
                <img src="#">
                <hr>
            </div>
        </div>


        <div class="card col-md-5" style="margin: auto;">
            <div class="card-body text-dark" style="text-align: center">
                <h6><b>اطلاعات شناسنامه ای</b></h6>
                <hr>
                <div class="container">
                    <div class="row" style="text-align: right;font-size: 10px;">
                        <div class="col">
                            <?php echo " نام:"." " ?><br><?php echo $user_info->name; ?>
                        </div>
                        <div class="col">
                            <?php echo " نام خانوادگی:"." " ?><br><?php echo $user_info->fullname; ?>
                        </div>
                        <div class="col">
                            <?php echo " کدملی:"." " ?><br><?php echo $user_info->mellicode; ?>
                        </div>
                    </div>
                    <br>
                    <div class="row" style="text-align: right;font-size: 12px;">
                        <div class="col">
                            <?php echo " تاریخ تولد:"." " ?><br><?php echo $user_info->birthday; ?>
                        </div>
                        <div class="col">
                            <?php echo " سن:"." " ?><br><?php echo $user_info->age; ?>
                        </div>
                        <div class="col">
                            <?php echo "سن:"." " ?><br><?php echo $user_info->martial; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="card col-md-4" style="margin: auto;">
            <div class="card-body text-dark" style="text-align: center">
                <h6><b>اطلاعات کاربری | سیستم</b></h6>
                <hr>
                <div class="container">
                    <div class="row" style="text-align: right;font-size: 10px;">
                        <div class="col">
                            تاریخ احراز هویت:
                        </div>
                        <div class="col">
                            <?php echo " سمت مجوز:"." " ?><br><?php echo $user_permition->name; ?>
                        </div>
                    </div>
                    <br>
                    <div class="row" style="text-align: right; font-size: 12px;">
                        <div class="col">
                            <?php echo "تلفن | پیامک:"." " ?><br><?php echo $user_info->phone; ?>
                        </div>
                        <div class="col">
                            <?php echo "وضعیت:"." " ?><br><?php echo $user_info->status; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </form>
    <hr>
    <div class="row">
        <div class="col-md-4">
        <label for="inputPassword" class="ol-form-labe">نمایش از تاریخ:</label>
            <input type="text" name="date1" class="form-control" placeholder="../../..14">
        </div>

        <div class="col-md-4">
            <label for="inputPassword" class="ol-form-labe">لغایت:</label>
            <input type="text" name="date2" class="form-control" placeholder="../../..14">
        </div>
        <div class="col-md-2">
            <input type="submit" name="send-date" class="btn btn-dark" value="مشاهده" style="position: relative;top: 32px;">
        </div>
    </div>
    <hr>
    <table class="table table-dark table-striped">
<thead>
<tr>
    <th>ردیف</th>
    <th>نامخانوادگی</th>
    <th>نام</th>
    <th>تاریخ و ساعت ورود</th>
    <th>تاریخ و ساعت خروج</th>
    <th>آخرین عملیات قبل از خروج</th>
    <th>وضعیت</th>
</tr>
</thead>
        <tbody>

<!--        <div class="alert alert-danger" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"></path>
                <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"></path>
            </svg>
            هنوز هیچ گزارشی انتخواب نشده است...
        </div>-->
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>
