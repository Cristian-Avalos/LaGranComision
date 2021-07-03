<?php 

	class MvcController{
		//Llamar a la plantilla
		public function plantilla(){
			//En include se utiliza para invocar el archivo que tiene el codigo html
			include "View/template.php";
		}

		//Interaccion con el usuario
		public function enlacesPaginasController(){
			//
			if(isset($_GET['action'])){
				$enlacesController = $_GET['action'];
			}else{
				$enlacesController = "index";
			}

			$respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);
			include $respuesta;
		}

	}

?>


<!--En un archivo separado que guardarás con extensión .php y el cual se 
debe llamar enviar.php, pega el siguiente código:  -->