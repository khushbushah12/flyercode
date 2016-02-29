<?php

class category extends BaseController
{

	public function sublist()
	{
		$db = new Database();
		//$row = $db->select("category" , array(parent_id => 0));


		$row = $db->select("category", array(parent_id => $_GET['id']));
		if ($row) {

			$this->ReturnView("", false, $row);
		} else {
			$this->ReturnView("", false, "", "");
		}

	}


	public function show()
	{

		$db       = new Database();
		$menu     = new menu();
		$category = $menu->menuList();

		$row = $db->select("product", array(category_id => $_GET['id']));

		if ($row || $category) {

			$this->ReturnView("", false, $row, $category);

		} else {
			$this->ReturnView("", false);
		}

	}

	public function search()
	{

		$menu     = new menu();
		$category = $menu->menuList();
		$ser = new Database();



		if (($_GET['product_name']) != "")
		{

			$row = $ser->search('category',$_GET['product_name']);
			$this->ReturnView("", false, $row, $category);

		}
		else{
			$row = "";
			$this->ReturnView("", false, $row, $category);
		}

		// print_r($result);
	}

	public function detail()
	{

		$db       = new Database();
		$menu     = new menu();
		$category = $menu->menuList();
		$row      = $db->select("product", array(product_id => $_GET['id']));
		$img      = $db->select("images", array(product_id => $_GET['id']));
		//$row = $db->select("category" , array(parent_id => 0));
		if ($row || $category || $img) {

			$this->ReturnView("", false, $row, $category, $img);

		} else {
			$this->ReturnView("", false);
		}

	}



}