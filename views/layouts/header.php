<!doctype html>
<html>
	<head>
	  <title><?php echo @$this->title; ?></title>
    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>public/images/beech_16.png">
    <?php
    /**
     * this load stylesheet
     *
     */
    if (isset($this->css)) {
      foreach ($this->css as $css) {
          echo '<link rel="stylesheet" href="' . BASE_URL . 'views/' . $css . '">';
      }
  }
    
    /**
     * this load javascript
     *
     */
    if (isset($this->js)) {
        foreach ($this->js as $js) {
            echo '<script src="' . BASE_URL . 'views/' . $js . '" type="text/javascript"></script>';
        }
    }
    ?>
</head>
<body>