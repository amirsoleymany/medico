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
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>گزارش اخرین وضعیت</title>
</head>
<body>
<div style="background:#ffffff;padding: 51px;box-shadow: 0 0 20px 0 rgb(0 0 0), 0px 0px 5px 0 rgb(0 0 0);">
<div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-9" style="margin-right: 46px;">
        <div class="alert alert-success" role="alert" style="color: #ffffff;background-color: #6c757d;border-color: #000000;">
            <h4 class="alert-heading">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16" id="tools"><path d="M1 0L0 1l2.2 3.081a1 1 0 00.815.419h.07a1 1 0 01.708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 000 13a3 3 0 105.878-.851l2.654-2.617.968.968-.305.914a1 1 0 00.242 1.023l3.356 3.356a1 1 0 001.414 0l1.586-1.586a1 1 0 000-1.414l-3.356-3.356a1 1 0 00-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0016 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 00-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 01-.293-.707v-.071a1 1 0 00-.419-.814L1 0zm9.646 10.646a.5.5 0 01.708 0l3 3a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"></path></svg>
                پیکربندی دسترسی ها !</h4><br>
            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                    <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"></path>
                    <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"></path>
                </svg> برای افزودن ابزارک جدید به سایت به دو ورودی نیاز است .<br><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                    <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"></path>
                    <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"></path>
                </svg> در بخش اول شما محتوی لازم برای نمایش ابزارک را مشخص می کنید .<br> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                    <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"></path>
                    <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"></path>
                </svg> در بخش دوم کد svg تصویر مربوط به ابزارک مورد نظر را قرار دهید.<br><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                    <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"></path>
                </svg> لطفا در هنگام قرار دادن کد svg ، ویژگی طول (Height) و عرض (Width) آن را حذف نمایید. </p>
            <hr style="border-top-color: #ffffff;">
            <p class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z"></path>
                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
                </svg> اگر نیاز به افزودن بیش از یک ابزارک دارید لطفا روی " + افزودن ابزارک " کلیک کنید. </p>
        </div>
        <hr>
        <div style="box-shadow: 0 0 20px 0 rgb(0 0 0), 0px 0px 0px 0 rgb(0 0 0);background-color:  rgb(241 241 241);padding: 41px;">
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title"><svg xmlns="http://www.w3.org/2000/svg" width="2.5em" height="1.5em" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"></path>
                                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"></path>
                            </svg>تعداد کل کاربران سامانه</h6>
                        <hr>
                        <br>
                        <p class="card-text"><?php echo "تعداد کاربران:"." ".$user; ?></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title"><svg xmlns="http://www.w3.org/2000/svg" width="2.5em" height="1.5em" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                            </svg>کاربران آنلاین</h6>
                        <hr>
                        <br>
                        <p class="card-text"><?php echo "تعداد کاربران آنلاین:"." ".$online; ?></p>
                    </div>
                </div>
            </div>
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title"><svg xmlns="http://www.w3.org/2000/svg" width="2.5em" height="1.5em" fill="currentColor" class="bi bi-person-x-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6.146-2.854a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z"></path>
                            </svg>کاربران آفلاین</h6>
                        <hr>
                        <br>
                        <p class="card-text"><?php echo "تعداد کاربران آفلاین:"." ".$offline; ?></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title"><svg xmlns="http://www.w3.org/2000/svg" width="2.5em" height="1.5em" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"></path>
                            </svg>کاربران ثبت نامی جدید</h6>
                        <hr>
                        <br>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <hr>
    <h5 style="text-align: center;
    background-color: #6c757d;padding: 15px;border-radius: 7px;"> لیست گزارش آخرین وضعیت کاربران</h5>
    <br>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ردیف</th>
            <th>نام</th>
            <th>نام خانوادگی</th>
            <th>سمت | مجوز</th>
            <th>آخرین عملیات در سیستم</th>
            <th>تاریخ و ساعت آخرین ورود</th>
            <th>گزارش ورود</th>
            <th>وضعیت</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php  ?></td>
            <td><?php  ?></td>
            <td><?php  ?></td>
            <td><?php  ?></td>
            <td><?php  ?></td>
            <td><?php  ?></td>
            <td><?php  ?></td>
            <td><?php  ?></td>
        </tr>
</div>

</body>
</html>
