<?php
    class Tamagotchi
    {
        private $name;
        private $food;
        private $attention;
        private $rest;
        public $time;

        function __construct($name, $food=50, $attention=50, $rest=50)
        {
              $this->name = $name;
              $this->food = $food;
              $this->attention = $attention;
              $this->rest = $rest;
        }

        function setFood($new_food)
        {
          $this->food = (int)$new_food;
        }
        function getFood()
        {
          return $this->food;
        }
        function setName($new_name)
        {
          $this->name = (string)$new_name;
        }
        function getName()
        {
          return $this->name;
        }
        function setAttention($new_attention)
        {
          $this->attention = (int)$new_attention;
        }
        function getAttention()
        {
          return $this->attention;
        }
        function setRest($new_rest)
        {
          $this->rest = (int)$new_rest;
        }
        function getRest()
        {
          return $this->rest;
        }
    }

?>
