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

  	</head>

  	<body>

      <div id="login">
        <div class="login2">           
        <form action="logearse.php" method="POST">      
            
             <h2 class="tt1">Usuario: <?PHP echo $_SESSION['nombreUs']; ?>  </h2>
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
             <div class ="Gestion">

              <tr>
<td style="height: 20px;">&nbsp;</td>
</tr>

                <table align="center">
<tbody>
<td style="height: 98px; width: 722px; background-image: url('http://s2.subirimagenes.com/privadas/previo/thump_2256185banner.jpg'); background-repeat: no-repeat; margin-left: 90px; vertical-align: middle;" colspan="3"><span style="color: #ffffff; font-size: 25px; text-shadow: 1px 1px 1px #000000; font-weight: bold; text-align: center; margin-left: 15px;"> SISTEMA GESTION DE CALIDAD</span></td>
</tbody>
                  </table>
</div>
           
  			<section>

  				<div id="cuerpoTex">
            <article>


         
                <div class="caja-contenido">

<table>
</tbody>
       <td >    



<img style="margin: 15px 10px 20px; float: right;"src="http://www.famisanar.com.co/images/sistemagestioncalidad.jpg" height = "300" width ="300" > 
    


<ul style= "background-image: url('http://www.famisanar.com.co/templates/famisanar/images/postbullets.png'); background-repeat: no-repeat;margin-left: 20px;" > <p><FONT FACE="arial" SIZE=2>Gestión Calidad, tomando como referente los Estándares de Acreditación.</FONT></p></ul></li>
<ul style= "background-image: url('http://www.famisanar.com.co/templates/famisanar/images/postbullets.png'); background-repeat: no-repeat;margin-left: 20px;" >  <p><FONT FACE="arial"SIZE=2 >Sistema de Administración de Riesgos, tomando la Resolución 1740 como modelo de gestión.</FONT></p></ul></li>
<ul style= "background-image: url('http://www.famisanar.com.co/templates/famisanar/images/postbullets.png'); background-repeat: no-repeat;margin-left: 20px;" >  <p><FONT FACE="arial"SIZE=2> Gestión por Procesos, adoptando la metodología BPMN para la caracterización y documentación de procesos.</FONT></p></ul></li>
<ul style= "background-image: url('http://www.famisanar.com.co/templates/famisanar/images/postbullets.png'); background-repeat: no-repeat;margin-left: 20px;" >  <p><FONT FACE="arial"SIZE=2> Planeación Estratégica, que permite generar el Direccionamiento Estratégico de la Compañía.</FONT></p></ul></li>
<ul style= "background-image: url('http://www.famisanar.com.co/templates/famisanar/images/postbullets.png'); background-repeat: no-repeat;margin-left: 20px;" >  <p><FONT FACE="arial" SIZE=2>Sistema de Medición, el cual permitirá construir el Tablero de Mando de la compañía y permitirá dar seguimiento para cumplir los objetivos.</p></ul></li>

</p>


</td>

</tbody></table>


               </div>

     </div>
            
<section>

          <div id="cuerpoTex">
            <article>
              <div class="caja">

               

 <div class="caja-titulo">   
            <h1>Nuestro SGC, nos ha permitido: </h1>  

                </div>
                <div class="caja-contenido">

                      
                  
<ul style= "background-image: url('http://www.famisanar.com.co/templates/famisanar/images/postbullets.png'); background-repeat: no-repeat;margin-left: 20px;" >  <p><FONT FACE="arial"SIZE=2> Contar con un solo sistema documental</FONT></p></ul></li>
<ul style= "background-image: url('http://www.famisanar.com.co/templates/famisanar/images/postbullets.png'); background-repeat: no-repeat;margin-left: 20px;" >  <p><FONT FACE="arial"SIZE=2> Integrar políticas y objetivos para la obtención de resultados.</FONT></p></ul></li>
<ul style= "background-image: url('http://www.famisanar.com.co/templates/famisanar/images/postbullets.png'); background-repeat: no-repeat;margin-left: 20px;" >  <p><FONT FACE="arial" SIZE=2>Aprovechar las mejores prácticas de los sistemas incorporados</p></ul></li>
<ul style= "background-image: url('http://www.famisanar.com.co/templates/famisanar/images/postbullets.png'); background-repeat: no-repeat;margin-left: 20px;" >  <p><FONT FACE="arial" SIZE=2>La misma plataforma funcional y operativa, puede responder de una forma sincronizada a los distintos requerimientos de los sistemas incorporados.</p></ul></li>
<ul style= "background-image: url('http://www.famisanar.com.co/templates/famisanar/images/postbullets.png'); background-repeat: no-repeat;margin-left: 20px;" >  <p><FONT FACE="arial" SIZE=2>Implementar mejoras en nuestros procesos para ofrecer cada vez mejores soluciones a nuestros usuarios.</p></ul></li>
                  
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