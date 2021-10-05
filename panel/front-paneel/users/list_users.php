
<div style="box-shadow: 0 0 20px 0 rgb(66 55 55), 0 5px 5px 0 rgb(0 0 0);padding: 50px;">
<table class="table table-striped table-advance table-hover">
    <thead>
    <tr style="background: #77ace79e;">
        <th>ردیف</th>
        <th>تصویر</th>
        <th>نام و نام خانوادگی</th>
        <th>نام کاربری</th>
        <th>تلفن تماس</th>
        <th>شروع فعالیت</th>
        <th>دسترسی</th>
        <th>وضعیت</th>
        <th>جزئیات|ویرایش</th>
    </tr>
    </thead>
    <tbody>
    <?php
    include_once '../functions/f-user.php';
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
    <?php
    foreach ($users as $index=>$user) :
        ?>
        <tr>
            <td><p style="margin-top: 40px;"><?php echo $index+1; ?></p></td>
            <td><button type="button" ><img src="<?php echo $user->img ?>" style="width: 78px;"></button></td>
            <td><p style="margin-top: 40px;"><?php echo $user->fullname ?></p></td>
            <td><p style="margin-top: 40px;"><?php echo $user->username ?></p></td>
            <td><p style="margin-top: 40px;"><?php echo $user->phone ?></p></td>
            <td><p style="margin-top: 40px;"><?php echo $user->date_register ?></p></td>
            <td>
                <p style="margin-top: 40px;">
                    <?php
                    $permition_name = show_permition_name($user->permition);
                    echo $permition_name->name;
                    ?>
                </p>

            </td>

            <td>
                <?php
                if($user->status == 'on'):
                    ?>
                   <a class="btn btn-success btn-addmenue" style="color: #FFFFFF; float: right;margin-top: 31px;">کاربر فعال</a>

                <?php endif; ?>
                <?php
                if($user->status == 'off'):
                    ?>
                    <a class="btn btn-danger btn-addmenue" style="color: #FFFFFF; float: right;margin-top: 31px;">کاربر معلق</a>
                <?php endif; ?>
            </td>

            <td><a href="dashboard.php?page=edit-info-user&id=<?php echo $user->id; ?>" class="btn btn-danger btn-xs" style="margin-top: 31px;margin-right: 25px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"></path>
                    </svg>
                </a>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>

</table>
</div>

