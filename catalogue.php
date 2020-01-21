
<?php 
session_start();
$page_title= 'Catalouge';
require_once('views/page_top.php');
require_once('database/products.php');
$productsList = get_products();
?>
<main>
<!--<p>
This is home page and it will contain :
- Navigation bar
- catalogue of the products
- link to order the products
</p>-->
<h2 style="text-align:center">Catalogue</h2>

<div class="productdiv">
    <?php for($i=0;$i<count($productsList);$i++){?>
    <div class="card">
        <img src="images/chocolate<?php echo $i+1 ?>.jpg" alt="chocolate img" style="width:100%">
        <h1 class="name">Product Name : <?= $productsList[$i]['product_name']?></h1>
        <p class="price">Price : <?= $productsList[$i]['price']?>$</p>
        <p class="quantity">Quantity : <?= $productsList[$i]['quantity']?></p>
        <p class="expiry_date">Expiry Date : <?= $productsList[$i]['expiry_date'] ?></p>
        <p><button><a href="booking.php">Add to Cart</a></button></p>
        <?php $_SESSION['sel_product_id'] = $productsList[$i]['product_id']; ?>
    </div>
    <?php
    }
    ?>
  
</div><br>
</main>
<?php
require_once('views/page_bottom.php');
?>