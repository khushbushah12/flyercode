<?php include("header.php");?>
<h3>step3: Checkout detail</h3>
<form method="post" action="<?php echo url1;?>addcart/conformorder">
<div class="container">

	<div class="row">
		<div class="box clearfix">
			<center><h1 style="background-color: #008CB7;">Cart Items</h1></center>

			<table class="table table-hover" id="bootstrap-table">
				<thead>
				<tr>
					<th>Product</th>
					<th>Product Name</th>
					<th>Quantity</th>
					<th>price</th>
					<th>subTotal</th>
				</tr>
				</thead>
				<tbody>
				<?php 	$total = 0;
				if(!empty($_SESSION['cart']) ){
					foreach($_SESSION['cart'] as $val) {
						?>
						<tr>
							<td><img src="<?php echo url1?>images/img/<?php echo $val['image'];?>" style="height: 100px; width: 100px;"></td>
							<input type="hidden" name="productid" value="<?php echo $val['product_id'];;?>"><td><?php echo $val['product_name'];?></td></input>
							<td><input type="number" name="qty" style="width: 40px;" readonly value="<?php echo $val['Quantity'];?>" onchange="update_cart(this.value,<?php echo $val['product_id'];?>)"</td>
							<td>&#x20B9;<?php echo $val['price'];?></td>
						   <input type="hidden" name="subtotal" value="&#x20B9;<?php echo $subtotal;?>"><td id="sub_total"><?php $subtotal= $val['price'] * $val['Quantity'];
								echo $subtotal;?></td></input>



						</tr>
						<?php

						$total+=$val['price'] * $val['Quantity'];?>
					<?php }} ?>
				<tr><td><center><h1 style="background-color: #008CB7;">Payment Details</h1></center></td></tr>
				<tr><td colspan="4"><h4>Sub total:</h4></td>
					<td>&#x20B9;<?php echo $total ?></td>

				</tr>
				<tr><td colspan="4"><h4>Shipping charge:</h4></td>
					<td name="charge" id="shippingCharge">&#43; &#x20B9;<?php echo $_SESSION['price']['shippingtype'];?></td>

				</tr>
				<tr><td colspan="4"><h4>Grand total:</h4></td>
					<td id="final_total" name="final_total">&#x20B9;<?php echo $_SESSION['price']['finalprice'];?></td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>
<center>

<table class="table table-hover" id="bootstrap-table" style="width: 700px;">
<thead><center><h1 style="background-color: #008CB7;">Customer Details</h1></center></thead>
	<from
	<?php
			if(!empty($_SESSION['data']) ){
?>
				<tr>
					<td>First name</td>
					<td><?php echo $_SESSION['data']['firstname'];?></td></tr>
				<tr>
					<td>Last name</td>
					<td><?php echo $_SESSION['data']['lastname'];?></td></tr>
					<tr>
					<td>Mobile No</td>
					<td><?php echo $_SESSION['data']['mbno'];?></td></tr>
				<tr>
				<tr>
					<td>Email-Id</td>
					<td><?php echo $_SESSION['data']['email'];?></td></tr>
				<tr>
					<tr><td><h1 style="background-color: #008CB7;">shipping Address</h1></td></tr>
				<tr>
					<td>Address1</td>
					<td><?php echo $_SESSION['data']['add1'];?></td></tr>
				<tr>
					<td>Address2</td>
					<td><?php echo $_SESSION['data']['add2'];?></td></tr>
				<tr>
					<td>city</td>
					<td><?php echo $_SESSION['data']['city'];?></td></tr>


					<td>state</td>
					<td><?php echo $_SESSION['data']['state'];?></td></tr>
				<tr>
					<td>Zipcode</td>
					<td><?php echo $_SESSION['data']['zipcode'];?></td></tr>
	<tr><td><h1 style="background-color: #008CB7;">billing Address</h1></td></tr>
	<tr>
		<td>Address1</td>
		<td><?php echo $_SESSION['data']['badd1'];?></td></tr>
	<tr>
		<td>Address2</td>
		<td><?php echo $_SESSION['data']['badd2'];?></td></tr>
	<tr>
		<td>city</td>
		<td><?php echo $_SESSION['data']['bcity'];?></td></tr>


	<td>state</td>
	<td><?php echo $_SESSION['data']['bstate'];?></td></tr>
	<tr>
		<td>Zipcode</td>
		<td><?php echo $_SESSION['data']['bzipcode'];?></td></tr>

</table>

		<?php } ?>
	<a  style="align: right; width: 200px;" class="btn btn-success" href="<?php echo url1 ?>addcart/checkout">
		<i class="icon-shopping-cart icon-white"></i>
		Back
	</a>
	<input style="align: center; width: 200px;" class="btn btn-success" type="submit" name="submit" value="Order Place">
</form>