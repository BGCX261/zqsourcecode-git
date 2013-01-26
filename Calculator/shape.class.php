<?php
    abstract class Shape
    {
        public $shapename;
        abstract function area();
        abstract function perimeter();

        public function validate($value,$message="形状"){
            if ($value == "" || !is_numeric($value) || $value < 0 ){
                echo '<font color="red">'.$message.'必须为非负值的数字，并且不能为空</font><br>';
                return false;
            }else{
                    return true;
            }
        }

    }

?>