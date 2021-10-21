<head>
    <title>ثبت نوبت دهی جدید به بیمار</title>
</head>
<form class="needs-validation text-dark"  method="post" enctype="multipart/form-data" style="background: #f1f1f1;padding: 2%;">
    <h5>اطلاعات پزشک</h5><hr>
    <div class="row">
        <div class="col-md-6">
            <label for="validationCustom01" style="color: #000000">نام و نام خانوادگی پزشک</label>
            <input type="text" name="info[fullname]" class="form-control" id="validationCustom01" placeholder="نام و نام خانوادگی پزشک"  required>
        </div>
        <div class="col-md-6">
            <label  style="color: #000000">س</label>
            <select class="form-control form-select" name="info[degree]" required aria-label="select example">
                <option value="" >انتخاب مدرک تحصیلی</option>
            </select>
        </div>
    </div>
    <br><br>
    <h5>اطلاعات بیمار</h5><hr>
    <div class="row">
        <div class="col-md-4">
            <label for="validationCustom02" style="color: #000000">نام و نام خانوادگی بیمار</label>
            <input type="text" name="info[fullname]" class="form-control" id="validationCustom02" placeholder="نام و نام خانوادگی بیمار"  required>
        </div>

    </div>
</form>
