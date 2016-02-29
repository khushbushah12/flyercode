
<!DOCTYPE html>
<html>
<head>
	<title>Free Style A Ecommerce Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
	<link href="<?php echo url1; ?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="<?php echo url1; ?>js/jquery-1.11.0.min.js"></script>
	<!-- Custom Theme files -->
	<!--theme-style-->
	<link href="<?php echo url1; ?>css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="<?php echo url1; ?>css/component.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="<?php echo url1; ?>css/flexslider.css" rel="stylesheet" type="text/css" media="all"/>
	<!--//theme-style-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="keywords" content="Free Style Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"/>
	<script type="application/x-javascript"> addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);
		function hideURLbar() {
			window.scrollTo(0, 1);
		} </script>
	<!--fonts-->
	<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,300,400,500,700,800,900,100italic,300italic,400italic,500italic,700italic,800italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<!--//fonts-->
	<script type="text/javascript" src="<?php echo url1; ?>js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo url1; ?>js/easing.js"></script>
	<script type="text/javascript" src="<?php echo url1; ?>js/imagezoom.js"></script>
	<script type="text/javascript" src="<?php echo url1; ?>js/jquery.flexisel.js"></script>
	<script type="text/javascript" src="<?php echo url1; ?>js/jquery.flexslider.js"></script>
	<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
			});
		});
	</script>
	<!-- CSS files -->
	<style>
		td,th
		{
			height: 50px;
			vertical-align: center;
			padding-left:20px;
		}
	</style>

	<!-- Js Files -->

	<!-- start menu -->
	<script src="<?php echo url1; ?>js/simpleCart.min.js"></script>
	<link href="<?php echo url1; ?>css/memenu.css" rel="stylesheet" type="text/css" media="all"/>



	<script type="text/javascript" src="<?php echo url1; ?>js/memenu.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {

			$(".memenu").memenu();

		});
	</script>

</head>
<body>


<div class="top-header">

	<div class="container">
		<div class="top-header-main">
			<div class="col-md-4 top-header-left">
				<div class="search-bar">
					<form action="<?php echo url1; ?>search" method="get">
						<input type="text" id="search" name="product_name"  />
						<input type="submit"  id="button" onclick="if($('#search').val()==null{alert('please enter name');})" value="Search"  />                        <div id="result"></div>
					</form>
				</div>
			</div>
			<div class="col-md-4 top-header-middle">
				<a href="index.html"><img src="<?php echo url1; ?>images/img/logomain.png" alt=""/></a>
			</div>

		</div>
		<center style="text-align: right;"> <a class="btn btn-success" href="<?php echo url1 ?>addcart/viewcart">
				<i class="icon-shopping-cart icon-white"></i>
				Cart list
			</a></center>
	</div>
	<!--top-header-->
	<!--bottom-header-->

				<nav class="navbar navbar-inverse">
					<div class="container-fluid">
						<div class="navbar-header">
							<a class="navbar-brand" href="#">Shopping Site</a>
						</div>
						<ul class="nav navbar-nav">
							<li class="active"><a href="<?php echo url1?>index.php">Home</a></li>

								<?php foreach ($category as $val)
								{?>
									<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo url?>sublist/<?php echo $sub_cat['category_id'];?>""><?php echo $val['category_name']; ?>
									<span class="caret"></span></a>

									<ul class="dropdown-menu">
										<?php if(isset($val['sub_categories']))
										{
										foreach($val['sub_categories'] as $sub_cat)
										{
										?>
										<li><a href="<?php echo url?>show/<?php echo $sub_cat['category_id']; ?>"><?php echo $sub_cat['category_name']; ?></a></li>
										<?php }}?>

									</ul>


							</li>
							<?php
							} ?>
						</ul>
					</div>
				</nav>


