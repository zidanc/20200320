<?php

interface Event{
  public function run();
  public function sound();
  public function catch();
}

class Pet{
  protected $name="";
  protected $hairColor="";
  protected $feet=0;

  public function __construct($name,$color,$feet){
    $this->name=$name;
    $this->hairColor=$color;
    $this->feet=$feet;
  }

  public function name(){
    return $this->name;
  }
  public function hairColor(){
    return $this->hairColor;
  }
  public function feet(){
    return $this->feet;
  }

}

class Dog extends Pet implements Event{
  public function run(){
    echo "狗在跑";
  }
  public function sound(){
    echo "狗在叫";
  }
  public function catch(){
    echo "狗抓貓";
  }

}


$dog=new Pet('dog','red',4);

echo $dog->name();
echo "<br>";
echo $dog->hairColor();
echo "<br>";
echo $dog->feet();
echo "<br>";

$dog2=new Dog('BigDog','blue',4);

echo $dog2->name();
echo "<br>";
echo $dog2->hairColor();
echo "<br>";
echo $dog2->feet();
echo "<br>";



?>