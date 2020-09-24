<?php
    class Square {
        public $side;
        public function __construct($side) {
            $this -> side = $side;

          }

        public function getPerimeter() {
          return 4* $this -> side;
        }

        public function getArea() {
          return  $this -> side **2;

        }

        public function getStrCoords() {
            return "Side: " . $this -> side . "<br>"
            . "Area: " . $this -> getArea() . "<br>";


        }

        public function __toString() {
            return "<strong>Square:</strong><br>" . $this -> getStrCoords()
            . "Perimeter: " . $this -> getPerimeter(). "<br>";

        }

  }
    class Cube extends Square {

        public function getArea() {
          return 6* parent::getArea();

        }

        public function getVolume() {
          return  $this -> side**3;

        }

        public function getStrCoords() {
            return parent::getStrCoords();

        }
        public function __toString() {
            return "<strong>Cube:</strong><br>" . $this -> getStrCoords()
            . "Volume: " . $this -> getVolume(). "<br>";
        }
    }
    $square1 = new Square(1);
    $square2 = new Square(3);
    $cube1 = new Cube(5);
    $cube2 = new Cube(8);

    echo
          $square1 . "<br>"
        . $square2 . "<br>"
        . $cube1 . "<br>"
        . $cube2 . "<br>";
