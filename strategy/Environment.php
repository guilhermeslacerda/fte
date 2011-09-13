<?php
abstract class Environment implements EnvironmentStrategy {
	protected $conf;
	protected $features;

	abstract function setConf($features);
	
	function getFeatures() {
	    return $this->features;
	}
	
	function useConf() {
		echo $this->conf;
		$this->listFeatures();
	}
	
	function listFeatures() {
	    foreach( $this->getFeatures() as $feature ) 
			echo "<br>- ".$feature['option']." (toggle = ".$feature['toggle'].")";
	}
}
?>

