<?php
// Q1 tic-tac問題
echo '1から100までのカウントを開始します' . "\n" . "\n";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 20 === 0) {
        echo 'tic-tac' . "\n";
    } elseif ($i % 4 === 0) {
        echo 'tic' . "\n";
    } elseif ($i % 5 === 0) {
        echo 'tac' . "\n";
    } else {
        echo $i . "\n";
    }
}

// Q2 多次元連想配列
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

/* 問題1 */
echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。';

/* 問題2 */
foreach ($personalInfos as $index => $vals) {
    echo $index + 1 . '番目の' . $vals['name'] . 'のメールアドレスは' . $vals['mail'] . 'で、電話番号は' . $vals['tel'] . 'です。' . "\n";
}
unset($vals);

/* 問題3 */
$ageList = [25, 30, 18];

foreach ($personalInfos as $index => &$vals) {
    $vals['age'] = $ageList[$index];
}
unset($vals);

var_dump($personalInfos);

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$yamada = new Student(120, '山田');
echo '学籍番号' . $yamada->studentId . '番の生徒は' . $yamada->studentName . 'です。';

// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($lesson)
    {
        echo $this->studentName . 'は' . $lesson . 'の授業に参加しました。学籍番号：' . $this->studentId;
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
/* 問題1 */
$lastmonth = (new DateTime())->modify('-1 months')->format('Y-m-d');
echo $lastmonth;

/* 問題2 */
$today = new DateTime();
$thatday = new DateTime('1992-04-25');
echo 'あの日から' . $thatday->diff($today)->days . '日経過しました。';

?>