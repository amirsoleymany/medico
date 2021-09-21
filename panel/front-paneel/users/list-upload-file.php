
<head>
        <title>گزارش تاریخچه ارسال فایل</title>
    </head>
    <table class="table table-striped table-advance table-hover">
        <thead>
        <tr>
            <th>ردیف</th>
            <th>کد فایل</th>
            <th>عنوان فایل</th>
            <th>نوع فایل</th>
            <th>ارسال کننده</th>
            <th>تاریخ ارسال</th>
            <th>توضیحات</th>
            <th>دریافت فایل</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include_once '../function/f-users.php';
        $files = list_upload_file();
        if(count($files) == 0):
            ?>
            <div class="alert alert-danger" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                    <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"></path>
                    <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"></path>
                </svg>
                هنوز هیچگونه فایلی به سیستم ارسال نشده است ...
            </div>
        <?php endif; ?>
        <?php
        foreach ($files as $key=>$file) :
            ?>
            <tr>
                <td><?php echo $key+1; ?></td>
                <td><button type="button" class="btn btn-outline-dark" ><?php echo $file->code ?></button></td>
                <td><?php echo $file->name ?></td>
                <td><img src="<?php echo $file->type ?>" style="width: 29px;"></td>
                <td><?php echo $file->author ?></td>
                <td><?php echo $file->date ?></td>
                <td><?php echo $file->description ?></td>
                <td><a  href="<?php echo $file->path ?>" class="btn btn-primary" style="margin-right: 17px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
                            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"></path>
                        </svg></a></td>
            </tr>

        <?php endforeach; ?>
        </tbody>

    </table>


