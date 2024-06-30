<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>kadai_016</title>
 </head>
 
 <body>
     <p>
     <?php
    // クラスを定義する
    class Food {
        // プロパティを定義する 
        private $name;
        private $price;

        // コンストラクタを定義する
        public function __construct(string $name, int $price) {
            $this->name = $name;
            $this->price = $price;
        }
        // メソッドを定義する、引数は不要
        public function show_price() {
            echo $this->price . '<br>';
        }
    }
    // クラスを定義する
    class Animal {
        // プロパティを定義する 
        private $name;
        private $height;
        private $weight;
    
        // コンストラクタを定義する
        public function __construct(string $name, int $height, int $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
        }
            // メソッドを定義する、引数は不要
        public function show_height() {
            echo $this->height . '<br>';
        }
    
    }

    // インスタンス化する
    $potato = new Food('potato', 250);
    $cat = new Animal('cat', 60, 5000);

    // インスタンスの各プロパティの値を出力する
    print_r($potato);
    echo '<br>';
    print_r($cat);
    echo '<br>';

    // メソッドにアクセスして実行する
    $potato->show_price(500);
    $cat->show_height(10000);

    ?>
     </p>
     </body>
 </html>