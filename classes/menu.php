<?php
class menu extends BaseController
{
	public $categories = array();
	public function __construct()
	{

	}
	public function menu_recursion($parent_id = 0)
	{
		$db     = new Database();
		$result = $db->select("category", array('parent_id' => $parent_id));
		if ($result != NULL) {
			foreach ($result as $mainCategory) {
				$category                                 = array();
				$category['category_id']                  = $mainCategory['category_id'];
				$category['category_name']                = $mainCategory['category_name'];
				$category['parent_id']                    = $mainCategory['parent_id'];
				$category['sub_categories']               = $this->menu_recursion($category['category_id']);
				$categories[$mainCategory['category_id']] = $category;
			}
		}
		return $categories;
	}

	public function menuList()
	{
		$cat = $this->menu_recursion();
		return $cat;
		//$this->ReturnView($cat, false, "", '');
	}
}