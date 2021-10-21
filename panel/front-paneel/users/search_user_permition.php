<head>
    <title>نمایش بر اساس مجوز کاربران</title>
</head>
<div class="form-row col-md-6">
        <div class="col-md-10">
            <select class="form-group form-control form-select" name="permition_id" required aria-label="select example">
                <option value=" " selected disabled>نمایش بر اساس مجوز کاربران</option>
                <?php
                $permitions = select_permition_name();
                foreach ( $permitions as $access) :
                ?>
                <option value="<?php echo $access->id?>"><?php echo $access->name ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-primary" name="search_permition">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                </svg>
            </button>
        </div>
    </div>
