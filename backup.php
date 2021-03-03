<?php

// decode JSON string
$json = 
'{
"uglify-js": "1.3.4"
, "jshint": "0.9.1"
, "recess": "1.1.8"
, "connect": "2.1.3"
, "hogan.js": "2.0.0"
}';
var_dump(json_decode($json));
echo "\n";
var_dump(json_decode($json, true));


$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
"Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
"Finland"=>"Helsinki", "France" => "Paris",
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
"Germany" => "Berlin", "Greece" => "Athens",
"Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
"Portugal"=>"Lisbon", "Spain"=>"Madrid",
"Sweden"=>"Stockholm", "United Kingdom"=>"London",
"Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
"Czech Republic"=>"Prague", "Estonia"=>"Tallin",
"Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta",
"Austria" => "Vienna", "Poland"=>"Warsaw") ;
asort($ceu) ;
foreach($ceu as $country => $capital)
{
echo "The capital of $country is $capital"."\n" ;
}

$arr = [
    "apple",
    ["banana","strawberry", "apple"]
];

function numberOfItems(array $arr, string $item) : int
{
    $count = 0;
    foreach($arr as $key => $value){
        if(is_array($value)){
            $count += numberOfItems($value, $item);
        }
    }
    return $count;
}

echo numberOfItems($arr,"apple");


function factorial( $n ) {

    // Base case
    if ( $n == 0 ) {
      echo "Base case: $n = 0. Returning 1...<br>";
      return 1;
    }
  
    // Recursion
    echo "$n = $n: Computing $n * factorial( " . ($n-1) . " )...<br>";
    $result = ( $n * factorial( $n-1 ) );
    echo "Result of $n * factorial( " . ($n-1) . " ) = $result. Returning $result...<br>";
    return $result;
  }
  
  echo "The factorial of 5 is: " . factorial( 5 );

$arr = [
    "apple",
    ["banana","strawberry", "apple"]
];


$myArray = array(
    'example',
    'example two',
    array(
        'another level',
        array(
            'level three'
        )
    )
);

function recursive(array $array, string $item) : int
{
    $count = 0;
    foreach($array as $key => $value){
        //If $value is an array.
        if(is_array($value)){
            //We need to loop through it.
            recursive($value,$item);
        } else{
            //It is not an array, so print it out.
            if ($value == $count){$count = $count + 1;}
            //echo $value, '<br>';
        }
    }
    return $count;
}

echo recursive($arr,"apple");


        /* First method to create array. */
        $numbers = array( 1, 2, 3, 4, 5);
         
        foreach( $numbers as $value ) {
           echo "Value is $value <br />";
        }
        
        /* Second method to create array. */
        $numbers[0] = "one";
        $numbers[1] = "two";
        $numbers[2] = "three";
        $numbers[3] = "four";
        $numbers[4] = "five";
        
        foreach( $numbers as $value ) {
           echo "Value is $value <br />";
        }

               /* First method to associate create array. */
       $salaries = array("mohammad" => 2000, "qadir" => 1000, "zara" => 500);
         
       echo "Salary of mohammad is ". $salaries['mohammad'] ;
       echo "Salary of qadir is ".  $salaries['qadir'];
       echo "Salary of zara is ".  $salaries['zara'];
       
       /* Second method to create array. */
       $salaries['mohammad'] = "high";
       $salaries['qadir'] = "medium";
       $salaries['zara'] = "low";
       
       echo "Salary of mohammad is ". $salaries['mohammad'] ;
       echo "Salary of qadir is ".  $salaries['qadir'];
       echo "Salary of zara is ".  $salaries['zara'];

    $arr = [
        "apple",
        ["banana","strawberry", "apple"]
    ];
    

    $count = 0;
    function recursive1($array, $level = 1, $item) : int{
        global $count;
        foreach($array as $key => $value){
            //If $value is an array.
            if(is_array($value)){
                //We need to loop through it.
                recursive1($value, $level + 1, $item);
            } else{
                //It is not an array, so print it out.
                if ($value == $item){$count = $count + 1;
                echo $key . ": " . $value, '<br>';}
            }
        }
        return $count;
    }
    echo recursive1($arr,1,"apple");

// PHP code to create  
// multidimensional array  
// Creating multidimensional 
// associative array 
$marks = array(       
    // Ankit will act as key 
    "Ankit" => array(          
        // Subject and marks are  
        // the key value pair 
        "C" => 95, 
        "DCO" => 85, 
        "FOL" => 74, 
    ),          
    // Ram will act as key 
    "Ram" => array(          
        // Subject and marks are  
        // the key value pair 
        "C" => 78, 
        "DCO" => 98, 
        "FOL" => 46, 
    ),      
    // Anoop will act as key 
    "Anoop" => array(          
        // Subject and marks are 
        // the key value pair 
        "C" => 88, 
        "DCO" => 46, 
        "FOL" => 99, 
    ), 
); 
// Accessing the array element  
// using dimensions      
// It will display the marks of 
// Ankit in C subject 
//echo $marks['Ankit']['C'] . "\n";       
// Accessing array elements using for each loop 
foreach($marks as $mark) { 
    echo $mark['C']. " ".$mark['DCO']." ".$mark['FOL']."\n";  
} 


$sweet = array('a' => 'apple', 'b' => 'banana');
$fruits = array('sweet' => $sweet, 'sour' => 'lemon');

function test_print($item, $key)
{
    echo "$key holds $item\n";
}

array_walk_recursive($fruits, 'test_print');


session_start();
   
if( isset( $_SESSION['counter'] ) ) {
   $_SESSION['counter'] += 1;
}else {
   $_SESSION['counter'] = 1;
}
 
$msg = "You have visited this page ".  $_SESSION['counter'];
$msg .= " in this session.";
echo $msg;

class Books {
    /* Member variables */
        var $price;
        var $title;
        
        function __construct($par1, $par2){
            $this->title = $par1;
            $this->price = $par2;
        }

        /* Member functions */
        function setPrice($par){
        $this->price = $par;
        }
        
        function getPrice(){
        echo $this->price ."<br/>";
        }
        
        function setTitle($par){
        $this->title = $par;
        }
        
        function getTitle(){
        echo $this->title ." <br/>";
        }
    }
//$physics = new Books;
//$maths = new Books;
//$chemistry = new Books;

//$physics->setTitle("Physics for High School");
//$physics->getTitle();

$maths = new Books("Advanced Chemistry", 15);
$maths->getTitle();
$maths->getPrice();

class Novel extends Books {
    var $publisher;
    function setPublisher($par){
        $this->publisher = $par;
    }
    function getPublisher(){
        echo $this->publisher. "<br />";
    }
    function getPrice() {
        echo $this->price . " with new price <br/>";
        return $this->price;
     }
        
     function getTitle(){
        echo $this->title . " with new title <br/>";
        return $this->title;
     }    
}

$littlelady = new Novel("Little Lady", 40);
$littlelady->getTitle();
$littlelady->getPrice();

class MyClass {
    var $car = "skoda";
    var $driver = "SRK";
    
 //   function __construct($par) {
       // Statements here run every time
       // an instance of the class
       // is created.
//    }
    
    function myPublicFunction() {
       return("I'm visible!");
    }
    
    private function myPrivateFunction() {
       return("I'm  not visible outside!");
    }
 }

 $new1 = new MyClass;
 //echo $new1->myPublicFunction();
 //echo $new1->car;

 var_dump($new1->car);
 echo $new1->driver;

 interface iTemplate
{
    public function setVariable($name, $var);
    public function getHtml($template);
}

class Template implements iTemplate
{
    private $vars = array();

    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }

    public function getHtml($template)
    {
        foreach($this-vars as $name=>$value){
            $template = str_replace('{'. $name . '}', $value, $template);
        }
        return $template;
    }
}

interface a
{
    public function foo();
}

interface b extends a
{
    public function baz(Baz $baz);
}

class c implements b
{
    public function foo()
    {
    }

    public function baz(Baz $baz)
    {
    }
}

interface a
{
    public function foo();
}

interface b
{
    public function bar();
}

interface c extends a, b
{
    public function baz();
}

class d implements c
{
    public function foo()
    {
    }

    public function bar()
    {
    }

    public function baz()
    {
    }
}


interface a
{
    const b = 'Interface constant';
}

// Prints: Interface constant
echo a::b;


// This will however not work because it's not allowed to 
// override constants.
class b implements a
{
    //const b = 'Class constant';
}

/**
* An example of duck typing in PHP
*/

interface CanFly {
    public function fly();
}
  
interface CanSwim {
    public function swim();
}
  
class Bird {
    public function info() {
      echo "I am a {$this->name}\n";
      echo "I am an bird\n";
    }
}
  
  /**
  * some implementations of birds
  */
class Dove extends Bird implements CanFly {
    var $name = "Dove";
    public function fly() {
      echo "I fly\n";
    }
}
  
class Penguin extends Bird implements CanSwim {
    var $name = "Penguin";
    public function swim() {
      echo "I swim\n";
    }
}
  
class Duck extends Bird implements CanFly, CanSwim {
    var $name = "Duck";
    public function fly() {
      echo "I fly\n";
    }
    public function swim() {
      echo "I swim\n";
    }
}
  
  /**
  * a simple function to describe a bird
  */
function describe($bird) {
    if ($bird instanceof Bird) {
      $bird->info();
      if ($bird instanceof CanFly) {
        $bird->fly();
      }
      if ($bird instanceof CanSwim) {
        $bird->swim();
      }
    } else {
      die("This is not a bird. I cannot describe it.");
    }
}
  
  // describe these birds please
describe(new Penguin);
echo "---\n";
  
describe(new Dove);
echo "---\n";
  
describe(new Duck);


interface Human
{
    public function eat($food);
}

class Dayle implements Human
{
    public function eat($food){
        echo "Mmm, I love {$food}!";
    }
}

class Taylor implements Human
{
    public function eat($food){
        echo "Mmm, I love {$food}!";
    }
}

class Elon implements Human
{
    public function eat($food){
        echo "Mmm, I love {$food}!";
    }
}

$elon = new Elon;

if ($elon instanceof Human){
    echo 'Well that was a surprise!';
}

function feedHuman(Human $human)
{
    $human->eat('pizza');
}

//feedHuman(elon);


interface Cache  
{
    public function write(string $key, $value): void;

    public function read(string $key);
}

class Articles  
{
    private $cache;

    public function __construct(Cache $cache)
    {
        $this->cache = $cache;
    }

    public function fetch()
    {
        if ($articles = $this->cache->read('articles')) {
            return $articles;
        }

        // Fetch from original non-cached data store and return.
    }
}

class RedisCache implements Cache  
{
    public function write(string $key, $value): void
    {
        // Write cache data to Redis.
    }

    public function read(string $key)
    {
        // Read cache data from Redis.
    }
}

class MongoCache implements Cache  
{
    public function write(string $key, $value): void
    {
        // Write cache data to MongoDB.
    }

    public function read(string $key)
    {
        // Read cache data from MongoDB.
    }
}

interface Car {
    public function setModel($name);

    public function getModel();
}

interface Vehicle {
    public function setHasWheels($bool);

    public function getHasWheels();
}
class miniCar implements Car, Vehicle {
    private $model;

    public function setModel($name)
    {
        $this->model = $name;
    }
    public function getModel()
    {
        return $this->model;
    }
    public function setHasWheels($bool)
    {
        $this->hasWheels = $bool;
    }
    public function getHasWheels()
    {
        return ($this->hasWheels)? "has wheels": "no wheels";
    }
}

$voy = new miniCar;
$voy->setModel('Auto');
$voy->setHasWheels('Yes');

echo $voy->getModel();
echo $voy->getHasWheels();


Interface MyInterface {
    public function getName();
    public function getAge();
 }
 class MyClass implements MyInterface{
    public function getName() {
          echo "My name A".'<br>';
    }
    public function getAge(){
          echo "My Age 12";
    }
 }
 $obj = new MyClass;
 $obj->getName();
 $obj->getAge();

 interface a{
    public function printData();
 }
 interface b{
    public function getData();
 }
 interface c extends a, b{
    public function addData();
 }
 class d implements c{
    public function printData(){
       echo "I am printing";
    }
    public function getData(){
       echo "I am reading data";
    }
    public function addData(){
       echo "I am adding";
    }
 }
 $myobj = new d;
 $myobj->printData();
 $myobj->addData();

 interface Vocalizer
{
    public function vocalize(string $message):string;
}

class Bird implements Vocalizer
{
    public function vocalize(string $message): string
    {
        return $this->tweet($message);
    }
    public function tweet(string $message): string
    {
        return sprintf('<tweet>%s</tweet>', $message);
    }
}
function prepareMessage(string $message, Vocalizer $vocalizer):string
{
    return $vocalizer->vocalize($message);
}
$chickadee = new Bird();
//echo perpareMessage('a song', $chickadee);


class Foo {
    public static $my_static = 'foo';
    
    public function staticValue() {
       return self::$my_static;
    }
}
  
print Foo::$my_static . "\n";
$foo = new Foo();
 
print $foo->staticValue() . "\n";


class BaseClass {
    public function test() {
       echo "BaseClass::test() called<br>";
    }
    
    public function moreTesting() {
       echo "BaseClass::moreTesting() called<br>";
    }
 }
 
 class ChildClass extends BaseClass {
    public function moreTesting() {
       echo "ChildClass::moreTesting() called<br>";
    }
 }

 class Name {
    public $fName;
    public $lName;
    
    public function getName($first_name, $last_name) {
       $this->fName = $first_name;
       $this->lName = $last_name;
    }
    
    public function toString() {
       return($this->lName ." , " .$this->fName);
    }
 }
 class NameSub1 extends Name {
    var $_middleInitial;
    
    function getNameSub1($first_name, $middle_initial, $last_name) {
      Name::getName($first_name, $last_name);
       $this->_middleInitial = $middle_initial;
    }
    
    function toString() {
       return(Name::toString() . " " . $this->_middleInitial);
    }
 }
 $newName = new NameSub1;
 $newName->getNameSub1('Lam','g','Teng');
 echo $newName->toString();


 class MyClass
{
    public $prop1 = "I'm a class property!";

    public function setProperty($newval)
    {
        $this->prop1 = $newval;
    }

    public function getProperty()
    {
        return $this->prop1 . "<br />";
    }
}

// Create two objects
$obj = new MyClass;
$obj2 = new MyClass;

// Get the value of $prop1 from both objects
echo $obj->getProperty();
echo $obj2->getProperty();

// Set new values for both objects
$obj->setProperty("I'm a new property value!");
$obj2->setProperty("I belong to the second instance!");

// Output both objects $prop1 value
echo $obj->getProperty();
echo $obj2->getProperty();


class MyClass {
    const CONST_VALUE = 'A constant value';
 }
 
 $classname = 'MyClass';
 echo $classname::CONST_VALUE;
 
 echo MyClass::CONST_VALUE;

 class MyClass
{
    const CONSTANT = 'constant value';

    function showConstant() {
        echo  self::CONSTANT . "\n";
    }
}

echo MyClass::CONSTANT . "\n";

$classname = "MyClass";
echo $classname::CONSTANT . "\n";

$class = new MyClass();
$class->showConstant();

echo $class::CONSTANT."\n";

$a = 0;
$b = 0;

for( $i = 0; $i<5; $i++ ) {
   $a += 10;
   $b += 5;
}

echo ("At the end of the loop a = $a and b = $b" );

abstract class Animal
{
   public function sleep()
   {
      echo "sleep". "<br />";
   }
}

class Dog extends Animal
{
    public function move()
    {
        echo 'run'. "<br />";
    }
}
class Bird extends Animal
{
 
    public function move()
    {
        echo 'fly'. "<br />";
    }
 
}

class Action
{
   public function actionMove(Animal $obj)
   {
      $obj->move();
   }
}

 

$dog = new Dog();
$bird = new Bird();
$dog->move();
$bird->move();


$dog = new Dog();
$dog->sleep();
$bird = new Bird();
$bird->sleep();


$dog = new Dog();
$bird = new Bird();
$action = new Action();
$action->actionMove($dog);
$action->actionMove($bird);


class UserSettings
{
    private $user;
    public function __construct($user)
    {
        $this->user = $user;
    }
    public function changeSettings($settings)
    {
        if ($this->verifyCredentials()) {
            // ...
        }
    }
    private function verifyCredentials()
    {
        // ...
    }
}

class UserAuth
{
    private $user;
    public function __construct($user)
    {
        $this->user = $user;
    }
    public function verifyCredentials()
    {
        // ...
    }
}
class UserSettings
{
    private $user;
    private $auth;
    public function __construct($user)
    {
        $this->user = $user;
        $this->auth = new UserAuth($user);
    }
    public function changeSettings($settings)
    {
        if ($this->auth->verifyCredentials()) {
            // ...
        }
    }
}
abstract class Animal
{
    public $color;
    protected $bark;
    private $speed;
 
    public static $name;
    protected static $weight;
    private static $character;

    const SPEED = 60;

    public function getSpeed()
    {
       echo '60';
    }
}

class ATM {
    private $custid;
    private $atmpin;
    public function PinChange($custid,$atmpin) {
             //---------perform tasks-----
             }
    public function CheckBalance($custid,$atmpin){
             //---------perform tasks-----
             }
    public function miniStatement($custid) {
             //---------perform tasks-----
             }
    }
 $obj = new ATM();
 $obj ->CheckBalance(10005285637,1**3);


 Interface MyInterface {
    public function getName();
    public function getAge();
 }
 class MyClass implements MyInterface{
    public function getName() {
          echo "My name A".'<br>';
    }
    public function getAge(){
          echo "My Age 12";
    }
 }
 $obj = new MyClass;
 $obj->getName();
 $obj->getAge();



interface Machine {
   public function calcTask();
}
class Circle implements Machine {
   private $radius;
   public function __construct($radius){
      $this -> radius = $radius;
   }
   public function calcTask(){
      return $this -> radius * $this -> radius * pi();
   }
}
class Rectangle implements Machine {
   private $width;
   private $height;
   public function __construct($width, $height){
      $this -> width = $width;
      $this -> height = $height;
   }
   public function calcTask(){
      return $this -> width * $this -> height;
   }
}
$mycirc = new Circle(3);
$myrect = new Rectangle(3,4);
echo $mycirc->calcTask() . "</br>";
echo $myrect->calcTask() . "</br>";

abstract class base {
    abstract function printdata();
    public function getdata() {
       echo "Tutorials Point";
    }
 }
 class child extends base{
    public function printdata(){
       echo "Good morning";
    }
 }
 $obj = new child();
 $obj->getdata();
 $obj->printdata();

 abstract class AbstractBaseClass1{
    abstract public function addValue();
    abstract protected function getValue();
 }
 class ConcreteClass extends AbstractBaseClass1{
    public function addValue() {
       return "ConcreteClass";
    }
    public function getValue() {
       return " Child Class";
    }
 }
 $classobj = new ConcreteClass;
echo   $classobj->addValue();

