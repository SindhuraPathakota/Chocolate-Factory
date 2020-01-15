<?php 
$pages = array('Home'=>'index.php','Cataloge'=>'cataloge.php','Booking'=>'booking.php')

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zyder Chocoloate Factory - <?=$page_title?></title>
</head>
<body>
<header>
        <h1><?=$page_title?></h1>
        <nav>
         <?php
                foreach ($pages as $page => $link): ?>
                   <a href="<?= $link?>"><?= $page?> </a> 
                   <?php endforeach; ?>
        </nav>
    </header>