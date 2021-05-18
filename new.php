<?php
//Ассоциативный массив
function getComposerFileData()
{
  $mass = [
      "autoload" => [
    "files" => [
        "src/Arrays.php"
    ],
    "something" => [
        "item",
        "item2"
    ]
      ]
    ];
       
    
  return $mass;
}
print_r(getComposerFileData());
print_r("\n");
function normalize()
{
  $name = [
    'name' => 'еструктурKJDFJFSзация',
    'description' => 'кDCак удHDTивить коDJVлек'
  ];
  // $res = [];
  // $str = '';
  // $i = 0;
  // $result = implode(' ', $name);
  // while($i < strlen($result)) {
  //   print_r($result['name']);
  //   // $result[] = ucfirst(strtolower($result['name']));
  //   $i++;
  // }
  // $res = ($name['name']);
  // $re = mb_substr($res, 0, 1);
  // print_r($re);

  // print_r($result);
//  $result = $name['name'];
// $res = implode(' ', $result);
// print_r("\n");
// $result2 = $name['description'];
// $get = 'djfnjDDRd';
// print_r(ucfirst($res));
// print_r("\n");
// print_r(strtolower($result2));
//mb_substr(), mb_strtoupper()
}
print_r(normalize());
print_r("\n");
// function addValueToArray(&$array, $value1, $value2)
// {
//     print_r($array[] = [$value1, $value2]);
// }
// print_r(addValueToArray($array, 'rte', 'xaxax'));

// $filepath = '/path/to/index.php';
// $fileinfo = getFileInfo($filepath);
// // [
// //     'extension' => 'php',
// //     'filename' => 'index.php'
// // ];
print_r("\n");
//Для начала нам нужно извлечь имя файла. Это можно сделать, используя метод explode().

// Разделяем путь на промежуточные директории и файл
// $pathParts = explode('/', $filepath);
// // Извлекаем имя файла
// // array_key_last() возвращает последний ключ массива
// $filename = $pathParts[array_key_last($pathParts)]; 
// //Затем, точно таким же способом, можно получить и расширение:

// $nameParts = explode('.', $filename);

// $extension = $nameParts[array_key_last($nameParts)];
//Теперь, объединяя все вместе, реализуем нужную функцию:

// function getFileInfo($filepath)
// {
//     $pathParts = explode('/', $filepath);
//     $filename = $pathParts[array_key_last($pathParts)]; 
//     $nameParts = explode('.', $filename);
//     $extension = $nameParts[array_key_last($nameParts)];

//     // В значения вместо переменных подставятся нужные значения
//     $info = ['filename' => $filename, 'extension' => $extension];

//     return $info;
// }
//В примере выше ассоциативный массив создается сразу, когда все данные уже готовы. Иногда делают по другому, инициализируют массив в самом начале и постепенно наполняют его данными:

// function getFileInfo($filepath)
// {
//     // Инициализация массива
//     $info = [];

//     $pathParts = explode('/', $filepath);
//     $filename = $pathParts[array_key_last($pathParts)]; 
//     $info['filename'] = $filename;

//     $nameParts = explode('.', $filename);
//     $extension = $nameParts[array_key_last($nameParts)];
//     $info['extension'] = $extension;

//     return $info;
// }
// print_r(getFileInfo('/path/to/index.php'));
print_r("\n");
//Реализуйте функцию getDomainInfo(), которая принимает на вход имя сайта и возвращает информацию о нем:
function countFruits($fruits)
{
  $result = [];

  foreach ($fruits as $name) {
    // Проверка на существование
    if (array_key_exists($name, $result)) {
      $result[$name] += 1;
    } else {
      $result[$name] = 1;
    }
  }

  return $result;
}
print_r(countFruits($hggj = [
    'apple', 'banana', 'pear',
    'apricot', 'apple', 'banana',
    'apple', 'orange', 'pear'
]));
print_r("\n");
//Реализуйте функцию countWords(), которая считает количество слов в предложении и возвращает ассоциативный массив в котором ключи это слова (приведенные к нижнему регистру), а значения — это то сколько раз слово встретилось в предложении. Слова в предложении могут находиться в разных регистрах. Перед подсчетом их нужно приводить в нижний регистр, чтобы не пропускались дубли.
function countWords($string)
{
  if (empty($string)) {
    return [];
  }
  $res = explode(' ', $string);
  $result = [];
  foreach ($res as $mass) {
    $a = strtolower($mass);
    // print_r($a);
    $result[$a] = strtolower($result[$a] ?? 0) + 1;
  }
  return $result;
}
print_r(countWords('how', 'one', 'how'));

print_r("\n");
function te($array, $val)
{
  $result = [];
  foreach ($array as $key => $value) {
    // $b = $key;
    if ($value === $val) {
      $result[] = $result ?? $key += 1;
    }
  
}
  return $result;
}
print_r(te(['1' => 'fdg', '2'=> '25', '3'=> 'ros'], '12'));
//Реализуйте функцию pick, которая извлекает из переданного массива все элементы по указанным ключам и возвращает новый массив. Аргументы:
//Массив ключей, по которым должны быть выбраны элементы (ключ и значение) из исходного массива, и на основе выбранных данных сформирован новый массив
function pick(array $arr1, array $key)
{
  $result = [];
  // $count = $arr1;
  foreach ($arr1 as $key1 => $value) {
    // print_r("$key1 => $value");
    foreach ($key as $val) {
      if ($val === $key1) {
        $result[] = ("$key1 => $value");
      }
    }
  }
    return $result;
}
print_r(pick([
    'user' => 'ubuntu',
    'cores' => 4,
    'os' => 'linux',
    'null' => null
], ['user', 'os', 'null', [], ]));
print_r("\n");
//решения учителя
function pic(array $arr1, array $key2)
{
  
  $result = [];
  foreach ($key2 as $key) {
   if (array_key_exists($key, $arr1)) {
     $result[$key] = $arr1[$key];
   }
   return $result;
  }
}
print_r(pic([
    'user' => 'ubuntu',
    'cores' => 4,
    'os' => 'linux',
    'null' => null
], ['user', 'null']));

print_r("\n");
$array = ['lena' => 25, 'pety' => 12, 'roza' => 'casha'];
print_r($array['roza']);
print_r("\n");
$a['friends'] = ['nan', 'sash', 25];
print_r($a['friends'][2]);
print_r("\n");
$s['key'] = [
  ['1' => 'one', '2' => 'two'],
  ['3' => 'three', '4' => 'foo']
];
print_r($s['key'][1]['4']);
print_r("\n");
$key = 'key';
print_r($s[$key][0]);
//Реализуйте функцию getIn, которая извлекает из массива (который может быть любой глубины вложенности) значение по указанным ключам. Аргументы:
//Исходный массив
//Массив ключей, по которым ведется поиск значения
//В случае, когда добраться до значения невозможно, возвращается null.
function getIn(array $arr1, array $key)
{
  $result = [];
  if (array_key_exists('user', $arr1)) {
    $result = $arr1['user'];
    if (array_key_exists('hosts', $result)) {
        $result = $result['hosts'];
        if (array_key_exists(0, $result)) {
            $result = $result[0];
            if (array_key_exists('name', $result)) {
              $result = $result['name'];
              if (array_key_exists(1, $result)) {
                $result = $result[1];
                if (array_key_exists('name', $result)) {
                  $result = $result['name'];
                  if (array_key_exists(null, $result)) {
                    $result = $result[null];
                    if (array_key_exists('active', $result)) {
                    $result = $result['active'];
                  }
                } 
              }
            }
        }
    }
}
}
return $result;
}
print_r(getIn([
    'user' => 'ubuntu',
    'hosts' => [
        ['name' => 'web1'],
        ['name' => 'web2', null => 3, 'active' => false]
    ]
], ['hosts', 0]));
//array_keys
//in_array
print_r("\n");
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
], [1]));
print_r("\n");
$data = ['first_name' => 'щзф', 'last_name' => 'саша'];

$values = array_values($data);print_r($values);
// ['Mark', 'Smith']
$one = ['lena' => 'fa', 'sasha' => '25'];
$two = array_keys($one);
print_r($two);
//Реализуйте функцию genDiff, которая сравнивает два ассоциативных массива и возвращает результат сравнения в виде ассоциативного массива. Ключами результирующего массива будут все ключи из двух входящих массивов, а значением строка с описанием отличий => added, deleted, changed или unchanged.
//added — ключ отсутствовал в первом массиве, но был добавлен во второй
//deleted — ключ был в первом массиве, но отсутствует во втором
//changed — ключ присутствовал и в первом и во втором массиве, но значения отличаются
//unchanged — ключ присутствовал и в первом и во втором массиве с одинаковыми значениями
function genDiff(array $arr1, array $arr2)
{
  $result = [];
  $a = array_merge($arr1, $arr2);
  // $result = $a;
  foreach ($a as $key => $val) {
    // print_r([$val]);
    if (array_key_exists($key, $arr1) && !array_key_exists($key, $arr2)) {
      $result[$key] = 'deleted';
    }
    if (!array_key_exists($key, $arr1) && array_key_exists($key, $arr2)) {
      $result[$key] = 'added';
    }
    if (array_key_exists($key, $arr1) && array_key_exists($key, $arr2) && $arr1[$key] !== $arr2[$key]) {
      $result[$key] = 'changed';
    }
    if (array_key_exists($key, $arr1) && array_key_exists($key, $arr2) && $arr1[$key] === $arr2[$key]) {
      $result[$key] = 'unchanged';
    }
}
return $result;
}
print_r(genDiff(
    ['one' => 'eon', 'two' => 'two', 'four' => '1', 'one' => 'eon'],
    ['two' => 'own', 'zero' => 4, 'four' => '1', 'one' => 'eon']
));
// 'one' => 'deleted',
//   'two' => 'changed',
//   'four' => 'unchanged',
//   'zero' => 'added',
print_r("\n");
// $data = [['one' => 'eon', 'two' => 'two', 'four' => true],
//     ['two' => 'own', 'zero' => 4, 'four' => true]];
//     $a = array_merge($data[0], $data[1]);
//     print_r($a);
print_r("\n");
//     $a = new \Ds\Map(["a" => 1, "b" => 2, "c" => 3]);
// $b = new \Ds\Map(["b" => 3, "c" => 4, "d" => 5]);

// print_r($a->union($b));
// echo "fsjdfn";
// if (isset(data['key']))
//   echo 'Exists';
print_r("\n");
  // $keys = union(array_keys($data1), array_keys($data2)); print_r($keys);
   // решения учителяfunction genDiff(array $data1, array $data2)
  function tessst(array $data1, array $data2)
{
    $keys = array_merge(array_keys($data1), array_keys($data2)); // https://youtu.be/vkUTX1hruF8?t=929
    $result = [];
    foreach ($keys as $key) {
        // https://ru.hexlet.io/courses/php-associative-arrays/lessons/syntax/theory_unit
        if (!array_key_exists($key, $data1)) {
            $result[$key] = 'added';
        } elseif (!array_key_exists($key, $data2)) {
            $result[$key] = 'deleted';
        } elseif ($data1[$key] !== $data2[$key]) {
            $result[$key] = 'changed';
        } else {
            $result[$key] = 'unchanged';
        }
    }
 
    return $result;
}
print_r(tessst(
    ['one' => 'eon', 'two' => 'two', 'four' => '1', 'one' => 'eon'],
    ['two' => 'own', 'zero' => 4, 'four' => '1', 'one' => 'eon']
));
$persons = [
    ['first' => 'Rasmus', 'last' => 'Lerdorf'],
    ['first' => 'Fabien', 'last' => 'Potencier'],
    ['first' => 'Taylor', 'last' => 'Otwell']
];
['first' => $first] = $persons[0];
['first' => $first] = $persons[1];
['first' => $first] = $persons[2];
print_r($first);

// foreach ($persons as ['first' => $firstname, 'last' => $lastname]) {
//     var_dump($firstname, $lastname);
// }
//Реализуйте функцию getSortedNames, которая принимает на вход список пользователей, извлекает их имена, сортирует и возвращает отсортированный список имен.
print_r("\n");
function getSortedNames($array)
{
  // 'name' = $name;
//  $a = array_keys($array);
//  print_r($a);
$result = [];
  foreach ($array as ['name' => $name]) {
    $result[] = $name;
  }
  sort($result);
    return $result;
}
 
print_r(getSortedNames([
    ['name' => 'Bronn', 'gender' => 'male', 'birthday' => '1973-03-23'],
    ['name' => 'Reigar', 'gender' => 'male', 'birthday' => '1973-11-03'],
    ['name' => 'Eiegon',  'gender' => 'male', 'birthday' => '1963-11-03'],
    ['name' => 'Sansa', 'gender' => 'female', 'birthday' => '2012-11-03']
]));
 
// getSortedNames($users); // ['Bronn', 'Eiegon', 'Reigar', 'Sansa']
//По сути в этом задании надо реализовать ассоциативный массив. По понятным причинам использовать ассоциативные массивы для их создания нельзя. Представьте что в языке ассоциативных массивов нет и мы их хотим добавить.
//make() — создаёт новый словарь
//set($map, $key, $value) — устанавливает в словарь значение по ключу. Работает и для создания и для изменения. Функция возвращает true, если удалось установить значение. При возникновении коллизии, функция никак не меняет словарь и возвращает false.
//get($map, $key, $defaultValue = null) — читает в словаре значение по ключу и возвращает его. Параметр $defaultValue — значение, которое функция возвращает, если в словаре нет ключа (по умолчанию равно null). При возникновении коллизии функция также возвращает значение по умолчанию.
//Функции set() и get() принимают первым параметром словарь. Передача идет по ссылке, поэтому set() может изменить его напрямую.
//Для полноценного погружения в тему, считаем, что массив в PHP может использоваться только как индексированный массив.
print_r("\n");
function hashkey($key)
{
  $hash = crc32($key) % 1000;
  return $hash;
}
function make() {
  return [];
}
function colizii($map, $key)
{
  $index = hashkey($key);
  [$current] = $map[$index];
  // если хешированный ключ не равен ключу, эта коллизия
  return [$current] !== $key;
}
function set(&$map, $key, $value) 
{
  $index = hashkey($key);
  if (isset($map[$key]) && colizii($map, $key)) {
    return false;
  }
  // устанавливает в словарь значение по ключу
  $map[$key] = [$key, $value];
  return true;
}
function get(&$map, $key, $defaultValue = null)
{
  // хешированный ключ
  $index = hashkey($key);
  // если в словаре нет ключа или при возникновении коллизии возвращает null
  if (!isset($map[$key]) || colizii($map, $key)) {
    return $defaultValue;
  }
  //читает в словаре значение по ключу и возвращает его
  [, $value] = $map[$key];
  return $value;
}
// Для простоты показано на PHP, хотя в реальности всё это происходит на более низком уровне.

// Создание ассоциативного массива приводит к инициализации 
// индексированного массива внутри интерпретатора.
$internal = [];

// Во время присвоения значения `$data['key'] = 'value'`
// интерпретатор выполняет несколько действий:

// 1. Хеширует ключ. Результатом хеширования становится число.
$hash = crc32('key');
// 2. Число, полученное на предыдущем шаге преобразуется в индекс массива.
$index = $hash % 1000;
// В значение внутреннего индексированного массива, по найденному индексу,
// записывается ещё один массив, первым элементом которого становится ключ `'key'`,
// а вторым значение `'value'`.
function mak()
{
  $map = [];

  return $map;
}
print_r(mak([]));
print_r("\n");
function se(&$map, $key, $value)
{
  
  $map[$key] = $value;
  $hash = crc32($key);
  $index = $hash % 1000;
  $internal[$index] = [$key, $value];
  if ($internal[$index]) {
    return true;
  } else {
    return false;
  }
  // if ($hash === $hash) {
  //   return false;
  // }
}
print_r(se($map,'name', 'value'));
print_r("\n");
function ge111(&$map, $key, $defaultValue = null)
{
 
  if(!array_key_exists($key, $map)) {
    return $defaultValue;
  } 
  //  se($map, $key, $value);
  //  $map[$key] = $value;
  //  return $value;
}
print_r(ge111($map, 'name'));
print_r("\n");
// $internal[$index] = ['key', 'value'];
// print_r("\n");

// $hash = crc32('fdjgkfoskf,psv');
// $index = $hash % 1000;
// $internal[$index] = ['key', 'value'];
// print_r($internal[$index]);

//Реализуйте функцию buildQueryString, которая принимает на вход список параметров и возвращает сформированный query string из этих параметров:
function buildQueryString(array $assoc)
{
  $result = [];
  $str = '';
  ksort($assoc);
  foreach ($assoc as $key => $value) {
    $result[] = "$key=$value";
    $str = implode('&', $result);
  //  ksort($result);
  }
  return $str;
}
print_r(buildQueryString(['per' => 10, 'page' => 1 ]));
//page=1&per=10 ksort
print_r("\n");
function isAssoc(array $items)
{
    if ($items === []) return false;
    return array_keys($items) !== range(0, count($items) - 1);
}

print_r(isAssoc([1, 2, 5, 8], // false
['1' => 'a', '0' => 'b', '2' => 'c'])); // true
print_r("\n");
//Реализуйте функцию get, которая извлекает из массива элемент по указанному индексу, если индекс существует, либо возвращает значение по умолчанию. Функция принимает на вход три аргумента:
//Массив
//Индекс
//Значение по умолчанию (равно null)
function test56(array $array, int $index, $value = null)
{
  if (array_key_exists($index, $array)) {
    return $array[$index];
  } else {
    return $array[$index] ?? $value;
  }

}
print_r(test56(['moscow', 'london', 'berlin', 'porto', null], 10, 'dfdgvfd'));
//Реализуйте функцию swap, которая меняет местами два элемента относительно переданного индекса. Например, если передан индекс 5, то функция меняет местами элементы, находящиеся по индексам 4 и 6.
//Массив
//Индекс
//Если хотя бы одного из индексов не существует, функция возвращает исходный массив.
print_r("\n");
function sw(array $array, int $index)
{
  $index1 = $index - 1;
  $index2 = $index + 1;
  $w = array_key_exists($index1, $array) && array_key_exists($index2, $array);
  if ($w) {
    $temp = $array[$index1];
    $array[$index1] = $array[$index2];
    $array[$index2] = $temp;
  }
  return $array;
}
print_r(sw(['john', 'smith', 'karl', 'vfvfd', '25', '100'], 1));
print_r("\n");
function swa(array $array, $index)
{
    $PrevIndex = $index - 1;
    $NewIndex = $index + 1;
    $IsWaiable = array_key_exists($PrevIndex, $array) && array_key_exists($NewIndex, $array);
    if ($IsWaiable) {
        $temp = $array[$PrevIndex];
        $array[$PrevIndex] = $array[$NewIndex];
        $array[$NewIndex] = $temp;
    }
    return $array;
}
print_r(swa(['john', 'smith', 'karl', 'vfvfd', '25', '100'], 1));
//Реализуйте функцию isContinuousSequence, которая проверяет, является ли переданная последовательность целых чисел возрастающей непрерывно (не имеющей пропусков чисел). Например, последовательность [4, 5, 6, 7] — непрерывная, а [0, 1, 3] — нет. Последовательность может начинаться с любого числа, главное условие — отсутствие пропусков чисел. Последовательность из одного числа не может считаться возрастающей.
function isConti($mass)
{
  if (count($mass) <= 1) {
    return false;
  }
 $start = $mass[0];
  foreach ($mass as $key => $itog) {
    // print_r($start);
    if ($start + $key !== $itog) {
      return false;
    }
  }
  return true;
}
print_r(isConti([10]));
print_r("\n");
//поиск минимального максимального
function age($mass)
{
  $max = $mass[0];
  foreach ($mass as $numeric) {
    if ($numeric > $max) {
      $max = $numeric;
    }
  }
  return $max;
}
print_r(age([2, 1, 2, 5, 10]));
// поиск среднего
//Реализуйте функцию calculateAverage(), которая высчитывает среднее арифметическое элементов массива. Благодаря этой функции мы наконец-то посчитаем среднюю температуру по больнице. :)
print_r("\n");
function calsu($ma)
{
  $sum = 0;
  for ($i = 0; $i < count($ma); $i++) {
    // print_r("$ma[$i] ");
    if ($ma[$i] > 0) {
      $sum += $ma[$i];
      // print_r($sum);
      //сумму всех элементов в массиве поделим на длины массива
      //выходит средний арифметический
      $result = $sum / count($ma);
    }
  }
  // return $result;
}
print_r(calsu([37.5, 34, 39.3, 40, 38.7, 41.5]));
print_r("\n");
//Реализуйте функцию fromPairs, которая принимает на вход массив, состоящий из массивов-пар, и возвращает ассоциативный массив, полученный из этих пар.
//Примечания
//Если при конструировании объекта попадаются совпадающие ключи, то берётся значение из последнего массива-пары:
function fromPairs(array $array)
{
  $result = [];
  foreach ($array as $key => $as) {
    $result[$as[0]] = $as[1];
  }
  return $result;
}
print_r(fromPairs([['cat', 5], ['dog', 6], ['cat', 11]]));
//['cat' => 11, 'dog' => 6]
print_r("\n");
//Если при конструировании объекта попадаются совпадающие ключи, то берётся значение из последнего массива-пары:
// $array = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
// // if (array_keys($array) === array_keys($array)) {
// //   echo
// // }
// foreach (range(0, 2, 12) as $number) {
//     echo $number;
// }
//if ($array === []) return false;
    //$res = array_keys($array) !== range(0, count($array) - 1);
    //решения учителя
  function fromPair(array $data)
{
    $result = [];
    //чтобы обьединить массивы в ассоциативный массив используется внутри foreach квадратные скобочки []
    foreach ($data as [$key, $value]) {
      $result[$key] = $value;
    }
 
    return $result;
}
print_r(fromPair([['cat', 5], ['dog', 6], ['cat', 11]]));
print_r("\n");
//Реализуйте функцию findWhere, которая принимает на вход массив (элементы которого - ассоциативные массивы) и пары ключ-значение (тоже в виде массива), а возвращает первый элемент исходного массива, значения которого соответствуют переданным парам (всем переданным). Если совпадений не было, то функция должна вернуть null.
function findWhere(array $arr, $arr2)
{
  // $array2 = array_intersect_key($arr2, $arr);
  // print_r($array2);
  $result = [];
  foreach ($arr as $key1 => $value1) {
    // print_r($value1);
   foreach ($arr2 as $key2 => $value2) {
    if (in_array($value1, $arr) === in_array($value2, $arr2)) {
      $result[$key1] = $value1;
    }
   }
  }
  return $result;
}
print_r(findWhere([
        ['title' => 'Book of Fooos', 'author' => 'FooBar', 'year' => 1111],
        ['title' => 'Cymbeline', 'author' => 'Shakespeare', 'year' => 1611],
        ['title' => 'The Tempest', 'author' => 'Shakespeare', 'year' => 1611],
        ['title' => 'Book of Foos Barrrs', 'author' => 'FooBar', 'year' => 2222],
        ['title' => 'Still foooing', 'author' => 'FooBar', 'year' => 3333],
        ['title' => 'Happy Foo', 'author' => 'FooBar', 'year' => 4444],
    ],
    ['author' => 'Shakespeare', 'year' => 1611]));

    //array_intersect_assoc
    //array_searcharray_search
print_r("\n");
    function toRna($dna)
{
    $dnaArray = str_split($dna);
    // print_r($dnaArray);
    for($i = 0; $i < sizeof($dnaArray); $i++)
    {
        if($dnaArray[$i] === 'G'){
           $dnaArray[$i] = 'C'; }
        elseif($dnaArray[$i] === 'C'){
           $dnaArray[$i] = 'G'; }
        elseif($dnaArray[$i] === 'T'){
           $dnaArray[$i] = 'A'; }
        elseif($dnaArray[$i] === 'A'){
           $dnaArray[$i] = 'U';}
          //  elseif($dnaArray[$i] === 'A'){
          //  $dnaArray[$i] = 'U';}
    }
    return implode("", $dnaArray);
}
print_r(toRna('ACGTGGTCTTAA')); //UGCACCAGAAUU
// G -> C
// C -> G
// T -> A
// A -> U
print_r("\n");
function to($dna)
{
    $map = [
      'G' => 'C',
      'C' => 'G',
      'T' => 'A',
      'A' => 'U',
      ];
      $result = [];
      for ($i = 0; $i < strlen($dna); $i++) {
        $result[] = $map[$dna[$i]];
      }
      return implode('', $result);
}
print_r(to('ACGTGGTCTTAA')); //UGCACCAGAAUU
//Реализуйте функцию toRoman(), которая переводит арабские числа в римские. Функция принимает на вход целое число в диапазоне от 1 до 3000, а возвращает строку с римским представлением этого числа.
print_r("\n");
function toRoman($num) 
{
  $mass = ['I' => 1, 'V' => 5, 'X' => 10, 'L' => 50, 'C' => 100, 'D' => 500, 'M' => 1000];
  $result = [];
  $sum = 0;
 foreach ($mass as $key => $values) {
  //  print_r($key);
  //  if ($num === $values) {
  //    $result[] = $key;
  //  }
  // $a = $num / 2 + $values;
  // print_r("$a ");
  if ($num > $values) {
    $sum += $values === $num;
    $result[$sum] = $key;      
  }
    
 }
 return $result;
}
print_r(toRoman(25));
//I = 1; V = 5; X = 10; L = 50; C = 100; D = 500; M = 1000.
//Реализуйте функцию scrabble, которая принимает на вход два параметра: набор символов (строку) и слово, и проверяет, можно ли из переданного набора составить это слово. В результате вызова функция возвращает true или false.
//При проверке учитывается количество символов, нужных для составления слова, и не учитывается их регистр.
print_r("\n");
function scrabble($simvol, $text)
{
    $a = str_split(strtolower($simvol));
    //  print_r($simvol);
    $b = str_split(strtolower($text));
    foreach ($a as $key1 => $value1) {
      //  print_r($value1);
    foreach ($b as $key2 => $value2) {
      if (in_array($value2, $a)) {
        return true;
      } else {
        return false;
      }
    }
  }
}
print_r(scrabble('avj', 'java'));
//array_key_exists()
//array_search
//array_search
//array_values
//'rkqodlw', 'world'
//'avj', 'java'

//Реализуйте функцию combine(), которая объединяет несколько словарей (ассоциативных массивов) в один общий словарь. Функция принимает на вход массив массивов и возвращает результат в виде ассоциативного массива, в котором каждый ключ содержит список уникальных значений в виде массива. Элементы в списке располагаются в том порядке, в котором они появляются во входящих словарях.
print_r("\n");
function combine(array $array)
{
  $result = [];
//  foreach ($array as ['a' => $value]) {
//   if ('a') {
//     $result['a'] = [$value];
//   }
 
 return $result;
}
print_r(combine([
    [ 'a' => 1, 'b' => 2, 'c' => 3 ],
    [],
    [ 'a' => 3, 'b' => 2, 'd' => 5],
    [ 'a' => 6 ],
    [ 'b' => 4, 'c' => 3, 'd' => 2 ],
    [ 'e' => 9 ],
]));
////     'a' => [1, 3, 6],
//     'b' => [2, 4],
//     'c' => [3],
//     'd' => [5, 2],
//     'e' => [9],
//Реализуйте функцию getChunked, которая принимает на вход массив и число, задающее размер чанка (куска). Функция должна вернуть массив, состоящий из чанков указанной размерности.
print_r("\n");
function getChunked($mass, $num)
{
  $result = [];
for ($i = 0, $lench = count($mass); $i < $lench; $i += $num) {
  $result[] = array_slice($mass, $i, $num);
}
return $result;
}
print_r(getChunked(['a', 'b', 'c', 'd'], 2));
// → [['a', 'b'], ['c', 'd']]))
//array_chunk
print_r("\n");
//Реализуйте функцию calcInPolishNotation, которая принимает массив, каждый элемент которого содержит число или знак операции (+, -, *, /). Функция должна вернуть результат вычисления по обратной польской записи. Если в какой-то момент происходит деление на ноль, функция должна вернуть значение null.
function calcInPolishNotation()
{
}
print_r(calcInPolishNotation([1, 2, '+', 4, '*', 3, '+']));
print_r("\n");
function testnum($num)
{
 for ($i = 2; $i <= $num / 2; $i++) {
  return true;
 } 
  
  //  $a = $num / $num;
  //  print_r($a);
}
print_r(testnum(5));

print_r("\n");
   function check($num)
     {
       if ($num < 2) {
         return false;
       }
        for ($i = 2; $i <= $num / 2; $i++)
        {
            if ($num % $i == 0) {
                return false;   
            }     
        }
        return true;
     }
     function Isprime($num) {
       
        if (check($num)) {
          echo 'yes';
        } else {
          echo 'no';
        }
     }
                   
     print_r(Isprime(9));
     print_r("\n");
     //Реализуйте функцию average, которая возвращает среднее арифметическое всех переданных аргументов. Если функции не передать ни одного аргумента, то она должна вернуть null.
     function average(...$mass)
     {
        $sum = 0;
        $result = '';
          for($i=0;$i<count($mass);$i++){
            $sum += $mass[$i];
            $result = $sum / count($mass);
      } 
      return $result;
     }
     print_r(average(-3, 4, 2, 10));
    print_r("\n");
//      function average(...$numbers)
// {
//     if (empty($numbers)) {
//         return null;
//     }
 
//     return (array_sum($numbers)) / (count($numbers));
// }
//Реализуйте функцию union(...$arrays), которая находит объединение всех переданных массивов. Функция принимает на вход от одного массива и больше. Ключи исходных массивов не сохраняются (т.е. все значения итогового массива заново индексируются: 0, 1, 2, ...).
function union($first, ...$rest)
{
  // $a = array_merge($first, ...$rest);
  // $b = array_unique($a);
  // // print_r($b);
  // $result = [];
  $arrayfirst = array_unique(array_merge($first, ...$rest));
  return array_values($arrayfirst);
  // foreach ($b as $arr) {
  //   $result[] = $arr;
  // }
  // return $result;
}
print_r(union([3, 2], [2, 2, 1])); // ['a', 3, false, true, 5, 8]
print_r("\n");
// print_r(Strings \ toLower ( 'ROD ELIAS' )); // стержень Элиас
//Реализуйте функцию slugify самостоятельно, не прибегая к \Funct\Strings\slugify. Преобразования, которые она должна делать:
//Приводить к нижнему регистру все символы в строке
//Удалять все пробелы
//Соединять слова с помощью дефисов
function slugify(string $string)
{
  // $a = strtolower(str_replace(' ', '', $string));
// $b = strtolower(preg_replace("/\s+/", "-",  $string));
$a = explode(' ', $string);
$b = compact($a);
print_r($b);
//  foreach ($a as $itog) {
//    $result[] = $itog;
//  }
//  return implode('-', $result);
}
print_r(slugify(' yOu   '));

print_r("\n");
$func = function () {
  echo "For hands of gold are always cold. But a woman's hands are warm";
};

print_r($func());
print_r("\n");
function call(string $fn, $argument)
{
    return $fn($argument);
}

$result = call('strlen', 'haskell is power!');
print_r($result); // => 17
print_r("\n");
//Реализуйте анонимную функцию, которая принимает на вход строку и возвращает её последний символ (или null, если строка пустая). Запишите созданную функцию в переменную $last.
$last = function(string $string) {
  $str = '';
  // while($i < strlen($string)) {
    $str = substr($string, -1);
    return $str;
    if (empty($string)) return null;
  // }
};
print_r($last('0'));
print_r("\n");
function run(string $text)
{
    // BEGIN (write your solution here)
    $last = function($text) {
       substr($text, -1);
        if ($text === '') return null;
    };
    // END

    return $last($text);
}
print_r($last('pow'));
print_r("\n");
//Реализуйте функцию takeOldest, которая принимает на вход список пользователей и возвращает самых взрослых. Количество возвращаемых пользователей задается вторым параметром, который по-умолчанию равен единице.
function takeOldest ($array, $num = 1)
{
//   usort($array, fn($array1, $array2) => $array1['birthday'] <=> $array2['birthday']);

// return firstN($array, $num);
 
  $cmp = function ($a, $b) {
  if ($a['birthday'] === $b['birthday']) {
    return 0;
  }
  return $a['birthday'] > $b['birthday'] ? 1 : -1;
  // print_r($a['birthday']);
};
usort($array, $cmp);
// Collection\firstN($array, $num); // => [1, 2]
// return $array;
}
print_r(takeOldest([
    ['name' => 'Tirion', 'birthday' => '1988-11-19'],
    ['name' => 'Sam', 'birthday' => '1999-11-22'],
    ['name' => 'Rob', 'birthday' => '1975-01-11'],
    ['name' => 'Sansa', 'birthday' => '2001-03-20'],
    ['name' => 'Tisha', 'birthday' => '1992-02-27']
], 1));
print_r("\n");
// function myMap(callable $callback, $coll)
// {
//     $result = [];
//     foreach ($coll as $item) {
//         $result[] = $callback($item);
//     }
//     return $result;
// }
// print_r(myMap($callback, [5, 2, 3]));
// print_r("\n");
// $numbers = [5, 2, 3];

// // возводим в квадрат каждое число
// $newNumbers = array_map(fn($number) => $number ** 2, $numbers);
// print_r($newNumbers); // => [25, 4, 9]
  
//Реализуйте функцию getChildren, которая принимает на вход список пользователей и возвращает плоский список их детей. Дети каждого пользователя хранятся в виде массива в ключе children
print_r("\n");
function getChildren(array $list)
{
  $result = [];
  foreach ($list as $value) {
    if ($value['children'] === 'Sam') {
      $result[] = $value;
    }
  }
  return $result;
}
print_r(getChildren([
    ['name' => 'Tirion', 'children' => [
        ['name' => 'Mira', 'birdhday' => '1983-03-23']
    ]],
    ['name' => 'Bronn', 'children' => []],
    ['name' => 'Sam', 'children' => [
        ['name' => 'Aria', 'birdhday' => '2012-11-03'],
        ['name' => 'Keit', 'birdhday' => '1933-05-14']
    ]],
    ['name' => 'Rob', 'children' => [
        ['name' => 'Tisha', 'birdhday' => '2012-11-03']
    ]],
]));

//Реализуйте функцию getGirlFriends, которая принимает на вход список пользователей и возвращает плоский список подруг всех пользователей (без сохранения ключей). Друзья каждого пользователя хранятся в виде массива в ключе friends. Пол доступен по ключу gender и может принимать значения male или female.
print_r("\n");
function getGirlFriends(array $arrays) 
{
  $result = [];
  foreach ($arrays as ['friends' => $friends]) {
    foreach ($friends as $gender) {
      if ($gender['gender'] === 'female') {
        $result[] = $gender;
      }
    }
  }
  return $result;
}
print_r(getGirlFriends([
    ['name' => 'Tirion', 'friends' => [
        ['name' => 'Mira', 'gender' => 'female'],
        ['name' => 'Ramsey', 'gender' => 'male']
    ]],
    ['name' => 'Bronn', 'friends' => []],
    ['name' => 'Sam', 'friends' => [
        ['name' => 'Aria', 'gender' => 'female'],
        ['name' => 'Keit', 'gender' => 'female']
    ]],
    ['name' => 'Rob', 'friends' => [
        ['name' => 'Taywin', 'gender' => 'male']
    ]],
]));
print_r("\n");
//Реализуйте функцию getMenCountByYear(), которая принимает на вход список пользователей и возвращает массив, в котором ключ это год рождения, а значение это количество мужчин, родившихся в этот год.
function getMenCountByYear(array $array)
{
  $result = [];
  $sum = 0;
  $count = $array[0];
 foreach ($array as $arrays) {
   $b = date("Y", strtotime($arrays['birthday']));
  //  print_r($b);
  // $male = 'male';
   if ($arrays['gender'] === 'male') {
     $sum += 1;
  
   }
     $result[$b] = $sum / $b;  
 }
return $result;
}
print_r(getMenCountByYear([
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
// $b = date("Y", strtotime($str));
  #   1973 => 3,
#     1963 => 1,
#     1980 => 2,
#     2012 => 1,
#     1999 => 1
print_r("\n");
// function getMenCountBy(array $users)
// {
//     $menfolk = array_filter($users, fn($user) => $user['gender'] === 'male');
 
//     $years = array_map(fn($user) => date('Y', strtotime($user['birthday'])), $menfolk);
 
//     return array_reduce($years, function ($acc, $year) {
//         if (!array_key_exists($year, $acc)) {
//             $acc[$year] = 1;
//         } else {
//             $acc[$year] += 1;
//         }
 
//         return $acc;
//     }, []);
// }
// print_r(getMenCoun([
//     ['name' => 'Bronn', 'gender' => 'male', 'birthday' => '1973-03-23'],
//     ['name' => 'Reigar', 'gender' => 'male', 'birthday' => '1973-11-03'],
//     ['name' => 'Eiegon',  'gender' => 'male', 'birthday' => '1963-11-03'],
//     ['name' => 'Sansa', 'gender' => 'female', 'birthday' => '2012-11-03'],
//     ['name' => 'Jon', 'gender' => 'male', 'birthday' => '1980-11-03'],
//     ['name' => 'Robb','gender' => 'male', 'birthday' => '1980-05-14'],
//     ['name' => 'Tisha', 'gender' => 'female', 'birthday' => '2012-11-03'],
//     ['name' => 'Rick', 'gender' => 'male', 'birthday' => '2012-11-03'],
//     ['name' => 'Joffrey', 'gender' => 'male', 'birthday' => '1999-11-03'],
//     ['name' => 'Edd', 'gender' => 'male', 'birthday' => '1973-11-03']
// ]));
print_r("\n");
//Реализуйте функцию getFreeDomainsCount, которая принимает на вход список емейлов, а возвращает количество емейлов, расположенных на каждом бесплатном домене. Список бесплатных доменов хранится в константе FREE_EMAIL_DOMAINS.
// const FREE_EMAIL_DOMAINS = [
//     'gmail.com', 'yandex.ru', 'hotmail.com'
// ];
// function getFreeDomainsCount($email)
// {
// 	$result = [];
// 	foreach ($email as $value) {
// 		$name = explode('@', $value);
// 		$filename = array_key_last($name);
// 		if (in_array($filename, FREE_EMAIL_DOMAINS)) {
// 			$result[$filename] += 1;
// 	}
// }
// 	return $result;
// }
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
//is_file - проверяет что переданный путь это реально существующий файл
//pathinfo - позволяет извлекать расширение из имени файла
//basename - извлекает имя файла из полного пути 
//Реализуйте функцию getFreeDomainsCount, которая принимает на вход список емейлов, а возвращает количество емейлов, расположенных на каждом бесплатном домене. Список бесплатных доменов хранится в константе FREE_EMAIL_DOMAINS.
// const FREE_EMAIL_DOMAINS = [
//     'gmail.com', 'yandex.ru', 'hotmail.com'
// ];
// function getFreeDomainsC($email)
// {
// 	// $one = array_map(fn($mail) => explode('@', $mail)[1], $email);
// 	// $two = array_filter($one, fn($domain) => in_array($domain, FREE_EMAIL_DOMAINS));

// 	// return array_reduce($two, function($fn, $value) {
// 	// 	$fn[$value] = ($fn[$value] ?? 0) + 1;
// 	// 		return $fn;
// 	// }, []);
// }
// print_r(getFreeDomainsC([
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
// print_r("\n");
//  function getManWithLeastFriends($users)
// {
//   if (empty($users)) {
//     return null;
//   }
//   return Collect/minValue($users, function ($user) {
//     return count($user['friends']);
//   });   
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
// $value = [3, 4];
function without(array $items, ...$value)
{
    $filtered = array_filter($items, function ($item) use ($value) {
        return !in_array($item, $value);
       
    });
    #Сбрасываем ключи
    return array_values($filtered);
   
}
print_r(without(['wow', 3, 4, 10, 4, 'true'], null, 4));
//[10, 'true']
//Реализуйте функцию enlargeArrayImage, которая принимает изображение в виде двумерного массива и увеличивает его в два раза.
// function Flatten(array $array)
// {
//     return Collection\flatten(
//     array_map(fn($arr) => [$arr, $arr], $array)
//     );
// }
// function enlargeArrayImage($array2)
// {
//     $name = array_map(fn($arr2) => Flatten($arr2), $array2);
//     return Flatten($name);
// }
// print_r(enlargeArrayImage([
//   ['*','*','*','*'],
//   ['*',' ',' ','*'],
//   ['*',' ',' ','*'],
//   ['*','*','*','*']
// ], [
//   ['*','*','*','*'],
//   ['*',' ',' ','*'],
//   ['*',' ',' ','*'],
//   ['*','*','*','*']
// ]));
//str_repeat
print_r("\n");
function factorial($number)
{ 
  return $number % 2 === 0;
}
function test($number)
{
  $result = factorial($number) ? 'yes' : 'no';
  return $result;
}
print_r(test(11));
//Реализуйте функцию findIndexOfNearest, которая принимает на вход массив чисел и искомое число. Задача функции — найти в массиве ближайшее число к искомому и вернуть его индекс в массиве.
//Если в массиве содержится несколько чисел, одновременно являющихся ближайшими к искомому числу, то возвращается наименьший из индексов ближайших чисел.
print_r("\n");
function findIndexOfNearest(array $array, $num)
{
  // $car = $array[0];
 $name = array_reduce($array, function ($car, $arrays) use ($num) {
    // print_r($car);
    return $arrays <= $num? max($car, $arrays): min($car, $arrays);
   return $name;
  });
  
}
print_r(findIndexOfNearest([2, 4, 8, 16, 32, 64, 128, 256, 512], 0));
print_r("\n");
$array = array(2, 4, 8, 16, 32, 64, 128, 256, 512);
$count = 31;

echo array_reduce($array, function ($car, $item) use ($count) {
  // print_r("$car");
    return $item <= $count? max($car, $item): min($car, $item); 
});
//Реализуйте функцию getSameParity, которая принимает на вход список и возвращает новый, состоящий из элементов, у которых такая же четность, как и у первого элемента входного списка.
print_r("\n");
function getSameParity($mass)
{
  $result = [];
 if ($mass[0] % 2 === 0) {
   for ($i = 0; $i < count($mass); $i++) {
     if ($mass[$i] % 2 === 0) {
        $result[] = $mass[$i];
     }
 } 
} elseif ($mass[0] % 2 !== 0) {
  foreach ($mass as $item) {
    if ($item % 2 !== 0) {
      $result[] = $item;
    }
  }
}
return $result; 
}
print_r(getSameParity([2, 0, 1, -3, 10, -2])); // [5, 1, -3]
//Реализуйте функцию getSameParity, которая принимает на вход список и возвращает новый, состоящий из элементов, у которых такая же четность, как и у первого элемента входного списка.
print_r("\n");
print_r("\n");
function getSameParit(array $mass)
{
  [$firstnum] = $mass;
  // print_r($firstnum);
  $ch = abs($firstnum) % 2;
  $name = array_filter($mass, function ($num) use ($ch) {
    return (abs($num) % 2) === $ch;
  });
  return array_values($name);
}
print_r(getSameParit([-1, 0, 1, -3, 10, -2])); // [5, 1, -3]
print_r("\n");
//Реализуйте функцию filterAnagrams(), которая находит все анаграммы слова. Функция принимает исходное слово и список для проверки (массив), а возвращает массив всех анаграмм. Если в списке слов отсутствуют анаграммы, то возвращается пустой массив.
function filterAnagrams($value, array $mass)
{
  $result = [];
 $a = str_split(strtolower($value));
    //  print_r($simvol);
    $str = implode(' ', $mass);
    $b = str_split($str);
    foreach ($a as $key1 => $value1) {
      //  print_r($value1);
    foreach ($b as $key2 => $value2) {
      if (in_array($value1, $b)) {
        $result[] = $mass;
      }
      // } else {
      //   return false;
      // }
    }
  }
  return $result;
}
print_r(filterAnagrams('abba', ['aabb', 'abcd', 'bbaa', 'dada']));


function capitalize($text)
{
    $firstSymbol = strtoupper($text[0]);
    $restSubstring = substr($text, 1);
    return "{$firstSymbol}{$restSubstring}";
}
print_r(capitalize('hello'));
//Для хорошего тестирования этой функции понадобится как минимум три теста:
//Проверка, что функция возвращает нужное значение по существующему ключу (прямой тест на работоспособность)
//Проверка на то, что возвращается значение по умолчанию, если ключа нет
//Проверка на то, что возвращается значение по существующему ключу, даже если передано значение по умолчанию (пограничный случай)
// if (get(['key' => 'value'], 'key') !== 'value') {
//     throw new \Exception('Boom!');
// }
 
// if (get([], 'key', 'default') !== 'default') {
//     throw new \Exception('Boom!');
// }
 
// if (get(['key' => 'value'], 'key', 'default') !== 'value') {
//     throw new \Exception('Boom!');
// }
// if (get(['key' => 'value'], 'key' !== 'value' ) {
//     throw new \Exception('Функция работает неверно!');
// }

// if (get([], 'key', 'default') !== 'default') {
//     throw new \Exception('Функция работает неверно!');
// }

// if (get(['key' => 'value'], 'key', 'default') !== 'value' {
//     throw new \Exception('Функция работает неверно!');
// }

// echo 'Все тесты пройдены!';

//Напишите тесты для функции take(items, n), которая возвращает первые n элементов из массива:
assert(take(items), n);
print_r("\n");
function reverseString($string)
{
    return implode(array_reverse(str_split($string)));
}
print_r( reverseString("hello"));
print_r("\n");
//Напишите тесты для функции fill($coll, $value, $start, $end), которая заполняет элементы массива переданным значением, начиная со старта и заканчивая (но не включая) конечной позицией. Функция меняет исходный массив!
print_r("\n");
$keys = array('foo', 5, 10, 'bar');
$a = array_fill_keys($keys, 'banana');
print_r($a);

print_r("\n");
// class Point {
//   constructor(x, y) {
//     this.x = x;
//     this.y = y;
//   }
//Реализуйте функцию calculateDistance(), которая находит расстояние между двумя точками на плоскости.
function calculateDistanc($a1, $a2) 
{
  if ($a1 && $a2) {
    return sqrt((($a1[0] - $a2[0]) ** 2) + (($a1[1] - $a2[1]) ** 2));
  }
}
$point1 = [0, 0];
$point2 = [3, 4];
print_r(calculateDistanc($point1, $point2)); //5

print_r("\n");
//решегия учителя
function calculate($poin1, $poin2)
{
  $a = $poin1[0] - $poin2[0];
  $b = $poin1[1] - $poin2[1];

  return sqrt($a ** 2 + $b ** 2);
}
print_r(calculate([0, 0], [3, 4]));
print_r("\n");
//Реализуйте функцию getMidpoint(), которая находит точку посередине между двумя указанными точками
function getMidpoint($a1, $a2)
{
  $one = ($a1['x'] + $a2['x']) / 2;
  $two = ($a1['y'] + $a2['y']) / 2;
  // print_r($two);
 return ['x' => $one, 'y' => $two];
 
}
// $point1 = ['x' => -1, 'y' => 10];
// $point2 = ['x' => 0, 'y' => -3];
//x = (x1 + x2) / 2 и y = (y1 + y2) / 2.
$point3 = getMidpoint(['x' => -1, 'y' => 10], ['x' => 0, 'y' => -3]);//'x' => -0.5, 'y' => 3.5
print_r($point3); // => [ 'x' => 2, 'y' => 2 ]


print_r("\n");

//makeSegment(). Принимает на вход две точки и возвращает отрезок.
// makeSegment(). Принимает на вход две точки и возвращает отрезок.
// getMidpointOfSegment(). Принимает на вход отрезок и возвращает точку находящуюся на середине отрезка.
// getBeginPoint(). Принимает на вход отрезок и возвращает точку начала отрезка.
// getEndPoint(). Принимает на вход отрезок и возвращает точку конца отрезка.
print_r("\n");
function makeDescartesPoin($x, $y)
{
         $begin2 = ($y['y'] + $x['y']) / 2;
         $begin1 = ($y['x'] + $x['x']) / 2;
         return "{$begin1} {$begin2}";
}
$getBeginPoint1 = ['x' => 3, 'y' => 2];
$getEndPoint2 = ['x' => 0, 'y' => 0];
print_r(makeDescartesPoin($getBeginPoint1, $getEndPoint2));//(1.5, 1)
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
// function makeSegment($x, $y)
// {
//     return [
//         'x' => $x,
//         'y' => $y
//     ];
//     // print_r($y['y']);
// }
// $point = makeSegment([3, 2], [2, 3]);
// // print_r($point);
// // print_r(makeSegment([3, 2], [0, 0]));
// function getBeginPoint($point)
// {
//     return $point['x'];
//     // print_r($point);
// }
// // print_r(getBeginPoint($point));

// function getEndPoint($point)
// {
//     return $point['y'];
// }
// // print_r(getEndPoint($point));
// function getMidpointOfSegment($point) 
// {
//   // print_r($point['y'][1]);
  
//         $begin2 = ($point['x'][1] + $point['y'][1]) / 2;
//         $begin1 = ($point['x'][0] + $point['y'][0]) / 2;
//         return "{$begin1} {$begin2}";
// }
// $getBeginPoint1 = ['x' => 3, 'y' => 2];
// $getEndPoint2 = ['x' => 2, 'y' => 3];
// print_r(getMidpointOfSegment($point));//1.5, 1
print_r("\n");
function makeUser($name, $birthday)
{
    return [
        'name' => $name,
        'birthday' => $birthday
    ];
}

function getAge($user)
{
    return calculateAge($user['birthday']);
}

function isAdult($user)
{
    return getAge($user) >= 18;
}

// Эта функция не является частью интерфейса абстракции User.
// Она является "внутренней".
function calculateAge($birthday)
{
    $secondsInYear = 31556926;
    return floor((time() - strtotime($birthday)) / $secondsInYear);
}
print_r("\n");
function makeDecartPoint($x, $y)
{
     return [
         'angle' => atan2($y, $x),
         'radius' => sqrt($x ** 2 + $y ** 2)
     ];
}
$point = makeDecartPoint(4, 8);
print_r($point);
function getAngle($point)
{
  return $point['angle'];
}
function getRadius($point)
{
  return $point['radius'];
}
function getX($point)
{
  return getRadius($point) * cos(getAngle($point));
}
print_r(getX($point));
print_r("\n");
function getY($point)
{
  return getRadius($point) * sin(getAngle($point));;
}
print_r(getY($point));
//Получить x можно по формуле radius * cos(angle)
//Получить y можно по формуле radius * sin(angle)
// function makeUser($name, $birthday)
// {
//     return [
//          'angle' => atan2($y, $x),
//          'radius' => sqrt($x ** 2 + $y ** 2)
//      ];
// }

// function getAge($point)
// {
//     return calculateAge($point['angle']);
// }

// function isAdult($point)
// {
//     return getAge($user) >= 18;
// }

// // Эта функция не является частью интерфейса абстракции User.
// // Она является "внутренней".
// function calculateAge($birthday)
// {
//     $secondsInYear = 31556926;
//     return floor((time() - strtotime($birthday)) / $secondsInYear);
// }
print_r("\n");
function makeRational($numer, $denom)
{
    return "{$numer}/{$denom}";
}
$rational = makeRational(10, 3);
// print_r(makeRational(10, 3));
function getNumer($rational)
{
    return explode('/', $rational)[0];
    // print_r($rational);
}
print_r(getNumer($rational));

function getDenom($rational)
{
    return explode('/', $rational)[1];
}
print_r(getDenom($rational));
// print_r(makeRational(10, 3)); // => 10/3
print_r("\n");
function sum($rational1, $rational2)
{

}
print_r(sum(4, 5));
function printSum($rational1, $rational2)
{
    $rational3 = sum($rational1, $rational2);
    // print_r($rational3);
    $denom = getDenom($rational3);
    $numer = getNumer($rational3);
    echo "Denom: {$denom}";
    echo "Numer: {$numer}";
}
print_r("\n");
function mul($rational1, $rational2)
{
    return [
        'numer' => $rational1['numer'] * $rational2['numer'],
        'denom' => $rational1['denom'] * $rational2['denom']
    ];
}
print_r(mul(4, 2));
print_r("\n");
//Реализуйте абстракцию (набор функций) для работы с прямоугольниками, стороны которого всегда параллельны осям. Прямоугольник может располагаться в любом месте координатной плоскости.
//При такой постановке, достаточно знать только три параметра для однозначного задания прямоугольника на плоскости: координаты левой-верхней точки, ширину и высоту. Зная их, мы всегда можем построить прямоугольник одним единственным способом.
function makeRectangle($point, $with, $hight)
{
  return [
    'point' => $point,
    'with' => $with,
    'hight' => $hight
  ];
}
// $p = makeDecartPoint(0, 1);
// $rectanje = makeRectangle(2, 4, 5);

// function getStartPoint($rectanje)
// {
//   return $rectanje['point'];
// }
// print_r(getStartPoint($rectanje));
// function getWidth($rectanje)
// {
//   return $rectanje['with'];
// }
// print_r(getWidth($rectanje));
// function getHeight($rectanje)
// {
//   return $rectanje['hight'];
// }
// print_r(getHeight($rectanje));
// print_r("\n");
// function containsOrigin($rectanje)
// {
//   $point1 = getStartPoint($rectanje);
//   $point2 = makeDecartPoint(getX($point1) + getWidth($rectangle), getY($point1) - getHeight($rectangle));
//   return getQuadrant($point1) === 2 && getQuadrant($point2) === 4;
// }
// print_r(containsOrigin($rectanje));
// $num = makeRational(1, 2); // создали рациональное число "одна вторая"
// $numer = getNumer($num); // 1
// $denom = getDenom($num); // 2
// print_r($denom);
//makeDecartPoint

//Реализуйте абстракцию для работы с рациональными числами включающую в себя следующие функции:
// Конструктор makeRational - принимает на вход числитель и знаменатель, возвращает дробь.
// Селектор getNumer - возвращает числитель
// Селектор getDenom - возвращает знаменатель
// Сложение add - складывает две переданные дроби
// Вычитание sub - находит разность между двумя дробями
function makeRation($num1, $num2)
{
  return "{$num1}/{$num2}";
}
$rational = makeRation(3, 9);//1, 3
print_r($rational);
print_r("\n");
function getNume($rational)
{
  return $rational[0];
}
print_r(getNume($rational));
// function getDeno($rational)
// {
//   return explode('/', $rational)[1];
// }
// function add($rational1, $rational2)
// {
//   return makeRation(
//     getNume($rational1) * getNume($rational2),
//     getDeno($rational1) * getDeno($rational2)
//   );
// }
// print_r(add($rational1, $rational2));
// function sub($rational1, $rational2)
// {
//   return makeRation(
//     getNume($rational1) - getNume($rational2),
//     getDeno($rational1) - getDeno($rational2)
//   );
// }
// print_r((1, 10) * (4, 10));
// print_r("\n");
// $a = (3/9) + (9/3);
// print_r($a);
print_r("\n");
function makeRationa($num1, $num2)
{
    $gcd = gcd($num1, $num2);
    return ['num1' => $num1 / $gcd, 'num2' => $num2 / $gcd];
}
function getNum($rational)
{
    return $rational['num1'];
}
function getDen($rational)
{
    return $rational['num2'];
}
function add($rational1, $rational2)
{
    return makeRationa(
    getNum($rational1) * getDen($rational2) + getNum($rational2) * getDen($rational1),
    getDen($rational1) * getDen($rational2)
  );
}
function sub($rational1, $rational2)
{
    return makeRationa(
    getNum($rational1) * getDen($rational2) - getNum($rational2) * getDen($rational1),
    getDen($rational1) * getDen($rational2)
  );
}
print_r("\n");
function fill($coll, $value, $begin = 0, $end = null)
{
  // $result = [];
   $lench = count($coll);
   $end = $end ?? $lench;
   $beginnum = $begin >= $end ? $end : $begin;
   $endnum = $end >= $lench ? $lench : $end;
   for ($i = $beginnum; $i < $endnum; $i++) {
     $coll[$i] = $value;
   } 
   return $coll;
}

print_r(fill([1, 2, 3, 4], '*')); //1, '*', '*', 4
print_r("\n");
//Реализуйте функцию removeFirstLevel(), которая принимает на вход дерево, и возвращает новое, элементами которого являются дети вложенных узлов (см. пример).
function removeFirstLevel(array $array)
{
  $result = [];
  foreach($array as $key => $value) {
    // print_r($value);
    if ($key && $value) {
      $result[] = $value;
    } elseif (!$key && $value) {
      unset($value);
    }
  }
  return $result;
}
print_r(removeFirstLevel([[5], 1, [3, 4]]));//[5, 3, 4]
//[1, [3, 2], 3, 5, 130, [1, [550, 10]]];
print_r("\n");
// print_r('sdsvsdfv');
print_r("\n");
// function array_flatten($tree, $depth = 0)
// {
//     $result = [];
//     foreach ($tree as $key => $value) {
//       // print_r($value);
//         if ($depth >= 0 && is_array($value)) {
//           // print_r($value);
//             $value = array_flatten($value, $depth > 1 ? $depth - 1 : 0 - $depth);
//             // print_r($value);
//             $result = array_merge($result, $value);
//             // print_r($result);
//         } else {
//             $result[] = $value;
//         }
//     }
//     return $result;
// }
// print_r(array_flatten([[5], 1, [3, 4]], $depth = 0));
print_r("\n");
// function key_compare_func($key1, $key2)
// {
//     if ($key1 == $key2)
//     print_r($key1);
//         return 0;
//     // else if ($key1 > $key2)
//     //     return 1;
//     // else
//     //     return -1;
// }

// $array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
// $array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

// var_dump(array_intersect_ukey($array1, $array2, 'key_compare_func'));
// $tree = mkdir('etc', [
//   touch('bashrc'),
//   mkdir('consul', [
//     touch('config.json'),
//   ]),
// ], ['key' => 'value']);
