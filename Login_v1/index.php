<?php
session_start();
include_once '../panel/function/dbconnect.php';
include_once '../panel/function/f-users.php';
include_once '../panel/function/function.php';
if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $pdo = connect_db();
    $query = $pdo->prepare("SELECT * FROM `users_tbl` WHERE username ='$username'");
    $query->execute();
    $res = $query->fetch(PDO::FETCH_OBJ);
    if ($res){
       /* $pas=sha1($password);*/
        if ($res->password == $password){
            header("location:http://localhost/medico/panel/front-paneel/dashburd.php");
            $_SESSION['login_user'] = $username;
            /*if(isset($_POST['remeber'])) {
                setcookie('username', $username, time() + (86400 * 30));
                setcookie('passwoed', $password, time() + (86400 * 30));
            }*/
            echo "لاگین با موفقیت انجام شد";
        }
        else{
            echo "<pre>کاربرگرامی:
رمز عبور اشتباه است</pre>";
        }
    }
    else{
        echo "<pre>کابرگرامی:
نام کاربری اشتباه است.
مجددا تلالش نمایید.</pre>";
    }
}
?>
<!DOCTYPE html>
<html lang="fa_IR">
<head>
	<title> سامانه پزشکی مدیکو </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title" style="font-family: Broya;">
						سامانه پزشکی مدیکو | جامع متمرکز
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = " نام کاربری مورد نیاز است ">
						<input class="input100" type="text" name="username" placeholder=" نام کاربری " style="font-family: Broya;">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "رمز عبور مورد نیاز است">
						<input class="input100" type="password" name="password" placeholder=" رمز عبور " style="font-family: Broya;">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
                        <button class="btn btn-primary" style="float: left;
    position: relative;
    background-color: #6a9be4;
    border-color: #abffd7;
    color: black;
    bottom: 22px;
    width: 287px;
    border-radius: 25px;" type="submit" name = "submit">ورود</button>

					</div>

					<div class="text-center p-t-12">
						<a href="#" class="txt1" style="font-family: Broya;">
							<b> بازیابی رمز عبور </b>
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#" style="font-family: Broya;">
							<b> ایجاد حساب کاربری </b>
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="js/main.js"></script>

</body>
</html>