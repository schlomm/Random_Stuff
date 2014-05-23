<?php
// It reads a json formatted text file and outputs it.
$json_o = file_get_contents("http://www.pegelonline.wsv.de/webservices/rest-api/v2/stations/BONN/W/measurements.json?start=P1D");
echo $json_o;
?>