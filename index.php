<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Order Pizza | Pizza Hut</title>
<link rel="stylesheet" type="text/css" href="pizza.css"/>
</head>
<?php
    error_reporting(1);
    mysql_connect('localhost','root','');
    mysql_select_db('pizza_db');

    if($_REQUEST['go'])
    {
        if(in_array("",$_POST))
        {
            echo"fill all fields";
        }
        else
        {
            extract($_REQUEST);
            $sql="insert into orderplace values('$city','$street','$bname','$flatno','$landmark')";
	        mysql_query($sql);
	        header("location: orderpizza.php");
	    }
    }
?>
<body>
	<?php
		include("common.php");
		head();
	?>
	<div id="mimages">
		<div id="phimage"></div>
		<div id="phimage1"></div>
	</div>
	
	<?php
	foot();
	?>
	<div id="order">
		 <div id="orderheder">
			<div id="orderh"><b>DELIVERY</b></div>
		</div>
		<div id="oform">
			ADDRESS<br>
			<form method="post">
				<input type="text" name="city" style="width:90%;" placeholder="Type select City*"/><br/><br/>
				<input type="text" name="street" style="width:90%;" placeholder="Type Locality/Street*"/><br/><br/>
				<input type="text" name="bname" style="width:90%;"placeholder="Type Building Name"/><br/><br/>
				<input type="text" name="flatno" style="width:90%;" placeholder="Type Flat Number"/><br/><br/>
				<input type="text" name="landmark" style="width:90%;"placeholder="Type Landmark"/><br/><br/>
				<input  id= "submit" type="submit" name="go" value="Proceed"/>
			</form>
		</div>
		<div id="storesearch">
			 <div id="orderheder">
				<div id="orderh"><b>PICK UP</b></div>
			</div>
			<div id="oform">
				STORE SEARCH<br><br>
                <?php
                    $res=mysql_query("select Name,BName, Street, City from pizza_centre");
                    
                ?>
				<select name="store" id="sstore">  
                    <option value="s1">Crystal Palm</option>
                    <option value="s2">Jaipur Crystal Court</option>
                    <option value="s3">Jaipur MI</option>
                    <option value="s4">Pizza Hut</option>
                    <option value="s5">Pizza Balunchi</option>
                    <option value="s6">Pizza Republic</option>
                    <option value="s7">Pizza City</option>
                    <option value="s8">Mr. Bean's Pizza</option>
                </select><br>
                <div id="distext">
                    <script>
                        $('#sstore').change(Function(){
                                            $('#distext').text($('#sstore').val())
                                            });
                    </script>
                </div>
				<input id="submit1" type="button" name="submit1" value="Proceed" onclick=".change()"/>
			</div>
		</div>
		<div id="ad">
			<img src="images/padd2.jpeg" height="400px"; width="300px">
		</div>
	</div>
</body>
</html>
