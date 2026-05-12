<?php
// trong php có ba loại thuộc kiểu number: int,float, numeric string
// có các hàm để kiểm tra ba loại number này
$a = 12;
var_dump($a);
$b = 12.4;
var_dump($b);
$c = "123" + 10;
var_dump($c);
var_dump(is_numeric($c));// trả về true nếu là chuỗi số hoặc một số
var_dump(is_int($a));
var_dump(is_float($b));
//-----get integer from value--------
echo intval($b);
?>