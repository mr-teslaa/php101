<?php
    // for loop
    $blogs = [
        'how to deploy flask website with ngnix',
        'how to deploy php website in apache web server',
        'how to connect MySQL with php application'
    ];

    echo "<h1>All Blogs</h1>";
    echo "<h2>for() loop example</h2>";
    for ($i=0; $i<count($blogs); $i++) {
        echo "Blog no: ".$i+1;
        echo "<br/>";
        echo "Title: $blogs[$i]";
        echo "<hr/>";
    }

    // foreach loop
    echo "<h2>foreach() loop example</h2>";
    foreach ($blogs as $blog) {
        echo "Blog Title: $blog";
        echo "<br/>";
    }

    echo "<br/>";
    echo '<strong>With index number, using $key=>$method method</strong>';
    echo "<br/>";

    foreach ($blogs as $index=>$blog) {
        echo "Blog no: ".$index+1;
        echo "<br/>";
        echo "Title: $blog";
        echo "<hr/>";
    }

    echo "<br/>";
    echo "<br/>";
    echo "<h2>foreach() loop example with assosiates array</h2>";
    $products = [
        [
            'name' => 'Mechanical Keyboard',
            'price' => '$400'
        ],
        [
            'name' => 'Monitor',
            'price' => '$5000'
        ],
        [
            'name' => 'xbox',
            'price' => '$3000'
        ]
    ];
    foreach ($products as $product) {
        echo "Product: ".$product['name']." - ".$product['price'];
        echo "<br/>";
    }
    
    echo "<br/>";
    echo "<br/>";
    echo "<h2>foreach() loop example with assosiates array</h2>";
    $i=0;
    while ($i < count($products)) {
        echo "Products: ".$products[$i]['name'].' - '.$products[$i]['price'];
        echo "<br/>";
        $i++;
    }
?>

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
    <main>
        <h1>Display product in html with template method</h1>
        <div class="row">
            <?php foreach ($products as $product) {?>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $product['name']; ?>
                        </h5>
                        <a href="#" class="btn btn-primary">
                           <?php echo $product['price']." "; ?> 
                            Add to cart
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>     
        </div>
    </main>

</body>


</html>