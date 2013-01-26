<?php
    class Result{
        private $shape;

        public function __construct(){
            switch($_POST['action']){
                case 'rect':
                    $this->shape = new Rect();
                    break;
                case 'triangle':
                    $this->shape = new Triangle();
                    break;
                case 'circle':
                    $this->shape = new Circle();
                    break;
                default:
                    $this->shape = false;
            }
        }

        public function __toString(){
            if ($this->shape){
                $result = $this->shape->shanpeName.'的周长：'.$this->shape->perimeter().'<br>';
                $result .= $this->shape->shanpeName.'的面积：'.$this->shape->area().'<br>';
                return $result;
            }else{
                return "没有这个形状";
            }
        }
    }
?>