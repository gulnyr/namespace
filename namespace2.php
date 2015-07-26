<?php
// Создадим новое имя пространства имен
namespace Test2;
// Вызовем данные из страницы namespace.php
require_once './namespace.php';

// Импортируем нужное пространство имен

use Test1;

// Создадим один в один похожий класс Eddard

class Eddard
{
    protected $string;
    public function __construct($string) {
        $this->string = $string;
    }
    public function strlen() {
        return strlen($this->string);
    }
    public function show_str() {
        echo $this->string . PHP_EOL;
    }
}

// Записывается обратным слэшем, когда указываем адрес пространства имен

$eddard = new Test1\Eddard("hello1");
$eddard -> show_str();
?><br><br><?php

// Здесь мы не указали пространство имен, он указывает текущую,
// т.е. будет так: $eddard = new Test2\Eddard("hello2");
// но указывать не нужно, а то имя пространства 2 раза вставится

$eddard = new Eddard("hello2");
$eddard -> show_str();

?>