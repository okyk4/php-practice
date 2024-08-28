<?php
// Q1 変数と文字列
$name = '沖';
echo '私の名前は「' . $name . '」です。';

// Q2 四則演算
$num = 5 * 4;
echo $num . "\n";
echo $num / 2;

// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
echo '現在時刻は、' . date('Y年m月d日 H時i分s秒') . 'です。';

// Q4 条件分岐-1 if文
$device = 'mac';
if ($device === 'windows' || $device === 'mac') {
    echo '使用OSは、' . $device . 'です。';
} else {
    echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
$age =18;
$message = ($age < 18) ? '未成年です。' : '成人です。';
echo $message;

// Q6 配列
$kanto = [
    '茨城県',
    '群馬県',
    '埼玉県',
    '栃木県',
    '千葉県',
    '東京都',
    '神奈川県'
];
echo $kanto[3] . 'と' . $kanto[4] . 'は関東地方の都道府県です。';

// Q7 連想配列-1
$capital = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市'
];
foreach ($capital as $prefecture => $city) {
    echo $city . "\n";
}
unset($city);

// Q8 連想配列-2
foreach ($capital as $prefecture => $city) {
  if ($prefecture === '埼玉県') {
      echo $prefecture . 'の県庁所在地は、' . $city . 'です。';
  }
}
unset($city);

// Q9 連想配列-3
$capital['愛知県'] = '名古屋市';
$capital['大阪府'] = '大阪市';

foreach ($capital as $prefecture => $city) {
  if (
    $prefecture === '東京都' ||
    $prefecture === '神奈川県' ||
    $prefecture === '千葉県' ||
    $prefecture === '埼玉県' ||
    $prefecture === '栃木県' ||
    $prefecture === '群馬県' ||
    $prefecture === '茨城県'
    ) {
      echo $prefecture . 'の県庁所在地は、' . $city . 'です。' . "\n";
  } else {
  echo $prefecture . 'は関東地方ではありません。' . "\n";
  }
}
unset($city);

// Q10 関数-1
function hello($name)
{
    return $name . 'さん、こんにちは。' . "\n";
}

echo hello('金谷');
echo hello('安藤');

// Q11 関数-2
function calcTaxInPrice($price)
{
   return $price * 1.1;
}

$price = 1000;
$taxInPrice = calcTaxInPrice($price);

echo $price . '円の商品の税込価格は' . $taxInPrice . '円です。';

// Q12 関数とif文
function distinguishNum($num)
{
   if ($num % 2 === 1) {
       return $num . 'は奇数です。' . "\n";
   } else {
       return $num . 'は偶数です。' . "\n";
   }
}

echo distinguishNum(11);
echo distinguishNum(24);

// Q13 関数とswitch文
function evaluateGrade($rank)
{
    switch ($rank) {
        case 'A':
        case 'B':
            return '合格です。' . "\n";
        case 'C':
            return '合格ですが追加課題があります。' . "\n";
        case 'D':
            return '不合格です。' . "\n";
        default:
            return '判定不明です。講師に問い合わせてください。' . "\n";
    }
}

echo evaluateGrade('A');
echo evaluateGrade('E');

?>