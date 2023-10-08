psp: **Pre-compiled Server Pages**

# oop notes

1. mvc: model - view - control
2. object have information and functions regarding one thing
3. file can have multiple classes but it is not the ==best practice==
4. properties is not variables they are var in class
   and same for method (function)
5. always make properties and methods private then think do I really need them outside the class
6. in inheritance you just inherit ==properties and methods== from one class into another class
   tell now just syntax of written and how to use properties and methods

```php
// not in index
class Person
{
    public $name;

    public function setName($name)
    {
        $this->name = $name; // you must use $this->name not just $name   (gloabal rule)
    }
}
// in index
    include 'includes/newclass.php';
    $person1 = new Person();
    $person1->setName('abdo');
    echo $person1->name;
```

7. constructor and destructor
    - destruct can be used to close the connection with database

```php
class Person
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function __destruct()
    {
        echo 'end';
    }
}
in index
// you can unset($object) and this will trigger the destructor whenever you want
```

8. static properties and methods 1. static properties and methods are used when you want to create them that will not have to be part of object
   **this vs self**
   Use `$this` to refer to the current object. Use `self` to refer to the current class. In other words, use `$this->member` for non-static members, use `self::$member` for static members and `constants`.
   **this**: refers to this class and every class that I extend to
   ==general rule in the class you can't access anything unless you use `this - self - parent`==

```php

class FirstClass
{
    const EXAMPLE = "You can't change this";

    public static function test()
    {
        echo self::EXAMPLE;
    }
}
class Second extends FirstClass
{
    const EXAMPLE = "You can't change this from second";
    public $x = 'hello';
    public static function test2()
    {
        echo parent::EXAMPLE . "<br>";
        echo self::EXAMPLE . "<br>";
        // echo $this->x; error bacause you will access it without creating object
    }
}

echo Second::test(); // will access parent
echo Second::test2(); // will access child - will access child also if the two methods have the same name

```

9. autoloader

```php
spl_autoload_register('autoLoad');
function autoLoad($className)
{
    // path is not casesensitive
    // this function is only executed one per class (very good)
    $path = "Classes/$className.class.php";
    echo $path . '<br>';
    include $path;
}

```

10. strict type enable

```php
declare(strict_types=1);
// so here you can pass only string not int
public function setName(string $name)
{
    $this->name = $name;
}
```

11. interface

-   **use them if** 1. if you to set some sort of rules that every class implements you will have to follow
    override your declared method 2. if you want to refer to group of classes that have the same method with different functionality
    you can access all class methods using interface reference not only the implemented one

```php

interface PaymentInterface
{
    public function payNow();
}

class Paypal implements PaymentInterface
{
    public function payNow()
    {
        echo 'from Paypal pay<br>';
    }
    public function print()
    {
        echo 'from Paypal print<br>';
    }
}

function pay(PaymentInterface $p)
{
    echo $p->payNow();
    echo $p->print();
}

pay(new Paypal());
```

12. abstract class

    1.  is just like what you have learned
    2.  repeat

13. anonymous class
    if there is a class you want to use just this time

```php
$obj = new class
{
    public function print()
    {
        echo 'hello world';
    }
};
$obj->print();
```

14. `includes` folder has any folder that is not class and will have only php file that will not shown by user such as `validation`

## database handling

```php
class Dbh
{
// $dbh = "Database Handle"
// $sth = "Statement Handle"
// $dsn = "data source name"
// pdo PHP Data Objects
    private $host = 'localhost';
    private $user = 'root';
    private $pwd = '';
    private $dbName = 'test1';

    // why
    protected function connect()
    {
        // database-type ; host; database-name
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        // to return data in associative array
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}
```

-   in the model class
    -   it is better to use specific task function rather than using big one function
    -   so write small function that does specific query from db

```php
// model -> this deals with database
class Users extends Dbh
{
    // get single user from database
    protected function getUsers($name) // view class uses this
    {
        $sql = "SELECT * FROM practice WHERE name = ?";
        $sth = $this->connect()->prepare($sql);
        $sth->execute([$name]);
        // FETCH_ASSOC
        $results = $sth->fetchAll();
        return $results;
    }
    protected function setUser($name, $age) // contr class uses this
    {
        $sql = 'insert into practice (name, age) values ( ?, ?)';
        $sth = $this->connect()->prepare($sql);
        $sth->execute([$name, $age]);
    }
}
```

-   MVC model
    ![[[Pasted image 20231008093327.png](https://www.google.com/url?sa=i&url=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FModel%25E2%2580%2593view%25E2%2580%2593controller&psig=AOvVaw2DOUk-KtvBjedZ7XgMqvVo&ust=1696833238961000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCPCMi4jt5YEDFQAAAAAdAAAAABAE)https://www.google.com/url?sa=i&url=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FModel%25E2%2580%2593view%25E2%2580%2593controller&psig=AOvVaw2DOUk-KtvBjedZ7XgMqvVo&ust=1696833238961000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCPCMi4jt5YEDFQAAAAAdAAAAABAE]]
