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
// print(date('w'));

$week_name = ['日','月','火','水','木','金','土'];

// $week = 1 + 3;
// print($week_name[$week]);

print('今日は' . $week_name[date('w')] . '曜日です');
?>
</pre>
</main>
</body>    
</html>