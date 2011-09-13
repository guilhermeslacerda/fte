<?php
abstract class AbstractEnvironment {
	protected $features;
	protected $conf;

	abstract function setConf( $features );

	function getFeatures() {
		return $this->features;
	}
	
	function execute() {
		$this->setConf( $this->getFeatures() );
		$this->useConf();
	}

	function useConf() {
		echo $this->conf;
		$this->listFeatures();
	}
	
	function listFeatures() {
		foreach( $this->features as $feature ) 
			echo "<br>- ".$feature['option']." (toggle = ".$feature['toggle'].")";
	}
}
?>

