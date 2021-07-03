<?php 
	class EnlacesPaginas{

		public function enlacesPaginasModel($enlacesModel){

			if ($enlacesModel == "inicio" ||
				$enlacesModel == "nosotros" || 
				$enlacesModel == "ibcc" || 
				$enlacesModel == "contacto") {
				# code...
				$module = "View/modules/".$enlacesModel.".php";
			}

			else if ($enlacesModel == "index") {
				# code...
				$module = "View/modules/inicio.php";
			}
			else{
				$module = "View/modules/inicio.php";
			}

			return $module;
		}
	}

	
?>