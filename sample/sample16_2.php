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
$json_sample = array(
    'title' => 'JSONサンプル',
    'items' => array(
        'item01' => '１つめ',
        'item02' => '２つめ'
    )
);

$file = json_encode($json_sample, JSON_UNESCAPED_UNICODE);
file_put_contents('./json_sample.json', $file);

?>
</pre>
</main>
</body>    
</html>