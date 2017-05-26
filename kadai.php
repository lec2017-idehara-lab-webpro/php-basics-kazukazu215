<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Basic 課題</title>
  </head>
  <body>

<table>
<?php
  print("<h1>PHP の課題</h1>\n"); // この行を <h1> で表示しなさい。

  print("<h2>計算</h2>\n"); // この行を <h2> で表示しなさい。
  $x = 10;
  $y = 20;

  echo ('<tr>');
  print($x+$y);//30
  echo('</tr>');
  print($x-$y);//-10
  print($x*$y);//200
  print($x/$y);//0.5

// $x と $yの和、差、積、商を php で計算して表示しなさい。
// 可能であれば、表形式(table) で表示しなさい。

  print("<h2>文字列</h2>\n"); // この行を <h2> で表示しなさい。
  $base = '21611';
  $personal = '499';

  print($base.$personal);
  
// $base と $personal を連結し、表示しなさい。

  print("<h2>変数定義のチェック</h2>\n"); // この行を <h2> で表示しなさい。

  print(isset($x));
  print(isset($y));
  print(isset($z));

  // $x, $y, $z のそれぞれについて、その変数がこの場所で定義されているかどうか表示しなさい。
  //動的にチェックすること。
  
 ?>
 </table>

  </body>
</html>
