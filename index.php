<!-- either you can echo any string in a php file, or you can echo that into a html tag like h1 or so -->
<?php
    $name = "MR-TESLA";
    echo 'Name form single quotes echo is: $name';
    echo '<br />';
    echo "Name form double quotes echo is: $name";
    echo "<hr />";
    $replaced_name = str_replace('M', 'n', $name);
    echo "Replace m into n: ".$replaced_name;
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