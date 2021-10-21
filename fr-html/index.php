<?php
include_once '../panel/function/f-slider.php';
include_once '../panel/function/function.php';
$i=0
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
<div class="main">
    <div class="main-slider">
        <div class="owl-carousel owl-theme">
            <?php
            $slider = show_slider();
            foreach ($slider as $slide) :
            ?>
            <div class="item">
                <a target="_blank" href="#"><img src="<?php
                    $slider_dir = explode('/',$slide->dir);
                    $slider_name = end($slider_dir);
                    $img_new_address = 'http://localhost/medico/panel/img/slider'.'/'."$slider_dir[3]".'/'."$slider_name";
                    echo $img_new_address;
                ?>" alt="bootstrap course"/>
                <!--</a> <span><a href="#">بهترین زبان برنامه نویسی برای طراحی وبسایت</a> </span>-->
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="col-md-2 widget">
                <svg class="bi bi-film" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M0 1a1 1 0 011-1h14a1 1 0 011 1v14a1 1 0 01-1 1H1a1 1 0 01-1-1V1zm4 0h8v6H4V1zm8 8H4v6h8V9zM1 1h2v2H1V1zm2 3H1v2h2V4zM1 7h2v2H1V7zm2 3H1v2h2v-2zm-2 3h2v2H1v-2zM15 1h-2v2h2V1zm-2 3h2v2h-2V4zm2 3h-2v2h2V7zm-2 3h2v2h-2v-2zm2 3h-2v2h2v-2z"
                          clip-rule="evenodd"></path>
                </svg>
                <span>12 دوره آموزشی</span>
            </div>
            <div class="col-md-2 widget">
                <svg class="bi bi-heart-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"
                          clip-rule="evenodd"></path>
                </svg>
                <span>+5000 دانشجوی راضی</span>
            </div>
            <div class="col-md-2 widget">
                <svg class="bi bi-check-box" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M15.354 2.646a.5.5 0 010 .708l-7 7a.5.5 0 01-.708 0l-3-3a.5.5 0 11.708-.708L8 9.293l6.646-6.647a.5.5 0 01.708 0z"
                          clip-rule="evenodd"></path>
                    <path fill-rule="evenodd"
                          d="M1.5 13A1.5 1.5 0 003 14.5h10a1.5 1.5 0 001.5-1.5V8a.5.5 0 00-1 0v5a.5.5 0 01-.5.5H3a.5.5 0 01-.5-.5V3a.5.5 0 01.5-.5h8a.5.5 0 000-1H3A1.5 1.5 0 001.5 3v10z"
                          clip-rule="evenodd"></path>
                </svg>
                <span>پشتیبانی تلفنی - تلگرامی</span>
            </div>
            <div class="col-md-2 widget">
                <svg class="bi bi-book-half" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M3.214 1.072C4.813.752 6.916.71 8.354 2.146A.5.5 0 018.5 2.5v11a.5.5 0 01-.854.354c-.843-.844-2.115-1.059-3.47-.92-1.344.14-2.66.617-3.452 1.013A.5.5 0 010 13.5v-11a.5.5 0 01.276-.447L.5 2.5l-.224-.447.002-.001.004-.002.013-.006a5.017 5.017 0 01.22-.103 12.958 12.958 0 012.7-.869zM1 2.82v9.908c.846-.343 1.944-.672 3.074-.788 1.143-.118 2.387-.023 3.426.56V2.718c-1.063-.929-2.631-.956-4.09-.664A11.958 11.958 0 001 2.82z"
                          clip-rule="evenodd"></path>
                    <path fill-rule="evenodd"
                          d="M12.786 1.072C11.188.752 9.084.71 7.646 2.146A.5.5 0 007.5 2.5v11a.5.5 0 00.854.354c.843-.844 2.115-1.059 3.47-.92 1.344.14 2.66.617 3.452 1.013A.5.5 0 0016 13.5v-11a.5.5 0 00-.276-.447L15.5 2.5l.224-.447-.002-.001-.004-.002-.013-.006-.047-.023a12.582 12.582 0 00-.799-.34 12.96 12.96 0 00-2.073-.609z"
                          clip-rule="evenodd"></path>
                </svg>
                <span>50درصد خدمات رایگان</span>
            </div>


        </div>
    </div>
</div>

<br>
<br>
<div class="container-fluid post-tak">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-5 video-box">
                    <div id="38930755627">
                        <script type="text/JavaScript"
                                src="https://www.aparat.com/embed/uhoCS?data[rnddiv]=38930755627&data[responsive]=yes"></script>
                    </div>
                </div>
                <div class="col-md-7 content-box">
                    <h3>آموزش بوت استرپ - الزامی برای همه طراحان سایت</h3>
                    <p>اگر به طراحی سایت علاقمندید یا در این حوضه فعالیت میکنید قطعا بوت استرپ یکی از مهم ترین ابزارهای
                        شما خواهد بود. با یادگیری و آموزش فریم ورک بوت استرپ میتوانید ضمن ارتقاء سطح فنی و دانش طراحی وب
                        خودتان، حداقل ۷۰% در وقت و انرژی تان در طراحی یک سایت ریسپانسیو و زیبا صرفه جویی کنید.</p>
                    <div class="link-single">
                        <a href="#" class="login"> اطلاعات بیشتر</a>
                        <a href="#" class="sabtnam">ثبت نام در دوره</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="title-main">
    <h4>آخرین مطالب </h4>
</div>

<div class="container-fluid post-container">
    <div class="row">
        <div class="col-md-12">
            <div class="container">
                <?php
                include_once '../panel/function/f-article.php';
                $all_article=list_article();
                foreach ($all_article as $article) :
                if ($article->status == 'publish') :
                $i++;
                if ($i<=4) :
                ?>
                <article class="post">
                    <a target="_blank" href="single.php?id=<?php echo $article->id ?>" dideo-checked="true">
                    <div class="thumb">
                        <img src="
                        <?php
                        $img = explode('/',$article->img);
                        $img_name = end($img);
                        $img_new_address = 'http://localhost/medico/panel/img/'."$img_name";
                        echo $img_new_address;
                        ?>
                        " width="260" height="150">
                    </div>
                    <div class="post-title">
                        <h2><?php echo $article->title?></h2>
                    </div>
                    <div class="clearfix"></div>
                    <div class="post-txt">
                        <h4>
                            <?php
                            $text=limit_text_article($article->text,30)."...";
                            echo $text;
                            ?>
                        </h4>
                    </div>
                    <div class="post-foot-container">
                        <div class="line-border"></div>
                        <div class="p-c-view"><i class="fa fa-eye"></i><?php echo $article->date;?></div>
                        <div class="p-c-comment"><i class="fa fa-comment"></i></div>
                        <div class="p-c-view"><i class="fa fa-comment"></i><?php echo $article->author;?></div>
                    </div>
                    </a>
                </article>
                <?php endif; ?>
                <?php endif; ?>
                <?php endforeach; ?>
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