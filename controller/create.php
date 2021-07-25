<?php
    require_once'map.php';
    require_once'model.php';

    $write = new write($_POST['sku'],$_POST['name'],$_POST['price'],$_POST['productType'], $_POST['prodDescription'], $db, $add_sql);
    $write->writeing();

 





