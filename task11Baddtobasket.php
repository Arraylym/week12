<?php
    $id = $_GET["id"];
    $basket = [];
    if (isset($_COOKIE["basket"])){
        $basket = json_decode($_COOKIE["basket"]);
    }
    array_push($basket,$id);
    $expireTime = time() + 60*60*24;
    setcookie("basket", json_encode($basket), $expireTime, '/webtasks/week12');
?>
<a href='/week12/task11B.php'>Back</a>
