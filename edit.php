<?php
    require_once('./checkSession.php');
    require_once('./db.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>資料修改</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css">
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Noto+Sans+TC|Roboto&display=swap">
    <link rel="stylesheet" href="dist/css/custom.css">
    <link rel="stylesheet" href="dist/css/style.css">
    
<header>
    <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar navbar-dark">
        <a class="navbar-brand" href=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav center-all">
                <li class="nav-item active">
                    <a class="nav-link px-3 mx-1" href="./admin.php">總表</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 mx-1" href="./new.php">新增</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 mx-1" href="./logout.php?logout=1">登出</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="row">
        <div class="col-md-12">
        </div>
    </div>
</header>

    <style>
        input {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container mainframe">
        <div class="row">
            <div class="col-md-12 spaced">
                <form name="myForm" method="POST" action="updateEdit.php">
                    <table class="dataTable">
                        <thead class="dataTableHead">
                            <tr class="d-flex">
                                <td>學生證</td>
                                <td>姓名</td>
                                <td>性別</td>
                                <td>生日</td>
                                <td>電話</td>
                                <td>描述</td>
                                <td>修改</td>
                            </tr>
                        </thead>
                        <tbody class="dataTableBody">
                        <?php
                        $sql = "SELECT `id`, `studentId`, `studentName`, `studentGender`, `studentBirthday`, `studentPhoneNumber`, `studentDescription`
                        FROM `students` 
                        WHERE `id` = ?";

                        $arrParam = [(int)$_GET['editId']];

                        $stmt = $pdo->prepare($sql);
                        $stmt->execute($arrParam);
                        $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);

                        if (count($arr) > 0) {
                        ?>
                            <tr class="d-flex">
                                <td>
                                    <input type="text" name="studentId" value="<?php echo $arr[0]['studentId']; ?>"></input>
                                </td>
                                <td>
                                    <input type="text" name="studentName" value="<?php echo $arr[0]['studentName']; ?>"></input>
                                </td>
                                <td>
                                <select name="studentGender">
                                    <option value="<?php echo $arr[0]['studentGender']; ?>" selected><?php echo $arr[0]['studentGender']; ?></option>
                                    <option value="男">男</option>
                                    <option value="女">女</option>
                                </select>
                                </td>
                                <td>
                                    <input type="text" name="studentBirthday" value="<?php echo $arr[0]['studentBirthday']; ?>"></input>
                                </td>
                                <td>
                                    <input type="text" name="studentPhoneNumber" value="<?php echo $arr[0]['studentPhoneNumber']; ?>"></input>
                                </td>
                                </td>
                                <td>
                                    <textarea name="studentDescription"><?php echo $arr[0]['studentDescription']; ?></textarea>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                            <td colspan="6"><input type="submit" name="smb" value="修改"></td>
                            </tr>
                        </tfoo>
                    </table>
                    <input type="hidden" name="editId" value="<?php echo (int)$_GET['editId']; ?>">
                </form>
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script>
    // $('.dataTable').eq(0).css('width', '100px');
</script>
</body>
</html>