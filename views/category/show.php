<?php
include('hearder.php');
?>
<div style="background-color: #a6e1ec;">
	<ul class="breadcrumb">
		<li><a href="#" onclick=" window.history.back();">Home</a></li>
		<li><a href="#" onclick=" window.history.go(0);">Products</a></li>
	</ul>
</div>


<?php
if (isset($row))
{
foreach ($row as $val) {
?>
<div class="container">
	<div class="banner-bottom-top">
		<div class="col-md-6 banner-bottom-left" style="text-align: left;">
			<div class="bnr-one">
				<div class="bnr-left">

					<h3><a href="<?php echo url; ?>detail/<?php echo $val['product_id']; ?>"><?php echo $val['product_name']; ?></a></h3>

					<h3>Price:<a><?php echo $val['price']; ?>.Rs</a></h3>

					<h3><a><?php echo $val['description']; ?></a></h3>

					<div class="b-btn">
						<a href="<?php echo url; ?>detail/<?php echo $val['product_id']; ?>">SHOP NOW</a>
					</div>
				</div>

				<div class="bnr-right">


					<img src=" <?php echo url1; ?>images/img/<?php echo $val['product_image']; ?>" style="height: 200px; width: auto;"/>
				</div>

				<?php  }}?>

				<div class="clearfix"></div>
			</div>
		</div>


		<div class="clearfix"></div>
	</div>

</div>


</body>
</html>