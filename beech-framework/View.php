<?php

class View {

    // for system only. This function pointer view to .\error path.
    public function _error($src) {
      $this->path = $src;
      require $src . EXT;
    }

    // for class view only
    private function _view_error($src, $from = null) {
      $this->title = 'View not found !';
      $this->path = $src;
      $this->from = $from;
      require 'error/view_error' . EXT;
      exit;
    }

    public function render($src) {
      $file = PATH_V . $src . EXT;
      if (!file_exists($file)) {
        $this->_view_error($src, 'render');
      }
      require $file;
    }

    public function template($src, $layout = null) {
      $file = PATH_V . $src . EXT;
      if (!file_exists($file)) {
        $this->_view_error($src, 'template');
      }
      require PATH_V . 'layouts/' . (($layout) ? $layout : FRONTEND) . '/header.php';
      require $file;
      require PATH_V . 'layouts/' . (($layout) ? $layout : FRONTEND) . '/footer.php';
    }

    // You can make another template method **exam. template1, template2, template3, ...

    public function asset($url) {
      $url = trim(preg_replace('/\\\\/', '/', $url), '/');
      $file_path = BASE_URL . 'public/assets/' . $url;

      if(!@getimagesize($file_path)) {
        $pathArr = explode('/', $file_path);
        $file_path = $pathArr[0] . '//' . $pathArr[2] . '/public/assets/' . $url;
      }
      $file_path = str_replace("\\", "/", $file_path);
      return $file_path;
    }

}
