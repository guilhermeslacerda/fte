<?php
include "App.properties";
include "EnvironmentStrategy.php";
include "Environment.php";
include "EnvironmentProduction.php";
include "EnvironmentDevelopment.php";
include "EnvironmentMaintenance.php";
include "LoadConf.php";

$config = new LoadConf( $defaultEnvironment, $features );
$config->execute();
?>