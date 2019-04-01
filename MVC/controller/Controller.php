<?php
include_once("MVC/model/Model.php");
include_once("MVC/view/View.php");

  class Controller{
    public $model, $view;
    
    public function __construct(){
        $this->view = new View();
        $this->model = new Model();
    }

    function runApp(){
      $this->view->initHeaderLocation("outindex");
      $this->model->checkDBConnection();
    }
  };
?>