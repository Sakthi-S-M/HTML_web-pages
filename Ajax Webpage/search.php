<?php
// Array with names
$a[] = "Accessories";
$a[] = "Biscuits";
$a[] = "Cotton saree";
$a[] = "Digital watch";
$a[] = "Electronics";
$a[] = "Farm equipments";
$a[] = "Gadgets";
$a[] = "Handkey";
$a[] = "Ice cream categories";
$a[] = "Jugs and mugs";
$a[] = "Kurtas";
$a[] = "Laptops";
$a[] = "Notebooks";
$a[] = "Optics";
$a[] = "Pens and pencils";
$a[] = "Apple";
$a[] = "Rockery craft";
$a[] = "Mobile phones";
$a[] = "Watches";
$a[] = "Makeup things";
$a[] = "Engineering things";
$a[] = "Snacks";
$a[] = "Things";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Gifts";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vechile toys";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>