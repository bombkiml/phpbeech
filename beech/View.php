<?php 

class View {
	
    public function error($src){ // for system only. This function pointer view to leaves/error path.
        $this->path = $src;
        require('leaves/'.$src.EXT);    
    }
    
    private function view_error($src, $from=null){ // for class view only
        $this->title = 'View not found !';
        $this->path = $src;
        $this->from = $from;
        require('leaves/error/view_error'.EXT);
        exit;
    }
    
	public function render($src){
        $file = PATH_V.$src.EXT;
        if(!file_exists($file)){
            $this->view_error($src, 'render');
        }
        require $file;
	}
    
	
	public function template($src){
        $file = PATH_V . $src . EXT;
        if(!file_exists($file)){
            $this->view_error($src, 'template');
        }
		require PATH_V . 'layouts/header.php';
		require $file;
		require PATH_V . 'layouts/footer.php';
	}
    
}