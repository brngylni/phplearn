<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Array_Unique</title>
</head>
<body>
    <?php

    /*
    array_unique()      :   It using to delete the elements of an array which has repeated then create a new array.
    */


    $Values     =   array("Mehmet", "Blue", "Table", "Sky", "Mehmet", "Baran", "Table", "Mehmet", "Mehmet", "Honor", "Red", "Clouds");


    echo "<pre>";
    print_r($Values);
    echo "</pre><br />";

    $Conclusion     =   array_unique($Values);    
    //Also nothing'll be changed if the key names assigned from user.
    echo "<pre>";
    print_r($Conclusion);
    echo "</pre><br />";


    ?>
</body>
</html>
    