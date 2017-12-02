<!doctype html>
<html>
	<head>
	<title><?php echo @$this->title; ?></title>
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
	
