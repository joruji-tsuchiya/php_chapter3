<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
<!-- ここにプログラムを記述します -->
<?php
// $week = ['金', '土', '日', '月', '火', '水', '木', ];

// for($i=1; $i<=31; $i++){
//     print($i . '日(' . $week[$i%7] . ')<br />');
// }
?>
<table>
<?php

for($i=1; $i<=10; $i++){
    if($i % 2) {
        print('<tr style="background-color: #ccc">');
    } else {
    print('<tr>');
    }
  print('<td>' . $i . '行目</td>');
  print('</tr>');
}

?>
</table>
</pre>
</main>
</body>    
</html>