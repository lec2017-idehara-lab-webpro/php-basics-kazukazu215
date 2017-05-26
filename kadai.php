<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Basic 課題</title>
  </head>
  <body>

<?php
  print("<h1>PHP の課題</h1>\n"); // この行を <h1> で表示しなさい。

  print("<h2>計算</h2>\n"); // この行を <h2> で表示しなさい。
  $x = 10;
  $y = 20;
  $wa=$x+$y;//30
  $sa=$x-$y;//-10
  $seki=$x*$y;//200
  $syo=$x/$y;//0.5


  print("<table>");

  print("<tr><td>和</td><td>$wa</td></tr>\n");
  print("<tr><td>差</td><td>$sa</td></tr>\n");
  print("<tr><td>積</td><td>$seki</td></tr>\n");
  print("<tr><td>和</td><td>$syo</td></tr>\n");

  print("</table>\n");


// $x と $yの和、差、積、商を php で計算して表示しなさい。
// 可能であれば、表形式(table) で表示しなさい。

  print("<h2>文字列</h2>\n"); // この行を <h2> で表示しなさい。
  $base =21611;
  $personal =499;

  print("$base$personal\n");
  
// $base と $personal を連結し、表示しなさい。

  print("<h2>変数定義のチェック</h2>\n"); // この行を <h2> で表示しなさい。

  var_dump(isset($x));
  var_dump(isset($y)); 
  var_dump(isset($z));

  // $x, $y, $z のそれぞれについて、その変数がこの場所で定義されているかどうか表示しなさい。
  //動的にチェックすること。
  
 ?>
  </body>
</html>
