<?php
include_once '../functions/f-user.php';
if(isset($_POST['update'])){
    $info = $_POST['info'];
    $img = $_FILES['img'];
    update_info_user($res->id,$info,$img);
/*    $sms = $info['send_sms'];{
        if($sms == 'yes'){
            $id_sms = sms_info_register($info['phone'],$info['email'],$info['fullname']);
        }
    }*/
    $result = 'ok_update_user';
    header("location:dashboard.php?page=list-users&op={$result}");
}
if(isset($_POST['delete'])){
    delete_info_user($res->id);
    $result = 'ok_delete_user';
    header("location:dashboard.php?page=list-users&op={$result}");
}
?>
<head>
    <title>ویرایش اطلاعات کاربران</title>
    <link rel="stylesheet" type="text/css" media="all" href="../skins/calendar-system.css" title="summer"  />
    <script type="text/javascript" src="../js/jalali.js"></script>
    <script src="http://localhost/term3/panel/user/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="../js/calendar.js"></script>
    <script type="text/javascript" src="../js/calendar-setup.js"></script>
    <script type="text/javascript" src="../lang/calendar-fa.js"></script>
    <script type="text/javascript">
        function setActiveStyleSheet(link, title) {
            var i, a, main;
            for (i = 0;
                 (a = document.getElementsByTagName("link")[i]); i++) {
                if (a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title")) {
                    a.disabled = true;
                    if (a.getAttribute("title") == title) a.disabled = false;
                }
            }
            return false;
        }
    </script>


</head>
<body>
<div style="box-shadow: 0 0 20px 0 rgb(0 0 0), 0 5px 5px 0 rgb(0 0 0);background-color:#424f55;padding: 49px;">

    <form class="needs-validation"  method="post" enctype="multipart/form-data">
        <h6 style="color: #FFFFFF">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"></path>
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
            </svg>
            اطلاعات شناسنامه ای | تحصیلی</h6>
        <hr>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationCustom01" style="color: #FFFFFF">کدملی</label>
                <input type="number" name="info[mellicode]" class="form-control" id="validationCustom01" placeholder="لطفا کد ملی 10 رقمی را وارد نمایید" minlength="11" value="<?php echo $res->mellicode;?>">
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustom02" style="color: #FFFFFF">نام و نام خانوادگی</label>
                <input type="text" name="info[fullname]" class="form-control" id="validationCustom02" placeholder="لطفا نام و نام خانوادگی را وارد نمایید" value="<?php echo $res->fullname;?>" required>
                <div class="invalid-feedback">
                    ورود نام و نام خاتوادگی الزامی است.
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustom03" style="color: #FFFFFF">نام پدر</label>
                <input type="text" name="info[fathername]" class="form-control" id="validationCustom03" placeholder="لطفا نام پدر را وارد نمایید" value="<?php echo $res->fathername;?>">
            </div>

            <div class="col-md-4 mb-3">
                <label  style="color: #FFFFFF">تاریخ تولد</label>
                <input type="text" class="form-control" id="date" name = "info[birthday]" placeholder="تاریخ تولد را مشخص نمایید"  value="<?php echo $res->birthday;?>">
                <img  id="date_btn_1" src="../img/cal.png" style="position:absolute; left:36px;margin:-27px 10px 1px 1px; display:inline-block;" />
            </div>
            <div class="col-md-4 mb-3">
                <label  style="color: #FFFFFF">آخرین مدرک تحصیلی</label>
                <select class="form-control form-select" name="info[degree]" required aria-label="select example">
                    <option value="">انتخاب مدرک تحصیلی</option>
                    <option value="زیردیپلم" <?php if($res->degree == 'زیردیپلم') echo 'selected' ?>> زیردیپلم</option>
                    <option value="دیپلم" <?php if($res->degree == 'دیپلم') echo 'selected' ?>>دیپلم</option>
                    <option value="کاردانی" <?php if($res->degree == 'کاردانی') echo 'selected' ?>>کاردانی</option>
                    <option value="کارشناسی" <?php if($res->degree == 'کارشناسی') echo 'selected' ?>>کارشناسی</option>
                    <option value="کارشناسی ارشد" <?php if($res->degree == 'کارشناسی ارشد') echo 'selected' ?>>کارشناسی ارشد</option>
                    <option value="دکتری" <?php if($res->degree == 'دکتری') echo 'selected' ?>>دکتری</option>
                </select>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustom04" style="color: #FFFFFF">رشته تحصیلی/گرایش</label>
                <input type="text" class="form-control" name="info[field]" id="validationCustom04" placeholder="لطفا رشته تحصیلی را وارد نمایید" value="<?php echo $res->field;?>" >
            </div>
        </div>
        <br>
        <h6 style="color: #FFFFFF">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-phone-vibrate" viewBox="0 0 16 16">
                <path d="M10 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4zM6 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H6z"></path>
                <path d="M8 12a1 1 0 1 0 0-2 1 1 0 0 0 0 2zM1.599 4.058a.5.5 0 0 1 .208.676A6.967 6.967 0 0 0 1 8c0 1.18.292 2.292.807 3.266a.5.5 0 0 1-.884.468A7.968 7.968 0 0 1 0 8c0-1.347.334-2.619.923-3.734a.5.5 0 0 1 .676-.208zm12.802 0a.5.5 0 0 1 .676.208A7.967 7.967 0 0 1 16 8a7.967 7.967 0 0 1-.923 3.734.5.5 0 0 1-.884-.468A6.967 6.967 0 0 0 15 8c0-1.18-.292-2.292-.807-3.266a.5.5 0 0 1 .208-.676zM3.057 5.534a.5.5 0 0 1 .284.648A4.986 4.986 0 0 0 3 8c0 .642.12 1.255.34 1.818a.5.5 0 1 1-.93.364A5.986 5.986 0 0 1 2 8c0-.769.145-1.505.41-2.182a.5.5 0 0 1 .647-.284zm9.886 0a.5.5 0 0 1 .648.284C13.855 6.495 14 7.231 14 8c0 .769-.145 1.505-.41 2.182a.5.5 0 0 1-.93-.364C12.88 9.255 13 8.642 13 8c0-.642-.12-1.255-.34-1.818a.5.5 0 0 1 .283-.648z"></path>
            </svg>
            اطلاعات تماس</h6>
        <hr>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationCustom02" style="color: #FFFFFF">تلفن تماس</label>
                <input type="number" class="form-control" style="direction: ltr" name="info[phone]" id="validationCustom02" placeholder="+98" value="<?php echo $res->phone;?>" required>
                <div class="invalid-feedback">
                    ورود تلفن تماس الزامی است.
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label  for="state" style="color: #FFFFFF">استان</label>
                <select  id="state" name="info[state]"  class="form-control " required aria-label="select example">
                    <option value="0" selected disabled>استان را انتخاب کنید</option>
                    <?php
                    $item = select_state();
                    foreach ($item as $state):
                        ?>
                        <option value="<?php echo $state->id;?>"><?php echo $state->name; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-4 mb-3">
                <label  for="city" style="color: #FFFFFF">شهر</label>
                <select  id="city" name="info[city]" class="form-control " required aria-label="select example">
                    <option value="0" selected disabled>شهر را انتخاب نمایید</option>
                </select>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationServerUsername" style="color: #FFFFFF">آدرس ایمیل</label>
                <div class="input-group" style="direction: ltr">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" style="color: #04968b;" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"></path>
</svg></span>
                    </div>
                    <input type="email" class="form-control" name="info[email]" placeholder="e-mail"  value="<?php echo $res->email; ?>" required>
                    <div class="invalid-feedback">
                        ورود آدرس ایمیل الزامی است
                    </div>
                </div>
            </div>
            <div class="col-md-8 mb-3 row">
                <div class="col-md-4">
                    <label for="validationServerUsername" style="color: #FFFFFF">لینکداین</label>
                    <div class="input-group" style="direction: ltr">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" style="color: #0a66c2;" viewBox="0 0 16 16">
  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"></path>
</svg></span>
                        </div>
                        <input type="text" class="form-control" name="info[linkedin]" id="validationServerUsername" placeholder="Linkedin" aria-describedby="inputGroupPrepend3" value="<?php echo $res->likedin;?>" required>
                        <div class="invalid-feedback">
                            ورود آدرس ایمیل الزامی است
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationServerUsername" style="color: #FFFFFF">اینستاگرام</label>
                    <div class="input-group" style="direction: ltr">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" style="color: #9f0005" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
</svg></span>
                        </div>
                        <input type="text" class="form-control" name="info[instagram]" id="validationServerUsername" placeholder="Instagram" aria-describedby="inputGroupPrepend3" value="<?php echo $res->instagram;?>" required>
                        <div class="invalid-feedback">
                            ورود آدرس ایمیل الزامی است
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationServerUsername" style="color: #FFFFFF">تلگرام</label>
                    <div class="input-group" style="direction: ltr">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telegram" style="color: #1375ca;" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"></path>
</svg></span>
                        </div>
                        <input type="text" class="form-control" name="info[telegram]" id="validationServerUsername" placeholder="Telegram" aria-describedby="inputGroupPrepend3" value="<?php echo $res->telegram;?>" required>
                        <div class="invalid-feedback">
                            ورود آدرس ایمیل الزامی است
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <label for="validationCustom06" style="color: #FFFFFF">آدرس محل زندگی</label>
                <input type="text" class="form-control" name="info[life_address]" id="validationCustom06" placeholder="لطفا آدرس دقیق محل زندگی را وارد نمایید" value="<?php echo $res->life_address;?>" >
            </div>
            <div class="col-md-12 mb-3">
                <label for="validationCustom07" style="color: #FFFFFF">آدرس محل کار</label>
                <input type="text" class="form-control" name="info[office_address]" id="validationCustom07" placeholder="لطفا آدرس دقیق محل کار را وارد نمایید" value="<?php echo $res->office_address;?>" >
            </div>
        </div>
        <br>
        <h6 style="color: #FFFFFF">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-gear-wide-connected" viewBox="0 0 16 16">
                <path d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434l.071-.286zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5zm0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78h4.723zM5.048 3.967c-.03.021-.058.043-.087.065l.087-.065zm-.431.355A4.984 4.984 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8 4.617 4.322zm.344 7.646.087.065-.087-.065z"></path>
            </svg>
            اطلاعات مهارتی</h6>
        <hr>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label   style="color: #FFFFFF">مهارت شاخص</label>
                <select   class="form-control " name="info[top_skill]" required aria-label="select example">
                    <option value="0" selected disabled>انتخاب مهارت</option>
                    <option value="مهارت ارتباط اجتماعی | عمومی" <?php if($res->top_skill == 'مهارت ارتباط اجتماعی | عمومی') echo 'selected' ?>>مهارت ارتباط اجتماعی | عمومی</option>
                    <option value="مهارت فنی | عمومی" <?php if($res->top_skill == 'مهارت فنی | عمومی') echo 'selected' ?>>مهارت فنی | عمومی</option>
                    <option value="مهارت علمی | تخصصی" <?php if($res->top_skill == 'مهارت علمی | تخصصی') echo 'selected' ?>>مهارت علمی | تخصصی</option>
                    <option value="مهارت کاری | تخصصی" <?php if($res->top_skill == 'مهارت کاری | تخصصی') echo 'selected' ?>>مهارت کاری | تخصصی</option>
                    <option value="مهارت ورزشی | تخصصی" <?php if($res->top_skill == 'مهارت ورزشی | تخصصی') echo 'selected' ?>>مهارت ورزشی | تخصصی</option>
                    <option value="مهارت هنری | تخصصی" <?php if($res->top_skill == 'مهارت هنری | تخصصی') echo 'selected' ?>>مهارت هنری | تخصصی</option>
                    <option value="غیره" <?php if($res->top_skill == 'غیره') echo 'selected' ?>>غیره | عمومی یا تخصصی</option>
                </select>
            </div>
            <div class="col-md-8 mb-3">
                <label for="validationCustom07" style="color: #FFFFFF">شرح مهارت شاخص انتخابی</label>
                <input type="text" class="form-control" name="info[desc_skill]" id="validationCustom07" placeholder="لطفا مهارت ها را در زمینه مهارت شاخص انتخابی وارد نمایید"  value="<?php echo $res->desc_skill;?>">
            </div>
        </div>
        <br>
        <h6 style="color: #FFFFFF">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-tropical-storm" viewBox="0 0 16 16">
                <path d="M8 9.5a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"></path>
                <path d="M9.5 2c-.9 0-1.75.216-2.501.6A5 5 0 0 1 13 7.5a6.5 6.5 0 1 1-13 0 .5.5 0 0 1 1 0 5.5 5.5 0 0 0 8.001 4.9A5 5 0 0 1 3 7.5a6.5 6.5 0 0 1 13 0 .5.5 0 0 1-1 0A5.5 5.5 0 0 0 9.5 2zM8 3.5a4 4 0 1 0 0 8 4 4 0 0 0 0-8z"></path>
            </svg>
            تصویر پرسنلی / اختصاص مجوز دسترسی سیستم</h6>
        <hr>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationCustom07" style="color: #FFFFFF">انتخاب تصویر پرسنلی</label>
                <div class="form-control">
                    <input type="file" name="img">
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label  for="city" style="color: #FFFFFF">مجوز دسترسی / سمت</label>
                <select   class="form-control" name="info[permition]" required aria-label="select example">
                    <option value=" " selected disabled>انتخاب مجوز/سمت</option>
                    <?php
                    $permitions = select_permition_name();
                    foreach ($permitions as $access) :
                        ?>
                        <option value="<?php echo $access->id ?>" <?php if($res->permition == $access->id) echo 'selected'; ?>><?php echo $access->name ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-4 mb-3">
                <label  style="color: #FFFFFF">وضعیت فعالیت</label>
                <select   class="form-control " name="info[status]" required aria-label="select example">
                    <option value="" selected disabled>تنظیم وضعیت کاربر</option>
                    <option value="on" <?php if($res->status == 'on') echo 'selected'; ?>>فعال | استفاده از سیستم</option>
                    <option value="off" <?php if($res->status == 'off') echo 'selected'; ?>>معلق | عدم استفاده از سیستم</option>
                </select>
            </div>
        </div>
        <br>
        <h6 style="color: #FFFFFF">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-chat-square-text" viewBox="0 0 16 16">
                <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
                <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"></path>
            </svg>
            ارسال پیامک پیکربندی کاربر</h6>
        <hr>
        <div class="form-row">
            <div class="col-md-4mb-3">
                <div class=" custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadio1" name="info[send_sms]" value="yes" class="custom-control-input">
                    <label class="custom-control-label" style="color: #ffffff;" for="customRadio1">ارسال پیامک ویرایش به کاربر</label>
                </div>
                <div class=" custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadio2" name="info[send_sms]" value="no" class="custom-control-input">
                    <label class="custom-control-label" style="color: #ffffff;" for="customRadio2">عدم ارسال پیامک ویرایش به کاربر</label>
                </div>
            </div>
        </div>
        <hr>
        <button class="btn btn-danger" style="float: left;color: #FFFFFF" type="submit" name = "delete" >حذف کاربرجاری</button>
        <button class="btn btn-primary" style="float: left;margin-left: 5px;" type="submit" name = "update">ویرایش اطلاعات کاربر</button>
        <br>
</div>
</form>
</div>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>

<script>
    function selectedjdate(cal) {
        cal.hide();
    }
</script>
<script type="text/javascript">
    Calendar.setup({
        inputField: "date",
        button: "date_btn_1",
        onClose: selectedjdate,
        ifFormat: "%d/%m/%Y",
        dateType: 'jalali',
        weekNumbers: false,
    });
</script>
<script>
    $('#city').change(function () {
        var city = $(this).find('option:selected').text();
    })

    $('#state').change(function () {
        var id = $(this).find('option:selected').val();
        $.ajax({
            method:'post',
            url:'http://localhost/term3/panel/user/cities.php',
            data:{id:id},
            success:function(msg) {
                $('#city').html(msg);

            }
        })
    });
</script>
</body>


