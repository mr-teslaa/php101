<?php
    // index array
    $blog_index = [
        ['How to make money online', 'lorem teh quick brown', 'Jhone Doe'],
        ['How to fail in exam', 'you really think that', 'mr tesla'],
        ['How to start dropshipping', 'dropshipping is an awesome way to make money', 'Evan Yu'],
    ];

    // associats array
    $blog = [
        [
            'title' => 'How to make money online',
            'details' => 'lorem teh quick brown',
            'author' => 'Jhone Doe'],
        [
            'title' => 'How to fail in exam',
            'details' => 'you really think that',
            'author' => 'mr tesla'
        ],
        [
            'title' => 'How to start dropshipping',
            'details' => 'dropshipping is an awesome way to make money',
            'author' => 'Evan Yu'
        ],
    ];

    $blog[] = ['another title', 'another description', 'another author' ];
    print_r($blog);
    echo "<hr/>";
    echo "Second value of second arrary: ".$blog_index[1][1];
    echo "<br/>";
    echo "Using assesiate arrray to access same value: ".$blog[1]['details'];
    echo "<hr/>";
    $popped = array_pop($blog);
    print_r($popped);
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