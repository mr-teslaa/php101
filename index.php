<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First php file</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <main class="container">
        <h1>Functions</h1>

        <?php
            function formateProduct($product) {
                echo "{$product['name']} costs {$product['price']} USD to buy <br />";
            }

            formateProduct(['name' => 'pizza', 'price' => 20])
        ?>

        <hr />

        <h1> include() function </h1>
        <?php
            include('ninjas.php');
            // you can also write the function like this
            // include 'ninjas.php'
            require('content.php');
            
            echo "end of include() function";
        ?>
    </main>

</body>


</html>