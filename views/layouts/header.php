<!doctype html>
<html>
	<head>
	  <title><?php echo @$this->title; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cerulean/bootstrap.min.css" integrity="sha384-3fdgwJw17Bi87e1QQ4fsLn4rUFqWw//KU0g8TvV6quvahISRewev6/EocKNuJmEw" crossorigin="anonymous">
    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>public/images/beech_16.png">
    <?php
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