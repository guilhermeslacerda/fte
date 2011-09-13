<?php
class EnvironmentMaintenance extends AbstractEnvironment {
	function EnvironmentMaintenance( $features ) {
		$this->setConf( $features );
	}
	
	function setConf( $features ) {
		$this->conf     = "System on Maintenance... Wait for news :))";
		$this->features = $features;
	}
}
?>

