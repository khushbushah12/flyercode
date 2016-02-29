
<?php include('header.php'); ?>

<div class="container">
	<center style="text-align: right;"> <a class="btn btn-success" href="<?php echo url1 ?>addcart/emptyAll">
			<i class="icon-shopping-cart icon-white"></i>
			empty cart
		</a></center>
	<div class="row">

		<div class="box clearfix">
			<h3>step:1 Add to Cart</h3>

			<table class="table table-hover" class="bootstrap-table">
				<thead>
				<tr>
					<th>Product</th>
					<th>Product Name</th>
					<th>Quantity</th>
					<th>price</th>
					<th>subTotal</th>
					<th colspan="2"> Action </th>
				</tr>
				</thead>
				<tbody>

			<?php 	$total = 0;
			if(!empty($_SESSION['cart']) ){
			foreach($_SESSION['cart'] as $val) {
			?>
				<tr>
					<form method="post" action="<?php echo url1 ?>addcart/updateQty">
					<td><img src="<?php echo url1?>images/img/<?php echo $val['image'];?>" style="height: 100px; width: 100px;"></td>
					<td><?php echo $val['product_name'];?></td>
					<td><input type="hidden" name="pid" value="<?php echo $val['product_id']?>"><input type="number" min="1"  max="5" name="qty" id="qty" style="width: 40px;" value="<?php echo $val['Quantity'];?>"></td>

					<td><?php echo '&#x20B9;'. $val['price'];?></td>
					<td id="sub_total">&#x20B9;<?php $subtotal= $val['price'] * $val['Quantity'];
						echo $subtotal;?></td>
					<td><a href="<?php echo url1 ?>addcart/remove/<?php echo $val['product_id'];?>">Remove</a></td>
					<td><button type="submit" name="update" >update</button></td>
					</form>

				</tr>
				<?php
				if(isset($_POST['update']))
				{
					echo '<script>alert("Quantity updated ")</script>';
				}
				$total+=$val['price'] * $val['Quantity'];?>
				<?php }} ?>
			<tr><td colspan="4"><h4>Choose Shipping Method</h4></td>
				<td>
					<form method="post" action="<?php echo url1 ?>addcart/checkout">
					<select name="shipping_type" required onchange="calc(this.value)">
						<option value="0">select shippping method</option>
						<option value="500">Fast</option>
						<option value="300">slow</option>
					</select>
					<input type="hidden" name="final_total" value="" id="finalTotal">
				</td>
			</tr>
			<tr><td colspan="4"><h4>Sub total:</h4></td>
				<td >&#x20B9;<?php echo $total ?></td>

			</tr>
			<tr><td colspan="4"><h4>Shipping charge:</h4></td>
				<td name="charge" id="shippingCharge">&#43; &#x20B9;0</td>

			</tr>
				<tr><td colspan="4"><h4>Grand total:</h4></td>
					<td id="final_total" name="final_total">&#x20B9;<?php echo $total ?></td>
				</tr>
				</tbody>
			</table>
			 <a  style="align: right; width: 200px;" class="btn btn-success" href="<?php echo url1 ?>">
					<i class="icon-shopping-cart icon-white"></i>
				 Countinue Shopping
				</a>

					<input style="align: right; width: 200px;" class="btn btn-success" type="submit" name="submit" value="checkout"><!-- <i class="icon-shopping-cart icon-white"></i>
					CheckOut-->

			</form>
		</div>
	</div>
</div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
<script>
	function calc(shipping)
	{

		var tax=parseInt(shipping);
		var total=parseInt(<?php echo $total;?>);
		var final_total=tax+total;

		$("#final_total").html(final_total);
		$("#finalTotal").val(final_total);
		$("#shippingCharge").html(tax);

	}
</script>
</form>
</body>
</html>