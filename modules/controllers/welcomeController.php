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
    $this->view->template('welcome/welcome.view', FRONTEND);
  }

  public function hello() {
    $this->view->title = 'Hello';
    $this->view->render('welcome/hello.view');
  }
}
