<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add Cart</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>


	<link href="<?php echo url1?>css/vendor/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo url1?>css/vendor/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	<link href="<?php echo url1?>css/jquery.bdt.css" type="text/css" rel="stylesheet">
	<link href="<?php echo url1?>css/style.css" type="text/css" rel="stylesheet">

	<script src="http://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
	<script src="<?php echo url1?>js/vendor/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo url1?>js/vendor/jquery.sortelements.js" type="text/javascript"></script>
	<script src="<?php echo url1?>js/jquery.bdt.js" type="text/javascript"></script>
	<script>
		$(document).ready( function () {
			$('#bootstrap-table').bdt();
		});
	</script>

	<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>

	<link rel="stylesheet" href="<?php echo url1?>css/style.css">
	<link rel="stylesheet" href="<?php echo url1?>css/form_style.css">



	<link rel="stylesheet" href="<?php echo url1?>/css/bootstrap.css">

	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

</head>
<body>
<br>
<center><div>
	<a href="index.html"><img src="<?php echo url1; ?>images/img/logomain.png" alt=""/></a>
</div></center>

<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">Shopping Site</a>
		</div>
		<ul class="nav navbar-nav">
			<li class="active"><a href="<?php echo url1?>index.php">Home</a></li>

			<?php foreach ($category as $val)
			  {  ?>
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


