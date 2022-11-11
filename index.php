<?php
if(isset($_POST['send'])){
    $xml = new DOMDocument("1.0", "UTF-8");
    $xml -> load("dynamicXML.xml");

    $root = $xml -> getElementsByTagName("pages") -> item(0);

    $link = $xml -> createElement("link");
    $company = $xml -> createElement("company", $_POST['comopany']);
    $product = $xml -> createElement("product", $_POST['product']);
    $prices = $xml -> createElement("prices", $_POST['prices']);
    $image = $xml -> createElement("image", $_POST['image']);
    $url = $xml -> createElement("url", $_POST['url']);

    $link -> appendChild($company);
    $link -> appendChild($product);
    $link -> appendChild($prices);
    $link -> appendChild($image);
    $link -> appendChild($url);

    $root -> appendChild($link);

    $xml -> save("dynamicXML.xml");

    echo "Successfully Added";
}else {
    echo "Error";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>DynamicXML</title>
</head>
<body>
<form action="index.php" method="post">
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
  <br>
  <label for="product">Product : </label>
  <input id="product" type="text" name="product">
  <br>
  <br>
  <label for="prices">Prices : </label>
  <input id="prices" type="number" name="prices">
  <br>
  <br>
  <label for="image">Image : </label>
  <input id="image" type="file" name=""image>
  <br>
  <br>
  <label for="url">URL : </label>
  <input id="url" type="url" name="url">
  <br>
  <br>
  <input type="submit" value="Submit">
</form>
</body>
</html>