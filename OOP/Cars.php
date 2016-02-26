<?php

    class Cars {
    
        // Инициализираме променливи като публични.
        // Съществуват оше private и static.
        public $make;
        public $model;
        public $year;
    
        /**
         * Cars constructor.
         * @param $make
         * @param $model
         * @param $year
         * Конструкторът е блок от инструкции, който се изпълнява за инициализация на един обект при неговото създаване.
         * Конструктура веднага се извиква при инстанция на класа.
         * Конструктурите не могат да връщат с return.
         */
        public function __construct($make, $model, $year)
        {
            $this->make = $make;
            $this->model = $model;
            $this->year = $year;
            // Конструктура може да вика други методи в себеси.
            // printCarProperties();
        }
    
        // Функция, която връща производител, модел и година.
        public function printCarProperties() {
    
            return $this->make." ".$this->model." ".$this->year;
    
        }
    
    }
    
    // Правим инстанция към нашият класс и създаваме нов обект, който унаследява всички характеристики на класа Cars.
    $newCar = new Cars("Mercedes", "220D", 2008);
    
    // Принтираме, като използваме името на функцията, която искаме да стартира. Преди името и посочваме класа към, който принадлежи.
    echo $newCar->printCarProperties();

?>
