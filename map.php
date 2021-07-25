<?php

$readType_sql = "SELECT `id_tg`, `title` FROM `typegoods`";
$read_sql ="SELECT `id_g`, `title`, `name`, `specification`, `prise`, `article` FROM `goods`,`typegoods` WHERE `typeG` = `id_tg`";
$add_sql="INSERT INTO `goods`(`typeG`, `name`, `specification`, `prise`, `article`) VALUES (:typeProd ,:name,:dimensions,:prise,:sku)";