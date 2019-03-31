<?php
include_once("MVC/model/Model.php");
include_once("MVC/view/View.php");

  class Controller{
    public $model, $view;
    
    public function __construct(){
        $this->model = new Model();
        $this->view = new View();
    }

    function runApp(){
        $this->model->startAppSession();
        $this->view->initHeaderLocation("outindex");
    }
  };

?>