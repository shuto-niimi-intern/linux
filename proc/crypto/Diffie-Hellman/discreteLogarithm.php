<?php
// Diffie-Helman鍵共有方式

$x = 3; // 適当な整数
$p = 13; // 素数 (実用的に使う素数はこれよりももっと桁が大きく，600桁～800桁の数)

// server
$a = rand(2, $p - 1); // aの秘密の整数
// client
$b = rand(2, $p - 1); // bの秘密の整数

// お互いの公開鍵のようなもの作成
// PHPは上記の数値を大きくすると数値がoverflowしてfloat(INF)となる。
// server → send client 
$E = pow($x, $a) % $p;
// client → server
$F = pow($x, $b) % $p;

echo 'E:' . $E . 'F:' . $F;

// お互い共通鍵作成
$Ga = pow($F, $a) % $p;
$Gb = pow($E, $b) % $p;

// 結果 $Ga = $Gb = (pow($x,$a*$b) % $p)

if ($Ga === $Gb) {
    echo 'お互いの数字を秘密にして答えが同じになったよ' . PHP_EOL;
}

if ($Ga === pow($x, $a * $b) % $p && $Gb === pow($x, $a * $b) % $p) {
    echo '$Ga = $Gb = (pow($x,$a*$b) % $p)でもあるね';
}