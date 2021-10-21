<head>
    <title>header</title>
</head>
<body>
<div class="container-fluid header">
    <div class="container">
        <div class="row">
            <div class="col-md-6 logo">
                <img src="img/logo.png" width="160" height="50">
            </div>
            <div class="col-md-6 link">
                <?php if(isset($_SESSION['login_user'])) : ?>
                <a href="login.php" class="login">داشبورد من</a>
                <a href="register.php" class="sabtnam">خروج</a>
                <?php else: ?>
                <a href="http://localhost/medico/panel/front-paneel/dashboard.php" class="login">ورود به داشبورد</a>
                <a href="register.php" class="sabtnam">ثبت نام در سایت</a>
                <?php endif; ?>

            </div>
            <aside class="menu-bar">
                <nav id="menu_item">
                    <ul class="menu">
                        <?php
                        include_once '../panel/function/f-category.php';
                        $main_menu = list_menue();
                        foreach ($main_menu as $menu) :
                        ?>
                        <li>
                            <a href="#"><?php echo $menu->title ?></a>
                                <?php
                                $submenu=list_submenue($menu->id);
                                if ($submenu) :
                                ?>
                            <ul class="sub-menu">
                                <?php foreach ($submenu as $submenu) : ?>
                                <li>
                                    <a href="#"><?php echo $submenu->title ?> </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </aside>
        </div>
    </div>
</div>
</body>