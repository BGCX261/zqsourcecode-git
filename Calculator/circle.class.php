<?php
    class Circle extends Shape
    {
        private $radius=0;

        public function __construct(){
            $this->shapeName = "圆形";

            if($this->validate($_POST['radius'],'圆形半径')){
                $this->radius = $_POST['radius'];
            }else{
                exit;
            }
            
        }

        public function area(){
            return pi() * $this->radius * $this->radius;
        }
        
        public function perimeter(){
            return 2 * pi() * $this->radius;
        }
    }

?>