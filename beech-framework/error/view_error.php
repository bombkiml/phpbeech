<!doctype html>
<html>
<head>
	<meta charset='utf-8'/>
	<link href='https://avatars.githubusercontent.com/u/34172506?s=400&u=c8ffb658bef4cd44a3deac6eb5ee04defce0003a&v=4' rel='shortcut icon'/>
	<title><?php echo @$this->title; ?></title>
</head>
<body>
<style type='text/css'>
body{font-family: Courier New;font-size: 12pt;}
#content{
    box-sizing: border-box;
    padding: 0 0 50px 20px;
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
  <h1><a href='https://github.com/bombkiml/phpbeech/issues' target='_blank' title='PHP Beech Framework'><img src='https://camo.githubusercontent.com/3ec1bd01649368036097c577e555c8a0331a8a571e5a12e10e2414bd6dd33ed3/68747470733a2f2f696d6167652e6962622e636f2f6766627451652f62656563685f4c545378312e706e67' width='64px' /> <label style='position:absolute;top:44px;margin-left:5px;' class="pointer">PHP Beech framework</label></a></h1>
	<h2 id="red">Fatal: View not found !</h2>
    <h3 id='red'>*** Notice ***</h3>
    <?php $base = trim(BASE_URL, '/'); $base = explode('/', $base); $my_site = end($base); ?>        
    <h3 id='green'>Check path :: <?php echo $my_site; ?>/views/<lable id='red'><?php echo $this->path.'.php'; ?></label></h3>
    <br/><hr/>
    <div id='code' >
        
             
            <div id='green'>// Check your code</div>
            <div><label class='b blue'>$this</label>->view-><?php echo $this->from; ?>("<label id='red'><?php echo $this->path; ?></label>");</div>
        
    </div>
</div>