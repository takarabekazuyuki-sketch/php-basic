<?php
// Step2. 連想配列を作成し、変数に代入する
$personal_data = [
    '名前' => '玉ねぎ',
    '値段' => 200,
    '産地' => '北海道'
];

// Step3. foreach文を使い、それぞれのキーと値を出力する
foreach ($personal_data as $key => $value) {
    // 「キー:値」の形式で出力し、<br>で改行する
    echo "{$key}:{$value}<br>";
}
?>
