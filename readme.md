# Lesson 1: Strings

-   String could be join with `.` sign. i.e. `$first_name.$second_name`, where `$first_name` and `$second_name` is 2 variable.

-   We can also join variable with strings like this `echo 'Hello, my name is '.$name` where name is a variable

-   We can't access any variable in `' '` single quoutes but we can do it in `" "` double qoutes. i.e `echo 'My name is $name'` that's not gonna work. but `echo "My name is $name"` this works perfectly.
    **Accessing vaiable in a string called Interpolation**

-   `Escaping Characters`: When we need to display `" "` double qoutes in a string, that's generally not gonna work. i.e `echo "My name is "TESLA""` that's not gonna work. php will close the statement after `is` and start again after `TESLA`. for using `" "` double qoutes here we need to use a method called escaping characters. For escaping any characters we need to use a `\` backslash. in our case it will be `echo "My name is \"Tesla\""`. What it will do is, backslash will say **hey php, don't close here, just escape this double quotes**
    **another alternative is `echo 'My name is "Tesla"'`**

-   we can manupulate any charater in a string with index number. index number will start from 0. i.e. `$name = "TESLA"` here if we want to change the 2nd letter we can access that like this `$name[1]` because counting start from 0. for replace this letter we can do this `echo str_replace('the letter we want to replace', 'which letter we want to put in that position', 'variable/string name')`, in this case the `echo str_replace('M', 'n', $name)` will be `nR-TESLA`.
    **Remember: The `str_replace() function is case sensetive`**

-   `floor()`: Floor function used for cut out the number after peuriod. it turns a float number into decimal number. i.e. if we have a variable `$pi=3.1416` and pass it through the `floor()` function the output will be `3`.

-   `ceil()`: Ceil function does the opposite of floor function. It fillup the number. i.e. if we have a variable `$pi=3.1416` and pass it through the `ceil()` function the output will be `4` because it fillup the number.

-   `pi()`: pi funtion use to generate pi value.

    _I created separate brach of each lesson_
