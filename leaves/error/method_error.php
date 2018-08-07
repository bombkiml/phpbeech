<!doctype html>
<html>
<head>
	<meta charset='utf-8'/>
	<link href='https://image.ibb.co/iqeBBK/beech_16.png' rel='shortcut icon'/>
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
.gray{color:gray}
h3{height:6px;}
</style>
<div id='content'>
    
    <h1><a href='https://github.com/bombkiml/phpbeech/issues' target='_blank' title='PHP Beech Framework'><img src='https://image.ibb.co/gTcRdz/beech_64.png' width='64px' /> <label style='position:absolute;top:44px;margin-left:5px;'>PHP Beech framework</label></a></h1>
	<h2><img src='https://image.ibb.co/b4jWdz/warning_32.png' width='24px' /> Fatal: Method not found !</h2>
    <h3 id='red'>*** Notice ***</h3>
    <h3 id='green'>Check your method name <label id='red'><?php echo $this->method.'()'; ?></label> inside of the class "<?php echo $this->class; ?>"</h3>
    <br/><hr/>
    <div class='code'>
        <h3><label class='blue'>Class</label> <?php echo $this->class; ?> <label class='blue'>extends</label> Controller {</h3>
            
            <ol><label class='b blue'>functoin __construct</label>() {</ol>
            <ol><ol class='blue'>parent::__construct();</ol></ol>    
            <ol>}</ol>
            <?php
            for($i=1;$i<=count($this->param);$i++){
                $pars .= ', $param'.$i;
            }
            $pa = trim(@$pars, ' ,');
            ?>
            <label id='red'>
            <ol id='green'>// Following method is not found. "<strong><?php echo $this->method.'()'; ?></strong>"</ol>
            <ol><strong>functoin</strong> <?php echo $this->method."(<label class='gray'>".$pa."</label>)"; ?> {</ol>
            <ol><ol><label id='green'>//  code to be executed</label></ol></ol>    
            <ol>}</ol>
            </label>
            
        <h3>}</h3>
    </div>
</div>