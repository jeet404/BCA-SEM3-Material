<?php
class A
{
    public function printItem($string)
    {
        echo ' Hi : ' . $string;
    }
    public function printPHP()
    {
        echo 'I am from Amreli' . PHP_EOL;
    }
}
class B extends A
{
    public function printItem($string)
    {
        echo 'Hi: ' . $string . PHP_EOL;
    }
    public function printPHP()
    {
        echo "I am from Rajkot";
    }
}
$a = new A();
$b = new B();
$a->printItem('Tobby');
$a->printPHP();
$b->printItem('Tom');
$b->printPHP();

?>