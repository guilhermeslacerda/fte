<?php
class LoadConf {
	private $conf;
	private $env;
	
	function getEnvironment() {
		return $this->conf;
	}
	
	function getFeatures() {
		return $this->features;
	}

	function LoadConf( $defaultEnvironment, $features ) {
		$this->conf     = $defaultEnvironment;
		$this->features = $features;
		
		$this->define();
	}
	
	function define() {
		if ( $this->getEnvironment() == "Development" )
			$this->env = new EnvironmentDevelopment();
		elseif ( $this->getEnvironment() == "Production" )
			$this->env = new EnvironmentProduction();
		else
			$this->env = new EnvironmentMaintenance();
	}
	
	function execute() {
	 	$this->env->setConf( $this->getFeatures() );
		$this->env->useConf();
	}
}
?>