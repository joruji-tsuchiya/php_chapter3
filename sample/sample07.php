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
// $day_after_tomorrow = strtotime('+2day');
// $day = date('n/j(D)' , $day_after_tomorrow);
// print($day . "\n");

// $time = time();
// print($time);

for($i = 1; $i <= 365; $i++){
    $timestamp = strtotime('+' . $i . 'day');
    $day = date('n/j(D)' , $timestamp);
    print($day . "\n");
}
?>
</pre>
</main>
</body>    
</html>