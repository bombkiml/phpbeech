<?php

class WelcomeController extends Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index() {
    $this->view->title = 'Welcome to Beech Framework';
    $this->view->js = ["welcome/js/welcome.js"];
    $this->view->css = ["welcome/css/welcome.css"];

    // Call view->template function, It'll automatic load view header & footer in `view/layouts/` folder
    // Template optional specifies what type of array that should be produced. Can be one of the following values:
    // - FRONTNED (this is default)
    // - BACKNED
    return $this->view->template('welcome/welcome.view', FRONTEND);
  }

  public function hello() {
    // Title page name
    $this->view->title = 'Hello';    
    // Return render to view
    return $this->view->render('welcome/hello.view');
  }

  public function sum($num1 = 0, $num2 = 0) {
    // declare num1 & num2 and send to view
    $this->view->num1 = $num1;
    $this->view->num2 = $num2;
    // calculate sum 2 number
    $this->view->result = $num1 + $num2;
    // Return render to view
    return $this->view->render('welcome/sum.view');
  }

  public function xx() {
    $this->model->get();

  }
}
