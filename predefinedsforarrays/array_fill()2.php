<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Array_Fill()</title>
</head>
<body>
    <?php
    
    /*
    array_fill      : It is using to create a new array by filling it with specified values.
    array_fill_keys : It is using to create a new array by accepting the current values as key names and  fill it with specified values 
    */

    $names		=	array("Mehmet", "Baran", "Kara", "Geylani");
    $values   =	array_fill_keys($names, "Geylanisoftware");

    echo "<pre>";
    print_r($values);
    echo "</pre>";


    ?>
</body>
</html>

    