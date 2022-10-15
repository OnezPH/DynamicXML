<?php
$xml=dynamicXml("dynamicXML.xml") or die("Error: Cannot create object");
$label = array("Company : ", "Product : ", "Price : ", "Image : " , "URL : ");
foreach($xml->children() as $link) {
    echo $label[0];
    echo $link->company . "<br>";
    echo $label[1];
    echo $link->product . "<br>";
    echo $label[2];
    echo $link->prices . "<br>";
    echo $label[3];
    echo $link->image . "<br>";
    echo $label[4];
    echo $link->url . "<br>" . "<br>";
}
?>