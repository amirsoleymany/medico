<head>
    <title>مشاهده لیست مجوزها</title>
</head>
<table class="table table-striped">
    <thead>
    <tr>
        <th>ردیف</th>
        <th>کد مجوز</th>
        <th>عنوان مجوز | سمت</th>
        <th>ایجاد کننده</th>
        <th>تاریخ</th>
        <th>مجوز ها</th>
        <th>وضعیت</th>
        <th>ویرایش</th>
        <th>حذف</th>
    </tr>
    </thead>
    <tbody>
    <?php
    include_once '../function/f-users.php';
    $access = list_permition();
    if(count($access) == 0):
        ?>
        <div class="alert alert-danger" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"></path>
                <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"></path>
            </svg>
            هنوز هیچگونه مجوز دسترسی در سیستم ایجاد نشده است ...

        </div>
    <?php endif; ?>
    <?php
    foreach ($access as $key=>$val) :
        ?>
        <tr>
            <td><?php echo $key+1; ?></td>
            <td><button type="button" class="btn btn-outline-dark" ><?php echo $val->code ?></button></td>
            <td><button type="button" class="btn btn-secondary" ><?php echo $val->name ?></button></td>
            <td><?php echo $val->author ?></td>
            <td><?php echo $val->date ?></td>
            <td>
                <?php
                $res1 = list_name_permition($val->id);
                foreach ($res1 as $key=>$resu):
                    ?>
                    <button type="button" class="btn btn-outline-secondary" ><?php echo $resu; ?></button>
                <?php endforeach; ?>
            </td>
            <td>
                <?php
                if($val->status == 'on'):
                    ?>
                    <a class="btn btn-success btn-addmenue" style="color: #FFFFFF; float: right;">فعال|سیستم</a>
                <?php endif; ?>
                <?php
                if($val->status == 'off'):
                    ?>
                    <a class="btn btn-danger btn-addmenue" style="color: #FFFFFF; float: right;">غیرفعال|سیستم</a>
                <?php endif; ?>
            </td>
            <td><a href="dashboard.php?page=config-access&id_page=<?php echo $val->id; ?>"  class="btn btn-primary btn-xs">
                    <svg class="bi bi-pencil" width="1.2em" height="1.2em"
                         viewBox="0 0 16 16" fill="currentColor"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M11.293 1.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"
                              clip-rule="evenodd"></path>
                        <path fill-rule="evenodd"
                              d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 00.5.5H4v.5a.5.5 0 00.5.5H5v.5a.5.5 0 00.5.5H6v-1.5a.5.5 0 00-.5-.5H5v-.5a.5.5 0 00-.5-.5H3z"
                              clip-rule="evenodd"></path>
                    </svg>

            </td>
            <td><a href="dashboard.php?page=delete-access&id=<?php echo $val->id; ?>" class="btn btn-danger btn-xs">
                    <svg class="bi bi-trash" width="1.2em" height="1.2em"
                         viewBox="0 0 16 16" fill="currentColor"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.5 5.5A.5.5 0 016 6v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V6z"></path>
                        <path fill-rule="evenodd"
                              d="M14.5 3a1 1 0 01-1 1H13v9a2 2 0 01-2 2H5a2 2 0 01-2-2V4h-.5a1 1 0 01-1-1V2a1 1 0 011-1H6a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM4.118 4L4 4.059V13a1 1 0 001 1h6a1 1 0 001-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"
                              clip-rule="evenodd"></path>
                    </svg>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
