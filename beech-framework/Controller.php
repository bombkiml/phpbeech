<?php 

class Controller {
	
	public function __construct() {
		$this->view = new View();
	}
	
	public function load_model($model) {
    $model = substr($model, 0, -10);
		$file = PATH_M . $model . EXT;
		if (file_exists($file)) {
			require $file;
			$model_name = $model;
			$this->model = new $model_name();
		}
	}
    
  public function access_denied() {
		$this->view->title = 'Aceess denied !';
		$this->view->error('error/access_error');
	}
    
  public function pagination($src_link, $row_count) {
    // ../limit/offset
    $link_exp = explode('/', $src_link);
    $offset = end($link_exp);
    $limit  = prev($link_exp);
    
    #$number_of_page = ROUND($row_count / $limit, PHP_ROUND_HALF_UP);
    @$number_of_page = ceil($row_count / $limit);
    
    // link for click
    array_pop($link_exp);
    $link = '';
    foreach($link_exp as $exp) {
        $link .= $exp.'/'; // link for click
    }
    /** 
     * @limit
     * @offset
     * @number_of_page
     * @link
     * 
     */
    $page_start = 0;
    
    $paging = '';
    $paging .= "<div class='pagination clear'>";
    $prev = $offset - $limit; // previus
    $paging .= ($offset>0) ? (($number_of_page>1) ? "<a href='{$link}{$prev}'>◀</a>" : '') : '';
    
    for ($x=1; $x<=$number_of_page; $x++) {
      if ($page_start == $offset) {
        $paging .= ($number_of_page>1) ? "<a href='javascript:void(0)' class='pagination-a'>{$x}</a>" : '';
      } else {
        $paging .= "<a href='{$link}{$page_start}'>{$x}</a>";
      }
      $page_start+=$limit;
    }
    
    $next = $offset + $limit; // next
    $paging .= ($next<$row_count) ? (($number_of_page>1) ? "<a href='{$link}{$next}'>▶</a>" : '') : '';
    $paging .= "</div>";

    return $paging;
  }

}