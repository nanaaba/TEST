<?php

require_once './AdminClass.php';

if (!empty($_POST["target_group"])) {
    $target_id = $_POST["target_group"];
    $data = new AdminClass();
    $alldata = $data->getgradebasedontarget($target_id);
    ?>
  
    <?php
    while ($row = mysql_fetch_assoc($alldata)) {
        ?>
        <option value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></option>
        <?php
    }
}