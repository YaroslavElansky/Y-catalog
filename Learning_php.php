<?php
/*class Worker {
    public $name="Undefiend",$age="19",$salary="5000";

    function DisplayInfo(){
        echo "Name:" . $this->name . "age:" . $this->age . "salary: " . $this->salary;
    }
}

$tom=new Worker();
$tom->name="Tom";
$tom->age="18";
$tom->salary="10000";
$Bob=new Worker();
$Bob->name="Bob";
$Bob->age="24";
$Bob->salary="15000";

echo "Cумма зарплат" . $tom->salary + $Bob->salary . "<br>";
echo "Cумма возраста" . $tom->age + $Bob->age;*/

/*class Worker {
    private $name,$age,$salary;

    public function setName($name){
        $this->name=$name;
    }
    public function getName(){
       return $this->name;
    }
    public function setAge($age){
        $this->checkAge($age);
    }
    public function getAge(){
       return $this->age;
    }
    public function setSalary($salary){
        $this->salary=$salary;
    }
    public function getSalary(){
        return $this->salary;
    }

    private function checkAge($age){
        if ($age>1 and $age<100){
            $this->age=$age;
            echo "Возраст в пределах нормы <br>";
        }
        else{
            echo "Возраст не подходит <br>";
        }
    }

    
}

$Tom=new Worker();
$Tom->setName("Tom");
$Tom->setAge("18");
$Tom->setSalary("15000");
echo "Имя:" . $Tom->getName() . "<br>" . "Возраст:" . $Tom->getAge() . "<br>" . "Зарплата:" . $Tom->getSalary() . "<br>";
$Bob=new Worker();
$Bob->setName("Bob");
$Bob->setAge("101");
$Bob->setSalary("25000");
echo "Имя:" . $Bob->getName() . "<br>" . "Возраст:" . $Bob->getAge() . "<br>" . "Зарплата:" . $Bob->getSalary() . "<br>";
echo "Сумма зарплат: " . $Tom->getSalary()+$Bob->getSalary() . "<br>";
echo "Сумма возрастов: " . $Tom->getAge()+$Bob->getAge() . "<br>";*/

/*class Worker{

    public $name,$age,$salary;

    function __construct($name,$age,$salary)
    {
        $this->name=$name;
        $this->age=$age;
        $this->salary=$salary;
    }

    function GetInfo(){

        return $this->name. $this->age. $this->salary. " ";
    }
}

$Tom=new Worker("Tom",38,1000);
echo $Tom->GetInfo();
$Bob=new Worker("Bob",12,100);
echo $Bob->GetInfo();*/

/*class Worker {
    public $name;
    public $age;
    public $salary;
    
    function __construct($name,$age,$salary) {
        $this->name=$name;
        $this->age=$age;
        $this->salary=$salary;
    }
    function GetInfo(){
        return  $this->name . $this->age . $this->salary;
    }

    function __destruct()
    {
        $this->name;
        $this->age;
        $this->salary;
    }
}

$dima=new Worker('dima',12,1000);
echo $dima->GetInfo();*/

/*class Geometry {
    public $x,$y;

    function __construct($x,$y)
    {
        $this->x=$x;
        $this->y=$y;
    }

    function distancia ($point1,$point2)
    {
        return sqrt(pow($point2->x-$point1->x,2)+pow($point2->y-$point1->y,2));
    }

    function proverka($dist1,$dist2)
    {
        if ($dist1===$dist2)
        {
            echo "Трапеция равнобедренная" . "<br>";
        }
        else{
            echo "Трапеция не равнобедренная " . "<br>";
        }
    }

    function ploshad ($dist1,$dist2,$dist4){

        $p=0.5*($dist4+$dist2) + sqrt(pow($dist1,2)+pow(0.5*($dist4-$dist2),2));

        echo "Площадь равна $p" . "<br>";
    }

    function perimetr ($dist1,$dist2,$dist3,$dist4)
    {
        $p= $dist1+$dist2+$dist3+$dist4;
        echo "Периметр равен $p" . "<br>";
    }
}

$point1=new Geometry(1,2);
$point2=new Geometry(2,4);
$point3=new Geometry(4,4);
$point4=new Geometry(5,2);


$AB = new Geometry($point1,$point2); 
$BC = new Geometry($point2,$point3);
$CD = new Geometry($point3,$point4);
$AD = new Geometry($point1,$point4);

$distance_AB = $AB->distancia($point1, $point2);
$distance_BC = $BC->distancia($point2, $point3);
$distance_CD = $CD->distancia($point3, $point4);
$distance_AD = $AD->distancia($point1, $point4);

$proverka=new Geometry(0,0);
$ploshad=new Geometry(0,0);
$perimetr= new Geometry(0,0);

$perimetr->perimetr($distance_AB,$distance_AD,$distance_BC,$distance_CD);
$ploshad->ploshad($distance_AB,$distance_BC,$distance_AD);
$proverka->proverka($distance_AB,$distance_CD);

echo "Расстояние между точками: " . $distance_AB . "<br>"; 
echo "Расстояние между точками: " . $distance_BC . "<br>"; 
echo "Расстояние между точками: " . $distance_CD . "<br>"; 
echo "Расстояние между точками: " . $distance_AD . "<br>"; */

/*class parent_class{
    
   protected $p_1='Защищенное свойство ';   
    
   private $p_2='Закрытое свойство ';     
     
   public function parent_func(){
    echo $this->p_2.'<br>';   
    echo $this->p_1.'<br>';  
   }
}*/
  
/*class descendant_class extends parent_class{
  /*private $p_1='p_var ';   
  private $p_2='p_var ';*/   
                               
  /*function child_func(){     
    /*echo $this->p_1.'<br>';   
    echo $this->p_2.'<br>';*/  
 // }
//}
  
/*$obj=new parent_class();         
$obj_2=new descendant_class();*/   
  
/*$obj->parent_func();  
echo $obj->p_2;     
echo $obj_2->p_2;   
$obj_2->child_func(); 
echo $obj->p_1;*/     


/*class Zadacha1 {
    public $name,$age,$hight;
    const max_hight=300;

    function __construct($name,$age,$hight)
    {
        $this->name=$name;
        $this->age=$age;

        if ($hight> self::max_hight)
        {
            $this->hight= self::max_hight;           
        }
        else{
            $this->hight=$hight;
        }
    }

    function GetInfo(){
        echo "Привет " . $this->name . ",твой возраст: " . $this->age . "твой рост:" . $this->hight;
    }
}

$tom=new Zadacha1('TOM',35,150);
$bob=new Zadacha1('BOB',35,310);

$sum = Zadacha1::max_hight + $tom->hight;
echo "Сумма значения константы и свойства: " . $sum;

$tom->GetInfo();
$bob->GetInfo();
*/



/*class basket{
    public $weight;
    const count_basket=7;

    function sum ($weightperbaket)
    {
        $end=self::count_basket*$weightperbaket;
        return "Итоговое значение " . $end;
    }

}

$first=new basket;
$first_1=5;
$second_2=6;
$third_3=3;

echo $first->sum($first_1);*/
/*$p=2;
$n=119;
$rown=12;
$cols=10;

$array=array();

for ($i=0;$i<$rown;$i++)
{
    for ($j=0;$j<$cols;$j++)
    {
        $array[$i][$j]=$i*$cols+$j+1;
    }  
}


for ($i=0;$i<$rown;$i++)
{
   for($j=0;$j<$cols;$j++)
   {
    echo $array[$i][$j] . ",";
   
   }
   echo "<br>";
}


for($i=0;$i>$rown;$i++)
{
    for($j=0;$j<$cols;$j++)
    {
        if ($array[$i][$j]===$p*$p)
        {
            array_diff($array[$i][$j]);
        }
    }
}*/

/*$p = 2;
$n = 119;
$primeArray = array_fill(0, $n+1, true); // Инициализация массива со всеми значениями true

for ($i = 2; $i <= sqrt($n); $i++) {
    if ($primeArray[$i]) {
        for ($j = $i * $i; $j <= $n; $j += $i) {
            $primeArray[$j] = false; // Исключение кратных чисел
        }
    }
}

$counter = 0; // Счетчик для вывода таблицы
for ($i = 2; $i <= $n; $i++) {
    if ($primeArray[$i]) {
        echo $i . " "; // Вывод простых чисел
        $counter++;
        if ($counter % 10 == 0) {
            echo "<br>";
        }
    }
}
*/

?>