<?php 

class Welcome extends Controller {

	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->view->title = 'Welcome to Beech Framework';
		$this->view->render('welcome/welcome_page');
	}
    
    public function hello(){
		$this->view->title = 'Hello everyone';
		
		/**
		 * call view->template function, It'll automatic load view header & footer
         * you can get file in path view/layouts/header.php & footer.php
         *
		 */
		$this->view->template('welcome/hello_page');
	}


}