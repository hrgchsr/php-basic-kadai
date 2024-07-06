<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>kadai_240707</title>
 </head>
 <body>
 <p>
     <?php
// 連想配列
$veg_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

         // 連想配列$veg_dataのキーと値を1つずつ順番に出力する
        while ($value = current($veg_data)) {
            echo key($veg_data)." : $value<br />\n";
            
            //print key($veg_data) . ':' . $value . PHP_EOL;
            
            next($veg_data);
        }
        reset($veg_data);
        // // 連想配列$veg_dataのキーと値を1つずつ順番に出力する
        // while (list($key, $value) = each($veg_data)) {
        //     echo "{$key}：{$value}<br>";
        // }

         ?>
     </p>
     </body>
 </html>
