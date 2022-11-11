<?php
$dynamicXML=simplexml_load_file("dynamicXML.xml") or die("Error: Cannot create object");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DynamicXML</title>
</head>
<body>
<form action="/action_page.php" method="get">
  <label for="company">Choose a company : </label>
  <select name="company" id="company">
    <optgroup label="Company">
      <option value="Amazon">Amazon</option>
      <option value="Alibaba">Alibaba</option>
      <option value="eBay">eBay</option>
      <option value="Walmart">Walmart</option>
      <option value="Groupon">Groupon</option>
      <option value="Macys">Macys</option>
      <option value="Samsung">Samsung</option>
      <option value="IKEA">IKEA</option>
      <option value="LTT Store">LTT Store</option>
      <option value="Chewy">Chewy</option>
    </optgroup>
  </select>
  <br>
  <label for="product">Product : </label>
  <input id="product" type="text">
  <br>
  <label for="prices">Prices : </label>
  <input id="prices" type="number">
  <br>
  <label for="image">Image : </label>
  <input id="image" type="file">
  <br>
  <label for="url">URL : </label>
  <input id="url" type="url">
  <input type="submit" value="Submit">
</form>
</body>
</html>