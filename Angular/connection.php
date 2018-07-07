<?php 
define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "angulartest");
$dbhandle=new mysqli(HOSTNAME,USERNAME,PASSWORD,DATABASE)or die("could not connect ");
?>