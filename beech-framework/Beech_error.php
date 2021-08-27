<?php 

class Beech_error extends Controller {

	public function __construct() {
		parent::__construct();
	}
    
  function beech_error() {
    $this->view->title = 'Beech Error !';
    $this->view->_error('error/beech_error');
  }
  
  function class_error($class) {
    $this->view->title = 'Class not found !';
    $this->view->class = ucfirst($class);
    $this->view->file  = $class;
    $this->view->_error('error/class_error');
  }
  
  function method_error($class, $method, $param) {
    $this->view->title = 'Method not found !';
    $this->view->class = ucfirst($class);
    $this->view->method = $method;
    $this->view->param = $param;
    $this->view->_error('error/method_error');
  }

}
