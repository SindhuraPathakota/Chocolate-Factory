<?php 
$pages = array('Home'=>'index.php','Catalogue'=>'catalogue.php','Booking'=>'booking.php')

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="views/productsListStyle.css">
    <title>Zyder Chocoloate Factory - <?=$page_title?></title>
</head>
<body>
<header>
    <nav>
        <?php
            foreach ($pages as $page => $link): ?>
                <a href="<?= $link?>"><?= $page?> </a> 
                <?php endforeach; ?>
    </nav>
</header>