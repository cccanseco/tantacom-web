<?php
	if ($node->nid == 138) $nodo = node_load(138);
	if ($node->nid == 139) $nodo = node_load(139);
	if ($node->nid == 140) $nodo = node_load(140);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Tu suscripción ha sido confirmada</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<style type="text/css">
	
	
		@font-face {

		    font-family: 'Humanst521LtBTLight';
			    src: url('http://www.tantacom.com/sites/all/themes/tantacom/fonts/hum521l-webfont.eot');
		    	src: url('http://www.tantacom.com/sites/all/themes/tantacom/fonts/hum521l-webfont.eot?#iefix') format('embedded-opentype'),
		         url('http://www.tantacom.com/sites/all/themes/tantacom/fonts/hum521l-webfont.woff') format('woff'),
		         url('http://www.tantacom.com/sites/all/themes/tantacom/fonts/hum521l-webfont.ttf') format('truetype'),
		         url('http://www.tantacom.com/sites/all/themes/tantacom/fonts/hum521l-webfont.svg#Humanst521LtBTLight') format('svg');
		    font-weight: normal;
		    font-style: normal;
		}

	
		body { background: #1F91D0; padding-top: 65px; text-align: center; font-family: Arial, Helvetica, sans-serif; text-align: center; }
		
		#wrap { width: 590px; margin:0 auto; text-align: left }
			#wrap img { margin-bottom: 21px }
		
		.container {  background: #FFF; position: relative; margin: 0 auto; padding: 0; border: 5px solid #D3E9F6; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px;}

		.title { padding: 34px 39px; text-align: left;  }
			.title h1 { font-size: 30px; color: #1F91D0; font-weight: normal; margin: 0 0 13px 0; padding: 0; letter-spacing: 0; }
			p { font-size: 16px; color: #515151; font-weight: normal; margin: 0; padding: 0 0 6px 0; line-height: 25px; }
			
		#alternate { margin-top: 28px }	
			#alternate p { font-size:18px; color:#cdeffd  }
			#alternate ul { margin: 23px 0 0 0; padding: 0 8px; list-style: none }
				#alternate li { display: inline; padding-left: 31px; padding-right: 9px; background: url(http://www.tantacom.com/sites/all/themes/tantacom/images/bullet_men.gif) no-repeat 0 50% }
					#alternate li.reset { padding-left: 0; background: none }
					#alternate a { color:#fff; text-decoration: none; font-family: 'Humanst521LtBTLight',Arial,Helvetica,sans-serif; }
						#alternate a:hover { text-decoration: underline }
			
	</style>
</head>

<body>


	<div id="wrap">

		<img src="http://www.tantacom.com/sites/default/files/tantacom_logo.png" alt="Tanta" />	
		
		<div class="container">


		
		
		<div class="title">
				<?php echo $nodo->body;?>
		</div>
		
		</div>
		
		<div id="alternate">
		
			<p>No obstante, puedes visitar nuestra web:</p>
			<ul>
				<li class="reset"><a href="http://www.tantacom.com/quienes-somos">quiénes somos</a></li>
				<li><a href="http://www.tantacom.com/soluciones">soluciones</a></li>
				<li><a href="http://www.tantacom.com/clientes">clientes</a></li>
				<li><a href="http://blog.tantacom.com">blog</a></li>
				<li><a href="http://www.tantacom.com/contacto">contacto</a></li>
			</ul>
		
		</div>
	
	
	</div>
	
</body>
</html>