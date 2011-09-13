<?php
class EnvironmentMaintenance extends Environment {
	function setConf( $features ) {
		$this->conf     = "System on Maintenance... Wait for news :))";
		$this->features = $features;
	}
}
?>

