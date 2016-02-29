<?php include("hearder.php"); ?>
				<div style="background-color: #a6e1ec;">
						<ul class="breadcrumb">
							<li><a href="#" onclick=" window.history.back();">Back</a></li>
							<li><a href="#"  onclick=" window.history.go(0);">Search Result</a></li>

						</ul>
					</div>
			<?php
			if($row=="")
			{
				echo "no data found";
			}
			else{
			foreach ($row as  $val) {


					?>
					<div class="">

						<div class="container">
							<div class="banner-bottom-top">
								<div class="col-md-6 banner-bottom-left">
									<div class="bnr-one">
										<div class="bnr-left" style="text-align: left;">

											<h1><a href="<?php echo url; ?>detail/<?php echo $val['product_id']; ?>"><?php echo $val['product_name']; ?></a></h1>
											<h3>Price:<?php echo $val['price']; ?>.Rs</h3>
											<h3><?php echo $val['description']; ?></h3>

											<div class="b-btn">
												<a href="<?php echo url; ?>detail/<?php echo $val['product_id']; ?>">SHOP NOW</a>
											</div>
										</div>

										<div class="bnr-right">
											<img src=" <?php echo url1; ?>images/img/<?php echo $val['product_image'];?>"style="height: 200px; width: auto;"/>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>

								<?php }} ?>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
			</div>






</body>
</html>