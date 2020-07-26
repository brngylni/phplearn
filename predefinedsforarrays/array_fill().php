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

    $Values   = array_fill(0, 10, "Mehmet");

    // $Values = array(0 => "Mehmet", 1 => "Mehmet", 2 => "Mehmet", 3 => "Mehmet", 4 => "Mehmet", 5 => "Mehmet")

    echo "<pre>";
    print_r($Values);
    echo "</pre>";


    ?>
</body>
</html>

    