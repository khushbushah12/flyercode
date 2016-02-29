<?php
abstract class BaseModel {
    protected $database;
    public function __construct() {
        $this->database = new PDO("mysql:host=192.168.100.230;dbname=khushbu_Ecommerce", "astserver", "123456");
        return $this->database;
    }
}
