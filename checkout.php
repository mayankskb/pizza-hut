<?php
    require 'cart.php';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CheckOut | Pizza Hut</title>
<link rel="stylesheet" type="text/css" href="pizza.css"/>
</head>
<body>
	<?php
		include("common.php");
		head();
	?>
    <div id="checkoutbody">
         <div id="myorder">
             <br>
             <Center> <h2>My Order</h2></Center>
             <div id ="order_display">
             <?php
                 session_start();                 
                 echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
            ?>
             </div>
         </div>
        <div id="pcheckimage">
            <image src="images/pcheckout.jpg" style=" height:400px; width: 70%; float:right; margin-right:200px;margin-top:50px; opacity:0.6;"/>
        </div>
    </div>
    <?php
        foot();
    ?>
</body>