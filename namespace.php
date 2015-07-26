<?php

// Пространству имен ничего не должно препятствовать,
// даже html код и пробел
// Это как-бы папки, но мы их представляем мысленно

// Создаем название пространства имен

namespace Test1;

// Создадим тестовый класс Eddard

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

//********************Продолжение в namespace2.php*************************

?>
