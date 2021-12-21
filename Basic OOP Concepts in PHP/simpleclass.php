<?php
class Books
{
    public function name()
    {
        echo "My book";
    }
    public function price()
    {
        echo "900 Rs/-";
    }
}
// To create php object we have to use a  new operator. Here php object is the object of the Books Class. 
$obj = new Books();
$obj->name();
$obj->price();

?>