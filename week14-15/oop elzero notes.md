# inheritance

## method overriding
- see comment 
```php
class Phone
{
    private $x;
    public function __construct($x)
    {
        $this->x = $x;
    }
    public function print()
    {
        echo $this->x;
    }
}
class Apple extends Phone
{
    public function print()
    {
        echo "hello";
    }
}
$apple6 = new Apple(3); // it appears that you don't override constructor so it is inherited; think of it like a big class that has the whole thing not like java
$apple6->print();

```

## final
- The final keyword **prevents child classes from overriding a method or constant by prefixing the definition with final** .
- If the class itself is being defined final then it cannot be extended. 
- ==Properties== cannot be declared final: only ==classes, methods, and constants==
- why to use final ? real examples
# abstraction
- notes
	- abstract class can't be instantiated
	- can have regular methods and abstract method
	- made to be inherited
	- abstract methods can't be private - make sense
	- ==have rules that any extending class must follow==
	- ==see protection level relationship between abstract class and apple class for methods==
	  if in abstract it is protected so in child it can  protected - public 
```php
abstract class Phone
{
    protected $x;
    public function __construct($x)
    {
        $this->x = $x;
    }
    abstract public function print();
}
class Apple extends Phone
{
    public function print()
    {
        echo $this->x;
    }
}
$apple6 = new Apple(3);
$apple6->print(); // 3
```

# interface
- notes
	- no properties - implementation
	- just write the signature of the methods
	- methods are assumed to be public
	- interface to set guidelines that every class have to follow
```php
interface DbConnects
{
    function getUsers();
    function getArticles();
}
class Sql implements DbConnects
{
    function getUsers()
    {
        $test = "select * from users";
    }
    function getArticles()
    {
    }
}
// class Oracle implements DbConnects that has different functionalities
```

## access specifier
1. public: you can access members from any where using object
2. protected: you can access members using object inside class and extended class
3. private: you can access members using object or this inside its class
```php
class Test
{
    private $x = 20;
    public function print()
    {
        // echo $this->x; 
        echo (new Test())->x; // works for public & protected & private
    }
}

class Child extends Test
{
    public function printFromChild()
    {
        echo (new Test())->x; // works for public & protected
    }
}
echo (new Test())->x; // accessing x from global  (works only for public)
(new child)->printFromChild();
```

# magic methods

- **`__construct()`**
	called when object is created
	can be inherited which is different than java
- **`__destruct()`**
	called when object is released
	can be inherited which is different than java
```php
class Test
{
    public function __construct($x)
    {
        echo "welcome";
    }
    public function __destruct()
    {
        echo "bye";
    }
}
class child extends Test
{
    // if there is no construct here so I will call the parent
    // also if no destruct here it will call the parent one
    // public function __destruct()
    // {
    //     echo "good bye";
    // }
}
new child(5);

```

- **`__call($methodName, $params)`**
	called when Invoking function that is not accessible or not found
	Accepts two parameters [$methodName, $params]
```php
class Test
{
    private function sayHello($a, $b)
    {
    }
    function __call($name, $arguments)
    {
        echo "this method  $name is not exist or not accessible";
        print_r($arguments);
    }
}
(new Test())->sayHello('abdo', 'ahmed');
```

- **`set - get`**
```php
class Test
{
    public function __get($name)
    {
        echo "this property $name is not accessible or not found";
    }

    // set is good because it doesn't allow adding new variables to object using assinging
    public function __set($name, $value)
    {
        echo "this property $name is not accessible or not found";
    }
}
$obj  = new Test();
$obj->x;
$obj->x = 30;
```