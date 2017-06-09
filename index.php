<?php
	
class trinagle {

		public function startTrinagle()
		{
			$methodService = $_SERVER['REQUEST_METHOD'];
			if ($methodService== "GET" && isset($_GET["c"])) {
				$result = $this->validateTriangle();
				echo json_encode($result);
			} else {
				echo "Hola. Indica los parámetros adecuados. Deben ser 3 enteros. Por ejemplo: [URL]/3/6/8"
			}
			
			
		}

		private function validateTriangle(){
			$a = $_GET["a"];
			$b = $_GET["b"];
			$c = $_GET["c"];
			if (($a+$b > $c) && ($b+$c > $a) && ($a+$c > $b)) {
				$response = array(
        			'Resultado' => 'Si es triangulo.'
    			);
			} else {
				$response = array(
        			'Resultado' => 'No es triangulo.'
    			);			
			}
			return $response;
		}
	}

	$trinagle = new trinagle;
	$trinagle->startTrinagle();
?>
