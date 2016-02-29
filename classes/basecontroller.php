<?php
abstract class BaseController {
    protected $urlvalues;
    protected $action;

    public function __construct($action, $urlvalues) {
        $this->action = $action;
        $this->urlvalues = $urlvalues;

    }

    public function ExecuteAction() {

        return $this->{$this->action}();
    }

    protected function ReturnView($viewmodel, $fullview,$row='',$category='',$img='') {

        $viewloc = 'views/' . get_class($this) . '/' . $this->action . '.php';
        if ($fullview) {
            require('views/home.php');
        } else {
        //echo $viewloc;
            require($viewloc);
        }
    }

}

?>