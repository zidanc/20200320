<?php

class Pet{
  public $hairColor="black";    //成員
  public $feet=4;               //成員

  public function __construct(){      // 建構式 __construct() 宣告的當下，就會執行。甚至第20行建立物件$dog之前就會執行。
    echo "物件成立";
    // sound();          //會報錯Fatal error: Uncaught Error: Call to undefined function sound()。因為在第7行此fn{ }中(區域變數)，找不到sound()是怎麼定義的。
    $this->sound();       //$this指的是第3行class Pet (Pet類別)。所以這樣寫就找得到sound();
  }

  public function sound(){      //方法
    // echo "汪汪";
    return "汪汪";
  }

}

$dog=new Pet;                 //建立物件$dog。

echo "<br>";
echo $dog->hairColor;         //存or取物件裡的成員，使用瘦箭頭->。至於為何用echo，因為變數$hairColor是字串，所以採用echo。
echo "<br>";
echo $dog->feet;
echo "<br>";
// $dog->sound();           //執行方法，加 () 代表要馬上執行。若沒有加 ()，代表要存or取物件裡的成員，此行沒有加 () 會報錯。第14行寫法是直接於fn中echo，所以第27行前方無需加echo，直接執行()即可輸出汪汪。
echo $dog->sound();         //若13行fn是採return返回該字串給fn sound，則第27行要加echo，才能正常輸出。

?>

<?php
//繼承，關鍵字extends (擴充/延展之意)。如此寫，Dog類別即有Pet類別的成員及方法。
class Dog extends Pet{

}

$bird=new Dog;

echo "<br>";
echo $bird->hairColor;
echo "<br>";
echo $bird->feet;
echo "<br>";
echo $bird->sound();


?>