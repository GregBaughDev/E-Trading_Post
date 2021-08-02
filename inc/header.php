<?php
    session_start();
    require_once("conn.php");
    require_once($_SERVER['DOCUMENT_ROOT'] . '/Diploma/504-A1/www/func/allitems.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="/Diploma/504-A1/www/public/styles.css" rel="stylesheet">
    <title>E-Trading Post</title>
</head>
<body>
<header>
    <div>
        <h1>E-Trading Post</h1>
        <nav>
            <a href="/Diploma/504-A1/www/index.php">Explore</a>
            <a href="/Diploma/504-A1/www/sell.php">Sell</a>
        </nav>
    </div>
</header>