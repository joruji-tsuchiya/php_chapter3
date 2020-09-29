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
// $fix = sprintf('%d', 'abc');
// print($fix);

// $fix = sprintf('%s', 'abc');
// print($fix);

// $fix = sprintf('%05d', 10);
// print($fix);

$date = sprintf('%04d年 %02d月 %02d日', 2018, 1, 23);
print($date);
?>
</pre>
</main>
</body>    
</html>