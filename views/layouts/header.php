<!doctype html>
<html>
	<head>
		<title><?php echo @$this->title; ?></title>
        <link href='<?php echo BASE_URL; ?>public/images/beech_16.png' rel='shortcut icon'/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
		<?php
        /**
         * this load javascript
         *
         */
        if(isset($this->js)){
            foreach($this->js as $js){
                echo '<script src="'.BASE_URL.'views/'.$js.'" type="text/javascript"></script>';
            }
        }
		?>
	</head>
	<body>
	