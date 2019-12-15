<?php
    require_once('./checkSession.php');
    require_once('./db.inc.php');
    
    $sql = "INSERT INTO `students` (`studentId`, `studentName`, `studentGender`, `studentBirthday`, `studentPhoneNumber`, `studentDescription`)
            VALUES (?, ?, ?, ?, ?, ?)";

    $arrParam = [
        $studentId = $_POST['studentId'],
        $studentName = $_POST['studentName'],
        $studentGender = $_POST['studentGender'],
        $studentBirthday = $_POST['studentBirthday'],
        $studentPhoneNumber = $_POST['studentPhoneNumber'],
        $studentDescription = $_POST['studentDescription']
    ];
    
    $pdo_stmt = $pdo->prepare($sql);
    $pdo_stmt->execute($arrParam);
    
    if($pdo_stmt->rowCount() > 0) {
        header("Refresh: 3; url=./admin.php");
        echo "oh my god Add!";
    } else {
        header("Refresh: 3; url=./admin.php");
        echo "no change";
    }
?>