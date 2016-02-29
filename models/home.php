<?php
class HomeModel {
    public function Index() {
        $db = new Database();
        $row = $db->select("Category_list" , array(parent_id => 0));

        if ($row) {
            $viewmodel = "Just a basic string";
            $this->ReturnView($viewmodel, true,$row);

        } else {
            $this->ReturnView("", false);
        }

    }
}
?>