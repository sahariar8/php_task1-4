
<!-- Task-1 -->



<!-- 1. Inheritance = Extends;
     2. can extends only one class. -->
<?php 

class Shape{
    public $radius;
    public $height;
    public $width;
    
    public function areaOfCircle(){
      $circle =  pi() * pow($this->radius, 2);
      return round($circle,2);
       
    }
    public function areaOfRectangle(){
         $rectangle = $this->width * $this->height;
         return $rectangle;
    }

}

class Circle extends Shape{
    public function __construct($radius) {
                $this->radius = $radius;
                $this->areaOfCircle();
            } 
}

class Rectangle extends Shape{
    public function __construct($width, $height) {
                $this->width = $width;
                $this->height = $height;
                $this->areaOfRectangle();
            }
}

$circle = new Circle(4);
echo "The Area Of Circle is ="." ".$circle->areaOfCircle()."<br>";
$rectangle = new Rectangle(6,5);
echo "The Area Of Rectangle is ="." ".$rectangle->areaOfRectangle()."<br>";

?>





<!-- Task 2 -->

<!-- //1.Interface = Implements;<br>
//2.Interface = No property;<br>
//3.Interface = only Method/Function without bodypart;<br>
//4.Interface = only public.<br>
//5.Interface = class can implements one or more interface;<br> -->


<?php

interface Student{
    public function getStudent();
}
interface Teacher{
    public function getTeacher();
}

class Info implements Student, Teacher{
 
    public function __construct()
    {
        $this->getTeacher();
        $this->getStudent();
    }

    
    public function getTeacher(){
        echo "I am a College Teacher.<br>";
    }
    public function getStudent()
    {
        echo "I am a College Student.<br>";
    }
}

$ob = new Info;

?>

<!-- Task - 3 -->

<!-- //1.encapsulation = bundling property && method;
//2.encapsulation = property keep private;
//3.encapsulation = property can access only using same class methods; -->


<?php

class Employee{

    private $name;
    private $salary;

   public function __construct($n, $s)
   {
        $this->name = $n;
        $this->salary = $s;

   }
   public function getName(){

        return $this->name;
   }
   public function getSalary(){

        return $this->salary;
   }
    

}

$employee = new Employee("Sahariar",15000);

echo "Emloyee Name :".$employee->getName()."<br>";
echo "Emloyee Salary :".$employee->getsalary();

?>

<!-- Task--4 -->
<!-- //Polymorphism = OverWrite parent property & method by using child clas. -->




<?php

class Animal {
    public function makeSound() {
        return "Some generic animal sound";
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "Woof Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow Meow!";
    }
}

class Duck extends Animal {
    public function makeSound() {
        return "Quack Quack!";
    }
}


$animals = [
                new Dog(),
                new Cat(),
                new Duck()
            ];

foreach ($animals as $animal) {
    echo get_class($animal) . "says:".$animal->makeSound()."<br>";
}

?>