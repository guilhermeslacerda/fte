<?php
class EnvironmentDevelopment extends Environment {
	function setConf( $features ) {
		$this->conf     = "Define the development environment...";
		$this->features = $features;
	}
}
?>