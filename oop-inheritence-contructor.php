<?php
// example1
class Human{

public $name;
public $age;
public function __construct($personname,$personage=0){
  echo "object created calling from constract\n";
  $this->name = $personname;
  $this->age = $personage;
}
public function sayhi(){
echo 'hi\n';
$this ->sayname();
}

function sayname(){
  if($this->age){
    echo "my name is:{$this->name}\n,My age is : {$this->age}\n";
  }
else{
  echo "my name is:{$this->name}\n,i don't say";
}
}
}


$h1= new Human('kardi',26);
$h2 = new Human('borno');


$h1->sayhi();
$h2-> sayhi();

abstract class Ourclass{
  function sayhi(){
    echo 'hi';
    
  }
  abstract function eat($v1,$v2=0);
}
class myClass extends Ourclass{
  function eat($m,$x=5){
    echo "i'm eating";
  }
}
$mc = new myClass();
$mc-> eat(0,1);

//**************
//example2
class shape{
  protected $name;
  protected $area;
  public function __construct($name){
    $this->name= $name;
    $this-> calculatearea();
    
  }
  public function getArea(){
    echo "This {$this->name}'s area is {$this->area}\n";
  }
  public function calculatearea(){}
  
  }
  class Triangle extends shape{
    private $a,$b,$c;
    public function __construct($a,$b,$c){
      $this->a=$a;
      $this->b=$b;
      $this->c=$c;
      parent::__construct("Triangle");
    }
    public function calculatearea(){
      $peram= ($this->a + $this->b + $this->c)/2;
      $this->area=sqrt($peram*($peram-$this->a)*($peram-$this->b)*($peram-$this->c));
    }
  }
    class Rctang extends shape{
    private $a,$b;
    public function __construct($a,$b){
      $this->a=$a;
      $this->b=$b;
    
      parent::__construct("Rectangle");
    }
    public function calculatearea(){
      
      $this->area=$this->a * $this->b;
    }
    
  }
  
  $r = new Rctang(6,5);
  $r->getArea();
?>
