<?php
$xml=simplexml_load_file("dynamicXML.xml") or die("Error: Cannot create object");
echo $xml->company . "<br>";
echo $xml->product . "<br>";
echo $xml->prices . "<br>";
echo $xml->image . "<br>";
echo $xml->url;
?>