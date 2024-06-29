<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
       // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];

 // 引数の型宣言を行い、引数を整数型に限定する
 function sort_2way($nums, $order) {

    if ($order ==TRUE){
    echo "昇順にソートします。<br>";

        sort($nums);
        foreach ($nums as $num) {
            echo $num . '<br>';
        }}
    else{
        echo "降順にソートします。<br>";
        
        rsort($nums);
        foreach ($nums as $num) {
                echo $num . '<br>';
            }}

}

    sort_2way($nums, TRUE);
    sort_2way($nums, FALSE);

        ?>
    </p>
</body>

</html>
