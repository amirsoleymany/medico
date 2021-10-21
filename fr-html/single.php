<?php
include_once '../panel/function/f-article.php';
$id_article=$_GET['id'];
$submit_ok =false;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">


</head>
<body>
<?php include_once 'header.php';?>
<br>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            $article = single_article($id_article)
            ?>
            <div class="post-single">
                <div class="post-title-single"><h1><?php echo $article->title; ?></h1>
                    <div class="clearfix"></div>
                    <div class="entry-meta">
                        <div class="view">
                            دسته بندی :
                            <ul class="post-categories">
                                <li>
                                    <a href="" rel="category tag">
                                        <?php
                                        $cat=category_article($article->cat_id);
                                        foreach ($cat as $item) {
                                            echo $item->title . " " . "|" . " ";
                                        }
                                        ?>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="view"><i class="fa fa-comment"></i>
                             منتشر شده در :<?php echo $article->date ?>
                        </div>
                        <div class="view"><i class="fa fa-user"></i><span>نویسنده :<?php echo $article->author; ?></span>
                        </div>
                        <div class="view"><i class="fa fa-user"></i><span> آیدی مقاله : <?php echo $article->code_article; ?></span>
                        </div>
                    </div>

                </div>


                <div class="clearfix"></div>
                <div class="thumb-single-product">
                    <img style="max-width: 96%;margin-bottom: 20px;" src="
                    <?php
                    $img = explode('/',$article->img);
                    $img_name = end($img);
                    $img_new_address = 'http://localhost/medico/panel/img/'."$img_name";
                    echo $img_new_address;
                    ?>
                    " class="attachment-medium size-medium wp-post-image" alt=""></div>

                <div class="post-txt-single">
                    <p>
                        <?php
                         echo $article->text;
                        ?>
                    </p>
                </div>
            </div>
                <?php if (!isset($_SESSION['login_user'])) : ?>
                    <div class="row col-md-12">
                        <div class="comment col-md-1">

                        </div>
                        <form method="post" class="col-md-8">
                            <?php
                            if ($submit_ok !== true) :
                                ?>
                                <div>
                                    <textarea class="form-control" placeholder="متن نظر شما" id="floatingTextarea2" name="text_comment" rows="9"></textarea>
                                    <input type="submit" class="btn btn-secondary" value="ثبت نظر" name="submit_comment">
                                </div>
                            <?php else: ?>
                            <br>
                            <div class="alert alert-success" role="alert">
                                نظر شما ثبت شد و در صورت تایید مدیر ثبت خواهد شد .
                            </div>
                        </form>
                        <?php endif; ?>
                    </div>
                <?php else: ?>
            <div class="box-comment">
                <h3>نظر خود را در رابطه با این مقاله وارد کنید</h3>
                <h3>برای ثبت نظر ابتدا باید
                    <a class="btn btn-warning" href="login.php">وارد شوید</a>
                    یا
                    <a class="btn btn-primary" href="register.php"> ثبت نام کنید </a>
                    کنید
                </h3>
                <?php endif; ?>




                <!--<div class="comment">
                    <img src="img/user.png">
                    <h5>رضاحیدری</h5>
                    <p>متن کامنت</p>
                </div>


                <div class="clearfix"></div>
                <br>
                <br>
                <form action="/comment-post" method="post">
                    <span>متن نظر شما</span>
                    <textarea name="text"></textarea>
                    <input type="hidden" name="article_id" value="{{$single->id}}">
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <input type="hidden" name="user_name" value="{{Auth::user()->name}}">
                    <input type="submit" class="btn btn-success" value="ثبت نظر">
                </form>-->
            </div>
        </div>
    </div>
</div>

<br>
<br>

<?php include_once 'footer.php';?>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>