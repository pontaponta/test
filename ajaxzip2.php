<?php
define("ALL_ZIP_FILE", "./allzip.zip");


if ( !isset($_GET['zip']))
{
	echo "test";
}

if(!isset($_GET['zip']) || !preg_match("/[0-9]{3}/",$_GET['zip'])){
  exit;
}
echo "test";

$zip = $_GET['zip'];
$za = new ZipArchive();
$za->open(ALL_ZIP_FILE);
$json = $za->getFromName('zip-' . $zip .'.json');
$za->close();

header("Content-Type: text/javascript; charset=utf-8");
echo $json;
?>