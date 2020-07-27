<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Array_Values()</title>
</head>
<body>
  <?php


  /*
  Array_Values()       : It is using to create a new array from an older ones elements.
  */



  $Names    = array("Mehmet" =>"php", "Baran" =>"HTML", "Geylani" =>"CSS", "Kara" => "JS");


  echo "<pre>";
  print_r($Names);
  echo "</pre><br />";


  $Process    = array_values($Names);

  echo "<pre>";
  print_r($Process);
  echo "</pre><br />";


  echo "<pre>";
  print_r($Process2);
  echo "</pre><br />";


  ?>
</body>
</html>

  





