<?php
include_once('connection.php'); 
$query="select * from tbl_order"; 
$result=mysqli_query($conn,$query); 
$total=mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html> 
	<head> 
		<title> Orders in process </title> 
	</head> 
	<body> 
	<table align="center" border="1px" style="width:1200px; line-height:40px;"> 
	<tr> 
		<th colspan="8"><h2>Order Management<?php echo ("($total)") ?></h2></th> 
		</tr> 
			  <th> SL </th> 
			  <th> Food </th> 
			  <th> Price </th> 
			  <th> Quantity </th> 
			  <th> Customer Name </th> 
			  <th> contact </th> 
			  <th> Address </th> 
			  <th> order status </th> 
			  
		</tr> 
		
		<?php $n=1;while($rows= mysqli_fetch_assoc($result)) 
		{
		?> 
		<tr> <td><?php echo "$n"; ?></td> 
		<td><?php echo $rows['food']; ?></td> 
		<td><?php echo $rows['price']; ?></td> 
		<td><?php echo $rows['qty']; ?></td> 
		<td><?php echo $rows['customer_name']; ?></td> 
		<td><?php echo $rows['customer_contact']; ?></td> 
		<td><?php echo $rows['customer_address']; ?></td> 
		<td>
			 <select name="order status"class="form-control" required>
                        <option value="admin"class="form-control">delivered</option>
                        <option value="user"class="form-control">processing</option>
                        <option value="user"class="form-control">cancel</option>
                    </select>
		</td> 
		</tr> 
	<?php 
              $n++; }
          ?>

	</table> 
	</body> 
	</html>
?>