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

        // メソッドを定義する
        public function show_price(int $price) {
            $this->price = $price;
        }
        // コンストラクタを定義する
        public function __construct(string $name, int $price) {
            $this->name = $name;
            $this->price = $price;
        }
    }
    // クラスを定義する
    class Animal {
        // プロパティを定義する 
        private $name;
        private $height;
        private $weight;
    
        // メソッドを定義する
        public function show_height(string $height) {
            $this->height = $height;
        }

        // コンストラクタを定義する
        public function __construct(string $name, int $height, int $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
        }
    }

    // インスタンス化する
    $potato = new Food('potato', 250);
    $cat = new Animal('cat', 60, 5000);

    // インスタンスの各プロパティの値を出力する
    print_r($potato);
    echo '<br>';
    print_r($cat);

    ?>
     </p>
     </body>
 </html>