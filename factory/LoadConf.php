<?php
class LoadConf {
	function createEnv( $defaultEnvironment, $features ) {
		if ( $defaultEnvironment == "Development" )
			$env = new EnvironmentDevelopment( $features );
		elseif ( $defaultEnvironment == "Production" )
			$env = new EnvironmentProduction( $features );
		else
			$env = new EnvironmentMaintenance( $features );
		
		return $env;
	}
}
?>