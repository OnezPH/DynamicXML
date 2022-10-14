<?php
$xml=simplexml_load_file("dynamicXML.xml") or die("Error: Cannot create object");
echo $xml->link[0]->company . "<br>";
echo $xml->link[0]->product . "<br>";
echo $xml->link[0]->prices . "<br>";
echo $xml->link[0]->image . "<br>";
echo $xml->link[0]->url . "<br>" . "<br>";

echo $xml->link[1]->company . "<br>";
echo $xml->link[1]->product . "<br>";
echo $xml->link[1]->prices . "<br>";
echo $xml->link[1]->image . "<br>";
echo $xml->link[1]->url . "<br>" . "<br>";

echo $xml->link[2]->company . "<br>";
echo $xml->link[2]->product . "<br>";
echo $xml->link[2]->prices . "<br>";
echo $xml->link[2]->image . "<br>";
echo $xml->link[2]->url . "<br>" . "<br>";
?>