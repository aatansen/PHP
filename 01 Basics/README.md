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

php variable is mutable because it can be change, here `$task` is `"Read"` and then changed to `"Write"`:

```php
$task = "Read";
echo $task;
echo "\n";
$task = "Write";
echo $task;
echo "\n";
```

Define and Constant in PHP ,  `we can't change the value of constant` :

```php
define("PI", 3.1416);
echo "Value of PI is ".PI;
echo "\n";
echo constant("PI");
```

Another way to print define constant in php tricky way:

```php
define("PI", 3.1416);
$constant = "constant";
echo "Value of PI = {$constant('PI')}";

```
</details>
