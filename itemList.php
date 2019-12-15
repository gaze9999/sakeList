<?php
    header("Content-Type: text/html; chartset=utf-8");
?>

<input type="checkbox" name='regBoxAll[]' value="0" checked>全選</input>
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

<form id="regForm" name="regions" method="POST" action="./db/getList.php">
<?php
    foreach($rarr as $value) {
        // echo "<pre>";
        // print_r($value);
        // echo "</pre>";
?>
    <input type='checkbox' class='regBox' name='regBox[]' data-rId="<?php echo $value['rId'] ?>" value="<?php echo $value['rId'] ?>"><label><?php echo $value['regionName'] ?></label>
    <?php } ?>
</form>

<hr>

<input type="checkbox" name='prefBoxAll[]' value="0" checked>全選</input>
<form id="prefForm" name="prefectures" method="POST">
<?php 
    // prefecture sql
    $psql = "SELECT p.`pId`, p.`prefName`, p.`rId`, r.`rId` ";
    $psql.= "FROM `prefectures` as p, `regions` as r ";
    $psql.= "WHERE p.`rId` = r.`rId` ";
    $psql.= "ORDER BY p.`pId` ASC ";
    $pstmt = $pdo->prepare($psql);
    $pstmt->execute();
    $parr = $pstmt->fetchAll(PDO::FETCH_ASSOC);

?>
<?php
foreach($parr as $value) {
    // echo "<pre>";
    // print_r($value);
    // echo "</pre>";
?>
    <div class="prefDiv" style="display:none;"><input type='checkbox' class='prefBox' name='prefBox[]' data-rId="<?php echo $value['rId'] ?>" value="<?php echo $value['pId'] ?>"><label><?php echo $value['prefName'] ?><label></div>
<?php } ?>
</form>