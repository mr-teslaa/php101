<!-- either you can echo any string in a php file, or you can echo that into a html tag like h1 or so -->
<?php
    define('NAME', 'JHONE DOE');
    $name = "MR-TESLA";
    echo 'Name form echo is: '.$name;
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

    <h3>
        Name from general variable is "<?php echo $name; ?>"
    </h3>

    <h3>
        Name form constant variable is "<?php echo NAME; ?>"
    </h3>

</body>


</html>