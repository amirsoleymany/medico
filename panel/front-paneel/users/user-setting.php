
<!doctype html>
<html lang="en">
<head>
    <style>
        @font-face {
            ont-family: IRANSansWeb;
            src: url('../bootstrap/fonts/IRANSansWeb.ttf');
        }
        .accordion {
            background-color: #7e4bc7;
            color: #000;
            /* cursor: pointer; */
            padding: 18px;
            width: 100%;
            /* border: black; */
            text-align: right;
            outline: none;
            font-size: 20px;
        }
            transition: 0.4s;
        }

        .active, .accordion:hover {
            background-color: #ccc;
        }

        .accordion:after {
            content: '\002B';
            color: #777;
            font-weight: bold;
            float: right;
            margin-left: 5px;
        }

        .active:after {
            content: "\2212";
        }

        .panel {
            padding: 0 18px;
            background-color: white;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="../bootstrap/js/popper.min.js">
    <link rel="stylesheet" href="../bootstrap/js/bootstrap.min.js">
    <title>تنظیمات کاربران</title>
</head>
<body>

 <div style="    width: 90%;
    position: relative;
    left: -4%;
    /*top: -58px;*/
    background-color: #ffffff;
    padding: 14%;
    height: 650px;
    box-shadow: 0 0 20px 0 rgb(142 85 217), 0 0px 0px 0 rgb(31 13 55);">
   <div class="alert alert-success" role="alert" style="width: 110%;
    position: relative;
    right: -5%;
    bottom: 30%;
    font-family: IRANSansWeb;
   background-color: #1f0d37;
    color: #ffffff;
    padding: 5%;
    box-shadow: 0 0 20px 0 rgb(142 85 217), 0 0px 0px 0 rgb(180 236 255);
    border-color: #1f0d37;">

    <h4 class="alert-heading" style="position: relative;
    left: -2%;
    top: -22px;
">تنظیمات کاربران
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16" style="position: relative;
    left: 22%;
    bottom: 3px;">
            <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"></path>
            <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"></path>
        </svg>
    </h4>

    <p style="    position: relative;
    left: -2%;
    top: -11px;">راهنمای سامانه جامع مدیکو
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16" style="    position: relative;
    left: 20%;
    bottom: 2px;
}">
            <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"></path>
            <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"></path>
        </svg>
    </p>

    <hr style="    border-top-color: #b3b3b3;">

    <p class="mb-0" style="position: relative;left: -2%;">اطلاعات بیشتر
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-bookmark-plus" viewBox="0 0 16 16" style="position: relative;
    left: 12.5%;
    bottom: 4px;">
            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
            <path d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z"></path>
        </svg>
    </p>

  </div>
        <button class="accordion" style="
    width: 110%;
    position: relative;
    right: -5%;
    border-radius: 5px;
    bottom: 10%;">پیکربندی کاربر جدید
        </button>
    <div class="panel" style="width: 1074px;
    position: relative;
    left: 120px;
    max-height: 127px;
    background-color:rgb(31 13 55);">
        <div>
         <?php include_once 'made-user.php'; ?>
        </div>

     </div>


    <!-- <button class="accordion" style="font-family: IRANSansWeb;
    width: 110%;
    position: relative;
    right: -5%;
    border-radius: 5px;
    bottom: 8%;">پیکربندی گروهی کاربران</button>
     <div class="panel">
         <p>
         </p>
     </div>-->


     <script>
         var acc = document.getElementsByClassName("accordion");
         var i;

         for (i = 0; i < acc.length; i++) {
             acc[i].addEventListener("click", function() {
                 this.classList.toggle("active");
                 var panel = this.nextElementSibling;
                 if (panel.style.maxHeight) {
                     panel.style.maxHeight = null;
                 } else {
                     panel.style.maxHeight = panel.scrollHeight + "px";
                 }
             });
         }
     </script>



 </div>

</body>
</html>
