<?php
//iniciar secion
session_start();
//valida si entro con secion correcta
if(!$_SESSION){
	echo '<script language = javascript>
	alert("Usuario no autenticado")
	self.location = "index.html"
	</script';
}
$idUs = $_SESSION['idUs'];
$nombreUs = $_SESSION['nombreUs'];
?>

<!DOCTYPE html>
<html lang="es">
  	<head>
      <title>Citas Medicas</title>
 		<meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Slider, image slider, responsive slider" />
 		<link rel="stylesheet"  href="css/stylo.css">

    <!-- iniciar el slider HEAD section -->
  <link rel="stylesheet" type="text/css" href="engine1/style.css" />
  <script type="text/javascript" src="engine1/jquery.js"></script>
  <!-- finalizarel slider HEAD section -->

  <!-- Start WOWSlider.com HEAD section -->
  <link rel="stylesheet" type="text/css" href="engine1//style.css" media="screen" />
  <script type="text/javascript" src="engine1//jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->


  	</head>

  	<body>

      <div id="login">
        <div class="login2">  
             <h2 class="tt1">Usuario: <?PHP echo $_SESSION['nombreUs']; ?>	</h2>
             <h2 class="tt1"><a href="desconectar.php">Cerrar secion</a></h2>              
        </div>
      </div>

  		<div id="contenido">
  			<header>
          <div>
            <img src="img/logo.png">
          </div>
  			<!--	<hgroup>
  					<h1 id="Tprincipal">Servicio de citas Medicas s.a</h1>
  				</hgroup>-->
  				<div id='cssmenu'>
  					<nav >  						
          	 		  <ul>  
                        <li><a href='index_user.php'><span>Inicio</span></a></li>
                        <li><a href=""><span>Quienes somos</span></a>
                            <ul>
                               <li><a href="misionyvision.php"><span>Historia,Mision y Vision</span></a></li>
                               <li><a href="valores.php"><span>Valores</span></a></li>
                               <li><a href="gestion.php"><span>Gestion de calidad</span></a></li>
                               <li><a href="participacion.php"><span>Participacion</span></a></li>
                               <li><a href="convenios.php"><span>Covenios</span></a></li>
                            </ul>
                        </li>
                        <li class='#'><a href='#'><span>Servicios</span></a>
                             <ul>  
                               <li class='#'><a href='crearcita.php'><span>Crear cita</span></a></li>      
                               <li class='#'><a href='reprogramar.php'><span>Reprogramar</span></a></li>
                               <li class='#'><a href='eliminar.php'><span>Eliminar</span></a></li>     
                           </ul>     
                        </li>   

                      <li class='#'><a href='quejas.php'><span>Quejas</span></a></li>
                      <li><a href='contactos.php'><span>Contactos</span></a></li>
                     </ul>
                 </nav>
  				</div>  				
  			</header>

  			<section>
  				<div id="cuerpoTex">
            <article>
              <div class="caja">
                <div class="caja-titulo">                   
                      <h1>Bienvenido.</h1>                    
                </div>
                <div class="caja-contenido">
                  <p>
                    Te damos la bienvenida a nuestro sitio web, en el cual pordras
                    realizar diferentes servicios como si los realizaras personalmente 
                    en tu hospital o incliso mejor.
                    Con la gran diferencia de que por medio de este sistema no tendras
                    que hacer filas extresanes, ni tampoco tendras que estar de pie,
                    lo podras hacer desde la comodidad de tu hogar.

                  </p>
                </div>
              </div>
            </article>
  				</div>
  			</section>

  		</div>
        
      <div id="cuerpo2">
         
        <!-- Start WOWSlider.com BODY section -->
  <div id="wowslider-container1">
    <div class="ws_images">
      <ul>
    <li><img src="data1/images/TuSaludEsLoPrimero.gif" alt="Tu salud es lo primero" title="Tu salud es lo primero" id="wows1_6"/></li>
        <li><img src="data1/images/descarga.jpg" alt="Nuestro compromiso por su salud " title="Nuestro compromiso por su salud" id="wows1_1"/></li>
        <li><img src="data1/images/manzanitasalud.jpg" alt="Alimentate bien" title=  "Alimentate bien">  </li> id="wows1_2"/></li>
        <li><img src="data1/images/lamejoratencion.jpg" alt="La mejor atencion" title="La mejor atencion" id="wows1_3"/></li>
        <li><img src="data1/images/tucuerpo.jpg" alt="Cuida tu cuerpo" title="Cuida tu cuerpo" id="wows1_4"/></li>
        <li><img src="data1/images/servirle.jpg" alt="Estamos para servirle" title="Estamos para servirle" id="wows1_5"/></li>
     
      </ul></div>

  <div class="ws_bullets">
    <div>
        <a href="#" title="Tu  salud es  lo primero"><img src="data1/tooltips/TuSaludEsLoPrimero.jpg" alt="Tu  salud es  lo primero"/>1</a>
        <a href="#" title="Nuestro compromiso por su salud"><img src="data1/tooltips/descarga.jpg" alt="Nuestro compromiso por su salud"/>2</a>
        <a href="#" title="Alimentate bien"><img src="data1/tooltips/manzanitasalud.jpg" alt="Alimentate bien"/>3</a>
        <a href="#" title="La mejor atencion"><img src="data1/tooltips/lamejoratencion.jpg" alt="La mejor atencion"/>4</a>
        <a href="#" title="Cuida tu cuerpo"><img src="data1/tooltips/tucuerpo.jpg" alt="Cuida tu cuerpo"/>5</a>
        <a href="#" title="Estamos para servirle"><img src="data1/tooltips/servirle.jpg" alt="Estamos para servirle"/>6</a>
    
    </div>
  </div>

         <span class="wsl"><a href="http://wowslider.com">slideshow jquery</a> by WOWSlider.com v5.4</span>
         <div class="ws_shadow"></div>
  </div>

  <script type="text/javascript" src="engine1/wowslider.js"></script>
  <script type="text/javascript" src="engine1/script.js"></script>
  <!-- End WOWSlider.com BODY section -->


      </div>

      <footer>
        <div id="footer">
           <div class="footer-in">           
            <p>
              Servicio de citas medicas S.A <br>
              Copyrigh 2014 todos los derechos recervados<br>
              Ing Sistemas CUL<br>
            </p>
           </div>
        </div>
      </footer>

  	</body>

</html>