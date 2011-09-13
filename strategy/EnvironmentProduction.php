<?php
class EnvironmentProduction extends Environment {
	function setConf( $features ) {
		$this->conf     = "Define the production environment...";
		$this->features = $features;
	}
}
?>

