<?php
/*if (strpos($select_permitions->permition,'list-upload-file.php') !==false):
*/?>
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
</table>
    </thead>
<tbody>
<?php
include_once '../function/f-users.php';
$files = list_upload_file();
if (count($files) == 0):
?>
<div class="alert alert-danger" role="alert">
    هنوز هیچ فایلی به سیستم ارسال نشده است...
</div>
<?php endif; ?>
<?php
foreach ($files as $key=>$file):
?>

<tr>
    <td><?php echo $key+1; ?></td>
    <td><button type="button" class="btn btn-outline-dark"><?php echo $file->code ?></button></td>
    <td><?php echo $file->name ?></td>
    <td><?php echo $file->type ?></td>
    <td><?php echo $file->author ?></td>
    <td><?php echo $file->date ?></td>
    <td><?php echo $file->description ?></td>
    <td><a href="<?php echo $file->path ?>" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"></path>
                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"></path>
            </svg></a></td>
</tr>
<?php endforeach; ?>
</tbody>


