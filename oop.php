<?php
//oop php
class Point 
{
  public $x;
  public $y;
}
$point = new Point;
print_r($point->x = 1000);
echo "<br>";
class Circle
{
	public $center;
	public $radius;
}
$circle = new Circle;
print_r($circle->center = 23);
echo "<br>";
$circle->radius = new Point;
$circle->radius->x = 1000;
print_r($circle->radius->x);
echo "<br>";
print_r("\n");
//Реализуйте функцию getMidpoint, которая принимает на вход две точки (объекты) и возвращает точку (объект) лежащую между ними (поиск середины отрезка).
class Point1
{
  public $x;
  public $y;

}
function getMidpoint() {
  $poin1 = new Point1;
  $poin1->x = 0;
  $poin1->y = 0;
  $poin2 = new Point1;
  $poin2->x = 4;
  $poin2->y = -2;
  print_r($poin1->x + $poin2->x) / 2;
  print_r($poin1->y + $poin2->y) / 2;
  // return $one . $two;
}
print_r(getMidpoint());//2 -1

// $midpoint = getMidpoint($poin1, $poin2);
// print_r($midpoint);
// print_r($poin1);
// print_r($poin2);

//  function getMidpoint($poin1, $poin2) {
//     
//   }
//  $p1 = new Point();
print_r("\n");
// $p1->x = 3;
// $p1->y = 5;
// // p1 и p2 содержат указатель на один и тот же объект
// $p2 = $p1;

// $p2->x = 100;
// print_r($p1->x);  
print_r("\n");
$a = 5;
// Теперь $a и $b ссылаются на одни и те же данные
$b = &$a;

$a = 4;
print_r($b); // => 4
//Реализуйте функцию dup, которая клонирует переданную точку. Под клонированием подразумевается процесс создания нового объекта, с такими же данными как и у старого.
// class Point {
//   public $x;
//   public $y;
// }
// function dup($point)
// {
//   $cloned = new Point();
//   $cloned->x = $point->x;
//   $cloned->y = $point->y;
//   return $cloned;
// }
print_r("\n");
$p1 = new Point(3, 9);
$p2 = new Point(3, 9);
$p1 == $p2; // true
print_r("\n");
//Реализуйте функцию reverse, которая принимает на вход отрезок и возвращает новый отрезок с точками, добавленными в обратном порядке (begin меняется местами с end).
//Точки в результирующем отрезке должны быть копиями (по значению) соответствующих точек исходного отрезка. То есть они не должны быть ссылкой на один и тот же объект, так как это разные объекты (пускай и с одинаковыми координатами).
class Segment {
    public $beginPoint;
    public $endPoint;

    public function __construct($beginPoint, $endPoint) {
      $this->beginPoint = $beginPoint;
      $this->endPoint = $endPoint;
    }    
}
    function Test($segment)
    {
      //Обрашение к свойствам класса Segment;
      $one = $segment->beginPoint;
      $two = $segment->endPoint;
      //Создание нового класса
      $beginew = new Point($one->x, $two->y);
      $endnew = new Point($two->x, $two->y);
      return new Segment($endnew, $beginew);
    }
   $tes = new Segment(2, 4);
  //  print_r($tes);
  //  $fun = Test($tes);
  //  print_r($fun);
print_r("\n");
  class Poi
{
  public $x;
  public $y;

  public function __construct($x, $y) {
    $this->x = $x;
    $this->y = $y;
  }

  function getX() {
    return $this->x;
  }
  function getY() {
    return $this->y;
  }
  function setX($x) {
    return $this->x = $x;
  }
  function setY($y) {
    return $this->y = $y;
  }
}

$point = new Poi(5, 10);
$point->setX(100);
print_r($point->getX()); // => 100
//Реализуйте класс для работы с рациональными числами, включающий в себя следующие методы:
//Конструктор — принимает на вход числитель и знаменатель.
// Метод getNumer() — возвращает числитель
// Метод getDenom() — возвращает знаменатель
// Сложение add() — прибавляет переданную дробь к дроби на которой был вызван метод.
// Вычитание sub() — находит разность между дробью на которой был вызван метод и переданной дробью.
print_r("\n");
class Rational {
  public $getNumer;
  public $getDenom;

  public function __construct($getNumer, $getDenom) {
    $this->getDenom = $getDenom;
    $this->getNumer = $getNumer;
  }
  function getNumer() {
    return $this->getNumer;
  }
  function getDenom() {
    return $this->getDenom;
  }
  function add($real) {
    
    $sgl = ($this->getNumer() * $real->getDenom() + $this->getDenom() * $real->getNumer());
    $two = ($real->getDenom() * $this->getDenom());
    return new Rational($sgl, $two);
  
  }
  function sub($real) {
    $sgl = ($this->getNumer() * $real->getDenom() - $this->getDenom() * $real->getNumer());
    $two = ($this->getDenom() * $real->getDenom());
    return new Rational($sgl, $two);
  }
}
$real1 = new Rational(10, 3);
$real2 = new Rational(3, 9);
// // print_r($real1);
print_r($real2->add($real1));
// print_r("\n");
print_r($real2->sub($real1));
print_r("\n");
print_r("\n");
class Po 
{
  public $int1;
  public $int2;

  public function __construct($int1, $int2) {
    $this->int1 = $int1;
    $this->int2 = $int2;
  }
  function pofun($po) {
    $one = ($this->int1 * $po->int2 + $this->int2 * $po->int1);
    $two = ($po->int1 * $po->int2);
    return new PO($one, $two);
  }
}
$po1 = new Po(3, 9);
$po2 = new Po(10, 3);
print_r($po1);
// print_r($po1->pofun($po2));
print_r("\n");
print_r($po2->pofun($po1));
//$this->getNumer() * $this->getDenom() + $this->getDenom() * $this->getDenom()//;
//getNum($rational1) * getDen($rational2) + getNum($rational2) * getDen($rational1),
    //getDen($rational1) * getDen($rational2)
print_r("\n");
//В задании необходимо реализовать пользователей которым можно добавлять адреса. Такое часто встречается в интернет магазинах, когда у одного пользователя может быть набор разных адресов для доставки. Пользователь и адрес представлены двумя классами:
    class User
{
    private $addresses = [];
    private $name;
 
    public function __construct($name)
    {
        $this->name = $name;
    }
 
    public function addAddress(User\Address $address)
    {
        $this->addresses[] = $address;
    }
 
    public function getAddresses()
    {
        return $this->addresses;
    }
 
    public function getName()
    {
        return $this->name;
    }
}
print_r("\n");
class Address
{
    private $country;
    private $city;
    private $street;
 
    public function __construct($country, $city, $street)
    {
        $this->country = $country;
        $this->city = $city;
        $this->street = $street;
    }
 
    public function getCountry()
    {
        return $this->country;
    }
 
    public function getCity()
    {
        return $this->city;
    }
 
    public function getStreet()
    {
        return $this->street;
    }
 
    public function setCountry($country)
    {
        $this->country = $country;
    }
 
    public function setCity($city)
    {
        $this->city = $city;
    }
 
    public function setStreet($street)
    {
        $this->street = $street;
    }
}

print_r("\n");
class P
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function __toString()
    {
        return "({$this->x}, {$this->y})";
    }
}

$point = new P(1, 10);

// Автоматически вызывается __toString
echo $point; // => (1, 10)

// И тут
$message = 'hello, ' . $point;
print_r($message);
// И тут
$message2 = "hi, {$point}";
print_r($message);
print_r("\n");
class T 
{
  public static $table = 'points';
  public const TABLE = 20;

  public static function tabLe() {
    return self::$table = self::TABLE;
  }
}
$t = new T();
print_r(T::tabLe());

print_r("\n");
// class Time
// {
//     private $h;
//     private $m;

//     // BEGIN (write your solution here)
//     // public static function fromString($string) {
//     //   [$h, $m] = explode(':', $string);
//     //     return new self($h, $m);
//     // }
//     // END

//     public function __construct($h, $m)
//     {
//       // self::$h;
//       // self::$m;
//         $this->h = $h;
//         $this->m = $m;
//     }

//     public function __toString()
//     {
//         return "{$this->h}:{$this->m}";
//     }
// }
// $time = new Time();
// print_r(Time::fromString());
// print_r($time);

print_r("\n");
class N implements Countable {
  public $items;

  public function __construct($items = []) {
    $this->items = $items;
  }
  public function count() {
    return count($this->items);
  }
}
$n = new N([5, 6, 7]);
print_r($n);
print_r($n->count());

$a = "rozmarin";
$b = json_decode($a, true);
print_r($b);
print_r("\n");
//src\Circle.php
// Реализуйте класс Circle для описания кругов. У круга есть только одно свойство - его радиус. Реализуйте методы getArea и getCircumference, которые возвращают площадь и периметр круга соответственно.
class Cir {
  public $radius;

  public function __construct($radius) {
    $this->radius = $radius;
  }
  public function getArea($pi) {
    return pi() * ($this->radius ** 2);
  }
  public function getCircumference($pi) {
    return 2 * pi() * $this->radius;
  }
}
$c = new Cir(3);
print_r($c);
print_r($c->getArea(28.2));//0.1
print_r("\n");
print_r($c->getCircumference(18.8));//0.1
//Реализуйте генератор рандомных чисел, представленный классом Random. Интерфейс объекта включает в себя три функции:
//Конструктор. Принимает на вход seed, начальное число генератора псевдослучайных чисел
//getNext — метод, возвращающий новое случайное число
//reset — метод, сбрасывающий генератор на начальное значение
class Random
{
    private $seed;
    private $nextNumber;
    const a = 5;
    const b = 3;
    const c = 11;
 
    public function __construct($seed) {
        $this->nextNumber = $this->seed = $seed;
    }
 
    public function getNext() {
        $this->nextNumber = (self::a * $this->nextNumber + self::b) % self::c;
        return $this->nextNumber;
    }
 
    public function reset() {
        $this->nextNumber = $this->seed;
    }
}

print_r("\n");
class PasswordValidator
{
    // BEGIN (write your solution here)
     private const PI = [
        'minLength' => 8,
        'containNumbers' => false
    ];
    
    private $options;
    
    public function __construct(array $options = [])
    {
        $this->options = array_merge(self::PI, $options);
        // print_r($this->options);
    }
    public function validate(string $password) : array
    {
        $error = [];
        if (strlen($password) < $this->options['minLength']) {
            $error['minLength'] = 'too small';
        }
        if ($this->options['containNumbers']) {
            if (!$this->hasNumber($password)) {
                $error['containNumbers'] = 'should contain at least one number';
            }
        }
        return $error;
    }  
    // END

    private function hasNumber(string $subject): bool
    {
        return strpbrk($subject, '1234567890') !== false;
    }
}
$p = new PasswordValidator();
print_r($p->validate(5));
//separator отвечает за символ(ы) добавляющиеся в конце, после обрезания строки, а length это длина до которой происходит сокращение. Если строка короче чем эта опция, то никакого сокращения не происходит. Конфигурацию по умолчанию можно переопределить передав новую в конструктор (она мержится с тем что в классе), а также через передачу конфигурации вторым параметром в метод truncate(). Оба этих способа можно комбинировать.
print_r("\n");
class Truncater
{
    public const OPTIONS = [
        'separator' => '...',
        'length' => 6,
    ];

    // BEGIN (write your solution here)
    private $options;
    public function __construct(string $options = '')
    {
        $this->options = self::OPTIONS;
        // print_r($this->options);
    }
    public function truncate(string $string)
    {
      
      $str = '';
      $i = 0;
      while($i < $this->options['length']) {
        $string1 = $string[$i];
        // print_r($string);
        $str = "{$str}{$string1}";
        // print_r($str);
       $i++;
      }
      // return $str . $this->options['separator'];
    }
    // END
}
$t = new Truncater();
print_r($t->truncate('one two'));
print_r("\n");
function ti($string, $val, $num) 
{
  $str = '';
  for ($i = 0; $i < strlen($string); $i++) {
    // $str = "{$string}";
    // print_r($string[$i] - $num);
  }
  // return $str;
  // return $str;
  // return $str;
  //  if (strlen($string) <= $num) {
  //     return $string;
  //   }
  // $str = '';
  // $i = 0;
  // while( $i < $num) {
  //   $str = "{$str}{$string[$i]}";
  //   $i++;
  // }
  // return $str .  $val;
}
print_r(ti('one two', '...', 6));
// print_r("\n");
// $a = strlen('one two');
// print_r($a);
print_r("\n");
class Trunca
{
    public const OPTIONS = [
        'separator' => '...',
        'length' => 6,
    ];

    // BEGIN (write your solution here)
    private $options = [];
    public function __construct($options = [])
    {
        $this->options = array_merge(self::OPTIONS, $options);
        // print_r($this->options);
    }
    public function truncate(string $string, array $options = []) : string
    {
      $first = array_merge($this->options, $options);
      if (strlen($string) <= $this->options['length']) {
        return $string;
      }
      $two = substr($string, 0, $first['length']);
      return "{$two}{$first['separator']}";
    }
    // END
}
$t = new Trunca();
print_r($t->truncate('one two'));
print_r("\n");

//преобразования типа
class MyStd
{
    private $properties = [];

    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }

    public function __get($name)
    {
        return $this->properties[$name];
    }

    // Для полноты полезно реализовать метод __isset
    // https://php.net/manual/ru/language.oop5.overloading.php#object.isset
}

$obj = new MyStd();
$obj->key = 'value'; // __set($name, $value) где $name = 'key', а $value = 'value'
$obj->key; // __get($name) где $name = 'key'

print_r($obj);
print_r("\n");
//Реализуйте функцию toStd(), которая принимает на вход ассоциативный массив и возвращает объект типа stdClass такой же структуры. Выполните задачу, проставляя ключи и значения вручную без использования преобразования типа.
function toStd(array $array)
{
  $atd = new stdClass();
  foreach ($array as $key => $value) {
    $atd->$key = $value;
  }
  return $atd;
}
print_r(toStd(['key' => 'value',
    'key2' => 'value2']));
// $array = [
//   'key1' => 'value1',
//   'key2' => 'value2',
//   '1' => '3'
// ];
print_r("\n");
class Course
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}
$c = new Course('name');
print_r($c->getName());
//Реализуйте функцию compare($seq1, $seq2), которая сравнивает две строчки набранные в редакторе. Если они равны то возвращает true, иначе - false. Особенность строчек в том они могут содержать символ #, соответствующий нажатию клавиши Backspace. Она означает, что нужно стереть предыдущий символ: abd##a# превращается в a.
// function S($string) 
// {
//   //инициализируем строчек;
//   // $stack = new \Ds\Stack();
//   //открывающие стеки
//   $firstS = ['{', '[', '('];
//   //закрывающие стеки
//   $twoS = ['[]', '()', '{}'];
//   for($i = 0; $i < strlen($string); $i++) {
//     $curr = $stack2[$i];
//     if (in_array($curr, $firstS)) {
//       $stack->push($curr);
//     } else {
//       //Если элемент не входит в список открывающих, то считаем, что это закрывающий символ
//       $pre = $stack->pop();
//       //составляем из этих парочку
//     $para = "{$stack}{$pre}";
//     if (!in_array($curr, $twoS)) {
//       return false;
//     }
//     };
//   }
//   return $twoS === [];
// }
// print_r(S('{}[]'));
print_r("\n");
class DeckOfCards
{
    private $array;
    public function __construct($array)
    {
        $this->array = $array;
        // print_r($this->array );
    }
    public function getShuffled()
    {
      $a = array_fill(0, 4, $this->array);
      foreach($a  as $value) {
        
        print_r($value);
      }
      
      // return $b;
     
  }
}
$d = new DeckOfCards([2, 3, 4]);
print_r($d->getShuffled());
print_r("\n");
$fruits = ["lemon", "orange", "banana", "apple"];
sort($fruits);
print_r($fruits);
// foreach ($fruits as $key => $val) {
//     echo "fruits[" . $key . "] = " . $val . "\n";
// }
print_r("\n");
$a = [1, 2, 4, 5];
shuffle($a);
print_r($b);
print_r("\n");
class Us{

  private $id;
  private $name;

  public function __construct($id, $name)
  {
    $this->id = $id;
    $this->name = $name;
  }
  public function GetsiS($user)
  {
    return $this->id === $user->id;
  }
}
$u = new Us(2, 'g');
$u1 = new Us(2, 'y');
print_r($u->GetsiS($u1));
print_r("\n");

class Aress
{
    public function __construct($street, $house, $zipcode)
    {
        $this->street = $street;
        $this->house = $house;
        $this->zipcode = $zipcode;
    }

    public function toString()
    {
        return "{$this->street}, {$this->house}, {$this->zipcode}";
    }
}

class Ut
{
    // Где-то здесь конструктор и другие методы

    public function getAddress()
    {
        // Так как у нас объект-значение,
        // то можно, не боясь, создавать его любое количество раз,
        // но в случае необходимости можно этот процесс оптимизировать
        return new Aress($this->street, $this->house, $this->zipcode);
  }
}
// $user = new Ut();
// // print_r($user);
// print_r($user->getAddress()->toString());
print_r("\n");
class Time
{
    public function format($date) {
        return (new DateTime())->setTimestamp($date)->format('d.m.y');
    }
}
$date = new Time();
$formattedDate = $date->format(time());
print_r($formattedDate);

// В данном упражнении вам предстоит реализовать класс Url, который позволяет извлекать из HTTP адреса, представленного строкой, его части.

// Класс должен содержать конструктор и методы:

// конструктор - принимает на вход HTTP адрес в виде строки.
// getScheme() - возвращает протокол передачи данных (без двоеточия).
// getHostName() - возвращает имя хоста.
// getQueryParams() - возвращает параметры запроса в виде пар ключ-значение объекта.
// getQueryParam() - получает значение параметра запроса по имени. Если параметр с переданным именем не существует, метод возвращает значение заданное вторым параметром (по умолчанию равно null).
// equals($url) - принимает объект класса Url и возвращает результат сравнения с текущим объектом - true или false.
print_r("\n");
class Ur
{
  private $http;
  private $massiv;

  public function __construct(string $http)
  {
    $this->http = parse_url($http);
    $this->massiv = [];
    // print_r($this->http);

    if (isset($this->http['query'])) {
      parse_str($this->http['query'], $this->massiv);
      // print_r($this->massiv);
    }
  }
  function getScheme()
  {
    return $this->http['scheme'];
  }
  function getHostName()
  {
    return $this->http['host'];
  }
  function getQueryParams()
  {
    return $this->massiv;
 }
 function getQueryParam($key, $defaultValue = null)
 {
   return $this->massiv[$key] ?? $defaultValue;
 }
 function equals(Ur $url)
 {
   return $this == $url;
 }
}
$o = new Ur('http://yandex.ru:80?key=value&key2=value2');
$o1 = new Ur('http://yandex.ru:80?key=value&key2=value2');
print_r($o->getScheme());
print_r("\n");
print_r($o->getHostName());
print_r("\n");
print_r($o->getQueryParams());
print_r($o->getQueryParam('key2', 'lala'));
print_r("\n");
print_r($o->equals(new Ur('http://yandex.ru:80?key=value&key2=value2')));
// $result = [];
// $str = 'http://yandex.ru:80?key=value&key2=value2';

// $b = substr($str, 30);
// if (stristr($str, 'key')) {
//   $result[] = 'value2';
// }
// print_r($result);
// $ito = explode('=', $b);
// // print_r($ito);
// print_r("\n");
//           //   $str1 = substr($str, 20, -12);
//           //   $sr2 = substr($str, 30);
//           //  $ito = explode('=', $str1);
//           //  $it2 = explode('=', $sr2);
//           //  $first = array_merge($ito, $it2);
//           //  $result = [$first[0] => $first[1], $first[2] => $first[3]];
//           //  print_r($result);

// $a = 'a' == 'a';
// $ages = [3,5,8,7];
// $age = $ages[3] ?? 5; // 5 - значение по умолчанию
// // Эквивалентно этой строчке
// // $age = isset($ages[3]) ? $ages[3] : 5;
// print_r($age);

// class Url
// {
//     private $http;
//     private $queryParams;
 
//     public function __construct($http)
//     {
//         $this->http = parse_url($http);
//         $this->queryParams = [];
//         print_r($this->http);
 
//         if (isset($this->http['query'])) {
//             parse_str($this->http['query'], $this->queryParams);
//             // print_r($this->queryParams);
//         }
//     }
  
//     public function getScheme()
//     {
//         return $this->http['scheme'];
//     }
  
//     public function getHostName()
//     {
//         return $this->http['host'];
//     }
  
//     public function getQueryParams()
//     {
//         return $this->queryParams;
//     }
  
//     public function getQueryParam($key, $defaultValue = null)
//     {
//         return $this->queryParams[$key] ?? $defaultValue;
//         // print_r($this->queryParams[$key]);
//     }
  
//     public function equals(Url $url)
//     {
//         return $this == $url;
//         // print_r($url);
//     }
// }
// $o = new Url('http://yandex.ru:80?key=value&key2=value2');
// $o1 = new Url('http://yandex.ru:80?key=value&key2=value2');
// print_r($o->getScheme());
// print_r("\n");
// print_r($o->getHostName());
// print_r("\n");
// print_r($o->getQueryParams());
// print_r($o->getQueryParam('key2fre', 'lala'));
// print_r("\n");
// print_r($o->equals(new Url('http://yandex.ru:80?key=value')));
print_r("\n");
function normalize($arrCity)
{
    // print_r(array_column($arrCity, 'country'));
    $a = array_merge($arrCity);
    $b = array_unique($a['country']);
    var_dump($b);
}
//array_column
print_r(normalize([
    [
        'name' => 'istambul',
        'country' => 'turkey'
    ],
    [
        'name' => 'Moscow ',
        'country' => ' Russia'
    ],
    [
        'name' => 'iStambul',
        'country' => 'tUrkey'
    ],
    [
        'name' => 'antalia',
        'country' => 'turkeY '
    ],
    [
        'name' => 'samarA',
        'country' => '  ruSsiA'
    ],
]));
