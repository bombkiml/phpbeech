<!doctype html>
<html>
<head>
	<meta charset='utf-8'/>
	<link href='<?php echo $this->asset('images/beech_16.png'); ?>' rel='shortcut icon'/>
	<title><?php echo @$this->title; ?></title>
</head>
<body>
<style type='text/css'>
body{font-family: Courier New;font-size: 12pt;}
#content{
    box-sizing: border-box;
    padding: 0 0 10px 20px;
    border: 1px solid #d7d7d7;
    box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.08);
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
	margin: 0;
}
a{text-decoration:none}
ol{height: 6px;}
#red{color:#D50000}
#green{font-style: italic;color:#148414}
.blue{color:blue;}
.b{font-weight:bold}
h3{height:6px;}
.pointer{cursor: pointer;}
</style>
<div id='content'>
  <h1><a href='https://github.com/bombkiml/phpbeech/issues' target='_blank' title='PHP Beech Framework'><img src='<?php echo $this->asset('images/beech_128.png'); ?>' width='64px' /> <label style='position:absolute;top:44px;margin-left:5px;' class="pointer">PHP Beech framework</label></a></h1>
	<h2 id="red">Fatal error: Class not found !</h2>
  <h3 id='red'>*** Notice ***</h3>
  <?php $base = trim(BASE_URL, '/'); $base = explode('/', $base); $my_site = end($base); ?>        
  <h3 id='green'>1. Check path :: <?php echo $my_site; ?>/modules/controllers/<label id='red'><?php echo $this->file.'.php'; ?></label></h3>
  <h3 id='green'>2. Check your code :: Do you have the class ?  <label id='red'>"<?php echo $this->class; ?>"</label></h3>
  <br/><hr/>
  <div id='code' >
    <h3><label class='blue'>Class</label> <label id='red'><?php echo $this->class; ?></label> <label class='blue'>extends</label> Controller {</h3>          
      <ol><label class='b blue'>functoin __construct</label>() {</ol>
      <ol><ol class='blue'>parent::__construct();</ol></ol>    
      <ol>}</ol>      
      <label id='red'>
      <ol id='green'>// More method ...</ol>
      </label>          
      <h3>}</h3>
  </div>
</div>
