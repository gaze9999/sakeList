<?php
    require_once('./db/db.inc.php');
?>
<?php
$regTotal = "SELECT count(1) FROM `regions`";
$rTotal = $pdo->query($regTotal)->fetch(PDO::FETCH_NUM)[0];
$prefTotal = "SELECT count(1) FROM `prefectures`";
$pTotal = $pdo->query($prefTotal)->fetch(PDO::FETCH_NUM)[0];
?>
<?php
    $sql = "SELECT r.`rId`, r.`regionName`, p.`pId`, p.`prefName`, p.`rId` ";
    $sql.= "FROM `regions` as r ";
    $sql.= "LEFT JOIN `prefectures` as p ";
    $sql.= "ON r.`rId` = p.`rId` ";
    
    $sql2 = "SELECT r.`rId`, p.`pId`, p.`prefName`, p.`rId` ";
    $sql2.= "FROM `regions` as r ";
    $sql2.= "LEFT JOIN `prefectures` as p ";
    $sql2.= "ON r.`rId` = p.`rId` ";
    
    // echo "<pre>";
    // print_r($arr);
    // echo "<pre>";
?>