<?php
// Array with names
$words = array(
    "Earing", "HAHA",
    "Skrit",
    "Lengthang-Develop this","Card",
    "Envision",
    "Kuy_teav ", "Wellet",
    "Ring",
    "Thank Everyone for the project","Khmer-ring", "Neckless", 
);

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len = strlen($q);
  foreach($words as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      // Add the suggestion-item class to each suggestion item
      if ($hint === "") {
        $hint = '<div class="suggestion-item">' . $name . '</div>';
      } else {
        $hint .= '<br><div class="suggestion-item">' . $name . '</div>';
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>
