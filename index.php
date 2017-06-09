<?php
	
class trinagle {

		public function startTrinagle()
		{
			$methodService = $_SERVER['REQUEST_METHOD'];

			if ($methodService== "GET") {
				$result = $this->validateTriangle();
				echo json_encode($result);
			}
			
			
		}

		private function validateTriangle(){
			$a = 1;
			$b = 2;
			$c = 3;
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
