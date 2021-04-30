<?php


function multiplyNumberFromRange($num1, $el)
{
    // $faz = strtoupper($num1);
    $i = 0;
    $count = 0;

    while($i < strlen($num1)) {
      if (strtoupper($num1[$i]) === strtoupper($el)) {
        $count += 1;
      }
      $i += 1;
    }
    return $count;
}
print_r(multiplyNumberFromRange('AzamfFff', 'f'));

print_r("\n");
// переворот строки с помощью цикла 

function multiplyString($str)
{
    $i = 0;
    $string = '';

    while($i < strlen($str)) {
      $result = $str[$i];
      $string = "{$result}{$string}";
      $i += 1;
    }
    return $string;
}
print_r(multiplyString('Roza'));

print_r("\n");

// возвращает указанную подстроку
function mysubstr($string, $el)
{
    $i = 0;
    $str = '';
    // $count = 0;
    
    while($i < $el) {
          $result = $string[$i];
          // $count += 1;
          $str = "{$str}{$result}";
        
        $i += 1;
    }
    return $str;
}

print_r(mysubstr('Hello', 4));

print_r("\n");

//Функция - предикат
function Fun($string, $index, $strlen)
{
    $str = strlen($string);
    
    if ($index < 0) {
        return false;
    } elseif ($strlen < 0) {
        return false;
    } elseif ($index >= $str) {
        return false;
    } elseif ($strlen + $index > $str) {
        return false;
    }
    
    return true;
}

print_r(Fun('Byby', 0, -2));

print_r("\n");
// количество вхождений символа в строкe
function countChars($string, $e)
{
    $i = 0;
    $count = 0;
    
    while($i < strlen($string)) {
      $result = $string[$i];
        if ($result === $e) {
            $count += 1;
        }
        $i += 1;
    }
    return $count;

}

print_r(countChars('didiffffff', 'f'));

print_r("\n");
// Реализуйте функцию filterString(), принимающую на вход строку и символ, и возвращающую новую строку, в которой удален переданный символ во всех его позициях.
function filterString($string, $char)
{
    $i = 0;
    $str = '';
    $count = 0;

    while($i < strlen($string)) {
      $result = $string[$i];
       if ($result !== $char) {
            $str = "{$str}{$result}";
            $count ++;
        }
        $i += 1;
    }
    return $str;
}

print_r(filterString('raratame', 'r'));

print_r("\n");
//переворот строки

function Test($name) 
{
  $i = 0;
  $result = '';

  while($i < strlen($name)) {
    $char = $name[$i];
    $result = "{$char}{$result}";
    $i += 1;
  }
  return $result;
}

print_r(Test('dilya'));

print_r("\n");
// Если в этом диапазоне не найден делитель, который делит число x без остатка, значит перед нами простое число.

      function Test2($num)
      {
        if ($num < 2){
          return false;
        }

        $two = 2;

        while($two <= $num / 2) {
            if ($num % $two === 0) {
              return false;
            }
            $two += 1;
        }
        return true;
      }

      print_r(Test2(2));

      print_r("\n");
// Реализуйте функцию hasChar(), которая проверяет, содержит ли строка букву в указанном регистре. Функция принимает два параметра:
      function hasChar($str, $a)
        {
            $i = 0;
            
            while($i < strlen($str)) {
                $string = $str[$i];
                if ($string === $a) {
                    return true; 
                }
              $i += 1;
            }
            return false;
          
        }
        print_r(hasChar('rthskd', 'h'));

        print_r("\n");
        for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);
        print_r("\n");
        for($i = 0; $i <= 10; $i++) {
          print_r($i);
        }

        print_r("\n");
        //переворот строки через цикл for
        function Test3($name) 
        {
          $str = '';

          for($i = 0; $i <= strlen($name); $i += 1) {
            $text = $name[$i];
            $str = "{$text}{$str}";
          }
          return $str;
        }
        print_r(Test3('Ariy'));

        //Реализуйте функцию sumOfSeries(), которая считает сумму ряда целых чисел. Ряд задаётся двумя числами — начальным и конечным.
  print_r("\n");
//Функция принимает два аргумента-числа и возвращает сумму ряда. Например, для аргументов 4 и 7 сумма будет 4 + 5 + 6 + 7 = 22.

        function sumOfSeries($num1, $num2)
        {
          $sum = 0;
              for($i = $num1; $i <= $num2; $i += 1) {
                 $sum += $i;
                
              }
              return $sum;
        }

        print_r(sumOfSeries(1, 6));

        print_r("\n");
        //Для определения является ли слово палиндромом, достаточно сравнивать попарно символ с обоих концов слова. Если они все равны, то это палиндром. Решите задачу без использования реверса строки (функция strrev()).
        
        function isPalindrome($string) 
          {
              if ($string !== strrev($string)) {
                  return false;
              } else {
                  return true;
              }
          }

          print_r(isPalindrome('parap'));

          // Решения учителя
          function isPalind(string $word)
          {
              $lastIndex = strlen($word) - 1;
              for ($i = 0, $middleIndex = $lastIndex / 2; $i < $middleIndex; $i++) {
                  if ($word[$i] !== $word[$lastIndex - $i]) {
                      return false;
                  }
              }
              return true;
          }
          print_r(isPalind('Roza'));

          print_r("\n");

          // function generateError()
          // {
          //   generateParse();
          // }

          // print_r(generateError());

          print_r("\n");
          function reverse($str)
{
    $index = strlen($str) - 1;
    $reversedString = '';

    while ($index >= 0) {
        $currentChar = $str[$index];
        $reversedString = "{$reversedString}{$currentChar}";
        $index = $index - 1;
    }

    return $reversedString;
}

print_r(reverse('mariy'));

print_r("\n");

function reve(string $num): string
{
   $i = 0;
   $str = '';

   while($i < strlen($num)) {
     $result = $num[$i];
     $str = "{$result}{$str}";
     $i += 1;
   }
   return $str;
}
print_r(reve(45));

print_r("\n");

// Реализуйте функцию reverse(), которая переворачивает цифры в переданном числе:
function reverseInt($num){

  $orig_arr = str_split($num);

  $reverse_arr = [];

  for ($i = sizeof($orig_arr) - 1; $i >= 0; $i--){
    if ($orig_arr[0] == "-"){
      $reverse_arr[0] = "-";
    }
      $reverse_arr[] = $orig_arr[$i];
  }

  return (int)$reverse = implode("",$reverse_arr);
}
print_r(reverseInt(-65));

// Реализуйте функцию reverse(), которая переворачивает цифры в переданном числе:
// function reverseInt($num){


// function reverse(int $num): int
// {
//     $reverse = (int) strrev((string) abs($num));
//     return $num >= 0 ? $reverse : -$reverse;
// }

print_r("\n");

function strangeFunction(string &$text)
{
    $text .= 'hei';
}

$text = 'money';

strangeFunction($text);
echo $text; // => hei

print_r("\n");

// Менять местами цифорки по ссылке 
 function swap(&$a, &$b)
{
   
    $c = $a;
    $a = $b;
    $b = $c;
} 
// $a = 5; $b = 8;

swap($a, $b);
print_r($a);
print_r("\n");
print_r($b);
// Реализуйте функцию binarySum, которая принимает на вход два бинарных числа (в виде строк) и возвращает их сумму. Результат (вычисленная сумма) также должен быть бинарным числом в виде строки.
print_r("\n");

// ЗАДАЧКИ ПЛАТНЫЕ ПО ОСНОВАМ

function binarySum($bi1, $bi2)
{
   $a = bindec($bin1);
    $b = bindec($bin2);
    $d = $a + $b;
    $result = decbin($d);
    return $result;
}
print_r(binarySum('10', '1')); //10010

print_r("\n");
//Реализуйте функцию isPowerOfThree которая определяет, является ли переданное число натуральной степенью тройки. Например, число 27 это третья степень (33), а 81 это четвертая (34).
function isPowerOfThree($numeric)
{
  // $stepen = ;
  // $a = 3^$numeric;
    if(3^$numeric !== 3) {
      return true;
    }
    return false;
}

print_r(isPowerOfThree(27));

print_r("\n");

// echo 3 ** 27;
//Реализуйте функцию fib находящую положительные числа Фибоначчи. Аргументом функции является порядковый номер числа.
function fibo($i) { 
 if ($i == 0 ) return 0; 
 if ($i == 1 || $i == 2) { 
  return 1; 
 } else { 
  return fibo($i - 1) + fibo($i -2); 
 } 
} 
 print_r(fibo(5));
 print_r("\n");
 //Реализуйте функцию addDigits, которая принимает на вход неотрицательное целое число и возвращает другое число, полученное из первого следующим преобразованием: Итеративно сложите все входящие в него цифры до тех пор пока, не останется одна цифра.
 function addDigits($numeric)
 {
   $i = 0;
   $count = 0;

   while($i < $numeric) {
     $res = $numeric[$i];
      $count += 1;
     $i += 1;
   }
   return $count;
 }
 print_r(addDigits(38));

 print_r("\n");

 function sum($num2)
        {
          // $b = -1;
          $sum = 0;
              for($i = 0; $i <= $num2; $i += 1) {
                $res = $num2[$i];
                $sum += 1;
                
              }
              return $sum;
        }

        print_r(sum(38));

        print_r("\n");

        for($i = 1; $i <= 9; $i++) {
          print_r($i);
        }

        print_r("\n");

        $str = "Hello world. (can you hear me?)";
        echo quotemeta($str);

        print_r("\n");

        function isBalanced($string)
        {
         $string = 
               [
                '(',
                ')',
                ];

        if ($string['('] === $string[')']) {
            return true;
        } else
          // } elseif ($string['('] !== $string[')']) {
          //   return false;
           return false;
          } 

        print_r(isBalanced(')'));

        print_r("\n");
        // которая объединяет все числа из диапазона в строку:
function join22($num1, $num2)
{
 $i = $num1;
//  $sum = 0;
 $res = '';

 while($i <= $num2) {
  // $sum = $sum + $i;
  $res = "{$res}{$i}";
    $i += 1;
 }
 return $res; 
}
print_r(join22(2, 8));
print_r("\n");
// 
function printReversedNameBySymbol($name)
{
    $i =strlen($name) -1;
    // $str = strlen($name);
    
    while($i >= 0) {
       print_r("{$name[$i]}\n");
        $i -= 1;
    }
    // return $str;  
}
print_r(printReversedNameBySymbol('Dana'));

print_r("\n");
// Функция из теории учитывает регистр букв. То есть A и a с её точки зрения разные символы. Реализуйте вариант этой же функции, так чтобы регистр букв был не важен:
function coun11($str, $char)
{
    $i = 0;
    $count = 0;
    // $string = strlen($str);

    while($i < strlen($str)) {
      if (strtolower($str[$i]) === $char || strtoupper($str[$i]) === $char) {
        $count = $count + 1;
      }
      $i += 1;
    }  
     return $count;
}
print_r(coun11('KadamGff', 'F'));

//Реализуйте функцию mysubstr(), которая извлекает из строки подстроку указанной длины. Она принимает на вход два аргумента (строку и длину) и возвращает подстроку начиная с первого символа:
print_r("\n");
function sub($text, $num)
{
  $i = 0;
  $str = '';

  while($i < $num) {
    $res = $text[$i];
    $str = "{$str}{$res}";
    $i += 1;
  }
  return $str;
}
print_r(sub('urock', 4));

print_r("\n");
//Реализуйте функцию countChars(), которая считает повторения указанного символа в строке. (В программировании говорят «количество вхождений символа в строкe»).
//Функция принимает на вход два параметра: строку и символ. Функция возвращает число.
function count35($string, $e)
{
    $i = 0;
    $count = 0;
    // $str = strlen($string);
    
    while($i < strlen($string)) {
      // $str = $string[$i];
      if ($string[$i] === $e) {
        $count += 1;
      }
      $i += 1;
    }
    return $count;    
}
print_r(count35('strlensnnn', 'n'));

print_r("\n");
//Реализуйте функцию apply(), которая применяет указанную операцию к переданному массиву и возвращает новый массив. Всего нужно реализовать три операции:
//reset - Сброс массива
//remove - Удаление значения по индексу
//change - Обновление значения по индексу

function apply(array $arr, string $operationName, int $index = null, $value = null): array
{
  switch ($operationName) {
    case 'reset':
    $arr = [];
    break;
    case 'remove':
    unset($arr[$index]);
    break;
    case 'change':
    $arr[$index] = $value;
    break;
  }
  return $arr;
}

print_r("\n");
// Реализуйте функцию addPrefix, которая добавляет к каждому элементу массива переданный префикс и возвращает получившийся массив. Функция предназначена для работы со строковыми элементами. Аргументы:
//Массив
//Префикс

function addPrefix($arr, $pref) 
  {
  $result = [];
  for ($i = 0; $i < count($arr); $i += 1) {
  // $result = "{$el} . {$arr[$i]}";
  $result[$i] = "$pref $arr[$i]";
  
  //  $str = "{$el[$i]}";
  // $string = "{$el}{$arr}";
  }
  return $result;
   
}
print_r(addPrefix(['red', 'black', 'white'], 'mr'));

print_r("\n");
$NaimSmile = ['VASYA@gmAil.com', 'iGoR@yandex.RU', 'netiD@hot.CoM'];

for ($i = 0; $i < count($NaimSmile); $i++) {
  $mail = $NaimSmile[$i];
  $result = strtolower($mail);
  print_r($result);
}
print_r("\n");
$names = ['john', 'smith', 'karl'];
 
$result = $names[1];
print_r($result); // => ['karl', 'smith', 'john']
// print_r($result);
print_r("\n");

function TestTest($arrays)
{
   $size = count($arrays);
   $Indexla = floor($size / 2);

   for($i = 0; $i < $Indexla; $i++) {
     $MirrorIn = $size - $i - 1;
     $temp = $arrays[$i];
     $arrays[$i] = $arrays[$MirrorIn];
     $arrays[$MirrorIn] = $temp;
   }
   return $arrays;
}
print_r(TestTest([3, 2, 8, 9, 7]));

print_r("\n");
//Реализуйте функцию swap, которая меняет местами два элемента относительно переданного индекса. Например, если передан индекс 5, то функция меняет местами элементы, находящиеся по индексам 4 и 6.
function Arraykey(array $array, int $index)
{
   $size = count($array);
   $Indexla = floor($size / 2);

   for($i = 0; $i < $Indexla; $i++) {
     if (array_key_exists($index, $array)) {
      $MirrorIn = $size - $i - 1 - 1;
      $temp = $array[$MirrorIn];
      $array[$MirrorIn] = $temp;
      $temp = $temp;
      // $array[$i] = $temp;
     
      // $array[$MirrorIn] = $array[$i];
     }
    //  } elseif ($index[-1] === false && $index[+1] === false) {
    //    return $size;
    //  }
   }
   return $array;
}
print_r(Arraykey([3, 2, 8, 'gu', 'la', 'sa'], 1));
//3 нолевой index
//2 первый index
//8 второй index
//7 третий index

print_r("\n");

// $userNames = ['petya', 'vasya', 'evgeny'];

// if (foreach ($userNames as $name)) {
//   print_r("{$name}\n");
//   return true;
// } 

print_r ("\n");
$numeric = [5, 6, 8, 10];
// $res = count($numeric);
for ($i = 0, $b = count($numeric) -1; $b >= $i; $i += 1) {
  // $result = $numeric[$i];
  print_r($i);
}

 print_r("\n");
 //Реализуйте функцию isContinuousSequence, которая проверяет, является ли переданная последовательность целых чисел возрастающей непрерывно (не имеющей пропусков чисел). Например, последовательность [4, 5, 6, 7] — непрерывная, а [0, 1, 3] — нет. Последовательность может начинаться с любого числа, главное условие — отсутствие пропусков чисел. Последовательность из одного числа не может считаться возрастающей.
//  function printNu(array $firstNumber)
// {
//   if ($firstNumber <= 1) {
//          return false;
//        } else {
//          return true;
//        }

//     //  foreach($firstNumber as $number) {
       
//     // }
//     // return "true";
// }
// print_r(printNu([4, 2, 1, 0, 'g']));

// print_r("\n");

//Реализуйте функцию isContinuousSequence, которая проверяет, является ли переданная последовательность целых чисел возрастающей непрерывно (не имеющей пропусков чисел). Например, последовательность [4, 5, 6, 7] — непрерывная, а [0, 1, 3] — нет. Последовательность может начинаться с любого числа, главное условие — отсутствие пропусков чисел. Последовательность из одного числа не может считаться возрастающей.

  function isContinuousSequence(array $coll)
{
    if (count($coll) <= 1) {
        return false;
    }
    $start = $coll[0];
    foreach ($coll as $i => $item) {
        if ($start + $i !== $item) {
            return false;
        }
    }
       return true;
}
print_r(isContinuousSequence([10, 18, 12, 13]));
print_r("\n");

function test1111(array $coll) 
{
  if (empty($coll)) {
    return null;
  }

  $max = $coll[0];

  for ($i = 1; $i < count($coll); $i += 1) {
    if ($coll[$i] > $max) {
      $max = $coll[$i];
    }
  }
  return $max;
}
print_r(test1111([4, 25, 63, 78]));
print_r("\n");
//сумма элеентов в массиве
function testirov(array $array)
{
  $sum = 0;

  foreach($array as $name){
    $sum += $name;
  }
  return $sum;
}
print_r(testirov([3, 2, -10, 38, 0]));
//Реализуйте функцию calculateAverage(), которая высчитывает среднее арифметическое элементов массива. Благодаря этой функции мы наконец-то посчитаем среднюю температуру по больнице. :)
print_r("\n");
function calculateAverage(array $arrays)
{
  if (empty($arrays)) {
    return null;
  }

  $sum = 0;

  for($i = 0; $i < count($arrays); $i += 1) {
    if ($arrays[$i] > 0) {
      $sum += $arrays[$i];
     $result = $sum / count($arrays);
    }
  }
  return $result;
}
print_r(calculateAverage([3, 6, 9, 13, 16, 19, 23, 26, 29]));

print_r("\n");

function myCompact($coll)
{
    $result = [];
    foreach ($coll as $item) {
        if (is_null($item)) {
            continue;
        }
        $result[] = $item;
    }

    return $result;
}
print_r(myCompact(['fd', 'df', 'ere', null]));

//Реализуйте функцию getTotalAmount. Функция принимает на вход в виде массива кошелёк с деньгами и название валюты и возвращает сумму денег указанной валюты.
//Реализуйте данную функцию используя управляющие инструкции.
//Параметры функции:
//Массив содержащий купюры различной валюты с различными номиналами
//Наименование валюты
print_r("\n");
function getTo(array $money, $valut)
{
  $i =  0;
  $sum = 0;
 
  
  while($i < count($money)) {
    $arr = explode(" ", $money[$i]);
    $result = $arr[0];
    $run = $arr[1]; 
    if ($result === $valut) {
      $sum += $run;
    }
    $i++;
  }
  return $sum;
}
print_r(getTo(['eur 10', 'usd 1', 'usd 10', 'rub 50', 'rub 1', 'usd 5'], 'rub'));

print_r("\n");
// решения учителя
function getTotalAmount(array $money, string $currency)
{
    $sum = 0;
    
    foreach ($money as $bill) {
        $currentCurrency = substr($bill, 0, 3);
        if ($currentCurrency !== $currency) {
            continue;
        }
        $denomination = (int) substr($bill, 4);
        $sum += $denomination;  
    }
    return $sum;
}
print_r("\n");
//Реализуйте функцию getSameParity, которая принимает на вход массив чисел и возвращает новый, состоящий из элементов, у которых такая же чётность, как и у первого элемента входного массива.

function getSameParity(array $massiv)
{
  if (empty($massiv)) {
    return [];
  }
  $ch = $massiv[0] % 2;
  $result = [];
  foreach ($massiv as $res) {
    if ($res % 2 == $ch) {
      $result[] = $res;
    }
  }
  return $result;
}
print_r(getSameParity([2, 8, 9, 2]));
print_r("\n");
// Инициализируем поле
// array_fill создаёт массив
$field = [
    array_fill(0, 3, null),
    array_fill(0, 3, null),
    array_fill(0, 3, null),
];
$field[1][2] = 'x';
print_r($field);
// Код выше создаёт массив следующей структуры:
// [
//     [null, null, null],
//     [null, null, null],
//     [null, null, null]
// ]

// Делаем ход:
// $field[1][2] = 'x';
// [
//     [null, null, null],
//     [null, null, 'x'],
//     [null, null, null]
// ]
print_r("\n");
function check($field, $symbol)
{
    // Обходим поле. Каждый элемент это строчка в игровом поле.
    foreach ($field as $row) {
        // in_array - проверяет присутствует ли элемент в массиве
        // Если присутствует, значит мы нашли то, что искали
        if (in_array($symbol, $row)) {
            return true;
        }
    }

    // Если поле было просмотрено, но ничего не нашли, значит ходов не было
    return false;
}
print_r(check($field, 'o'));

print_r("\n");
// $numbers = [2, [[3], 4]];
// print_r($numbers[1][0][0]);
// print_r($numbers[0]);
// print_r(count($numbers[0]));
print_r("\n");
//Суперсерия Канада-СССР – это 8 товарищеских хоккейных матчей проводившихся между командами СССР и Канада в 72 (первая суперсерия) и в 74 годах (вторая суперсерия). В этом задании вам предстоит написать функцию, которая вычисляет команду выигравшую суперсерию.
//Superseries.php
//Реализуйте функцию getSuperSeriesWinner(scores), которая находит команду победителя для конкретной суперсерии. Победитель определяется как команда у которой больше побед (не количество забитых шайб) в конкретной серии. Функция принимает на вход массив, в котором каждый элемент это массив, описывающий счет в конкретной игре (сколько шайб забила Канада и СССР). Результат функции – название страны: 'canada', 'ussr'. Если суперсерия закончилась в ничью, то нужно вернуть null.

function getSuperSeriesWinner(array $scores)
{
  $i = 0;
   $result = 0;
  // print_r($result);
  while($i < count($scores)) {
   $result += $scores[$i][0] <=> $scores[$i][1];   
    $i += 1;
}
if ($result < 0) {
  return 'ussr';
} elseif ($result > 0) {
  return 'canada';
}
return null;    
}
print_r(getSuperSeriesWinner($scores = [
  [3, 7], // Первая игра 0
  [4, 1], // Вторая игра 1
  [4, 4],
  [3, 5],
  [4, 5],
  [3, 2],
  [4, 3],
  [6, 5],
]));
// print_r($scores[0]);
print_r("\n");
// print_r($scores[1]);
// // Superseries\getSuperSeriesWinner($scores); // 'canada'
// print_r("\n");
// // echo true;
//Он возвращает -1 если меньше, 0 если равно или 1 если больше, когда $ a соответственно меньше, равно или больше $ b 
// // echo 4 <=> 1;
// echo 2 <=> 1; // 1
// $parts = ['JavaScript', 'PHP', 'Python'];
// $output = implode('/', $parts); // поменяли разделитель, добавив пробел
// print_r($output); // => JavaScript, PHP, Python
// print_r("\n");
// $coll = ['milk', 'butter', 'eggs', 'bread'];

// $result = '';
// foreach ($coll as $item) {
//     $result .= "<li>{$item}</li>";
//     // либо так
//     // $result = "{$result}<li>{$item}</li>";
// }
// $result = "<ul>{$result}</ul>";
// print_r($result);
//Реализуйте функцию buildDefinitionList, которая генерирует html список определений (теги dl, dt и dd) и возвращает получившуюся строку. При отсутствии элементов в массиве функция возвращает пустую строку.
//Параметры функции
//Список определений следующего формата:
print_r("\n");
function buildDefinitionList(array $definitions) 
{
  if (empty($definitions)) {
        return '';
    }
    $str = [];
    foreach ($definitions as $mass) {
        $str[] = "<dt>{$mass[0]}</dt><dd>{$mass[1]}</dd>";
    }
    $inner = implode('', $str);
    $result = "<dl>{$inner}</dl>";
    return $result;
}
//решения учителя
function build(array $definitions)
{
    if (empty($definitions)) {
        return '';
    }
 
    $parts = [];
    foreach ($definitions as $definition) {
        $name = $definition[0];
        $description = $definition[1];
        $parts[] = "<dt>{$name}</dt><dd>{$description}</dd>";
    }
    $innerValue = implode('', $parts);
    $result = "<dl>{$innerValue}</dl>";
 
    return $result;
}
print_r("\n");
//Реализуйте функцию makeCensored, которая заменяет каждое вхождение указанных слов в предложении на последовательность $#%! и возвращает полученную строку. Аргументы:
//Текст
//Набор стоп слов
//Словом считается любая непрерывная последовательность символов, включая любые спецсимволы (без пробелов).
function makeCensored(string $text, array $array)
{
  $new = []; 
  //  if (count($array) > 2 || count($array) < 2) {
  foreach(explode(' ', $text) as $mass) {
   $new[] = in_array($mass, $array) ? '$#%!' : $mass;  
  }
  return implode(' ', $new);
}        
    
    // return $new; 


// return $new;
//Массив стоп слов может содержать как больше, так и меньше двух элементов.
//$sentence = 'When you play the game of thrones, you win or you die';
print_r(makeCensored('? When you play the game of thrones, you win or you die', ['die', '?', 'of']));
// => When you $#%! the game of thrones, you win or you $#%!

print_r("\n");
// $text = ['When', 'you', 'play', 'the', 'game', 'of', 'thrones', 'you', 'win', 'or', 'you', 'die'];
// $r = ['die', 'play'];
//   print_r(str_replace($text, '$#%!', $r));
  // print_r($text);
  // print_r($r);

print_r("\n");
// $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
// $onlyconsonants = str_replace($vowels, "", "Hello World of PHP");
// print_r($onlyconsonants);

// $action = (empty($_POST['action'])) ? 'default' : $_POST['action'];
// print_r($action);






