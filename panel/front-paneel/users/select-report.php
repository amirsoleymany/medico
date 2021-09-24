<?php include_once '../function/jdf.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <title>انتخواب گزارش مورد نیاز</title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<body>
<div class="row row-cols-1 row-cols-md-2 g-6">
    <div class="col">
        <div class="row row-cols-1 row-cols-md-1 g-12">
            <div class="col">
        <select class="form-control btn btn-light" aria-label="Default select example" name ="status" style="position: relative;right: 2px;">
    <option  selected disabled>انتخواب نمایش دسته بندی گزارش وضعیت </option>
    <option value="" name="recent">گزارش ۱ ساعت اخیر آنلاین | آفلاین</option>
    <option value="" name="user-off">گزارش وضعیت کاربر آفلاین | سیستم</option>
    <option value="" name="users-off">گزارش وضعیت کاربران آفلاین | سیستم</option>
        </select>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="row">
            <div class="col-md-12">
        <input class="btn btn-primary" type="submit" name="show" value="نمایش">
        <a class="btn btn-primary" href="http://localhost/medico/panel/front-paneel/dashburd.php?page=status-report">به روزرسانی گزارش</a>
        <input class="btn btn-primary" type="submit" name="print" value="چاپ گزارش">
            </div>
        </div>
    </div>

</div>
</body>
</html>
