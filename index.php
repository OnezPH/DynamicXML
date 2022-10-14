<?php
$xml=simplexml_load_file("dynamicXML.xml") or die("Error: Cannot create object");
echo $xml->link->company . "<br>";
?>