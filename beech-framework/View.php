<?php 

class View {

	 // for system only. This function pointer view to .\error path.
    public function error($src) {
        $this->path = $src;
        require($src.EXT);    
    }

    // for class view only
    private function view_error($src, $from = NULL) { 
        $this->title = 'View not found !';
        $this->path = $src;
        $this->from = $from;
        require('error/view_error'.EXT);
        exit;
    }
    
	public function render($src) {
        $file = PATH_V.$src.EXT;
        if (!file_exists($file)) {
            $this->view_error($src, 'render');
        }
        require $file;
	}
    
	public function template($src) {
        $file = PATH_V . $src . EXT;
        if (!file_exists($file)) {
            $this->view_error($src, 'template');
        }
		require PATH_V . 'layouts/header.php';
		require $file;
		require PATH_V . 'layouts/footer.php';
	}
    
    // You can make another template method **exam. template1, template2, template3, ...
    
}