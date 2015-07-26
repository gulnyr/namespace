<?php
// Создадим новое имя пространства имен
namespace Test2;
// Вызовем данные из страницы namespace.php
require_once './namespace.php';

// Импортируем нужное пространство имен и заодно придумаем псевдоним, в нашем случае короткий T

use Test1 as T;

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

$eddard = new T\Eddard("hello1");
$eddard -> show_str();
?><br><?php

// Здесь мы не указали пространство имен, он указывает текущую,
// т.е. будет так: $eddard = new Test2\Eddard("hello2");
// но указывать не нужно, а то имя пространства 2 раза вставится

$eddard = new Eddard("hello2");
$eddard -> show_str();

?>
