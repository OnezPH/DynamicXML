<?php
$xml=simplexml_load_file("dynamicXML.xml") or die("Error: Cannot create object");
echo $xml->link[0]->company . "<br>";
echo $xml->link[0]->product . "<br>";
echo $xml->link[0]->prices . "<br>";
echo $xml->link[0]->image . "<br>";
echo $xml->link[0]->url;
?>