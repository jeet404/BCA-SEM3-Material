<?php
class A
{
    public function myage()
    {
        return  ' age is 80';
    }
}
class B extends A
{
    public function mysonage()
    {
        return  ' age is 50';
    }
}
class C extends B
{
    public function mygrandsonage()
    {
        return  'age is 20';
    }
    public function myHistory()
    {
        echo "Class A " . $this->myage();
        echo "Class B " . $this->mysonage();
        echo "Class C " . $this->mygrandsonage();
    }
}
$obj = new C();
$obj->myHistory();

?>