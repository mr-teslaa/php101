# Lesson 6: Loops

### I am not going to expalin how loop works. Hope you already know what loops is, if not then learn any programming basics and come back here. Or try some duckduckgoing 😉.

-   `for()` loop: syntex is

    ```php
    $blogs = ['blog1', 'blog2', 'blog3',....];
    for($i=0; $i<count($blogs); $i++) {
        echo 'any template or something';
    }
    ```

-   `foreach()` loop: syntex is

    ```php
    $blogs = ['blog1', 'blog2', 'blog3',....];
    foreach($blogs as $blog) {
        echo 'any template or something';
    }
    ```

    The problem of `foreach()` we can't get the index number. For that we need to use `$key=>$value` method. syntex is

    ```php
    foreach ($array as $key => $value) {.........};
    ```

-   `while(condition)` loops: syntex is

    ```php
    while(condition) {......}
    ```

    _I created separate brach of each lesson_
