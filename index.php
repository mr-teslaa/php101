<?php
    $name = ['nikola', 'tesla'];
    $another_name = array('hafsa', 'aysha', 'fatima');

    // index array
    echo "<h1>Index array</h1>";
    echo "<hr/>";
    echo "<h3>popular way to creat array</h3>";
    echo "<br/>";
    echo "First person of array: $name[0]";
    echo "<hr/>";
    echo "another way to creat array";
    echo "<br/>";
    echo "First person of array: $another_name[0]";
    echo "<hr/>";
    echo "<h3>Display whole array with print_r function</h3>";
    print_r($name);
    echo "<br/>";
    print_r($another_name);
    echo "<h3>Overwrite any data in array</h3>";
    $another_name[0] = 'halima';
    print_r($another_name);
    echo "<hr/>";
    echo "<h3>push/add any data in array</h3>";
    $another_name[] = 'hafsa';
    array_push($name, 'jhone');
    print_r($another_name);
    echo "<br/>";
    print_r($name);
    echo "<hr/>";
    echo "<h3>counting array value</h3>";
    echo '$name'." have ".count($name)." value";
    echo "<hr/>";
    echo "<h3>merging 2 array</h3>";
    $merge_array = array_merge($name, $another_name);
    print_r($merge_array);
    echo "<hr/>";

    // assosiate array (eky & value pairs)
    echo "<h1>Assosiate array</h1>";
    $city_name = ['jhone' => 'oslo', 'doe' => 'nairubi', 'hafsa' => 'mecca'];
    echo "Jhons city name is: ".$city_name['jhone'];
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First php file</title>
    <style>
        body {
            font-family: sans-serif;
        }
    </style>
</head>

<body>


</body>


</html>