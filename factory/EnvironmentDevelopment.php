<?php
class EnvironmentDevelopment extends AbstractEnvironment {
	function EnvironmentDevelopment( $features ) {
		$this->setConf( $features );
	}
	
	function setConf( $features ) {
		$this->conf     = "Define the development environment...";
		$this->features = $features;
	}
}
?>

