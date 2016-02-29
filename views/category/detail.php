<?php include('hearder.php');?>
<div style="background-color: #a6e1ec;">
	<ul class="breadcrumb">
		<li><a href="#" onclick=" window.history.go(-3);">Home</a></li>
		<li><a href="#" onclick=" window.history.go(-2);">subcategory</a></li>
		<li><a href="#"  onclick=" window.history.go(-1);">Products</a></li>
		<li><a href="#"  onclick=" window.history.go(0);">View Details</a></li>

	</ul>
</div>
<h1>Product Detail Page</h1>
<form method="post" action="<?php echo url1; ?>addcart/view/<?php echo $row['product_id']; ?>">
<div>

	<div >
		<div class="">
			<div class="">
				<div class="bnr-one">
					<div class="bnr-left" style="text-align: left;">

						<h4>Product Name:<?php echo $row['product_name']; ?></h4>

						<h4>Price:<?php echo $row['price']; ?>.Rs</h4>

						<h4>Description:<?php echo $row['description']; ?></h4>
						<h4>color:<?php echo $row['color']; ?></h4>
						<h4>status:<?php echo $row['status']; ?></h4>
						<h4>Quantity:<input type="number" min="1" max="5" name="Quantity" value="1"></h4>
						<center>	<div class="b-btn">
								<input type="submit" value="ADD TO CART">
							</div></center>
					</div>
					<div class="bnr-right">

						<img src=" <?php echo url1; ?>images/img/<?php echo $img['image']; ?>"style="height: 300px; width: auto;"/>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>


		</div>
</form>

		<div class="clearfix"></div>
	</div>
</div>


