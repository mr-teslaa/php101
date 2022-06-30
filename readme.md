# Lesson 7: Functions

## If we want to return variable with string then we should do that like this, otherwise it will shows error

```php
function formateProduct($product) {
    echo "{$product['name']} costs ${$product['price']}"
}
```

## `include()` VS `require()`: if we use include function, we can execute rest of the php code. but if we use require function then rest of the code from require function will not work.

    _I created separate brach of each lesson_
