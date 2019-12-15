<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>商品列表</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./dist/css/custom.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-sm-12 col-xl-12">
                <form id="regForm" name="regions" method="post">
                    <input type="checkbox" name='regBoxAll[]' value="0" checked>全選</input>
                    <?php require_once('./itemList.php') ?>
                    
                    <?php
                        $sql.= "GROUP BY r.`rId` ";
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute();
                        $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        for($i = 0; $i < $rTotal; $i++) {
                    ?>
                        <div class="regDiv"><input type='checkbox' class='regBox' name='regBox[]' value="<?php echo $arr[$i]['rId'] ?>"><label><?php echo $arr[$i]['regionName'] ?></label></div>
                    <?php } ?>

                    <input type="checkbox" name='prefBoxAll[]' value="0" checked>全選</input>
                    <?php require_once('./itemList.php') ?>
                    <?php
                        $sql2.= "GROUP BY p.`pId` ";
                        $stmt2 = $pdo->prepare($sql2);
                        $stmt2->execute();
                        $arr2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
                            // echo "<pre>";
                            // print_r($arr2);
                            // echo "<pre>";
                        for($i = 0; $i < count($arr2); $i++) {
                    ?>
                        <div class="regDiv"><input type='checkbox' class='regBox' name='regBox[]' value="<?php echo $arr2[$i]['pId'] ?>"><label><?php echo $arr2[$i]['prefName'] ?></label></div>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- <script src="./dist/js/rSelect.js"></script> -->
    <!-- <script src="./dist/js/displayMethord.js"></script> -->
</body>
</html>