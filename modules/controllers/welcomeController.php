<?php

class WelcomeController extends Controller {

    public function __construct() {
      parent::__construct();
    }
    
    public function index() {
      $this->view->title = 'Welcome to Beech Framework';
      $this->view->js = ["welcome/js/welcome.js"];
      $this->view->css = ["welcome/css/welcome.css"];
      $this->view->template('welcome/welcome_page');
    }
    
    public function hello() {
		$this->view->title = 'Hello everyone';
		
		/**
		 * call view->template function, It'll automatic load view header & footer
         * you can get file in path view/layouts/header.php & footer.php
         *
		 */
		$this->view->render('welcome/hello_page');
	}


}