# Lesson 4: Arrays

-   `indexed array`: there are 2 ways to create an array

    -   you can create array like this `$name = ['jhone', 'doe']`. That's the most populer way to create array
    -   another way is `$name = array('jhon', 'doe', 'tesla')`.

-   `print_r()`: For displaying the whole array, we need to use `print_r()` funtion. because `echo` want a easy string to display, so it can't display the whole array. `print_r()` will do that for us.

-   `array_push()`: we can add new value into an array in 2 different way.

    -   `$name[] = value`
    -   `array_push($name, value)`

-   `count()`: for counting how many value an array have, we can use `count()` function to do that. `echo count($name)`

-   `array_merge()`: for merging 2 array we can use `array_merge($value1, $value2)` function.

-   assosiate array: in assosiate array we can define the index name instead of number. like this `$city_name = ['jhone' => 'oslo', 'doe' => 'nairubi', 'hafsa' => 'mecca'];`
    _I created separate brach of each lesson_
