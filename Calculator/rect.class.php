<?php
    class Rect extends Shape
    {
        private $width=0;
        private $height = 0;

        public function __construct(){
            $this->shapeName = "矩形";

            if($this->validate($_POST['width'],'矩形宽度' ) 
                    & $this->validate($_POST['height'],'矩形高度' )){
                 $this->radius = $_POST['width'];
                 $this->height = $_POST['height'];
            }else{
                exit;
            }

            $this->width = $_POST['width'];
            $this->height = $_POST['height'];
        }

        public function area(){
            return $this->width * $this->height;
        }
        public function perimeter(){
            return 2 * ($this->width + $this->height);
        }
    }

?>