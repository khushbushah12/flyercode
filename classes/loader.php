<?php
class Loader {
    private $controller;
    private $action;
    private $urlvalues;

    //store the URL values on object creation
    public function __construct($urlvalues) {
        $this->urlvalues = $urlvalues;

        if ($this->urlvalues['controller'] == "") {
            $this->controller = "home";
        } else {
            $this->controller = $this->urlvalues['controller'];
        }
        if ($this->urlvalues['action'] == "") {
            $this->action = "index";
        } else {
            $this->action = $this->urlvalues['action'];

        }
    }

    //establish the requested controller as an object
    public function CreateController() {
        //does the class exist?

        if (class_exists($this->controller)) {
            $parents = class_parents($this->controller);
            //does the class extend the controller class?

            if (in_array("BaseController",$parents)) {
                //does the class contain the requested method?
                if (method_exists($this->controller,$this->action)) {

                    return new $this->controller($this->action,$this->urlvalues);
                } else {
                    //bad method error
                    return "error";
                }
            } else {
                //bad controller error
                return "error";
            }
        } else {
            //bad controller error
            return "error";
        }
    }
}

?>