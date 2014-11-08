<?php
include "includes/General_webDAO.php";

$programacion = $dao_programacion->listar_home(dia_hoy(), date("H:i:00"));
$banner_principal = $dao_banner->listar_web();

ob_start();
?>
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
<div class="row">
<div class="col-sm-8">
  <div id="banner" class="carousel slide mar-bot-30" data-ride="carousel">
    <ol class="carousel-indicators">
    	<? for($i=0;$i<count($banner_principal);$i++){?>
      <li data-target="#banner" data-slide-to="<? echo $i;?>"<? if($i==0) echo ' class="active"';?>></li>
      <? }?>
    </ol>
    <div class="carousel-inner">
    	<? foreach($banner_principal as $ban){ $j++;?>
      <div class="item<? if($j==1) echo ' active';?>">
      	<img src="fotos-banner/grandes/<? echo $ban->banner_foto;?>" class="img-responsive" width="100%">
      </div>
      <? }?>
    </div>
    
    <a class="left carousel-control" href="#banner" data-slide="prev">
    	<span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#banner" data-slide="next">
    	<span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div>
  </div>
  <div class="col-sm-4" style="height:100%">
  	<div id="fuera">
    <a href="ranking-votacion.php" border=0>
      <img src="img/banner_voto.jpg" class="img-responsive">
      <div id="dentro">
        <p>Los votos se cierran los <br>
              viernes a las 6:00 pm</p>
      </div>
    </a>
 	 </div>  
  </div>
  
  </div> <!--// row -->
  <section id="cuerpo" class="row mar-bot-20">
  	<div class="col-md-8">
    	<h2>
      	<img src="img/ico_titulo.jpg" width="38" height="41" class="middle">
        <span class="middle">Novedades</span>
      </h2>
      <a href="http://elcomercio.pe/espectaculos/1630329/noticia-pedro-suarez-vertiz-su-original-mensaje-consuelo-hinchas-peruanos" target="_blank"><img src="img/novedades.jpg" border="0" class="img-responsive"></a>
    </div>
    
    <div class="col-md-4">
    	<h2>
      	<img src="img/ico_titulo.jpg" width="38" height="41" class="middle">
      	<span class="middle">Programación</span>
      </h2>
      
      <? foreach($programacion as $pro){?>
      <div class="row ba-co-000 pad-10 mar-0 mar-bot-5">
        <div class="col-xs-8 pad-0">
          <h3>
					<?php
        	if($pro->programa_id==0){
						echo $pro->programacion_titulo;
					}else{
						$programa = $dao_programa->mostrar($pro->programa_id);
						echo $programa[0]->programa_nombre;
					}
					?>
					</h3>
          <p><? echo "De ".hora_ordenada($pro->programacion_hora_inicio)." a ".hora_ordenada($pro->programacion_hora_fin);?></p>
        </div>
        
        <div class="col-xs-4 pad-rig-0">
         <!-- <img style="display:none" src="fotos-programacion/<? //echo $pro->programacion_ot_1;?>.jpg">-->
        </div>
    	</div>
      <? }?>
      
    </div>
  </section>
<?php
$GLOBALS["cuerpo"] = ob_get_clean();
$GLOBALS["boton"] = 1;
$GLOBALS["titulo"] = "Perú Pop Rock - Inicio";
$GLOBALS["palabras_clave"] = "Perú pop rock, peru pop, peru rock, radio on line, radio en linea";
$GLOBALS["descripcion"] = "";

if(isset($_GET["load"]) && $_GET["load"]==1){
	echo $GLOBALS["cuerpo"];
}else{
	include "plantillas/plantilla_general.tlp.php";
}
?>