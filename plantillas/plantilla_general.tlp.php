<?php 

	require_once "config.php";
	require_once "clases/vo/UsuarioVO.class.php";
	require_once "clases/dao/UsuarioDAOFactory.class.php";
	
	if(isset($_COOKIE['54gd98tr5rwe65r5f5gg569e6152id21'])){
		$mostrar = $dao_usuario->mostrar($_COOKIE['54gd98tr5rwe65r5f5gg569e6152id21']);
		
	}
	
?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<link rel="icon" type="image/png" href="img/favicon.ico" />
<meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1">
<meta name="keywords" content="<?php echo $GLOBALS["palabras_clave"];?>">
<meta name="description" content="<?php echo $GLOBALS["descripcion"];?>">
<title><? echo $GLOBALS["titulo"];?></title>
<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.10.4.custom.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="css/colorbox.css">
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/social-buttons.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/jquery-ui-1.10.4.custom.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.colorbox-min.js"></script>
<script src="js/scripts.js"></script>
<script type="text/javascript" src="http://www.ujjina.com/media/streaming/clientes/perupoprock/radio/jwplayer6/jwplayer.js"></script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36115161-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</head>
<!--[if IE]>
   
   <style type="text/css">

   .item-voto{ 
       background:transparent;
       filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#50990000,endColorstr=#50990000); 
       zoom: 1;
    } 

    </style>

<![endif]-->

<body>







<div class="modal fade" id="loginFacebook" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="container">


<aside class="text-right" style="display:none">
  
  <?php 

	
	if(isset($_COOKIE['6c04327505e5abef1df6c268da8eb09a'])){ //existe cookie
		
		
			if($_COOKIE['6c04327505e5abef1df6c268da8eb09a']==md5($mostrar[0]->usuario_id)){ //tiene que ser igual al id, si no, no se ha logeado
				 ?>
         
         <?php 
				
				 ?>
         
				
   
				 <p class="links">Bienvenido <?php echo $mostrar[0]->usuario_nombre; ?> / <a href="cerrar-sesion.php">Cerrar Sessión</a> </p>
				 
				 <?
			}else{
				
					?>
            <p class="links"><a href="login-registro.php">Registrarse</a> / <a href="recuperar_password.php">Recuperar contraseña</a></p>
            <form class="form-inline" role="form" method="post" name="form-login" id="form-login" action="login-proceso.php">
          <div class="form-group">
            <label class="sr-only" for="exampleInputEmail2">Email address</label>
            <input type="email" name="email" class="form-control input-sm" id="exampleInputEmail2" placeholder="Email">
          </div>
          
          <div class="form-group">
            <label class="sr-only" for="exampleInputPassword2">Password</label>
            <input type="password" name="password" class="form-control input-sm" id="exampleInputPassword2" placeholder="Contraseña">
          </div>
          
          <button type="submit" class="btn btn-danger btn-sm">Iniciar sesion</button>
        </form>
			
					<?
			}
	}else{ // no existe cookie
		
		?>
				  <p class="links"><a href="login-registro.php">Registrarse</a> / <a href="recuperar_password.php">Recuperar contraseña</a></p>
            <form class="form-inline" role="form" method="post" name="form-login" id="form-login" action="login-proceso.php">
          <div class="form-group">
            <label class="sr-only" for="exampleInputEmail2">Email address</label>
            <input type="email" name="email" class="form-control input-sm" id="exampleInputEmail2" placeholder="Email">
          </div>
          
          <div class="form-group">
            <label class="sr-only" for="exampleInputPassword2">Password</label>
            <input type="password" name="password" class="form-control input-sm" id="exampleInputPassword2" placeholder="Contraseña">
          </div>
          
          <button type="submit" class="btn btn-danger btn-sm">Iniciar sesion</button>
        </form>
   
				 
				 
				 <?
	}
	
	?>
  
  </aside>
  
  <header class="row mar-top-20">
    <div class="col-md-4 col-sm-6">
      <img src="img/logo.png" class="img-responsive">
    </div>
    <div class="col-md-8 col-sm-6">
    	<div id="ujjinaperupoprock" style="float:right;"></div>
      <script type="text/javascript" src="http://www.ujjina.com/media/streaming/clientes/perupoprock/radio/jwplayer6/ujjinaselector.js"></script>
    </div>
  </header>
  
  <nav class="navbar navbar-static-top mar-bot-15" role="navigation">
  	<div class="navbar-header">    
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    
  	<div class="navbar-collapse collapse bs-navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="./"<? if($GLOBALS["boton"]==1) echo ' class="active"';?>>Inicio</a></li>
        <li><a href="noticias.php"<? if($GLOBALS["boton"]==2) echo ' class="active"';?>>Noticias</a></li>
        <li class="dropdown"><a href="programas.php" class="dropdown-toggle<? if($GLOBALS["boton"]==3) echo ' active';?>" data-toggle="dropdown">Programas</a>
        	<ul class="dropdown-menu">
          	<?php
						$programas = $dao_programa->listar_web();
						foreach($programas as $progra){
						?>
						<li><a href="programas.php?id_programa=<? echo $progra->programa_id;?>"><? echo $progra->programa_nombre;?></a></li>
						<?php
						}
						?>
          </ul>
        </li>
        <li><a href="programacion.php"<? if($GLOBALS["boton"]==4) echo ' class="active"';?>>Programación</a></li>
        
				<li class="dropdown"><a href="ranking.php" class="dropdown-toggle<? if($GLOBALS["boton"]==5) echo ' active';?>" data-toggle="dropdown">Ranking</a>
        	<ul class="dropdown-menu">
          	<li><a href="ranking-votacion.php">Votar</a></li>
          	<li><a href="top-20.php">Top 20</a></li>
          </ul>
        </li>
        <li><a href="http://www.perupoprock.com/hant/comingsoon/tv.php" target="_blank">SALA DE CHAT</a></li>
        <li><a href="http://www.perupoprock.com/hant/comingsoon/tv.php" target="_blank">Radio TV</a></li>
        <!--<li id="buscador">
          <div class="col-xs-10 pad-0">
          	<input type="text" name="buscador-texto" id="buscador-texto" class="form-control" placeholder="Ingrese el nombre de la banda o artista.">
          </div>
          <div class="col-xs-2 pad-0">
          	<i class="fa fa-search"></i>
          </div>
        </li>-->
      </ul>
    </div>
  </nav>
  
  <div id="load">
  	<?php echo $GLOBALS["cuerpo"];?>
  </div>
  
</div>
  
<footer id="footer" class="pad-top-30 pad-bot-30">
  <div class="container">
  	<div class="row">
      <div class="col-sm-4 mar-bot-20 text-left">
        <h2>
          <img src="img/ico_titulo.jpg" width="38" height="41" class="middle">
          <span style="display:inline-block; vertical-align:middle" class="middle">FACEBOOK</span>
          <!--<DIV class="redes" style="display:inline-block; vertical-align:middle"><a href="https://www.facebook.com/pages/Peru-PopRock-Incentivando-el-Pop-y-Rock-Nacional/122687061098515?fref=ts" target="_blank" class="mar-lef-10"><i class="fa fa-facebook"></i></a></DIV>-->
        </h2>
        
       
        
        <div class="social_plugin">
        	<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fradioperupoprockoficial&amp;width&amp;height=590&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=true&amp;show_border=true&amp;appId=668175833220156" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:590px; background-color:#fff" allowTransparency="true"></iframe> 
        </div>
        
      </div>
      
      
      <div class="col-sm-4 mar-bot-20 text-left">
        <h2>
          <img src="img/ico_titulo.jpg" width="38" height="41" class="middle">
          <span class="middle">TWITTER</span>
        </h2>
        
      
        
        <div class="social_plugin">
        	<a class="twitter-timeline" href="https://twitter.com/PeruPopRock" height="590" data-widget-id="471399219077464064">Tweets por @PeruPopRock</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>



        
        </div>
        
      </div>
      
    
      <div class="col-sm-4 text-left">
        <h2>
          <img src="img/ico_titulo.jpg" width="38" height="41" class="middle">
          <span class="middle">Contacto</span>
        </h2>
        <form id="form-contacto" name="form1" method="post" action="">
          <div class="row">
          	<div class="col-sm-12">
              <input type="text" name="contacto-nombre" id="contacto-nombre" placeholder="Nombre" class="form-control mar-bot-5">
              <input type="text" name="contacto-email" id="contacto-email" placeholder="E-mail" class="form-control mar-bot-5">
              <input type="text" name="contacto-telefono" id="contacto-telefono" placeholder="Teléfono" class="form-control mar-bot-5">            
              <textarea name="contacto-mensaje" rows="5" class="form-control mar-bot-10" id="contacto-mensaje" placeholder="Mensaje"></textarea>
              <button class="btn btn-black" name="enviar" id="enviar">Enviar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</footer>

<div id="creditos">
	<div class="container">
  	<div class="col-sm-6">
    	PERU POP ROCK © - <? echo date("Y");?> - Todos los derechos reservados
    </div>
    
  	<div class="col-sm-6 text-right">
    	Desarrollado por <a href="http://www.rapiweb.pe" target="_blank">Rapiweb</a>
    </div>
  </div>
</div>
</body>
</html>