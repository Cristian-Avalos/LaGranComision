<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>La Gran Comisión Oficial</title>

    <link href="assets/img/LaGanComisionLogo.png" rel="icon">

    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="stylesheet" href="assets/css/contacto-lideres.css">
    <link rel="stylesheet" href="assets/css/estilo-head.css">
    <link rel="stylesheet" href="assets/css/contacto-estilo.css">
    <link rel="stylesheet" href="assets/css/media.css" type="text/css" />
   <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
</head>
<body>

	<?php 
		include "modules/Navegacion.php";
	?>

	 	<section>
	<?php 
	 	error_reporting(0);
	 		$mvc = new MvcController();

	 		$mvc->enlacesPaginasController();
	?>
	 	</section>

  <!-- --------------formulario de contacto--------------- -->
  
       
    <div class="Map">      
      <div id="GoogleMap">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.885303797625!2d-99.1693214498971!3d23.71578958453098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x867952e819a3aeed%3A0x35845dbf189262d7!2sEmiliano%20Zapata%20475%2C%20Camino%20Real%20a%20Tula%2C%20Cd%20Victoria%2C%20Tamps.!5e0!3m2!1ses!2smx!4v1602274247920!5m2!1ses!2smx" 
        width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" 
        tabindex="0"></iframe>
      </div>        
    </div>
    <!-- \\ Inicio Get Section \\ -->
      <div class="Get_sec">
        <div class="Mid">					
          <!-- \\ Inicio Left Side \\ -->
          <h3 class="contactotext">Si necesitanos información adicional o quieres unirte a nuestro concilio 
              dejanos tu mensaje</h3>
          <div class="Leftside">
            
            <form action="#">
              <!--<fieldset>-->
                <p><input type="text" value="" placeholder="Nombre" class="field"></p>
                <p><input type="email" value="" placeholder="Correo" class="field"></p>
                <p><input type="text" value="" placeholder="Iglesia o Ministerio" class="field"></p>
                <p><textarea cols="2"  rows="2" placeholder="Mensaje..."></textarea></p>
                <p><input type="submit" value="Enviar" class="button"></p>
              <!--</fieldset>-->
            </form>
          </div><!-- // fin Left Side // -->
          <!-- \\ Inicio Right Side \\ -->
          <div class="Rightside">
            <h3>Contactanos</h3>
              <address>
                Nuestras oficinas estan ubicadas en Camino Rela a Tula #440, Cd. Victoria, Tamaulipas
              </address>	
              <address class="Number">
                Cel: 834 217 7040                       
              </address>	<br>
              <address class="Email">
                Email: <a href="#">lgccecm@hotmail.com</a>
              </address>	
              <div class="clear"></div> <br>
              <address class="red">
                <a href="#">La Gran Comisión Cristiana Oficial</a>
              </address>
          </div><!-- // fin Right Side // -->
        </div>
        <!-- -----------------------------------inicio footer ----------------------------->
        <footer>
          <div class="Cntr"> 
            <p>Página Oficial © 2020 
              <a rel="nofollow" href="#" target="_parent">lagrancomisioncristiana.com</a>
            </p>              
          </div>
        </footer>
        <!-- -----------------------------------inicio footer ----------------------------->
      </div><!-- // fin Get Section // -->
<!-- --------------formulario de contacto--------------- -->

<!-- ---------------Scripts ----------------------------->
  <script src="assets/js/script.js"></script>
  <script src="assets/js/tablink.js"></script>
  <script src="assets/js/headerjquery.js"></script>
  <script src="assets/js/header-script.js"></script>

   <!-- Vendor JS Files -->
   <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <script src="assets/js/main.js"></script>
<!-- ---------------Scripts ----------------------------->

</body>
</html>


