<?php
$a = 25;
$b = 90;
if ($a < $b) {
   var_dump ($a); 
}

if ($a > $b) {
     echo "a больше b";
     $b = $a;
}
echo "<br>";

$x = 1;
while ($x <= 10):
     echo $x;
     $x++;
endwhile;

echo "<br>";

$x=5;
while ($x++>10) {
    echo $x;
}
echo "<br>";

$x=0;
while ($x++<10) {
if ($x==3) break;
echo "<b>Итерация $x</b><br>";
}
// Когда $x равен 3, цикл прерывается

echo "<br>";


$a=10;
$b = &$a; // теперь $b — то же самое, что и $a
$b=0; // на самом деле $a=0
echo "b=$b, a=$a"; // Выводит: "b=0, a=0"

echo "<br>";

$a=10;
$b=20;
$c=30;
$p="a"; // или $p="b" или $p="c" (присваиваем $p имя другой переменной)
echo $$p; // выводит переменную, на которую ссылается $p, т. е. $a
$$p=100; // присваивает $a значение 100

echo "<br>";  

function swap(&$a, &$b)
{
   
    $c = $a;
    $a = $b;
    $b = $c;
} 
// $a = 5; $b = 8;

swap($a, $b);
print_r($a);
echo "<br>";  
print_r($b);

echo "<br>";

$arr = [5, 6];

if (isset($arr[2])) {
	echo 'hey';
} else {
	echo 'no';
}
//Реализуйте функцию get, которая извлекает из массива элемент по указанному индексу, если индекс существует, либо возвращает значение по умолчанию. Функция принимает на вход три аргумента:
//Массив
//Индекс
//Значение по умолчанию (равно null)
echo "<br>";

function get(array $arr, int $index, $value = null)
{
	// $arr = ['moscow', 'london', 'berlin', 'porto', null];
	if (isset($arr) === $index) {
		return true;
	} else {
		return $value;
	}    
}

 
print_r(get($arr, 1)); // london
echo "<br>";
function getFileInfo($filepath)
{
    // Инициализация массива
    $info = [];

    $pathParts = explode('/', $filepath);
    // print_r($pathParts);
    $filename = $pathParts[array_key_last($pathParts)];
    // print_r($filename); 
    $info['filename'] = $filename;
    // print_r($info);

    $nameParts = explode('.', $filename);
    // print_r($nameParts);
    $extension = $nameParts[array_key_last($nameParts)];
    // print_r($extension);
    $info['extension'] = $extension;
    print_r($info);

    // return $info;
}
print_r(getFileInfo('/path/to/index.php'));
echo "<br>";
//Реализуйте функцию getDomainInfo(), которая принимает на вход имя сайта и возвращает информацию о нем:
function getDomainInfo($sayt)
{

	$itog = [];

// 	$filename1 = explode(':', $sayt);
// 	$a = $filename1[array_key_first($filename1)];
// 	var_dump($a);
	
// 	$filename = explode('//', $sayt);
// 	$b = $filename[array_key_last($filename)];
// 	print_r($b);
// 	$namePa = substr($sayt, 0, 5);
// 	$nametwo = str_replace($namePa, 'http', $namePa);
// 	// $mass = explode(' ', $nametwo);
// 	var_dump($nametwo);
		
// // return $itog;
	$result = explode('://', $sayt);
	// print_r($result);
	$itog = [];
	$val = 'http';
	for ($i = 0; $i < strlen($sayt); $i++) { 
		$one = $sayt[$i];
		$result = explode('://', $sayt);
		$f = $result[array_key_last($result)];
		// $itog['name'] = $f;
		$b = $result[array_key_first($result)];
		if (isset($b)) {
			$itog = ['name' => $f, 'chere' => 'http'];
		} else {
			$itog = ['name' => $f, 'chere' => $b];
		}
				
	}

		return $itog;
}

print_r(getDomainInfo('https://hexlet.io'));
// substr()
// str_replace()
echo "<br>";
// $a = 'https://hexlet.io';
// $b = str_replace('https', 'http', $a);
// print_r($b);https://hexlet.io
// stripos если есть такая подстрака возвращает false
// str_starts_with
$a = 'https://hexlet.io';
$b = strrpos($a, 'https');
print_r($b);
echo "<br>";

function ge(array $arr1, array $key)
{
  $curr = $arr1;
 foreach ($key as $keys) {
   if (!is_array($curr) || !array_key_exists($keys, $curr)) {
     return null;
   }
   $curr = $curr[$keys];
 }
   return $curr;
}
print_r(ge([
    'user' => 'ubuntu',
    'hosts' => [
        ['name' => 'web1'],
        ['name' => 'web2', null => 3, 'active' => false]
    ]
], ['hosts', 1, 'active']));
//array_keys
//in_array

// Реализуйте функцию apply(), которая применяет указанную операцию к переданному массиву и возвращает новый массив. Всего нужно реализовать три операции:

function genDiff(array $arr1, array $arr2)
{
  $result = [];
  $a = array_merge($arr1, $arr2);
  // $result = $a;
  foreach ($a as $key => $ar) {
    // print_r("$key ");
    if (array_key_exists($key, $arr1) && !array_key_exists($key, $arr2)) {
      $result[$key] = 'deleted';
    }
    if (!array_key_exists($key, $arr1) && array_key_exists($key, $arr2)) {
      $result[$key] = 'added';
    }
    if (array_key_exists($key, $arr1) && array_key_exists($key, $arr2) && !in_array($ar, $arr1) && in_array($ar, $arr2)) {
      $result[$key] = 'changed';
    }
  }
    return $result;
}
print_r(genDiff(
    ['one' => 'eon', 'two' => 'two', 'four' => true],
    ['two' => 'own', 'zero' => 4, 'four' => true]
));
// 'one' => 'deleted',
//   'two' => 'changed',
//   'four' => 'unchanged',
//   'zero' => 'added',
print_r("\n");
echo "<br>";
function getSortedNames($array)
{
  // 'name' = $name;
//  $a = array_keys($array);
//  print_r($a);
$result = [];
  foreach ($array as ['name' => $name]) {
    $result[] = $name;
  }
    
    
  
    return $result;
}
 
print_r(getSortedNames([
    ['name' => 'Bronn', 'gender' => 'male', 'birthday' => '1973-03-23'],
    ['name' => 'Reigar', 'gender' => 'male', 'birthday' => '1973-11-03'],
    ['name' => 'Eiegon',  'gender' => 'male', 'birthday' => '1963-11-03'],
    ['name' => 'Sansa', 'gender' => 'female', 'birthday' => '2012-11-03']
]));

echo "<br>";

function buildQueryString(array $assoc)
{
  $result = [];
  $a = implode(' ', $assoc);
  print_r($a);
  foreach ($assoc as $key => $value) {
    
    // print_r($a);
  }
  
}
print_r(buildQueryString(['per' => 10, 'page' => 1 ]));
echo "<br>";

function isAssoc(array $items)
{
    if ($items === []) return false;
    return array_keys($items) !== range(0, count($items) - 1);
}

isAssoc(['a', 'b', 'c']); // false
isAssoc(['1' => 'a', '0' => 'b', '2' => 'c']); // true

echo "<br>";
function scrabble($simvol, $text)
{
 $a = str_split(strtolower($simvol));
//  print_r($simvol);
 $b = str_split(strtolower($text));
 foreach ($a as $key => $value) {
  //  print_r($a);
   foreach ($b as $key1 => $value1) {
     print_r($b);
     if (in_array($value, $b)) {
       return true;
     } else {
       return false;
     }
 }
 }
}
print_r(scrabble('avj', 'java'));
echo "<br>";

function takeOldest ($array, $num = 1)
{
  usort($array, fn($array1, $array2) => $array1['birthday'] <=> $array2['birthday']);

return $array;
}
print_r(takeOldest([
    ['name' => 'Tirion', 'birthday' => '1988-11-19'],
    ['name' => 'Sam', 'birthday' => '1999-11-22'],
    ['name' => 'Rob', 'birthday' => '1975-01-11'],
    ['name' => 'Sansa', 'birthday' => '2001-03-20'],
    ['name' => 'Tisha', 'birthday' => '1992-02-27']
], 1));
echo "<br>";
$numbers = [5, 2, 3];

// возводим в квадрат каждое число
$newNumbers = array_map(fn($number) => $number ** 2, $numbers);
print_r($newNumbers); // => [25, 4, 9]
echo "<br>";

echo "<br>";
//Реализуйте функцию getChildren, которая принимает на вход список пользователей и возвращает плоский список их детей. Дети каждого пользователя хранятся в виде массива в ключе children
print_r("\n");
// function getGirlFriends(array $users) 
// {
//   $allFriendsLists = array_map(fn($user) => $user['friends'], $users);
//     // $friends = flatten($allFriendsLists);
//     $girlFriends = array_filter($allFriendsLists, fn($user) => $user['gender'] === 'female');
//     return array_values($girlFriends);
// }
// print_r(getGirlFriends([
//     ['name' => 'Tirion', 'friends' => [
//         ['name' => 'Mira', 'gender' => 'female'],
//         ['name' => 'Ramsey', 'gender' => 'male']
//     ]],
//     ['name' => 'Bronn', 'friends' => []],
//     ['name' => 'Sam', 'friends' => [
//         ['name' => 'Aria', 'gender' => 'female'],
//         ['name' => 'Keit', 'gender' => 'female']
//     ]],
//     ['name' => 'Rob', 'friends' => [
//         ['name' => 'Taywin', 'gender' => 'male']
//     ]],
// ]));

echo "<br>";
function getMenCountBy(array $users)
{
    $filtr = array_filter($users, fn($user) => $user['gender'] === 'male');
    // print_r($filtr);
 
    $years = array_map(fn($user) => date('Y', strtotime($user['birthday'])), $filtr);
 	// print_r($years);
    return array_reduce($years, function ($ac, $year) {
    	// print_r($year);
        if (!array_key_exists($year, $ac)) {
            $ac[$year] = 1;
        } else {
            $ac[$year] += 1;
        }
 
        return $ac;
    }, []);
}
print_r(getMenCountBy([
    ['name' => 'Bronn', 'gender' => 'male', 'birthday' => '1973-03-23'],
    ['name' => 'Reigar', 'gender' => 'male', 'birthday' => '1973-11-03'],
    ['name' => 'Eiegon',  'gender' => 'male', 'birthday' => '1963-11-03'],
    ['name' => 'Sansa', 'gender' => 'female', 'birthday' => '2012-11-03'],
    ['name' => 'Jon', 'gender' => 'male', 'birthday' => '1980-11-03'],
    ['name' => 'Robb','gender' => 'male', 'birthday' => '1980-05-14'],
    ['name' => 'Tisha', 'gender' => 'female', 'birthday' => '2012-11-03'],
    ['name' => 'Rick', 'gender' => 'male', 'birthday' => '2012-11-03'],
    ['name' => 'Joffrey', 'gender' => 'male', 'birthday' => '1999-11-03'],
    ['name' => 'Edd', 'gender' => 'male', 'birthday' => '1973-11-03']
]));
echo "<br>";
function testic($file)
{
  $one = array_filter($file, function ($files) {
    $name = strtolower(pathinfo($files, PATHINFO_EXTENSION));
    return is_file($files) && $name === 'php';
  });
  return array_map(fn($files) => basename($files), $one);
}
print_r(testic(['index.php', 'wop.PHP', 'nonexists', 'node_modules']));
echo "<br>";

echo "<br>";
//Реализуйте функцию getFreeDomainsCount, которая принимает на вход список емейлов, а возвращает количество емейлов, расположенных на каждом бесплатном домене. Список бесплатных доменов хранится в константе FREE_EMAIL_DOMAINS.
// const FREE_EMAIL_DOMAINS = [
//     'gmail.com', 'yandex.ru', 'hotmail.com'
// ];
// function getFreeDomainsCount($email)
// {
// 	$implode = implode('@', $email);
// 	// print_r($implode);
// 	$result = [];
// 	// $mail = explode('@', $implode);
// 	// print_r($email);
// 	foreach ($email as $value) {
// 		$maili = explode('@', $value);
// 		$array = $maili[array_key_last($maili)];
// 		if (in_array($array, FREE_EMAIL_DOMAINS) ) {
// 			$result[$array] += 1;
// 		}		
// }
// 	return $result;
// }//array_fill_keys
// print_r(getFreeDomainsCount([
//     'info@gmail.com',
//     'info@yandex.ru',
//     'info@hotmail.com',
//     'mk@host.com',
//     'support@hexlet.io',
//     'key@yandex.ru',
//     'sergey@gmail.com',
//     'vovan@gmail.com',
//     'vovan@hotmail.com'
//  ]));

// $filtr = array_filter($users, fn($user) => $user['gender'] === 'male');
//     // print_r($filtr);
 
//     $years = array_map(fn($user) => date('Y', strtotime($user['birthday'])), $filtr);
//  	// print_r($years);
//     return array_reduce($years, function ($ac, $year) {
//     	// print_r($year);
//         if (!array_key_exists($year, $ac)) {
//             $ac[$year] = 1;
//         } else {
//             $ac[$year] += 1;
//         }
 
//         return $ac;
print_r("\n");
function getPHPFileNames(array $paths)
{
    // фильтруем оставляя только подходящие пути
    $phpFiles = array_filter($paths, function ($path) {
        $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));
        return is_file($path) && $extension === 'php';
    });

    // извлекаем из оставшихся путей имена файлов и возвращаем их наружу
    return array_map(fn($path) => basename($path), $phpFiles);
}

print_r(getPHPFileNames(['index.php', 'wop.PHP', 'nonexists', 'node_modules']));
// print_r($names);
// => Array
// (
//     [0] => index.php
//     [1] => wop.PHP
// )
//Реализуйте функцию getManWithLeastFriends, которая принимает список пользователей и возвращает пользователя, у которого меньше всего друзей.
//Если список пользователей пустой, то возвращается null
//Если в списке есть более одного пользователя с минимальным количеством друзей, то возвращается последний из таких пользователей
echo "<br>";
use function Funct\Collection\minValue;
// function getManWithLeastFriends($users)
// {
// 	$one = array_filter($users, fn($user) => count($user['friends']));
// 	print_r($one);
// 	return Collect/minValue($one, $fn($ones));
// }
// print_r(getManWithLeastFriends([
//     ['name' => 'Tirion', 'friends' => [
//         ['name' => 'Mira', 'gender' => 'female'],
//         ['name' => 'Ramsey', 'gender' => 'male']
//     ]],
//     ['name' => 'Bronn', 'friends' => []],
//     ['name' => 'Sam', 'friends' => [
//         ['name' => 'Aria', 'gender' => 'female'],
//         ['name' => 'Keit', 'gender' => 'female']
//     ]],
//     ['name' => 'Keit', 'friends' => []],
//     ['name' => 'Rob', 'friends' => [
//         ['name' => 'Taywin', 'gender' => 'male']
//     ]],
// ]));

print_r("\n");
function getSameParit(array $mass)
{
  [$firstnum] = $mass;
  // print_r($firstnum);
  $ch = abs($firstnum) % 2;
  print_r($ch);
  $name = array_filter($mass, function ($num) use ($ch) {
    return (abs($num) % 2) === $ch;
  });
  // return array_values($name);
}
print_r(getSameParit([2, 0, 1, -3, 10, -2])); // [5, 1, -3]

print_r("\n");
function fill($coll, $value, $start = 0, $end = 4)
{
//  $a = count($coll);
//  print_r($a);
  for ($i = $start, $b = $end; $i < count($coll); $i += 1, $b--) {
    // print_r($end);
    $coll[$i] = $value;
  }
  return $coll;
}
print_r(fill([1, 2, 3, 4], '*', 1, 3)); //1, '*', '*', 4

print_r("\n");
function makeSegment($x, $y)
{
    return ['beginPoint' => $x, 'endPoint' => $y];
    // print_r($y['y']);
}
$point = makeSegment([3, 2], [2, 3]);
// print_r($point);
// print_r(makeSegment([3, 2], [0, 0]));
function getBeginPoint($point)
{
    return $point['beginPoint'];
    // print_r($point);
}
print_r(getBeginPoint($point));

function getEndPoint($point)
{
    return $point['endPoint'];
}
print_r(getEndPoint($point));
function getMidpointOfSegment($point) 
{
  $begin = getBeginPoint($point);
  $end = getEndPoint($point);
  
        // $begin2 = (getX($begin) + getX($end)) / 2;
        // $begin1 = (getY($begin) + getY($end)) / 2;
        // return "{$begin1} {$begin2}";
}
// $getBeginPoint1 = ['x' => 3, 'y' => 2];
// $getEndPoint2 = ['x' => 2, 'y' => 3];
print_r(getMidpointOfSegment($point));//1.5, 1
print_r("\n");

echo "<br>";
//Реализуйте функцию removeFirstLevel(), которая принимает на вход дерево, и возвращает новое, элементами которого являются дети вложенных узлов (см. пример).
function tree($tree)
{
	$nodes = array_filter($tree, fn($node) => is_array($node));
	return array_merge(...$nodes);
}
print_r(tree([[5], 1, [3, 4]]));//[5, 3, 4]
echo "<br>";
$tree = mkdir('php-package', [
mkfile('Makefile'),
mkfile('README.md'),
mkdir('dist'),
mkdir('tests', [
mkfile('test.php', ['type' => 'text/php'])]),
mkdir('src', [
mkfile('index.php', ['type' => 'text/php'])]),
mkfile('phpunit.xml', ['type' => 'text/xml']),
mkdir('assets', [
mkdir('util', [
mkdir('cli', [
mkfile('LICENSE')])])], ['owner' => 'root', 'hidden' => false]),
], ['hidden' => true]);
print_r($tree);
// php-package # директория (метаданные: ['hidden' => true])
// ├── Makefile # файл
// ├── README.md # файл
// ├── dist # пустая директория
// ├── tests # директория
// │   └── test.php # файл (метаданные: ['type' => 'text/php'])
// |── src #директория
// |   └── index.php # файл (метаданные: ['type' => 'text/php'])
// ├── phpunit.xml # файл (метаданные: ['type' => 'text/xml'])
// └── assets # директория (метаданные: ['owner' => 'root', 'hidden' => false])
//     └── util # директория
//         └── cli # директория
//             └── LICENSE # файл //['owner' => 'root', 'hidden' => false]
