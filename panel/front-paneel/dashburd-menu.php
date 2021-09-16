<?php
include_once '../function/f-users.php';
?>
<!DOCTYPE HTML>
<head>
    <title>مدیرت پنل کاربری</title>
</head>
            <div class="col-md-2">
                <div class="admin-menu" style="background:#212121; text-align: right;">
                    <ul>
                        <div class="userwel" style="border-bottom: 7px solid #abffd7;background: #000000;">
                          <img src="bootstrap/img/user.png">
                            <p>سامانه پزشکی مدیکو</p>
                        </div>

                        <li class="dash">
                            <a href="javascript:;">
                                <svg class="bi bi-gear-wide-connected" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M10.932 2.724c-.243-.97-1.621-.97-1.864 0l-.072.286a.96.96 0 01-1.622.434l-.205-.211c-.695-.72-1.889-.03-1.614.932l.08.283a.96.96 0 01-1.187 1.188l-.283-.081c-.962-.275-1.651.919-.932 1.614l.211.205a.96.96 0 01-.434 1.622l-.286.072c-.97.243-.97 1.621 0 1.864l.286.072a.96.96 0 01.434 1.622l-.211.205c-.72.695-.03 1.889.932 1.614l.283-.08a.96.96 0 011.188 1.187l-.081.283c-.275.962.919 1.651 1.614.932l.205-.211a.96.96 0 011.622.434l.072.286c.243.97 1.621.97 1.864 0l.072-.286a.96.96 0 011.622-.434l.205.211c.695.72 1.889.03 1.614-.932l-.08-.283a.96.96 0 011.187-1.188l.283.081c.962.275 1.651-.919.932-1.614l-.211-.205a.96.96 0 01.434-1.622l.286-.072c.97-.243.97-1.621 0-1.864l-.286-.072a.96.96 0 01-.434-1.622l.211-.205c.72-.695.03-1.889-.932-1.614l-.283.08a.96.96 0 01-1.188-1.187l.081-.283c.275-.962-.919-1.651-1.614-.932l-.205.211a.96.96 0 01-1.622-.434l-.072-.286zM10 15a5 5 0 100-10 5 5 0 000 10z"
                                          clip-rule="evenodd"></path>
                                    <path fill-rule="evenodd"
                                          d="M9.375 10L6.6 6.3l.8-.6 2.85 3.8H15v1h-4.75L7.4 14.3l-.8-.6L9.375 10z"
                                          clip-rule="evenodd"></path>
                                </svg>
پیشخوان
                            </a>
                        </li>


                        <li class="users">
                            <a href="javascript:;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                                </svg>
مدیریت کاربران
<span style="float: left;">
                                <svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3.646 6.646a.5.5 0 01.708 0L10 12.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                      clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            </a>
                        </li>
                        <ul class="sub-users">
                            <li><a href="dashburd.php?page=setting-user">تنظیمات کاربران </a></li>
                            <li><a href="dashburd.php?page=config-access">پیکربندی دسترسی ها</a></li>
                            <li><a href="#">مشاهده همه کاربران</a></li>

                        </ul>



                        <li class="staff">
                            <a href="javascript:;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"></path>
                                </svg>
مدیریت امور پرسنل
<span style="float: left;">
                                <svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3.646 6.646a.5.5 0 01.708 0L10 12.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                      clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            </a>
                        </li>
                        <ul class="sub-staff">
                            <li><a href="#">سیستم استخدام</a></li>
                            <li><a href="#">سیستم کارورزی و کارآموزی</a></li>
                            <li><a href="#">دریافت خلاصه گزارش پرسنلی</a></li>
                            <li><a href="#">ثبت مرخصی پرسنل</a></li>
                            <li><a href="#">پیکربندی تنطیمات محاسبات پرسنلی</a></li>

                        </ul>


                        <li class="patients">
                            <a href="javascript:;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"></path>
                                </svg>
مدیریت امور بیمار
<span style="float: left;">
                                <svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3.646 6.646a.5.5 0 01.708 0L10 12.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                      clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            </a>
                        </li>
                        <ul class="sub-patients">
                            <li><a href="#">پیکربندی تنظیمات نوبت دهی پزشک</a></li>
                            <li><a href="#">سیستم جامع پرونده الکترونیکی بیمار</a></li>
                            <li><a href="#">تنظیمات پیکربندی پرونده الکترونیک</a></li>
                            <li><a href="#">ایجاد پرونده الکترونیکی جدید</a></li>
                            <li><a href="#">مدیریت پرونده الکترونیک جاری</a></li>
                            <li><a href="#">مدیریت نسخ پزشکی</a></li>
                            <li><a href="#">ثبت نسخه جدید بیمار</a></li>
                            <li><a href="#">اسکن تصویر نسخه دستی</a></li>
                            <li><a href="#">به روزرسانی سوابق نسخه ثبت شده</a></li>
                            <li><a href="#">رزرو نوبت بیمار</a></li>
                            <li><a href="#">مدیریت گزارشات</a></li>
                            <li><a href="#">دریافت گزارش سوابق بیمار</a></li>
                            <li><a href="#">ثبت گزارش آزمایشات واصله</a></li>
                            <li><a href="#">ثبت گزارش جراحی بیمار</a></li>
                            <li><a href="#">ثبت گزارشات متفرقه</a></li>

                        </ul>


                        <li class="accounting">
                            <a href="javascript:;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                    <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"></path>
                                </svg>
امور مالی
<span style="float: left;">
                                <svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3.646 6.646a.5.5 0 01.708 0L10 12.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                      clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            </a>
                        </li>
                        <ul class="sub-accounting">
                            <li><a href="#">پیکربندی تنظیمات اسناد مالی سیستم</a></li>
                            <li><a href="#">سیستم جامع پرداخت</a></li>
                            <li><a href="#">ثبت دستی پرداخت موردی</a></li>
                            <li><a href="#">ثبت گروهی پرداخت</a></li>
                            <li><a href="#">سیستم پرداخت حقوق و دستمزد</a></li>
                            <li><a href="#">پیکربندی تنطیمات محاسبات پرداخت حقوق و دستمزد</a></li>
                            <li><a href="#">پرداخت موردی حقوق و دستمزد پرسنل</a></li>
                            <li><a href="#">پرداخت خودکار حقوق و دستمزد</a></li>
                            <li><a href="#">گزارشات امور مالی</a></li>
                            <li><a href="#">دریافت خلاصه گزارش مالی سیستم</a></li>
                            <li><a href="#">دریافت گزارش جامع مالی سیستم</a></li>
                            <li><a href="#">دریافت گزارش پرداخت حقوق و دستمزد</a></li>

                        </ul>


                        <li class="records">
                            <a href="javascript:;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-file-text" viewBox="0 0 16 16">
                                    <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"></path>
                                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"></path>
                                </svg>
مدیریت سوابق
<span style="float: left;">
                                <svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3.646 6.646a.5.5 0 01.708 0L10 12.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                      clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            </a>
                        </li>
                        <ul class="sub-records">
                            <li><a href="#">همه نوشته ها</a></li>
                            <li><a href="#">افزودن نوشته</a></li>

                        </ul>


                        <li class="connections">
                            <a href="javascript:;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-chat-text" viewBox="0 0 16 16">
                                    <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"></path>
                                    <path d="M4 5.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zM4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8zm0 2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"></path>
                                </svg>
مدیریت ارتباطات
<span style="float: left;">
                                <svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3.646 6.646a.5.5 0 01.708 0L10 12.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                      clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            </a>
                        </li>
                        <ul class="sub-connections">
                            <li><a href="#">پیکربندی سامانه پیامک</a></li>
                            <li><a href="#">ایجاد دفترچه تلفن متمرکز</a></li>
                            <li><a href="#">ثبت پیش نویس پیامک</a></li>
                            <li><a href="#">گزارش موجودی پیامک و شارژ کاربری</a></li>
                            <li><a href="#">ارسال پیامک فردی</a></li>
                            <li><a href="#">ارسال پیامک گروهی</a></li>
                            <li><a href="#">ارتباط با پشتیبانی سیستم</a></li>

                        </ul>



                     </ul>
                </div>
            </div>


