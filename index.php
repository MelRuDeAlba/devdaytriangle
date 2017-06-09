<?php
	

	class trinagle {

		public function startTrinagle()
		{
			$methodService = $_SERVER['REQUEST_METHOD'];

			if ($methodService== "GET") {
				
				 $this->validateTriangle($_SERVER['REQUEST_URI']);
			}
			
			
		}

		private function validateTriangle($data){
			var_dump($data);
		}
	}

	$trinagle = new trinagle;
	$trinagle->startTrinagle();
	echo "DevDay4Women";
?>
