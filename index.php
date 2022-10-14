<?php
$xml=simplexml_load_file("dynamicXML.xml") or die("Error: Cannot create object");
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
/*
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

echo $xml->link[3]->company . "<br>";
echo $xml->link[3]->product . "<br>";
echo $xml->link[3]->prices . "<br>";
echo $xml->link[3]->image . "<br>";
echo $xml->link[3]->url . "<br>" . "<br>";

echo $xml->link[4]->company . "<br>";
echo $xml->link[4]->product . "<br>";
echo $xml->link[4]->prices . "<br>";
echo $xml->link[4]->image . "<br>";
echo $xml->link[4]->url . "<br>" . "<br>";

echo $xml->link[5]->company . "<br>";
echo $xml->link[5]->product . "<br>";
echo $xml->link[5]->prices . "<br>";
echo $xml->link[5]->image . "<br>";
echo $xml->link[5]->url . "<br>" . "<br>";

echo $xml->link[6]->company . "<br>";
echo $xml->link[6]->product . "<br>";
echo $xml->link[6]->prices . "<br>";
echo $xml->link[6]->image . "<br>";
echo $xml->link[6]->url . "<br>" . "<br>";

echo $xml->link[7]->company . "<br>";
echo $xml->link[7]->product . "<br>";
echo $xml->link[7]->prices . "<br>";
echo $xml->link[7]->image . "<br>";
echo $xml->link[7]->url . "<br>" . "<br>";

echo $xml->link[8]->company . "<br>";
echo $xml->link[8]->product . "<br>";
echo $xml->link[8]->prices . "<br>";
echo $xml->link[8]->image . "<br>";
echo $xml->link[8]->url . "<br>" . "<br>";

echo $xml->link[9]->company . "<br>";
echo $xml->link[9]->product . "<br>";
echo $xml->link[9]->prices . "<br>";
echo $xml->link[9]->image . "<br>";
echo $xml->link[9]->url . "<br>" . "<br>";

echo $xml->link[10]->company . "<br>";
echo $xml->link[10]->product . "<br>";
echo $xml->link[10]->prices . "<br>";
echo $xml->link[10]->image . "<br>";
echo $xml->link[10]->url . "<br>" . "<br>";

echo $xml->link[11]->company . "<br>";
echo $xml->link[11]->product . "<br>";
echo $xml->link[11]->prices . "<br>";
echo $xml->link[11]->image . "<br>";
echo $xml->link[11]->url . "<br>" . "<br>";

echo $xml->link[12]->company . "<br>";
echo $xml->link[12]->product . "<br>";
echo $xml->link[12]->prices . "<br>";
echo $xml->link[12]->image . "<br>";
echo $xml->link[12]->url . "<br>" . "<br>";

echo $xml->link[13]->company . "<br>";
echo $xml->link[13]->product . "<br>";
echo $xml->link[13]->prices . "<br>";
echo $xml->link[13]->image . "<br>";
echo $xml->link[13]->url . "<br>" . "<br>";

echo $xml->link[14]->company . "<br>";
echo $xml->link[14]->product . "<br>";
echo $xml->link[14]->prices . "<br>";
echo $xml->link[14]->image . "<br>";
echo $xml->link[14]->url . "<br>" . "<br>";

echo $xml->link[15]->company . "<br>";
echo $xml->link[15]->product . "<br>";
echo $xml->link[15]->prices . "<br>";
echo $xml->link[15]->image . "<br>";
echo $xml->link[15]->url . "<br>" . "<br>";

echo $xml->link[16]->company . "<br>";
echo $xml->link[16]->product . "<br>";
echo $xml->link[16]->prices . "<br>";
echo $xml->link[16]->image . "<br>";
echo $xml->link[16]->url . "<br>" . "<br>";

echo $xml->link[17]->company . "<br>";
echo $xml->link[17]->product . "<br>";
echo $xml->link[17]->prices . "<br>";
echo $xml->link[17]->image . "<br>";
echo $xml->link[17]->url . "<br>" . "<br>";

echo $xml->link[18]->company . "<br>";
echo $xml->link[18]->product . "<br>";
echo $xml->link[18]->prices . "<br>";
echo $xml->link[18]->image . "<br>";
echo $xml->link[18]->url . "<br>" . "<br>";

echo $xml->link[19]->company . "<br>";
echo $xml->link[19]->product . "<br>";
echo $xml->link[19]->prices . "<br>";
echo $xml->link[19]->image . "<br>";
echo $xml->link[19]->url . "<br>" . "<br>";

echo $xml->link[20]->company . "<br>";
echo $xml->link[20]->product . "<br>";
echo $xml->link[20]->prices . "<br>";
echo $xml->link[20]->image . "<br>";
echo $xml->link[20]->url;
*/
?>