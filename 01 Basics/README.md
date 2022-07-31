<!-- first start -->
<details>
<summary>01 First</summary>

Printing Hello World in PHP:

```php
echo "Hello World!";
```

</details>
<!-- first end -->

<details>
<summary>02 Variables</summary>

Variable can be created like this:

```php
$name = 'Bangladesh';
$age = 123;
$my_name = "Tansen";
$my_name1 = "Tansen";
$myName="Tansen";
$MyName="Tansen";
```

> Best practise is to use the same format everywhere

We can't create variable like this:

```php
$age a = 123;
$1my_name = "Tansen";
```
`Reference : [php-fig](https://www.php-fig.org/)`

Tricky fun with php, here first `$word` is `age` now this `age string` is with `$age` so the output will be `123`:

```php
$age = 123;
$word="age";
echo $$word;
```

Concate in php using "`.`":

```php
$name = "Bangladesh";
echo "Hello".$name;
```

Another way to Concate and new line in php:

```php
$name = "Bangladesh";
echo "Hello $name";
// or
echo "Hello {$name}";
echo "\n";
```
> Best practise is `"Hello {$name}";`


</details>
