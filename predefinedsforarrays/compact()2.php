<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Compact()</title>
</head>
<body>
  <?php


  /*
  compact()   : It is used to generate the value of the relevant keys from the variables previously defined by the same name by seeing the elements in the array as keys.
  */

    $name           =     "Mehmet";
    $surname        =     "Baran";
    $dateofbirth    =   "10.04.2000";       

    $Informations   = array("name", "surname");


    echo "<pre>";
    print_r($Informations);
    echo "</pre><br />";

    $Conclusion     =   compact($Informations, "dateofbirth");
    //Another usage.
    
    echo "<pre>";
    print_r($Conclusion);
    echo "</pre><br />";



  ?>
</body>
</html>

  