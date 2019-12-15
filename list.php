<?php
    require_once('./db/db.inc.php');
?>
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
            <!-- <form name="regions" method="POST" action="./db/getList.php"> -->
            <?php require_once('./itemList.php') ?>
            <!-- </form> -->
        </div>
    </div>
</div>

    <input id="reg" type="hidden" value="">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- <script src="./dist/js/rSelect.js"></script> -->
    <script>
    let regBox = $('.regBox');
    let reg = $('#reg');
    let regArr = [];
    regBox.on('change', function() {

            if ($(this).is(":checked")) {
                regArr.push($(this).val());
                reg.val(regArr);
            } else {
                regArr.pop($(this).val());
                reg.val(regArr);
            }
        });
    </script>
</body>
</html>