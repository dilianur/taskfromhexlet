<?php
//ПРОДОЛЖЕНИЯ main.php 
	  // print_r($onlyconsonants);	 
	  // $action = (empty($_POST['action'])) ? 'default' : $_POST['action'];
	  // print_r($action);
	- print_r("\n");
	- // function flatten($coll)	
  - // {
988	- //   //результирующий массив
989	- //   $result = [];
990	- //   foreach ($coll as $item) {
991	- //     // is_array - функция (предикат) стандартной библиотеки
992	- //         // которая проверяет, является ли значение массивом.
993	- //     if (is_array($item)) {
994	- //       // Если значение массив, то проходим по всем его элементам
995	- //       // Здесь появился вложенный цикл
996	- //       foreach ($item as $finish) {
997	- //         // и добавляем их в результирующий массив
998	- //         $result[] = $finish
999	- //       }
1000	- //     } else {
1001	- //       // Если значение не массив, то сразу добавляем его в результирующий массив пропуская вложенный цикл
1002	- //       $result[] = $item;
1003	- //     }
1004	- //   }
1005	- //   return $result;
1006	- // }
1007	- // print_r(flatten([3, 2, [], [3, 4, 2], 3, [123, 3]]));
1008	- print_r("\n");
1009	- //Реализуйте функцию getSameCount, которая считает количество общих уникальных элементов для двух массивов. Аргументы:
1010	- //Первый массив
1011	- //Второй массив
1012	- function getSameCount(array $arr1, array $arr2)
1013	- {
1014	-   $a = array_unique($arr1);
1015	-   $b = array_unique($arr2);
1016	-   // $result = [];
1017	-   $sum = 0;
1018	-   foreach ($a as $mass1) {
1019	-     // if (is_array($mass1)) {
1020	-       foreach ($b as $mass2) {
1021	-        if ($mass1 === $mass2) {
1022	-          $sum += 1;
1023	-         //  $result[] = $sum;
1024	-        } 
1025	-     }
1026	-   }
1027	-   return $sum;
1028	- }
1029	- print_r(getSameCount([1, 3, 2, 2], [3, 1, 1, 2])); // 2)
1030985	 
1031	- print_r("\n");
1032	- // function sumO($num1, $num2)
1033	- // {
1034	- //     $sum = 0;
1035	- //    for($i = $num1; $i <= $num2; $i++) {
1036	- //        $sum += $i;
1037	- //    }
1038	- //    return $sum;
1039	- // }
1040	- // print_r(sumO(4, 7)); // 3)
1041986	 
1042	- function test5(string $text)
1043	- {
1044	-   $i = 0;
1045	-   $count = 0;
1046	-   while($i < strlen($text)) {
1047	-     $result = $text[$i];
1048	-     $count += 1;
1049	-     $i++;
1050	-   }
1051	-   return $count;
1052	- }
1053	- print_r(test5('damac'));
1054	- print_r("\n");
1055	- //Реализуйте функцию countUniqChars, которая получает на вход строку и считает, сколько символов (уникальных символов) использовано в этой строке. Например, в строке 'yy' всего один уникальный символ — y. А в строке '111yya!' — четыре уникальных символа: 1, y, a и !.
1056	- //Задание необходимо выполнить без использования функций array_unique и count_chars.
1057	- function countUniqChars($text)
1058	- {
1059	-   // $str = str_split($text);
1060	-   // $str = iconv_strlen($text);
1061	-   // print_r($str);
1062	-  // $i = 0;
1063	-  $count = [];
1064	-  for ($i = 0; $i < strlen($text); $i++) {
1065	-       if (!in_array($text[$i], $count)) {
1066	-         $count[] = $text[$i];  
1067	-       }
1068	-   }
1069	-   return count($count);
1070	- }
1071	- print_r(countUniqChars('You know nothing Jon Snow')); //13
1072	- print_r("\n");
1073	- // $str = 'You know nothing Jon Snow';
1074	- // $str = preg_split('//',$str,-1,PREG_SPLIT_NO_EMPTY);
1075	- // sort($str);
1076	- // $str = preg_replace('~(.)\1+~is', '', join($str));
1077	- // echo $str;
1078	- print_r("\n");
1079	- // function invertCase($text)
1080	- // {
1081	- //     // BEGIN (write your solution here)
1082	- //     $te = mb_strlen($text);
1083	- //     $result = '';
1084	- //     for ($i = 0; $i < $te; $i++) {
1085	- //         $de = mb_substr($text, $i, 1);
1086	- //         $be = mb_strtolower($de);
1087	- //         if ($de === $be) {
1088	- //             $result .= mb_strtoupper($de);
1089	- //         } else {
1090	- //             $result .= $be;
1091	- //         }
1092	- //     }
1093	- //     return $result;
1094	- //     // END
1095	- // }
1096	- // print_r(invertCase('nadan'));
1097	- print_r("\n");
1098	- //Реализуйте функцию bubbleSort, которая сортирует массив используя пузырьковую сортировку. Постарайтесь не подглядывать в текст теории и попробуйте воспроизвести алгоритм по памяти.
1099	- function bubbleSort($massiv)
1100	- {
1101	-   $new1 = count($massiv);
1102987	 
1103	-   do {
1104	-     $swapped1 = false;
1105	-     for ($i = 0; $i < $new1 - 1; $i++) {
1106	-       if ($massiv[$i] > $massiv[$i + 1]) {
1107	-         $temp = $massiv[$i];
1108	-         $massiv[$i] = $massiv[$i + 1];
1109	-         $massiv[$i + 1] = $temp;
1110	-         $swapped1 = true;
1111	-       }
1112	-     }
1113	-     $new1--;
1114	-   } while ($swapped1);
1115	-   return $massiv;
1116	- }
1117	- print_r(bubbleSort([3, 10, 4, 3])); // [3, 3, 4, 10]
1118	- print_r("\n");
1119	- //Реализуйте функцию checkIfBalanced, которая проверяет балансировку круглых скобок в арифметических выражениях.
1120	- function checkIfBalanced($balans)
1121	- {
1122	-   $stack = [];
1123	-   $ok_1 = [')', 5, 6, '+', '/', '*'];
1124	-   $ok_2 = ['(5 + 6) * (4 + 3)'];
1125	-   for ($i = 0; $i < strlen($balans); $i++) {
1126	-     $itog = $balans[$i];
1127	-     // print_r($itog);
1128	-     if (in_array($itog, $ok_1)) {
1129	-       array_push($stack, $itog);
1130	-       // print_r($stack);
1131	-      } else {
1132	-       $pre = array_pop($stack);
1133	-       $pr1 = "{$pre}{$itog}";
1134	-       print_r($pr1);
1135	-       // if (!in_array($pr1, $ok_2)) {
1136	-       //   return false;
1137	-       // }
1138	-     }
1139	-   }
1140	-   // return count($stack) === 0;
1141	- }
1142	- print_r(checkIfBalanced('(5 + 6) * (7 + 8)/(4 + 3)')); // true)
1143	- print_r("\n");
1144	- //Реализуйте функцию addDigits, которая принимает на вход неотрицательное целое число и возвращает другое число, полученное из первого следующим преобразованием: Итеративно сложите все входящие в него цифры до тех пор пока, не останется одна цифра.
1145	- //  function addDi($numeric)
1146	- //  {
1147	- //   //  $result = str_split($numeric);
1148	- //   //  print_r($result);
1149	- //   //  $num = 
1150	- //    $i = 0;
1151	- //    $count = 0;
1152988	 
1153	- //    while($i <= $numeric) {
1154	- //      $res = $numeric[$i];
1155	- //      print_r($res);
1156	- //       // $count = $numeric[$i] + $numeric[$i];
1157	- //      $i += 1;
1158	- //    }
1159	- //   //  return $count;
1160	- //  }
1161	- //  print_r(addDi(38));
1162	-  print_r("\n");
1163	-  //Создайте функцию isPerfect, которая принимает число и возвращает true, если оно совершенное, и false — в ином случае.
1164	- // function isPerfect($num)
1165	- // {
1166	- //   $sum = 0;
1167	- //   for ($i = 1; $i < $num; $i++) {
1168	- //     if ($num % $i === 0) {
1169	- //       $sum += $i;
1170	- //     }
1171	- //   }
1172	- //   return $sum === $num;
1173	- // }
1174	- // print_r(isPerfect(8128)); // true
1175	- //Совершенное число — это положительное целое число, равное сумме его положительных делителей (не считая само число). Например, 6 — совершенное число, потому что 6 = 1 + 2 + 3.
1176989	 
1177	- // Функция для проверки, является ли число идеальным
1178	- print_r("\n");
1179	- //Реализуйте функцию fizzBuzz, которая выводит на экран числа в диапазоне от $begin до $end. При этом:
1180	- // function fizzBuzz($num1, $num2)
1181	- // {
1182	- //  for ($i = $num1; $i <= $num2; $i++) {
1183	- //   $str = explode(' ', $i);
1184	- //   // print_r($i);
1185	- //     if ($i / 3 === 0) {
1186	- //       return 'fizz';
1187	- //     }
1188	- //  }
1189	- // return 'buzz';
1190	- // }
1191	- // print_r(fizzBuzz(5, 10));
1192	- print_r("\n");
1193	- function isBalan($str)
1194	- {
1195	-     $count = 0;
1196	-     for ($i = 0; $i < strlen($str); $i++) {
1197	-       // print_r($i);
1198	-         $count = $str[$i] === '(' ? $count + 1 : $count - 1;
1199	-         if ($count < 0) {
1200	-             return false;
1201	-         }
1202	-     }
1203	-  
1204	-     return $count === 0;
1205	- }
1206	- print_r(isBalan('(8 + 9)'));
1207	- //
1208	- function Isbalansed($balans)
1209	- {
1210	-   $stack = [];
1211	-   for ($i = 0; $i < strlen($balans); $i++) {
1212	-     $curr = $balans[$i];
1213	-     if ($curr === '(') {
1214	-       array_push($stack, $curr);
1215	-     } elseif ($curr === ')') {
1216	-       if (empty($stack)) {
1217	-         return false;
1218	-       }
1219	-       array_pop($stack);
1220	-     }
1221	-   }
1222	-   return count($stack) === 0;
1223	- }
1224	- print_r(Isbalansed('(5 + 6)'));
1225	- print_r("\n");
1226990	 
1227	-
1228	- // $terribleNumbers = [4, 13];
1229	- // if (in_array('f', $terribleNumbers)) {
1230	- //     print_r('woah!');
1231	- // }
1232	- //  print_r('woah!');
1233	-  //Реализуйте функцию countUniqChars, которая получает на вход строку и считает, сколько символов (уникальных символов) использовано в этой строке. Например, в строке 'yy' всего один уникальный символ — y. А в строке '111yya!' — четыре уникальных символа: 1, y, a и !.
1234	- //Задание необходимо выполнить без использования функций array_unique и count_chars.
1235	- function countUn($string)
1236	- {
1237	-   $result = [];
1238	-   $count = 0;
1239	-   for ($i = 0; $i < strlen($string); $i++) {
1240	-    if (!in_array($string[$i], $result)) {
1241	-      $result[] = $string[$i];
1242	-      $count += 1;
1243	-    }
1244	-     
1245	-   }
1246	-   return count($result);
1247	- }
1248	- print_r(countUn('yybb'));
1249	- //Реализуйте функцию bubbleSort, которая сортирует массив используя пузырьковую сортировку. Постарайтесь не подглядывать в текст теории и попробуйте воспроизвести алгоритм по памяти.
1250	- print_r("\n");
1251	- function bubbli($mass)
1252	- {
1253	-   // $result = [];
1254	-   $new = count($mass);
1255	-   do {
1256	-     $swap = false;
1257	-     for ($i = 0; $i < $new - 1; $i++) {
1258	-     if ($mass[$i] > $mass[$i + 1]) {
1259	-       $temp = $mass[$i];
1260	-       $mass[$i] = $mass[$i + 1];
1261	-       $mass[$i + 1] = $temp;
1262	-       $swap = true;
1263	-     }
1264	-   }
1265	-   $new--; 
1266	-   } while ($swap);
1267	-   return $mass; 
1268	- }
1269	- print_r(bubbli([5, 2, 96, 23, 3]));
1270	-
1271	- //Реализуйте функцию checkIfBalanced, которая проверяет балансировку круглых скобок в арифметических выражениях.
1272	- //checkIfBalanced('(5 + 6) * (7 + 8)/(4 + 3)'); // true
1273	- //checkIfBalanced('(4 + 3))'); // false
1274	-
1275	- function checkIf($text)
1276	- {
1277	-   $stack = [];
1278	-   for ($i = 0; $i < strlen($text); $i++) {
1279	-     $curr = $text[$i];
1280	-     if ($curr === '(') {
1281	-       array_push($stack, $curr);
1282	-     } elseif ($curr === ')') {
1283	-       if (empty($stack)) {
1284	-         return false;
1285	-       }
1286	-       array_pop($stack);
1287	-     }
1288	-   }
1289	-   return count($stack) === 0;
1290	- }
1291	- print_r(checkIf('()'));
1292	- print_r("\n");
1293	- //Реализуйте функцию getIntersectionOfSortedArray, которая принимает на вход два отсортированных массива и находит их пересечение.
1294	- //getIntersectionOfSortedArray([10, 11, 24], [10, 13, 14, 18, 24, 30]); // [10, 24]
1295	-  
1296	- //getIntersectionOfSortedArray([10, 11, 24], [-2, 3, 4]); // []
1297	-  
1298	- //getIntersectionOfSortedArray([], [2]); // []
1299	- //Суть алгоритма довольно проста. В коде вводятся два указателя (индекса) на каждый из массивов. Начальное значение каждого указателя 0. Затем идёт проверка элементов, находящихся под этими индексами в обоих массивах. Если они совпадают, то значение заносится в результирующий массив, а оба индекса инкрементируются. Если значение в первом массиве больше, чем во втором, то инкрементируется указатель второго массива, иначе — первого.
1300	- function getIntersectionOfSortedArray(array $arr1, array $arr2)
1301	- {
1302	- if ($arr1 === [] || $arr2 === []) {
1303	-     return [];
1304	-   }
1305	-   $result = [];
1306	-   for ($i = 0; $i < count($arr1); $i++) {
1307	-     if (in_array($arr1[$i], $arr2)) {
1308	-       $result[] = $arr1[$i];
1309	-       
1310	-     }
1311	-     // continue;
1312	-   }
1313	-   return $result;
1314	- }
1315	- print_r(getIntersectionOfSortedArray([10, 11, 24, 11], [10, 13, 14, 18, 24, 30])); // [10, 24])
1316	- print_r("\n");
1317	- //решения учителя
1318	- function test1($arr1, $arr2)
1319	- {
1320	-   $c = count($arr1);
1321	-   $s = count($arr2);
1322	-
1323	-   $i = 0;
1324	-   $b = 0;
1325	-   while($i < $c && $b < $s) {
1326	-     if ($arr1[$i] === $arr2[$b]) {
1327	-       $result[] = $arr1[$i];
1328	-       $i++;
1329	-       $b++;
1330	-     } elseif ($arr1[$i] > $arr2[$b]) {
1331	-       $b++;
1332	-     } else {
1333	-       $i++;
1334	-     }
1335	-   }
1336	-   return $result;
1337	- }
1338	- print_r(test1([10, 11, 24, 11], [10, 13, 14, 18, 24, 30])); // [10, 24])
1339	-
1340	- print_r("\n");
1341	- function getDistance(array $point1, array $point2)
1342	- {
1343	-     [$x1, $y1] = $point1;
1344	-     [$x2, $y2] = $point2;
1345	-
1346	-     $xs = $x2 - $x1;
1347	-     $ys = $y2 - $y1;
1348	-
1349	-     return sqrt($xs ** 2 + $ys ** 2);
1350	- }
1351	- // print_r(getDistance(array 'djal', array 'tunguch'));
1352	- //Реализуйте функцию getTheNearestLocation(), которая находит место ближайшее к указанной точке на карте и возвращает его. Параметры функции:
1353	- //$locations – массив мест на карте. Каждое место это массив из двух элементов, где первый элемент это название места, второй – точка на карте (массив из двух чисел x и y).
1354	- //$point – текущая точка на карте. Массив из двух элементов-координат x и y.
1355	- function getTheNearestLocation($locations, $point)
1356	- {
1357	-   if (empty($locations)) {
1358	-     return null;
1359	-   }
1360	-   [$a, $b, $c] = $locations;
1361	-   // print_r($c);
1362	-   // $min = [];
1363	-   foreach ([$a, $b, $c] as [$a, $b]) {
1364	-     // print_r([$a, $b, $k]);
1365	-     $result = getDistance($b, $point);
1366	-
1367	-     
1368	-     // if ($result) {
1369	-     //   // $min = [$a, $b];
1370	-     // }
1371	-      }
1372	-   //  return $result;
1373	- }
1374	-
1375	- print_r(getTheNearestLocation([
1376	-   ['Park', [10, 5]],
1377	-   ['Sea', [1, 3]],
1378	-   ['Museum', [8, 4]],
1379	- ], [1, 3]));
1380	-
1381	- // $locations = [
1382	- //   ['Park', [10, 5]],
1383	- //   ['Sea', [1, 3]],
1384	- //   ['Museum', [8, 4]],
1385	- // ]; 
1386	- // [
1387	- //   [$d, [$b]],
1388	- //   [$r, [$i]],
1389	- //   [$a, [$w]],
1390	- // ] = $locations;
1391	- // print_r([$i]);
1392	-
1393	- // [$one, [$two, $three]] = $locations;
1394	- // print_r($one);
1395	- // print_r($two);
1396	- // print_r($three);
1397	- //$currentPoint = [5, 5];
1398	-  // Если точек нет, то возвращается null
1399	- //getTheNearestLocation([], $currentPoint); // null
1400	-  //getTheNearestLocation($locations, $currentPoint); // ['Museum', [8, 4]]
1401	-  print_r("\n");
1402	-  //поиск минимального числа в массиве
1403	- // function na($num)
1404	- // {
1405	- //   $min = $num[0];
1406	- //   // print_r("$min ");
1407	- //   // $b = count($num) - 1;
1408	- //   for ($i = count($num) - 1; $i > 0; $i--) {
1409	- //     // print_r($num[$i]);
1410	- //     if ($num[$i] < $min) {
1411	- //       $min = $num[$i];
1412	- //     }
1413	- //   }
1414	- //   return $min;
1415	- //  }
1416	- // print_r(na([52, 60, 80, 12]));
1417	- print_r("\n");
1418	- function getDis(array $point1, array $point2)
1419	- {
1420	-     [$x1, $y1] = $point1;
1421	-     [$x2, $y2] = $point2;
1422	-
1423	-     $xs = $x2 - $x1;
1424	-     $ys = $y2 - $y1;
1425	-
1426	-     return sqrt($xs ** 2 + $ys ** 2);
1427	- }
1428	- function get($locations, $point)
1429	- {
1430	-   if (empty($locations)) {
1431	-     return null;
1432	-   }
1433	-   // [$one, $two, $three] = $locations;
1434	-   // print_r($two);
1435	-   // $r1 = getDis($one[1], $point);
1436	-   // $r2 = getDis($two[1], $point);
1437	-   // $r3 = getDis($three[1], $point);
1438	-   // [$ri, $r2, $r3] = $location;
1439	-   // print_r($location);
1440	- // [$a, $b, $c] = $locations;
1441	- // $count = $locations[0];
1442	-  foreach ($locations as $loca) {
1443	-    
1444	-   $result = getDis($loca[1], $point);
1445	-   $res = explode(' ', $result);
1446	-   // print_r($res);
1447	- $count = $res[0];
1448	- for ($i = count($res) - 1; $i > 0; $i--) {
1449	-   // $news = $res[$i];
1450	-   if ($res[$i] < $count) {
1451	-     $count = $res[$i];
1452	-   }
1453	- }
1454	- }
1455	- return $count;
1456	- }
1457	- print_r(get([
1458	-   ['Park', [10, 5]],
1459	-   ['Sea', [1, 3]],
1460	-   ['Museum', [8, 4]],
1461	- ], [1, 3]));
1462	- print_r("\n");
1463	- print_r("\n");
1464	- function getTheNearestLocat(array $locations, array $currentPoint)
1465	- {
1466	-     if (empty($locations)) {
1467	-         return null;
1468	-     }
1469	-  
1470	-     [$nearestLocation] = $locations;
1471	-     // print_r($nearestLocation);
1472	-     [, $nearestPoint] = $nearestLocation;
1473	-     // print_r($nearestPoint);
1474	-     $lowestDistance = getDistance($currentPoint, $nearestPoint);
1475	-   // print_r($lowestDistance);
1476	-     foreach ($locations as $location) {
1477	-         [, $point] = $location;
1478	-         // print_r($point);
1479	-         // print_r($location);
1480	-         $distance = getDistance($currentPoint, $point);
1481	-         // print_r("$distance ");
1482	-         if ($distance < $lowestDistance) {
1483	-           // print_r($lowestDistance);
1484	-             $lowestDistance = $distance;
1485	-             $nearestLocation = $location;
1486	-         }
1487	-     }
1488	-  
1489	-     // return $nearestLocation;
1490	- }
1491	- print_r(getTheNearestLocat([
1492	-   ['Park', [10, 5]],
1493	-   ['Sea', [1, 3]],
1494	-   ['Museum', [8, 4]],
1495	- ], [5, 5]));
1496	- print_r("\n");
1497	- function getTheNea($locations, $point)
1498	- {
1499	-   if (empty($locations)) {
1500	-     return null;
1501	-   }
1502	-     [$one] = $locations;
1503	-     [, $numeric] = $one;
1504	-     // print_r($one);
1505	-     $a1 = getDis($point, $numeric);
1506	-
1507	-     foreach ($locations as $location) {
1508	-       [, $poit] = $location;
1509	-       // print_r($poit);
1510	-       $distance = getDis($point, $poit);
1511	-       // print_r("$distance ");
1512	-       if ($distance < $a1) {
1513	-         // print_r($a1);
1514	-         $a1 = $distance;
1515	-         $one = $location;
1516	-       }
1517	-     }
1518	-     return $one;
1519	- }
1520	- print_r(getTheNea([
1521	-   ['Park', [10, 5]],
1522	-   ['Sea', [1, 3]],
1523	-   ['Museum', [8, 4]],
1524	- ], [1, 3]));
1525	- print_r("\n");
1526	- //Реализуйте функцию flatten(). Эта функция принимает на вход массив и выпрямляет его: если элементами массива являются массивы, то flatten() сводит всё к одному массиву, раскрывая один уровень вложенности.
1527	- // Для пустого массива возвращается []
1528	- function flatten(array $mass) 
1529	- {
1530	-   if (empty($mass)) {
1531	-     return [];
1532	-   }
1533	-   $result = [];
1534	-   foreach ($mass as $massiv) {
1535	-     if (is_array($massiv)) {
1536	-       foreach ($massiv as $itog) {
1537	-         $result[] = $itog;
1538	-       }
1539	-     } else {
1540	-       $result[] = $massiv;
1541	-     }
1542	-   }
1543	-   return $result;
1544	- }
1545	- print_r(flatten([1, [[2], [3]], [9]]));
1546	- flatten([]); // []
1547	- flatten([1, [3, 2], 9]); // [1, 3, 2, 9]
1548	- flatten([1, [[2], [3]], [9]]); // [1, [2], [3], 9]
1549	- //решения учителя
1550	- // function flatn($coll)
1551	- // {
1552	- //     $result = [];
1553	- //     foreach ($coll as $item) {
1554	- //         if (is_array($item)) {
1555	- //             $result = [...$result, ...$item];
1556	- //         } else {
1557	- //             $result[] = $item;
1558	- //         }
1559	- //     }
1560	-  
1561	- //     return $result;
1562	- // }
1563	- // print_r(flatn([1, [[2], [3]], [9]]));
1564	- print_r("\n");
1565	- //Реализуйте функцию apply(), которая применяет указанную операцию к переданному массиву и возвращает новый массив. Всего нужно реализовать три операции:
1566	- //reset - Сброс массива
1567	- //remove - Удаление значения по индексу
1568	- //change - Обновление значения по индексу
1569	- function appl(array $arr, string $operationName, int $index = null, $value = null): array
1570	- {
1571	-     // BEGIN (write your solution here)
1572	-           switch ($operationName) {
1573	-             case 'reset':
1574	-              $arr = [];
1575	-                   break;
1576	-             case 'change':
1577	-             $arr[$index] = $value;
1578	-                   break;
1579	-               case 'remove':
1580	-              unset($arr[$index]);
1581	-                   break;
1582	-           }
1583	-     return $arr;
1584	- }
1585	- print_r(appl(['moscow', 'london', 'berlin', 'porto'], 'oper', 1, 'miami'));
1586	- print_r("\n");
1587	- //Реализуйте функцию get, которая извлекает из массива элемент по указанному индексу, если индекс существует, либо возвращает значение по умолчанию. Функция принимает на вход три аргумента:
1588	- function getap(array $arr, int $index, $value = null)
1589	- {
1590	-   // $i = 0;
1591	-   // $res = [];
1592	-   // while($i < count($arr)) {
1593	-   //   $a = $arr[$i];
1594	-   // $result = [];
1595	-    if (array_key_exists($index, $arr)) {
1596	-      return $arr[$index];
1597	-    } else {
1598	-      return $arr[$index] ?? $value;
1599	-    }
1600	- }
1601	-   
1602	- print_r(getap(['moscow', 'london', 'berlin', 'porto', null], 2));
1603	- print_r("\n");
1604	- //Реализуйте функцию addPrefix, которая добавляет к каждому элементу массива переданный префикс и возвращает получившийся массив. Функция предназначена для работы со строковыми элементами. Аргументы:
1605	- function addPrefi(array $arr, $pref)
1606	- {
1607	-   // $result = implode(' ', $arr);
1608	-   $result = [];
1609	-   // $str = '';
1610	-   for ($i = 0; $i < count($arr); $i++) {
1611	-     if (!in_array($pref, $arr)) {
1612	-       $result[] = "$pref $arr[$i]";
1613	-     }
1614	-     // $result[] = explode(' ', $str);
1615	-   }
1616	-   return $result;
1617	- }
1618	- print_r(addPrefi(['mister', 'miss'], 'MR'));
1619	- print_r("\n");
1620	- $user = [
1621	-     'name' => 'Vasya',
1622	-     'married' => true,
1623	-     'age' => 25
1624	- ];
1625	-
1626	- print_r($user['']);