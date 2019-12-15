<?php
    require_once('./checkSession.php');
    require_once('./db.inc.php');

    $sql = "UPDATE `students` SET ";
    $sql.= "`studentId` = ? ,";
    $sql.= "`studentName` = ? ,";
    $sql.= "`studentGender` = ? ,";
    $sql.= "`studentBirthday` = ? ,";
    $sql.= "`studentPhoneNumber` = ? ,";
    $sql.= "`studentDescription` = ? ";
    $sql.= "WHERE `id` = ? ";
    
    $arrParam = [
        $_POST['studentId'],
        $_POST['studentName'],
        $_POST['studentGender'],
        $_POST['studentBirthday'],
        $_POST['studentPhoneNumber'],
        $_POST['studentDescription'],
        (int)$_POST['editId'],
    ];

    // print_r($_POST);

    // exit();
    
    $pdo_stmt = $pdo->prepare($sql);
    $pdo_stmt->execute($arrParam);

    if( $pdo_stmt->rowCount() > 0 ){
        header("Refresh: 3; url=./admin.php");
        echo "ok";
    } else {
        header("Refresh: 3; url=./admin.php");
        echo "oh no";
    }
?>