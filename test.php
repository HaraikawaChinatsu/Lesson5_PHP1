<?php
    // 関数を定義
    function sum() {
        $result = 0;
        for ($i = 1; $i <= 9; $i++) {
            $result = $result + $i;
        }
        print $result . PHP_EOL;
    }

    // 関数を呼び出し
    sum();
    sum();
    sum();
?>