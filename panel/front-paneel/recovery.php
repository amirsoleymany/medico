<!doctype html>
<html lang=fa-IR>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>بازیابی رمز عبور</title>
</head>
<body>

    <div
    style="
    background-color: #eeeeee;
    padding: 20%;
    position: relative;
    left: 10%;
    width: 40%;
    top: 70px;
    border-radius: 10px;">
        <form>
            <div style="
    position: relative;
    left: 380px;
    bottom: 90px;">
                  <label style="
    left: 47%;
    position: relative;
    bottom: 10px;"> کد ملی </label><br>
                  <input type="number" class="form-control" name="info[nationalcode]" id="validationCustom04" placeholder="کد ملی خود را وارد کنید" style="
            padding: 2%;
            width: 50%;
            border-radius: 10px;">
            </div>


            <div style="
    position: relative;
    left: 380px;
    bottom: 60px;">>
                 <label style="
    left: 35%;
    position: relative;
    bottom: 10px;"> رمز عبور جدید </label><br>
                 <input type="password" class="form-control" name="info[newpass]" id="validationCustom04"  style="
                padding: 2%;
                width: 50%;
                border-radius: 10px;">
            </div>


            <div style="
    position: relative;
    left: 380px;
    bottom: 20px;">>
                <label style="
    left: 33%;
    position: relative;
    bottom: 10px;"> تکرار رمز عبور </label><br>
                <input type="password" class="form-control" name="info[confirmpass]" id="validationCustom04" placeholder="رمز عبور جدید را مجددا وارد نمایید" style="
                padding: 2%;
                width: 50%;
                border-radius: 10px;">
            </div>


        </form>
    </div>

</body>
</html>