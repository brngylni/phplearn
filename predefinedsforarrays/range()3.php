<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Learning PHP</title>
</head>
<body>
    <?php
 
    /*
    range()   : It is using to create a new array by the filling in the specified direction.
    */
  
    $Numbers    = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

    echo "<pre>";
    print_r($Numbers);
    echo "</pre><br />";

    $Process    = range("a","z");
    
    echo "<pre>";
    print_r($Process);
    echo "</pre>";


    ?>
</body>
</html>

    