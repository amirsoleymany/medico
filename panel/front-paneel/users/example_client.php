<?php
include_once '../function/f-users.php';
include_once '../function/function.php';
include_once '../function/jdf.php';
$result_search = "";
$result_search_permition = "";
$count_search = 0;
if(isset($_POST['search'])) {
    $info = $_POST['inspect'];
    $info_id = select_serch_info($info);
    if (count($info_id )) {
        $result_search = "yes";
        $count_search = count($info_id);
    } else {
        $result_search = "no";
    }
}
if(isset($_POST['search_permition'])){
$code_permition = $_POST['permition_id'];
$info_item = search_with_permition($code_permition);
    if (count($info_item )){
        $result_search_permition = "yes";
        $count_result_search_permition = count($info_item);
    }else {
        $result_search_permition = "no";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>مشاهده لیست کاربران</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap/css/style.css" rel="stylesheet">
    <link href="../bootstrap/css/style1.css" rel="stylesheet">
</head>
<body>
<div style="background: #ffffff;padding: 5%;box-shadow: inset 0 0 0px 0 rgb(33 33 33), 0 0px 20px 0 rgb(33 33 33);">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <?php
    $users = select_bulk_user();
    if(count($users) == 0):
        ?>
        <div class="alert alert-danger" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"></path>
                <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"></path>
            </svg>
            هنوز هیچ کاربری در سیستم پیکربندی نشده است ...
        </div>
    <?php endif; ?>
    <div style="background: #6c757d;padding: 4%; box-shadow: 0px 0px 0px 0px rgb(0 0 0);border-radius: 6px;">
        <form method="post" enctype="multipart/form-data" style="position: relative;bottom: 16px;">
            <?php include_once 'search_user_permition.php';?>

            <?php include_once 'search_user_info.php';?>
        </form>
    </div>
<br><hr><br>
        <?php if($result_search == "yes"): ?>
        <div class="alert alert-primary " role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
            </svg>
           در نتایج جستجوی سیستم تعداد <?php echo $count_search; ?>    کاربر یافت شد<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5zM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5z"></path>
            </svg>  <a href="dashboard.php?page=list-users&$count_search=0" class="btn btn-primary" style="color: #FFFFFF">بازگشت به همه کاربران</a>
        </div>
        <?php endif; ?>
        <?php if($result_search_permition == "yes"): ?>
            <div class="alert alert-primary" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                </svg>
                در دسته بندی موردنظر تعداد  <?php echo $count_result_search_permition; ?>    کاربر یافت شد<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5zM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5z"></path>
                </svg>  <a href="dashboard.php?page=list-users" class="btn btn-primary" style="color: #FFFFFF">بازگشت به همه کاربران</a>
            </div>
        <?php endif; ?>
        <div class="row">
            <?php if($result_search == "yes"):
                foreach ($info_id as $val):

                    ?>
                    <div class="col-md-3" style="margin-right: 37px;">
                        <div class="contact-box center-version" style="width: 300px;margin-right: 30px;padding: 15px;border-radius: 5px;text-align: center;background-color: rgb(255 255 255);box-shadow:rgb(0 0 0) 0px 15px 30px -14px;border: 1px solid #6a6a6a;">
                            <a href="dashboard.php?page=edit_info_user&id=<?php echo $val->id; ?>" style="color: #595959;text-decoration: none;">
                                <img alt="image" class="img-circle" src="<?php echo $val->img ?>">
                                <h3 class="m-b-xs"><strong><?php echo $val->fullname ?></strong></h3>

                                <div class="font-bold" style="background-color: #009cff;color: #ffffff;width: 20%;margin: auto;padding: 4px;border-radius: 24px;"><?php
                                    $permition_name = select_permition_url1();
                                    echo $permition_name->name;
                                    ?></div>
                                <address class="m-t-md">
                                    <hr style="border-top: 1px solid #000000;border-top: 1px solid #000000;">
                                    <?php
                                    //date in mm/dd/yyyy format; or it can be in other formats as well
                                    $date = explode("/",$val->birthday);
                                    $date_final = jalali_to_gregorian($date[2],$date[1], $date[0] , '/');
                                    //explode the date to get month, day and year
                                    $birthDate = explode("/", $date_final);
                                    //get age from date or birthdate
                                    $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[2], $birthDate[1], $birthDate[0]))) > date("md")
                                        ? ((date("Y") - $birthDate[0]) - 1)
                                        : (date("Y") - $birthDate[0]));

                                    ?>
                                    <h4 style="color: #0c5460"><?php echo $age." "."ساله";?></h4>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-gear-wide-connected" viewBox="0 0 16 16">
                                        <path d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434l.071-.286zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5zm0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78h4.723zM5.048 3.967c-.03.021-.058.043-.087.065l.087-.065zm-.431.355A4.984 4.984 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8 4.617 4.322zm.344 7.646.087.065-.087-.065z"></path>
                                    </svg>
                                    دارای <?php echo $val->top_skill ?><br>

                                    <p style="line-height: 41px;"><?php echo $val->email ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"></path>
                                        </svg></p>
                                    <?php
                                    if($val->status == 'on'):
                                        ?>
                                        <p style="background-color: #17b338;padding: 4px;border-radius: 6px;color: white;">کاربر فعال</p>
                                    <?php endif; ?>
                                    <?php
                                    if($val->status == 'off'):
                                        ?>
                                        <p style="background-color: #d9534f;padding: 4px;border-radius: 6px;color: white;">کاربر معلق</p>
                                    <?php endif; ?>
                                </address>
                            </a>
                        </div>
                    </div>

                <?php endforeach; ?>
            <?php endif; ?>
            <div class="row">

                <?php if($result_search_permition == "yes"):
                foreach ($info_item as $vers=>$item):
                ?>
                <div class="col-md-3"  style="<?php if($vers>0){ echo 'margin-right: 110px;';} ?>">
                    <div class="contact-box center-version" style="width: 300px;margin-right: 30px;padding: 15px;border-radius: 5px;text-align: center;background-color: rgb(255 255 255);box-shadow:rgb(0 0 0) 0px 15px 30px -14px;border: 1px solid #6a6a6a;">
                        <a href="dashboard.php?page=edit-info-user&id=<?php echo $item->id; ?>" style="color: #595959;text-decoration: none;">
                            <img alt="image" class="img-circle" src="<?php echo $item->img ?>">
                            <h3 class="m-b-xs"><strong><?php echo $item->fullname ?></strong></h3>

                            <div class="font-bold" style="background-color: #009cff;color: #ffffff;width: 20%;margin: auto;padding: 4px;border-radius: 24px;"><?php
                                $permition_name = select_permition_url1();
                                echo $permition_name->name;
                                ?></div>
                            <address class="m-t-md">
                                <hr style="border-top: 1px solid #000000;border-top: 1px solid #000000;">
                                <?php
                                //date in mm/dd/yyyy format; or it can be in other formats as well
                                $date = explode("/",$item->birthday);
                                $date_final = jalali_to_gregorian($date[2],$date[1], $date[0] , '/');
                                //explode the date to get month, day and year
                                $birthDate = explode("/", $date_final);
                                //get age from date or birthdate
                                $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[2], $birthDate[1], $birthDate[0]))) > date("md")
                                    ? ((date("Y") - $birthDate[0]) - 1)
                                    : (date("Y") - $birthDate[0]));

                                ?>
                                <h4 style="color: #0c5460"><?php echo $age." "."ساله";?></h4>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-gear-wide-connected" viewBox="0 0 16 16">
                                    <path d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434l.071-.286zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5zm0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78h4.723zM5.048 3.967c-.03.021-.058.043-.087.065l.087-.065zm-.431.355A4.984 4.984 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8 4.617 4.322zm.344 7.646.087.065-.087-.065z"></path>
                                </svg>
                                دارای <?php echo $item->top_skill ?><br>

                                <p style="line-height: 41px;"><?php echo $item->email ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"></path>
                                    </svg></p>
                                <?php
                                if($item->status == 'on'):
                                    ?>
                                    <p style="background-color: #17b338;padding: 4px;border-radius: 6px;color: white;">کاربر فعال</p>
                                <?php endif; ?>
                                <?php
                                if($item->status == 'off'):
                                    ?>
                                    <p style="background-color: #d9534f;padding: 4px;border-radius: 6px;color: white;">کاربر معلق</p>
                                <?php endif; ?>
                            </address>
                        </a>
                    </div>
                </div>

                <?php endforeach; ?>
                <?php endif; ?>
                <div class="row">
                   <?php
                   if ( $result_search == ""):
                   if ( $result_search_permition == ""):
                       foreach ($users as $index=>$user) :
                            ?>
                            <div class="col-md-3" style="<?php if($index>0){ echo 'margin-right: 110px;';} ?>">
                                <div class="contact-box center-version" style="width: 300px;margin-right: 30px;padding: 15px;border-radius: 5px;text-align: center;background-color: rgb(255 255 255);box-shadow:rgb(0 0 0) 0px 15px 30px -14px;border: 1px solid #6a6a6a;">
                                    <a href="dashboard.php?page=edit-info-user&id=<?php echo $user->id; ?>" style="color: #595959;text-decoration: none;">
                                        <img alt="image" class="img-circle" src="<?php echo $user->img ?>">
                                        <h3 class="m-b-xs"><strong><?php echo $user->fullname ?></strong></h3>

                                        <div class="font-bold" style="background-color: #009cff;color: #ffffff;width: 20%;margin: auto;padding: 4px;border-radius: 24px;"><?php
                                            $permition_name = select_permition_url1();
                                            echo $permition_name->name;
                                            ?></div>
                                        <address class="m-t-md">
                                            <hr style="border-top: 1px solid #000000;border-top: 1px solid #000000;">
                                            <?php
                                            //date in mm/dd/yyyy format; or it can be in other formats as well
                                            $date = explode("/",$user->birthday);
                                            $date_final = jalali_to_gregorian($date[2],$date[1], $date[0] , '/');
                                            //explode the date to get month, day and year
                                            $birthDate = explode("/", $date_final);
                                            //get age from date or birthdate
                                            $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[2], $birthDate[1], $birthDate[0]))) > date("md")
                                                ? ((date("Y") - $birthDate[0]) - 1)
                                                : (date("Y") - $birthDate[0]));

                                            ?>
                                            <h4 style="color: #0c5460"><?php echo $age." "."ساله";?></h4>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-gear-wide-connected" viewBox="0 0 16 16">
                                                <path d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434l.071-.286zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5zm0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78h4.723zM5.048 3.967c-.03.021-.058.043-.087.065l.087-.065zm-.431.355A4.984 4.984 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8 4.617 4.322zm.344 7.646.087.065-.087-.065z"></path>
                                            </svg>
                                            دارای <?php echo $user->top_skill ?><br>

                                            <p style="line-height: 41px;"><?php echo $user->email ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"></path>
                                                </svg></p>
                                            <?php
                                            if($user->status == 'on'):
                                                ?>
                                                <p style="background-color: #17b338;padding: 4px;border-radius: 6px;color: white;">کاربر فعال</p>
                                            <?php endif; ?>
                                            <?php
                                            if($user->status == 'off'):
                                                ?>
                                                <p style="background-color: #d9534f;padding: 4px;border-radius: 6px;color: white;">کاربر معلق</p>
                                            <?php endif; ?>
                                        </address>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
</div>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">

</script>
</body>
</html>