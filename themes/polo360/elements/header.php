<!DOCTYPE html>
<html lang="en">
  <head>
  <?php Loader::element('header_required');?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="<?php echo $this->getThemePath();?>/css/style.css" rel="stylesheet">
	
    <title>CMS</title>

  </head>
  
  <body>
		
	<div class = "container">
		<div id="menu">
			<img src="<?php echo $this->getThemePath();?>/img/logo.png" id ="logo"> <!--environ 30% -->
			<nav>
				<?php 
					$a = new GlobalArea('Menu');
					$a->display();
				?>
			</nav>
		</div>
	</div>