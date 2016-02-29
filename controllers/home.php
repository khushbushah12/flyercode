<?php
class Home extends BaseController {
    protected function Index() {
            $menu=new menu();
            $category=$menu->menuList();
            $this->ReturnView("", true,"",$category);


    }
}
?>