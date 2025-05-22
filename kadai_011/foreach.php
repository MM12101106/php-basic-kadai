<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    $product_dates = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

    foreach ($product_dates as $key => $value) {
      echo "{$key}：{$value}<br>";
    }
    ?>
  </p>
</body>