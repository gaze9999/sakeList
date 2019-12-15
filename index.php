<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>會員登入</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css">
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Noto+Sans+TC|Roboto&display=swap">
    <link rel="stylesheet" href="dist/css/custom.css">
    <link rel="stylesheet" href="dist/css/style.css">
</head>
<body>
    <div class="container mainframe loginFrame">
        <div class="row">
            <div class="col-md-12 d-flex center-all">
                <form class="" id="login" name="logTable" method="post" action="./login.php">
                    <table class="loginPanel d-flex center-all">
                        <tbody class="center-all">
                            <tr>
                                <td>
                                    <label class="info" for="usrName">帳號: </label>
                                    <input class="infoInput" type="text" name="usrName" id="usrName" value="" placeholder="請輸入帳號"><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="info" for="pwd">密碼: </label>
                                    <input class="infoInput" type="password" name="pwd" id="pwd" value="" placeholder="請輸入密碼"><br>
                                </td>
                            </tr>
                            <tr>
                                <td class="d-flex center-all">
                                    <input class="info" id="loginBtn" type="submit" value="登入">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script>
    // $(document).on('click', $(.info), function(e){
    //     e.preventDefault();
    //     if 
    // });
</script>
</body>
</html>