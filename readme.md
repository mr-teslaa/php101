# Lesson 5: Multidimensional Arrays

-   Multidimensional Array: Syntex of multidimensional array is

    ```php
    $blog = [
        ['array0vlaue0', 'array0value1', 'array0value2'],
        ['array1vlaue0', 'array1value1', 'array1value2'],
        ['array2vlaue0', 'array2value1', 'array2value2'],
    ]
    ```

    for accessing the first array of `$blog` we should call that like this `$blog[0]` and so on. For accessing the 2nd value of second array we need to call `$blog` like this `$blog[1][1]`

    but that's a index array, for assosiative array syntex will be

    ```php
    $blog = [
        ['array0vlaue0', 'array0value1', 'array0value2'],
        ['array1vlaue0', 'array1value1', 'array1value2'],
        ['array2vlaue0', 'array2value1', 'array2value2'],
    ]
    ```

-   Takeoff array with `array_pop()`: it will grab and display the value of the last array of an multidimensional array.

    _I created separate brach of each lesson_
