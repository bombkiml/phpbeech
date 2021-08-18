<?php 

class System {
	
	private $_url = null;
	private $_crl = null;
	
	public function __construct() {
		$this->get_url();
		if (empty($this->_url[0])) {
			$this->default_crl();
		} else {
			$this->load_file();
			$this->call_method();
		}
	}
	
	private function get_url() {
    //echo "get dev: " . $_SERVER['argv'];

		@$url = $_SERVER['REQUEST_URI']; // == PJ_NAME . 'Controller') ? $_GET['url'] : $_SERVER['REQUEST_URI'];
		$url = trim($url, '/');
		$url =  explode('/', $url);
		$url[0] .= ($url[0]) ? 'Controller' : DEFAULT_CRL .'Controller';
		$this->_url = $url;
		
		/**
		 * @url[0] : class
		 * @url[1] : method
		 * @url[2] : params
		 * @url[3] : params
		 * ...
		 * 
		 */
	}
	
	private function load_file() {
		$file = PATH_C . $this->_url[0] . EXT;
		if (file_exists($file)) {
			require $file;
			$this->_crl = new $this->_url[0]();
			$this->_crl->load_model($this->_url[0]); // load model
		} else {
			$this->class_error($this->_url[0]);
		}
	}
	
	private function call_method() {
        $url_nums = count($this->_url);
        if ($url_nums > 12) {
           $this->beech_error();
        }
		switch ($url_nums) {
            case 12 : 
                method_exists($this->_crl, $this->_url[1])?
                    $this->_crl->{$this->_url[1]}($this->_url[2], $this->_url[3], $this->_url[4], $this->_url[5], $this->_url[6], $this->_url[7], $this->_url[8], $this->_url[9], $this->_url[10], $this->_url[11]):
                    $this->method_error($this->_url[0], $this->_url[1], array($this->_url[2], $this->_url[3], $this->_url[4], $this->_url[5], $this->_url[6], $this->_url[7], $this->_url[8], $this->_url[9], $this->_url[10], $this->_url[11]));
            break;
            case 11 : 
                method_exists($this->_crl, $this->_url[1])?
                    $this->_crl->{$this->_url[1]}($this->_url[2], $this->_url[3], $this->_url[4], $this->_url[5], $this->_url[6], $this->_url[7], $this->_url[8], $this->_url[9], $this->_url[10]):
                    $this->method_error($this->_url[0], $this->_url[1], array($this->_url[2], $this->_url[3], $this->_url[4], $this->_url[5], $this->_url[6], $this->_url[7], $this->_url[8], $this->_url[9], $this->_url[10]));
            break;
            case 10 : 
                method_exists($this->_crl, $this->_url[1])?
                    $this->_crl->{$this->_url[1]}($this->_url[2], $this->_url[3], $this->_url[4], $this->_url[5], $this->_url[6], $this->_url[7], $this->_url[8], $this->_url[9]):
                    $this->method_error($this->_url[0], $this->_url[1], array($this->_url[2], $this->_url[3], $this->_url[4], $this->_url[5], $this->_url[6], $this->_url[7], $this->_url[8], $this->_url[9]));
            break;
            case 9 : 
                method_exists($this->_crl, $this->_url[1])?
                    $this->_crl->{$this->_url[1]}($this->_url[2], $this->_url[3], $this->_url[4], $this->_url[5], $this->_url[6], $this->_url[7], $this->_url[8]):
                    $this->method_error($this->_url[0], $this->_url[1], array($this->_url[2], $this->_url[3], $this->_url[4], $this->_url[5], $this->_url[6], $this->_url[7], $this->_url[8]));
            break;
            case 8 : 
                method_exists($this->_crl, $this->_url[1])?
                    $this->_crl->{$this->_url[1]}($this->_url[2], $this->_url[3], $this->_url[4], $this->_url[5], $this->_url[6], $this->_url[7]):
                    $this->method_error($this->_url[0], $this->_url[1], array($this->_url[2], $this->_url[3], $this->_url[4], $this->_url[5], $this->_url[6], $this->_url[7]));
            break;
            case 7 : 
                method_exists($this->_crl, $this->_url[1])?
                    $this->_crl->{$this->_url[1]}($this->_url[2], $this->_url[3], $this->_url[4], $this->_url[5], $this->_url[6]):
                    $this->method_error($this->_url[0], $this->_url[1], array($this->_url[2], $this->_url[3], $this->_url[4], $this->_url[5], $this->_url[6]));
            break;
            case 6 : 
                method_exists($this->_crl, $this->_url[1])?
                    $this->_crl->{$this->_url[1]}($this->_url[2], $this->_url[3], $this->_url[4], $this->_url[5]):
                    $this->method_error($this->_url[0], $this->_url[1], array($this->_url[2], $this->_url[3], $this->_url[4], $this->_url[5]));
            break;
            case 5 : 
                method_exists($this->_crl, $this->_url[1])?
                    $this->_crl->{$this->_url[1]}($this->_url[2], $this->_url[3], $this->_url[4]):
                    $this->method_error($this->_url[0], $this->_url[1], array($this->_url[2], $this->_url[3], $this->_url[4]));                        
            break;
            case 4 : 
                method_exists($this->_crl, $this->_url[1])?
                    $this->_crl->{$this->_url[1]}($this->_url[2], $this->_url[3]):
                    $this->method_error($this->_url[0], $this->_url[1], array($this->_url[2], $this->_url[3]));
            break;
			case 3 :
				method_exists($this->_crl, $this->_url[1])?
                    $this->_crl->{$this->_url[1]}($this->_url[2]):
                    $this->method_error($this->_url[0], $this->_url[1], array($this->_url[2]));
			break;
			case 2 :
                // How to use function method_exists(obj_class, mehtod)
                method_exists($this->_crl, $this->_url[1])?
                    $this->_crl->{$this->_url[1]}():
                    $this->method_error($this->_url[0], $this->_url[1]);
			break;
			default :
				$this->_crl->index();
			break;		
		}
	}
	
	private function class_error($class=null) {
		require INC.'beech_error'.EXT;
		$this->_crl = new Beech_error();
		$this->_crl->class_error($class);
		exit;
	}
    
    private function method_error($class=null, $method=null, $param=array()) {
        require INC.'beech_error'.EXT;
		$this->_crl = new Beech_error();
		$this->_crl->method_error($class, $method, $param);
		exit;    
    }
    private function beech_error() {
        require INC.'beech_error'.EXT;
		$this->_crl = new Beech_error();
		$this->_crl->beech_error();
		exit;    
	}
	
}
