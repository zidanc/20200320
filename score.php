<style>
  span{
    color: red;
    font-weight: bolder;
    font-size: 1.5rem;
  }
</style>

<?php
//學生成績
$score=[
  "50"=>[
    "國文"=>85,
    "數學"=>75,
    "英文"=>65
  ],
  "30"=>[
    "國文"=>83,
    "數學"=>73,
    "英文"=>63
  ],
  "10"=>[
    "國文"=>70,
    "數學"=>80,
    "英文"=>90
  ],
  "20"=>[
    "國文"=>82,
    "數學"=>72,
    "英文"=>92
  ],
  "40"=>[
    "國文"=>64,
    "數學"=>94,
    "英文"=>74
  ]
];

// $student=$score[10];
// echo "<pre>";print_r($student);"</pre>";

//陣列中的Key是中文字串的話，一定要加引號，不然會出現錯誤。
// echo "國文".$score[30]["國文"]."<br>";
// echo "數學".$score["30"]["數學"]."<br>";
// echo "英文".$score[30]["英文"]."<br>";

if (isset($_GET["num"])) {
  $num=$_GET["num"];
  echo "座號".$num."的成績如下:"."<br>";
  echo "國文：".$score[$num]["國文"]."分<br>";
  echo "數學：".$score[$num]["數學"]."分<br>";
  echo "英文：".$score[$num]["英文"]."分<br>";
}else{
  echo "<span>請提供學生座號</span>";
}

?>