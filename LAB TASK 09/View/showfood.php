 
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		
	</style>
	<title></title>
</head>
<body>
	 <?php require("head.php"); ?>
	<?php 
	$uname=$phone=$address=$name=$price="";
	require('../controller/showfoodcheck.php');?>
 <form action="" method="POST">
<div>
<div style="width: 200px;height: 100px;">
	
	<tr>
		
		<td><img width="100px" src="../uploads/<?php echo $image;?>"></td><br><br>
		<td><b>Food Name:</b> <?php echo $name; ?>
                        <input type="hidden" name="name" value="<?php echo $name; ?>">
</td><br><br>
		<td><b>Price:</b> <?php echo $price; ?>
                        <input type="hidden" name="price" value="<?php echo $price; ?>"></td><br><br>
		<b>Quantity:</b><input type="number" name="qty" class="input-responsive" value="1" required>
                        
                    
		
	</tr>
	
		</div><br><br><br><br><br><br><br><br><br><br><br>
		 <fieldset style="display: none;">
                    <legend>Delivery Details</legend>
                  
                    <input type="hidden" name="uname" value="<?php echo $uname?>"><br><br>

                    <input type="hidden" name="phone" value="<?php echo $phone?>"><br><br>

                    
                    
                    <input  type="hidden" name="address" value="<?php echo $address?>" rows="5"><br><br>
</fieldset>
                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                
                   
		
		
		

            

   </div>         

 </form>
	


</body>
</html>
<?php require("foot.php"); ?>