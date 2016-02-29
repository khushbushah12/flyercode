ffjfjyfy

<?php include("header.php"); ?>

<center><h1 style="background-color: #008CB7;">Step:2 Customer Details</h1></center>


<form action="<?php echo url1 ?>addcart/customerInfo" method="post">
<center>	<fieldset class="form-group">
		<input type="text" required class="form-control" style="width: 500px;" name="fname" id="exampleInputEmail1" placeholder="Enter first Name">

	</fieldset>
	<fieldset class="form-group">

		<input type="text" required class="form-control" style="width: 500px;" name="lname" id="exampleInputEmail1" placeholder="Enter last Name">
	</fieldset>
	<fieldset class="form-group">

		<input type="email" required class="form-control" style="width: 500px;" name="email" id="exampleInputEmail1" placeholder="Enter emailId">
	</fieldset>


	<fieldset class="form-group">
		<input type="text" required class="form-control" style="width: 500px;" name="phoneno" id="exampleInputEmail1" placeholder="Enter Phone number">
	</fieldset>
</center>
	<center><h1 style="background-color: #008CB7;">Address Details</h1></center>


	<fieldset class="bnr-left">
		<h1>shipping Address</h1>
		<br><br>
		<fieldset class="form-group">

			<input type="text" required class="form-control" style="width: 500px;" id="address1"name="add1" id="exampleInputEmail1" placeholder="Address Line 1"><br>
			<input type="text" required class="form-control" style="width: 500px;" id="address2" name="add2" id="exampleInputEmail1" placeholder="Address Line 2">
		</fieldset>
		<fieldset class="form-group">

			<select name="city" style="width: 250px;" id="city"class="form-control">
				<option value="0">select city</option>
				<option value="ahmedabad">Ahmedabad</option>
				<option value="mumbai">mumbail</option>
			</select>
		</fieldset>

		<fieldset class="form-group">

			<select class="form-control" name="state" id="state" style="width: 250px;">
				<option value="0">select state</option>
				<option value="gujrat">gujrat</option>
				<option value="">maharatra</option>
			</select>
		</fieldset>

		<fieldset class="form-group">

			<input type="text" required class="form-control" id="zipcode" style="width: 500px;" name="zipcode" id="exampleInputEmail1" placeholder="Enter Zip Code">
		</fieldset>

	</fieldset>

	<h2>BILLING ADDRESS</h2>
	<input type="checkbox" id="info" name="billing">Same as shipping Address

	<fieldset class="bnr-right" style="margin-bottom: 120px;">
		<fieldset class="form-group">

			<input type="text" id="b_address1" name="badd1" required class="form-control"  style="width: 500px;" name="add1" id="exampleInputEmail1" placeholder="Address Line 1"><br>
			<input type="text" id="b_address2" name="badd2" required class="form-control" style="width: 500px;" name="add2" id="exampleInputEmail1" placeholder="Address Line 2">
		</fieldset>
		<fieldset class="form-group">

			<select  style="width: 250px;" name="bcity" class="form-control" id="b_city">
				<option value="0">select city</option>
				<option value="ahmedabad">Ahmedabad</option>
				<option value="mumbai">mumbail</option>
			</select>
		</fieldset>

		<fieldset   class="form-group">

			<select class="form-control"  name="bstate" style="width: 250px;"  id="b_state">
				<option value="0">select state</option>
				<option value="gujrat">gujrat</option>
				<option value="">maharatra</option>
			</select>
		</fieldset>

		<fieldset class="form-group">

			<input type="text" id="b_zipcode" name="bzipcode" required class="form-control" style="width: 500px;" name="zipcode" id="exampleInputEmail1" placeholder="Enter Zip Code">
		</fieldset>

		<a style="align: right; width: 200px;" class="btn btn-success" href="<?php echo url1 ?>addcart/viewcart">
			<i class="icon-shopping-cart icon-white"></i>
			Back to cart
		</a>
		<input type="submit" value="Conform Order" style="align: right; width: 200px; margin-right: 300px;" class="btn btn-success">

</form>
</fieldset>
</form>
<script>
	$('#info').change(function(){
		if($(this).is(":checked")){
			$('#b_address1').val($('#address1').val());
			$('#b_address2').val($('#address2').val());
			$('#b_state').val($('#state').val());
			$('#b_city').val($('#city').val());
			$('#b_zipcode').val($('#zipcode').val());
			$('#b_address1').attr('readonly', true);
			$('#b_address2').attr('readonly', true);
			$('#b_city').attr('readonly', true);
			$('#b_state').attr('readonly', true);
			$('#b_zipcode').attr('readonly', true);
		}
	})
</script>