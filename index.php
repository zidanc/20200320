<?php

class Pet{
  public $hairColor="black";
  public $feet=4;

  public function __construct(){
    echo "物件成立";
    echo "<br>";
    echo $this->sound();
    // 只寫echo "sound()";是無法顯示的。因為function中只能看到區域變數，不是全域變數。
    // 所以這邊需要$this，呼叫這個類別Pet。讓下方的sound()變數進到function中。
  }

  public function sound(){
    return "汪汪";
  }
}

$dog=new Pet;

echo $dog->hairColor;
echo "<br>";
echo $dog->feet;
echo "<br>";
echo $dog->sound();

?>