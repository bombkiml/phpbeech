<?php 

class ExamController extends Controller {

	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		$this->view->title = '';
		$this->view->template('src/file');
		
		/**
		 * more method
         *
		 */
	}


}