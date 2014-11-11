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

  <!-- funtion.js  ,  connect.php  , process.php -->
    <meta charset="UTF-8">
  <link href="css/style.css" type="text/css" rel="stylesheet"/>
  <link href="css/jquery-ui.css" type="text/css" rel="stylesheet"/>
  <link href="css/datatables.css" type="text/css" rel="stylesheet"/>
  <link href="css/default.css" rel="stylesheet" type="text/css" />
  
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/datatables.js"></script>
  <script src="js/functions.js"></script>



  	</head>

  	<body>

      <div id="login">
        <div class="login2">           
        <form action="logearse.php" method="POST">      
            
             <h2 class="tt1">Usuario: <?PHP echo $_SESSION['nombreUs']; ?>	</h2>
             <h2 class="tt1"><a href="desconectar.php">Cerrar secion</a></h2>  
        </form>      
        </div>
      </div>

  		<div id="contenido">
  			<header>
        <!--  <div>
            <img src="img/logo.png">
          </div>-->
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
                      <h1>Reprogramar su cita</h1>                    
                </div>
                <div class="caja-contenido">

                 <div id="tablc">
                        <header>
                          <h1>Lista de Citas Apartadaas </h1>
                        </header>
                </div>      
                  <div id="tabl">     
                         <section>
                             <table>
                                 <thead>
                                   <tr>
                                     
                                      <th>carnet</th>
                                      <th>identificacion</th>
                                      <th>nombre</th>
                                      <th>dia</th>
                                      <th>doctor</th>

                                   </tr>
                                 </thead>
                             </table>
                          </section><br>
                   </div> <br><br>

                   <label id="labelN">Verifique la informacion de su cita en la anterior tabla y proceda a reprogramas
                          su cita en el siguiente formulario.</label> <br><br>

                   <div id="formularioCrear">
                  <form name="" action="reprogramarCita.php" method="post">
                               <h2 class="tf1">N° del carnet</h2>
                                <input type="text"  class="inf1" name="carnet"  placeholder="N° carnet"> 
                                <h2 class="tf1">N° Identificación</h2>
                                <input type="text"  class="inf1" name="identi"   placeholder="Identificación"> 
                                <h2 class="tf1">Nombre Completo</h2>
                                <input type="text"  class="inf1" name="nombre"   placeholder="Nombre"> 
                                <h2 class="tf1">Dia de la cita</h2>
                                <input type="date" class="inf1" name="fecha" > 
								 <h2 class="tf1">Hora de la cita</h2>
                                <input type="time" class="inf1" name="hora" > 
                                <h2 class="tf1">Doctor</h2>
                               <select class="inf1" name="doctor">
                                    <option value="">Elija una opción</option>
                                    <option value="Isaac">DR. Isaac David</option>
                                    <option value="Miguel">DR. Miguel</option>
									<option value="Jose">DR. Jose</option>
                                    <option value="Peligro">DR. Jaime</option>
                                </select>
                                <button class="bf1" >Enviarar Datos</button>   
                                 
                  </form>
                  </div>


                 
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
