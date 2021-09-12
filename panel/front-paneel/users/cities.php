<?php
include "../../function/f-users.php";
?>
<?php
if(isset($_POST['id']) && is_numeric($_POST['id'])):
    $id = $_POST['id'];
    $cities = select_city($id);
    foreach ($cities as $city) :
        ?>
        <option value="<?php echo $city->name; ?>"><?php echo $city->name; ?></option>
    <?php endforeach; ?>
<?php endif; ?>


