<?php

class addcart extends BaseController
{
	public function find($id)
	{
		foreach($_SESSION['cart'] as $c){
			$i=0;
			if (in_array($id, $c)) {

				return $i;
			}
			$i++;
		}
		return -1;
	}
	public function view()
	{
		$db = new Database();

		$key=$this->find($_GET['id']);
		if ($key>=0) {

			$_SESSION['cart'][$key]['Quantity']=$_SESSION['cart'][$key]['Quantity']+$_POST['Quantity'];
		//	$_SESSION['cart'][$key]['price']=$_SESSION['cart'][$key]['Quantity']*$_SESSION['cart'][$key]['price'];
			header("location:" . url1 . "addcart/viewcart");
		}
		else {
			$row1               = $db->select("product", array(product_id => $_GET['id']));
			$img                = $db->select("images", array(product_id => $_GET['id']));
			$cart               = array(
				'product_id'   => $row1['product_id'],
				'product_name' => $row1['product_name'],
				'Quantity'     => $_POST['Quantity'],
				'price'        => $row1['price'],
				'image'        => $img['image'],
				'total'        =>$_POST['Quantity'] * $row1['price'],
			);
			$_SESSION['cart'][] = $cart;
			header("location:" . url1 . "addcart/viewcart");

		}
	}
	public function viewcart()
	{
		$menu     = new menu();
		$category = $menu->menuList();
		if(!empty($_SESSION['cart'])){
			$this->ReturnView("", false,"",$category,"");
		}
		else{
			header("location:" . url1);
		}

	}


	public function remove()
	{
		$pid= $_GET['id'];
		$_SESSION['cart'] = array_values($_SESSION['cart']);
		$id=intval($pid);
		$max = count($_SESSION['cart']);
		for ($i = 0; $i <= $max; $i++) {
			if ($id == $_SESSION['cart'][$i]['product_id']) {
				unset($_SESSION['cart'][$i]);
				header("location:".url1."addcart/viewcart");
			}
		}
	}

	public function emptyAll()
	{
		session_destroy();
		header("location:" . url1 );
	}

	public function checkout()
	{
		$menu     = new menu();
		$category = $menu->menuList();
		$data = array(
				'shippingtype' => 	$_POST['shipping_type'],
			'finalprice' =>  $_POST['final_total'],
		);
		$_SESSION['price'] = $data;
		$this->ReturnView("", false,"",$category,"");
	}

	public function update()
	{
		$id = $_POST['product_id'];


		$qt = $_POST['qty'];

		for($i=0;$i<count($_SESSION['cart']);$i++)
		{

			if($_SESSION['cart'][$i]['product_id']==$id)
			{
				$_SESSION['cart'][$i]['Quantity']=$qt;

				break;
			}
		}

		header("location:" . url1 . "addcart/viewcart");

	}


	public function customerInfo()
	{
		$db = new Database();

		$data               = array(
			'firstname'   => $_POST['fname'],
			'lastname' =>  $_POST['lname'],
			'add1'     =>$_POST['add1'],
			'add2'        => $_POST['add2'],
			'city'        => $_POST['city'],
			'state'        =>$_POST['state'],
			'zipcode'        =>$_POST['zipcode'],
			'mbno'  =>$_POST['phoneno'],
			'email' => $_POST['email'],
			'badd1'     =>$_POST['badd1'],
			'badd2'        => $_POST['badd2'],
			'bcity'        => $_POST['bcity'],
			'bstate'        =>$_POST['bstate'],
			'bzipcode'        =>$_POST['bzipcode'],
		);
		$_SESSION['data'] = $data;
		if($_SESSION['data'])
		{
			$menu     = new menu();
			$category = $menu->menuList();

			$this->ReturnView("", false,"",$category,"");

		}

	}

	public function conformorder()
	{

		$db = new Database();
		$cid = $db->insert("customer_detail", array(firstname => $_SESSION['data']['firstname'], lastname => $_SESSION['data']['lastname'] , mobileno => $_SESSION['data']['mbno'],	email_id => $_SESSION['data']['email']));
		$insertaddress = $db->insert("customer_address", array(address1 => $_SESSION['data']['add1'],address2 => $_SESSION['data']['add2'],city => $_SESSION['data']['city'],state => $_SESSION['data']['state'],zipcode => $_SESSION['data']['zipcode'], customer_id => $cid, is_shipping => 1));
		$billingaddress = $db->insert("customer_address", array(address1 => $_SESSION['data']['badd1'],address2 => $_SESSION['data']['badd2'],city => $_SESSION['data']['bcity'],state => $_SESSION['data']['bstate'],zipcode => $_SESSION['data']['bzipcode'], customer_id => $cid, is_billing => 1));
		$orderid = $db->insert("orderplaced", array(customer_id => $cid));
		foreach($_SESSION['cart'] as $val)
		{
			$order_productid = $db->insert("order_product", array(order_id => $orderid, product_id => $val['product_id'] ,quantity => $val['Quantity'], price => $val['price'] ));
		}

		$order_productid = $db->insert("invoice", array(order_id => $orderid, price => $_SESSION['price']['finalprice'], address_id => $billingaddress  ));
		$menu     = new menu();
		$category = $menu->menuList();
		if($order_productid)
		{
			$row = $order_productid;
			$this->ReturnView("", false,$row,$category,"");
		}

	}

	public function home()
	{
		session_destroy();
		header("location:".url1);
	}

	public function updateQty()
	{
		 $product_id=$_POST['pid'];
		 $qty=$_POST['qty'];
		//var_dump($_POST);

		$cnt=-1;
		foreach ($_SESSION['cart'] as $val) {
			$cnt++;
			if($val['product_id']==$product_id)
			{
				$flg=$cnt;

			}

		}

		$_SESSION['cart'][$flg]['Quantity']=$qty;

	//	echo '<script>alert("Data Updated Successfully!!!!");</script>';
		header("location:" . url1 . "addcart/viewcart");
	}

}