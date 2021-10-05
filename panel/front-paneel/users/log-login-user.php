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
<div style="background-color:#ffffff;padding: 51px;box-shadow: 0 0 20px 0 rgb(0 0 0), 0px 0px 0px 0 rgb(0 0 0)">
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
                <form class="my-form" method="post" enctype="multipart/form-data">
                <div class="card mb-3" style="max-width: 100%;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkWCEGpuakGVhwczoA5D93q1m3iUQ4vaYAc07uvcvBJfAzAT9XBQzlg_l47jY03KG5xvQ&usqp=CAU" class="img-fluid rounded-start" alt="..."style="position: relative;top: 8%;right: 7%;" >
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h6 class="card-title" ><b>اطلاعات کاربری | سیستم</b></h6>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>تاریخ احراز هویت:</label>
                                        <input type="text" readonly class="btn btn-light" value="<?php echo $user_permition->date; ?>" style="max-width: 100%;text-align: right;">
                                    </div>
                                    <div class="col-md-6">
                                        <label>سمت مجوز:</label>
                                        <input type="text" readonly class="btn btn-light" value="<?php echo $user_permition->name; ?>" style="max-width: 100%;text-align: right;">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>تلفن | پیامک:</label>
                                        <input type="text" readonly class="btn btn-light" value="<?php echo $user_info->phone; ?>" style="max-width: 100%;text-align: right;">
                                    </div>
                                    <div class="col-md-6">
                                        <label>وضعیت:</label>
                                        <input type="text" readonly class="btn btn-light" value="<?php echo $user_info->status; ?>" style="max-width: 100%;text-align: right;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        <div class="card mb-3" style="max-width: 100%;">
                            <div class="row g-0">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <h6 class="card-title" style="text-align: center;"><b>اطلاعات شناسنامه | کاربر</b></h6>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>نام:</label>
                                                <input type="text" readonly class="btn btn-light" value="<?php echo $user_info->name; ?>" style="max-width: 100%;text-align: right;">
                                            </div>
                                            <div class="col-md-4">
                                                <label>نام خانوادگی:</label>
                                                <input type="text" readonly class="btn btn-light" value="<?php echo $user_info->fullname; ?>" style="max-width: 100%;text-align: right;">
                                            </div>
                                            <div class="col-md-4">
                                                <label>کد ملی:</label>
                                                <input type="text" readonly class="btn btn-light" value="<?php echo $user_info->mellicode; ?>" style="max-width: 100%;text-align: right;">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>تاریخ تولد:</label>
                                                <input type="text" readonly class="btn btn-light" value="<?php echo $user_info->birthday; ?>" style="max-width: 100%;text-align: right;">
                                            </div>
                                            <div class="col-md-4">
                                                <label>سن:</label>
                                                <input type="text" readonly class="btn btn-light" value="<?php echo $user_info->age; ?>" style="max-width: 100%;text-align: right;">
                                            </div>
                                            <div class="col-md-4">
                                                <label>وضعیت تاهل:</label>
                                                <input type="text" readonly class="btn btn-light" value="<?php echo $user_info->martial; ?>" style="max-width: 100%;text-align: right;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
            <hr>
            <div style="box-shadow: 0 0 20px 0 rgb(0 0 0), 0px 0px 0px 0 rgb(0 0 0);background-color: rgb(241 241 241);padding: 53px;">
                <h6 class="card-title" style="text-align: right;"><b>برای نمایش گزارش لطفا بازه زمانی مورد نظر خود را وارد کنید.</b></h6>
                <hr>
            <div class="row" style="background: white;padding: 12px;">
                <div class="col-md-4">
                    <input type="text" name="date1" class="btn btn-light" placeholder="نمایش از تاریخ"style="max-width: 100%;">
                </div>
                <div class="col-md-4">
                    <input type="text" name="date2" class="btn btn-light" placeholder="لغایت"style="max-width: 100%;">
                </div>
                <div class="col-md-4">
                    <input type="submit" name="date2" class="btn btn-primary" value="شاهده"style="max-width: 100%;">
                </div>
            </div>
            </div>
        </div>
    </div>
            <hr>

    <br>
    <h5 style="text-align: center;background-color: #6c757d;padding: 15px;border-radius: 3px;">لیست گزارش ورود به سیستم</h5>
    <BR>
    <table class="table table-striped">
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
