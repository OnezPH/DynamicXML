<?php
$dynamicXML=simplexml_load_file("dynamicXML.xml") or die("Error: Cannot create object");
foreach($dynamicXML->children() as $link) {
    echo "Company  : " . $link->company . "<br>";
    echo "Product : " . $link->product . "<br>";
    echo "Prices : " . $link->prices . "<br>";
    echo "Image : " . $link->image . "<br>";
    echo "URL : " . $link->url . "<br> <br>";
}
?>