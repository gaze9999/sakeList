<?php
    header("Content-Type: text/html; chartset=utf-8");
?>

<input type="checkbox" value="0" checked>全選</input>

<?php
    // all sql
    // $sql = "SELECT r.`rId`, r.`regionName`, p.`pId`, p.`prefName`, p.`rId` ";
    // $sql.= "FROM `prefectures` as p, `regions` as r ";
    // $sql.= "ORDER BY p.`pId` ASC ";

    // $stmt = $pdo->prepare($sql);
    // $stmt->execute();
    // $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // region sql
    $rsql = "SELECT `rId`, `regionName` ";
    $rsql.= "FROM `regions` ";
    $rsql.= "ORDER BY `rId` ASC ";
    
    $rstmt = $pdo->prepare($rsql);
    $rstmt->execute();
    $rarr = $rstmt->fetchAll(PDO::FETCH_ASSOC);

    // var_dump($arr);
    // echo "</pre>";
?>

<form name="regions" method="POST">
<?php
    foreach($rarr as $value) {
        // echo "<pre>";
        // print_r($value);
        // echo "</pre>";        
        echo "<br><input class='regBox' type='checkbox' value=".$value['rId'].">".$value['regionName']."</input>";
    };
?>
</form>
<form name="prefectures" method="POST">
<?php 
    // prefecture sql
    $psql = "SELECT p.`pId`, p.`prefName`, p.`rId`, r.`rId` ";
    $psql.= "FROM `prefectures` as p, `regions` as r ";
    $psql.= "WHERE p.`rId` = r.`rId` ";
    $psql.= "ORDER BY p.`pId` ASC ";

    $pstmt = $pdo->prepare($psql);
    $pstmt->execute();
    $parr = $pstmt->fetchAll(PDO::FETCH_ASSOC);

    // echo "<pre>";
    // print_r($parr);
    // echo "</pre>";

    echo $_POST['regions'];
?>

</form>