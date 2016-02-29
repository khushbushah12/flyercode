
			<?php
			include('hearder.php');
			?>
			<div style="background-color: #a6e1ec;">
			<ul class="breadcrumb">
				<li><a href="#" onclick=" window.history.back();">Home</a></li>
				<li><a href="#"  onclick=" window.history.go(0);">subcategory</a></li>

			</ul>
				</div>

<?php
			foreach ($row as $val) {

			?>
			<div style="color:grey;">

				<div class="container">
					<div class="banner-bottom-top">
						<div class="col-md-6 banner-bottom-left">
							<div class="bnr-one">
								<div class="bnr-right">

									<h1><a href="<?php echo url; ?>show/<?php echo $val['category_id']; ?>"><?php echo $val['category_name']; ?></a></h1>

									<div class="b-btn">
										<a href="<?php echo url; ?>show/<?php echo $val['category_id'] ?>">SHOP NOW</a>

									</div>
								</div>
								<div class="bnr-right">
									<img src="<?php echo url1; ?>images/img/<?php echo $val['cat_image']; ?>"style="height: 200px; width: auto;"/>
								</div>

							</div>

							<?php } ?>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>


		</div>


</body>
</html>
