<?php

    require 'cart.php';


?>
<html>
    <head>
        <title>Order Pizza</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet"/>
        <style>
            body{
                font-family: consolas;
                margin: 0px;
                padding: 0px;
                background-color: #F8F6F1;
            }
            #wrapper{
                height: 1550px;
                width: 1200px;
                margin: 100px auto;
                //background-color: #000;
            }
            #navbar{
                height: 50%;
                width: 245px;
                background-color: #fff;
                float: left;
            }
            #menu{
                height: 1550px;
                width: 700px;
                background-color: #fff;
                float: left;
            }
            #order_box{
                height: auto;
                width: 215px;
                float: right;
                background-color: #fff;
                padding: 15px;
            }
            #navbar li{
                list-style: none;
                padding: 10px 0px 0px 10px;
            }
            #navbar h3{
                padding: 4px 0px 0px 10px;
            }
            .menu_item{
                background-color: #fff;
                height: 80px;
                width: 100%;
                border-top: 1px solid #bbb;
                padding-top: 7px;
            }
            .menu_item img{
                height: 70px;
                width: 70px;
                float: left;
            }
            .menu_item .item_title{
                float: left;
                padding: 0px 0px 0px 15px;
            }
            .item_title h3{
                margin: 5px 0px;
            }
            .item_title p{
                font-size: 12px;
                color: #777;
                width: 350px;
            }
            .add_button{
                float: right;
                height: 30px;
                width: 30px;
                border-radius: 30px;
                background-color: aqua;
                color: #fff;
                text-align: center;
                font-size: 25px;
                font-weight: bolder;
                margin: 25px 20px 0px 0px;
                border: 0px solid transparent; 
                cursor: pointer;
                text-decoration: none;
            }
            .add_button .button_symbol{
                position: relative;
                top: -1px;
                left: 0px;
            }
            .item_price{
                float: right;
                margin: 30px 20px 0px 0px;
                font-weight: bolder;
            }
            #cart_title span{
                font-size: 24px;
            }
            #cart_title .fa{
                float: right;
                color: aqua;
                font-size: 25px;
            }
            #cart_title{
                padding-bottom: 10px;
                border-bottom: 1px solid #bbb;
            }
            #delivery_time{
                font-weight: 700;
                font-size: 15px;
                font-family: helvetica;
                padding: 10px 0px;
                border-bottom: 1px solid #bbb;
                color: #444444;
            }
            .item_desc{
                padding: 10px 0px;
                max-height: 160px;
                overflow-y: auto;
                width: 230px;
            }
            .change_quantity{
                width: 210px;
                //background-color: black;
                height: 30px;
                margin-top: 30px;
                border-bottom: 1px solid #999;
                margin-bottom: 10px;
            }
            .item_quantity{
                height: 26px;
                width: 30px;
                text-align: center;
                border: 1px solid #999;
                padding-top: 4px;
                float: left;
                color: #007F56;
            }
            .item_name{
                height: 32px;
                width: 165px;
                float: left;
                margin-left: 10px;
            }
            .item_desc a{
                height: 20px;
                width: 20px;
                border: 1px solid #999;
                float: left;
                text-align: center;
                cursor: pointer;
                color: #007F56;
                text-decoration: none;
            }
            .item_total{
                float: right;
                font-weight: 600;
                color: #777;
            }
            #subtotal{
                height: 90px;
                width: 210px;
                border-top: 1px solid #bbb;
                font-size: 14px;
                color: #555;
                //background-color: #999;
            }
            #checkout{
                height: 35px;
                width: 210px;
                background-color: aqua;
                color: #fff;
                font-weight: bolder;
                font-size: 16px;
                font-family: consolas;
                border: 0px solid transparent;
                border-radius: 5px;
                cursor: pointer;
                display: table-cell;
                vertical-align: middle;
                text-align: center;
                text-decoration: none;
            }
        </style>
        <link rel="stylesheet" type="text/css" href="pizza.css"/>
        <script>
            window.addEventListener('scroll',function(){
               if(window.pageYOffset>100){
                   document.getElementById("navbar").style.position = 'fixed';
                   document.getElementById("navbar").style.top = 0+'px';
                   document.getElementById("menu").style.marginLeft = 245+'px';
                   document.getElementById("order_box").style.position = 'fixed';
                   document.getElementById("order_box").style.top = 15+'px';
                   document.getElementById("order_box").style.marginLeft = 960+'px';
               } 
                else{
                    document.getElementById("navbar").style.position = 'inherit';
                    document.getElementById("menu").style.marginLeft = 'inherit';
                    document.getElementById("order_box").style.position = 'absolute';
                    document.getElementById("order_box").style.top = 100+'px';
                }
            });
        </script>
    </head>
    <body>
        <?php
		  include("common.php");
		  head();
	   ?>
        <div id="wrapper">
            <div id="navbar">
                <h3>Pizza Hut (Crystal Court, Malviya Nagar)</h3>
                <li>Veg Pizza</li>
                <li>Non-Veg Pizza</li>
                <li>Sides and More</li>
            </div>
            <div id="menu">
                <h2>Veg Pizza</h2>
                <?php 
                    $veg_query = mysql_query("select id, name, description, image, price from pizza where id like '1%'");
                    while($veg_row = mysql_fetch_assoc($veg_query)){
                    
                ?>
                    <div class="menu_item">
                        <img src="./images/<?php echo $veg_row['image']; ?>" class="item_image"/>
                        <div class="item_title">
                            <h3><?php echo $veg_row['name']; ?></h3>
                            <p><?php echo $veg_row['description']; ?></p>
                        </div>
                        <a href="cart.php?add=<?php echo $veg_row['id']; ?>" class="add_button"><span class="button_symbol">+</span></a>
                        <div class="item_price">Rs. <?php echo $veg_row['price']; ?></div>
                    </div>
                <?php
                    } 
                ?>
                
                <h2>Non-Veg Pizza</h2>
                <?php 
                    $nonveg_query = mysql_query("select id, name, description, image, price from pizza where id like '2%'");
                    while($nonveg_row = mysql_fetch_assoc($nonveg_query)){
                    
                ?>
                    <div class="menu_item">
                        <img src="./images/<?php echo $nonveg_row['image']; ?>" class="item_image"/>
                        <div class="item_title">
                            <h3><?php echo $nonveg_row['name']; ?></h3>
                            <p><?php echo $nonveg_row['description']; ?></p>
                        </div>
                        <a href="cart.php?add=<?php echo $nonveg_row['id']; ?>" class="add_button"><span class="button_symbol">+</span></a>
                        <div class="item_price">Rs. <?php echo $nonveg_row['price']; ?></div>
                    </div>
                <?php
                    } 
                ?> 
                
                <h2>Sides and More</h2>
                <?php 
                    $sides_query = mysql_query("select id, name, description, image, price from pizza where id like '3%'");
                    while($sides_row = mysql_fetch_assoc($sides_query)){
                    
                ?>
                    <div class="menu_item">
                        <img src="./images/<?php echo $sides_row['image']; ?>" class="item_image"/>
                        <div class="item_title">
                            <h3><?php echo $sides_row['name']; ?></h3>
                            <p><?php echo $sides_row['description']; ?></p>
                        </div>
                        <a href="cart.php?add=<?php echo $sides_row['id']; ?>" class="add_button"><span class="button_symbol">+</span></a>
                        <div class="item_price">Rs. <?php echo $sides_row['price']; ?></div>
                    </div>
                <?php
                    } 
                ?>
            </div>
            <div id="order_box">
                <div id="cart_title">
                    <span>Your Order</span>
                    <i class="fa fa-shopping-bag"></i>
                </div>
                <div id="delivery_time">
                    Estimated delivery time: 30m 
                </div>
                <div class="item_desc">
                <?php 
                
                    foreach($_SESSION as $name => $value){
                        if($value>0){
                            if(substr($name,0,5)=='cart_'){
                                $id = substr($name,5,(strlen($name)-5)); 
                                $query = mysql_query('select id,name,price from pizza where id='.mysql_real_escape_string((int)$id));
                                while($cart = mysql_fetch_assoc($query)){
                                    $sub = $cart['price']*$value;
                                    
                
                ?>
                    <div class="item_quantity"><?php echo $value; ?></div>
                    <div class="item_name"><?php echo $cart['name']; ?></div><br>
                    <div class="change_quantity">
                        <a href="cart.php?remove=<?php echo $cart['id']; ?>" class="decrement">-</a>
                        <a href="cart.php?add=<?php echo $cart['id']; ?>" class="increment">+</a>
                        <div class="item_total">Rs. <?php echo $sub; ?></div>
                    </div>
                <?php
                        
                                }
                            }
                            $total += $sub;
                            $vat = 0.05*$total;
                            $service = 0.05*$total;
                            $total += $vat + $service;
                        }
                    }
                        
                ?>
                </div>
                <?php 
                    if($total == 0){
                        
                    }
                    else{
                ?>
                <div id="subtotal">
                    <p><span style="float: left;">VAT(5%)</span>
                        <span style="float: right;">Rs. <?php echo number_format($vat,2); ?></span>
                    </p>
                    <p><span style="float: left;">Service Tax(5.8%)</span>
                        <span style="float: right;">Rs. <?php echo number_format($service,2); ?></span>
                    </p>
                    <p><span style="float: left; font-weight: bolder">Sub Total<br><span style="font-size: 10px; color: #999;">(+ Delivery charges)</span></span>
                        <span style="float: right; font-weight: bolder;">Rs. <?php echo number_format($total,2); ?></span>
                    </p>
                </div>
                <a href="checkout.php" id="checkout">Proceed to Checkout<span style="float: right; position: relative; top: 4px; right: 12px; font-size: 13px;"><i class="fa fa-chevron-right"></i></span></a>
                <?php
                    }
                ?>
            </div>
        </div>
        <?php
	       foot();
	    ?>
    </body>
</html>