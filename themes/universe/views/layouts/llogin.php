<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Custom Login Form Styling</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
         
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/login.css" rel="stylesheet" type="text/css" />

		<!--<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/modernizr.custom.63321.js"></script>-->
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>	
/*			@import url(http://fonts.googleapis.com/css?family=Montserrat:400,700|Handlee);*/
			body {
				background: #eedfcc url(<?php echo Yii::app()->theme->baseUrl; ?>/img/blur-background09.jpg) no-repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
			.container > header h1,
			.container > header h2 {
				color: #fff;
				text-shadow: 0 1px 1px rgba(0,0,0,0.5);
			}
		</style>
    </head>
    <body>
        <div class="container">
		 <?php echo $content; ?>
			<header class="logo"  >
			
			 
				<h1  >Custom <strong>Login Form</strong> Styling</h1>
				<h2>Creative and modern form design with CSS magic</h2>
				
				 
 
				
			</header>
			
			<section class="main">
				<form class="form-4 clearfix">
				    <p>
				        <input type="text" id="login" name="login" placeholder="Username">
				        <input type="password" name="password" id="password" placeholder="Password"> 
				    </p>
				 <!--  <input name="submit" value="Continue" type="submit">-->     
				</form>????
			</section>
			
        </div>
		 
    </body>
</html>