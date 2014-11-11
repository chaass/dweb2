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
             <div class ="Valores">

              <tr>
<td style="height: 20px;">&nbsp;</td>
</tr>

                <table align="center">
<tbody>
<td style="height: 98px; width: 722px; background-image: url('http://s2.subirimagenes.com/privadas/previo/thump_2256185banner.jpg'); background-repeat: no-repeat; margin-left: 90px; vertical-align: middle;" colspan="3"><span style="color: #ffffff; font-size: 25px; text-shadow: 1px 1px 1px #000000; font-weight: bold; text-align: center; margin-left: 15px;"> CONVENIOS</span></td>
</tbody>
                  </table>
</div>
           
  			<section>

  				<div id="cuerpoTex">
            <article>
              <div class="caja">

               

 <div class="caja-titulo">    
                      <h1>Nuestros Ccnvenios son </h1>  

                </div>
                <div class="caja-contenido">





<p align="center"> 

 <strong>Estos son nuestros convenios si desea entrar a alguno de ellos solo de clic en la imagen </strong>
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
        <li><a href="http://www.epssura.com/index.php" target="_blank"><img src="data1/images/sura.jpg" alt="Sura" title="Sura" id="wows1_0"/></li></a>
        <li><a href="http://www.saludcolpatria.com" target="_blank"><img src="data1/images/colpatria.jpg" alt="Colpatria Salud" title="Colpatria Salud" id="wows1_1"/></li></a>
        <li><a href="http://medicinaprepagada.coomeva.com.co" target="_blank"><img src="data1/images/comeva.jpg" alt="Comeva" title="Comeva Medicina Prepagada" id="wows1_2"/></li> </a>
        <li><a href="http://www.larebajavirtual.com" target="_blank"> <img src="data1/images/rebaja.jpg" alt="images (2)" title="Drogas la rebaja" id="wows1_3"/></li></a>
        <li><a href="http://www.minsalud.gov.co" target="_blank"><img src="data1/images/minsalud.jpg" alt="MinSalud" title="MinSalud" id="wows1_4"/></li></a>
        <li><a href="http://www.medplus.com.co" target="_blank"><img src="data1/images/medplus.jpg" alt="MedPlus" title="MedPlus" id="wows1_5"/></li></a>

      </ul></div>

  <div class="ws_bullets">
    <div>
         
      <a href="#" title="Sura"><img src="data1/tooltips/sura.jpg" alt="sura"/>1</a>
        <a href="#" title="Colpatria Salud"><img src="data1/tooltips/colpatria.jpg" alt="Colpatria Salud"/>2</a>
        <a href="#" title="Comeva"><img src="data1/tooltips/comeva.jpg" alt="real-madrid-23-2014-wallpaper"/>3</a>
        <a href="#" title="Drogas la rebaja"> <img src="data1/tooltips/rebaja.jpg" alt="images (2)"/>4</a>
        <a href="#" title="MinSalud"><img src="data1/tooltips/minsalud.jpg" alt="MinSaludt"/>5</a>
        <a href="#" title="MedPlus"><img src="data1/tooltips/medplus.jpg" alt="Medplus"/>6</a>

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