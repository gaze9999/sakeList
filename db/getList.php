<?php
    header("Content-Type: text/html; chartset=utf-8");
?>
// $breTotal = "SELECT count(1) FROM `breweries`";
// $bTotal = $pdo->query($breTotal)->fetch(PDO::FETCH_NUM)[0];

// $numPerPage = 20;
// $totalPages = ceil($bTotal/$numPerPage);
// $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
// $page = $page < 1 ? 1 : $page;

<?php
    $rParam = [$_POST['regBox']];
    $psql = "SELECT p.`pId`, p.`prefName`, p.`rId`, r.`rId` ";
    $psql.= "FROM `prefectures` as p, `regions` as r ";
    $psql.= "WHERE p.`rId` = ? AND r.`rId` = ? ";
    $psql.= "ORDER BY p.`pId` ASC ";
    $pstmt = $pdo->prepare($psql);
    $pstmt->execute($rParam);
    $parr = $pstmt->fetchAll(PDO::FETCH_ASSOC);
?>