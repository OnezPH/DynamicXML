<?php
$xml=simplexml_load_file("dynamicXML.xml") or die("Error: Cannot create object");
echo $xml->link[0]->company . "<br>";
echo $xml->link[1]->company;
?>