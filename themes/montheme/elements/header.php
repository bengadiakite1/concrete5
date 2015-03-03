<!DOCTYPE html>
<html>
    <head>
        <title>concrete5</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?php echo $this->getThemePath();?>/assets/css/style.css"/>
	   <meta name="author" content="Radu Chelariu">
	   <?php Loader::element('header_required');?> 
    </head>
    
	<body class="corps">
        
            <header class="wrapper">
				<img src="<?php echo $this->getThemePath();?>/assets/images/logo.png"  alt="logo_entreprise" class="photo"/>
				<nav class="menu">
					 <?php
			             $a = new GlobalArea('Menu');
						 $a->setBlockLimit(1);
						 $a->display($c);
								?>
					</nav>
			</header>
            
			
