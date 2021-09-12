<?php
include_once '../panel/function/dbconnect.php';
if (isset($_POST['submit'])) {
    $info = $_POST['info'];
    $nationalcode = $info['nationalcode'];
    $pdo = connect_db();
    $query = $pdo->prepare("SELECT * FROM `user_tbl` WHERE nationalcode = '$nationalcode'");
    $query->execute();
    $res = $query->fetch(PDO::FETCH_OBJ);
    if ($res){
        if ($info['pass1'] == $info['pass2']){
            $pass1 = $info['pass1'];
            $pdo = connect_db();
            $query = $pdo->prepare("UPDATE `user_tbl` SET `password` = '$pass1' where id ='$res->id'");
            $query->execute();
            echo 'رمز عبور شما تغییر کرد';
        }

    }
    else{
        echo "<pre> کاربر گرامی:
 کد ملی شما اشتباه است</pre>";
    }
}
?>
<!doctype html>
<html lang="fa_ir">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body style="background: #0b5cd3;">
<div class="wrap-login100" style="
    background: #ffffff;
    width: 960px;
    height: 690px;
    position: relative;
    left: 280px;
    top: 35px;
    border-radius: 25px;">

    <div class="login100-pic js-tilt" data-tilt>
        <img src="image/sign%20in.png" alt="IMG" style="
    width: 34%;
    position: relative;
    top: 187px;
    left: 92px;">
    </div>

<form style="
    width: 30%;
    position: relative;
    left: 562px;
    bottom: 130px;" method="post">

    <span class="login100-form-title" style="
    position: relative;
    left: 12px;
    bottom: 60px;">
						سامانه پزشکی مدیکو | جامع متمرکز
    </span>

    <div class="mb-3">
        <label  class="form-label" style="position: relative; left: 230px;"> :کد ملی</label>
        <input type="text" class="form-control" name="info[nationalcode]" aria-describedby="emailHelp" style="
        border-radius: 25px;
        background-color: #e6e6e6;">
    </div>
    <div class="mb-3">
        <label class="form-label" style="position: relative; left: 183px;" > :رمز عبور جدید</label>
        <input type="password" class="form-control" name="info[pass1]" style="
        border-radius: 25px;
        background-color: #e6e6e6;">
    </div>
    <div class="mb-3">
        <label  class="form-label" style="position: relative; left: 179px;">: تکرار رمز عبور </label>
        <input type="password" class="form-control" name="info[pass2]" style="
        border-radius: 25px;
        background-color: #e6e6e6;">
    </div>

    <button type="submit" class="btn btn-primary" style="
        border-radius: 25px;
        background-color:#0b5cd3;
        font-size: 70%;
        position: relative;
        left: 189px;">
        اعمال تغییرات</button>
</form>
</div>
</body>
</html>