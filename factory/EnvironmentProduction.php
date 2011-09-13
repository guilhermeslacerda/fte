<?php
class EnvironmentProduction extends AbstractEnvironment {
	function EnvironmentProduction( $features ) {
		$this->setConf( $features );
	}
	
	function setConf( $features ) {
		$this->conf     = "Define the production environment...";
		$this->features = $features;
	}
}
?>

