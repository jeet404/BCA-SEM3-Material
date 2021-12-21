<?php
abstract class Cars
{
    public abstract function getCompanyName();
    public abstract function getPrice();
}
class Baleno  extends Cars
{
    public function getCompanyName()
    {
        return "Maruthi Suzuki" . '<br/>';
    }
    public  function getPrice()
    {
        return 720000 . '<br/>';
    }
}
class Santro extends Cars
{
    public function getCompanyName()
    {
        return "Hyundai" . '<br/>';
    }
    public function getPrice()
    {
        return 300000 . '<br/>';
    }
}
$car = new Baleno();
$car1 = new Santro();
echo $car->getCompanyName();
echo $car->getPrice();
echo $car1->getCompanyName();
echo $car1->getPrice();
?>