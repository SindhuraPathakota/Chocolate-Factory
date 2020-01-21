
<?php 
session_start();
$page_title= 'Booking';
require_once('views/page_top.php');
?>
<main>
<p>
This is home page and it will contain :
- Navigation bar
- Booking the products
</p>
</main>
<?php 
echo $_SESSION['sel_product_id'];
require_once('views/page_bottom.php');
?>