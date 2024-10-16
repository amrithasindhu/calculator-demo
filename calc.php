<?php

class Calculator
{
    public $num1;
    public $num2;
    public $operations;
    public $result;
    public function __construct($operations,$num1,$num2)
    {
        $this->operations = $operations;
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->calc();
    }

   
public function calc()
{
    switch($this->operations)
    {
        case "add":
            $this->result = $this->num1 + $this->num2;
            break;
        case "sub":
            $this->result = $this->num1 - $this->num2;
                break;
        case "div":
            $this->result = $this->num1 / $this->num2;
                    break;
        case "mul":
            $this->result = $this->num1 * $this->num2;
                        break;
        default:
         echo"Invalid operation";
         break;

    }
 

}


public function getResult(): ?float
    {
        return $this->result;
    }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $operations=$_POST["operations"];
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];


$cal1 = new Calculator($operations,$num1,$num2);
echo $cal1->getResult();
}
?>




