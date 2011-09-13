<?php
include "App.properties";
include "AbstractEnvironment.php";
include "EnvironmentProduction.php";
include "EnvironmentDevelopment.php";
include "EnvironmentMaintenance.php";
include "LoadConf.php";

$config = new LoadConf();
$config->createEnv( $defaultEnvironment, $features )->execute();
?>
