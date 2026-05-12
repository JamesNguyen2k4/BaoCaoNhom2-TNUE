<?php
// string trong php đc khai báo trong dấu nháy đơn hoặc nháy kép
$str1 = 'Hello World'; // sử dụng nháy đơn
$str2 = "Hello World"; // sử dụng nháy kép
echo $str1."</br>".$str2;
// Dấu nháy kép cho phép biến nằm bên trong chuỗi
$name = "James";
echo "</br> Hello, My name is $name";
echo '</br> Hello, My name is $name';// không in ra giá trị của biến name mà phải dùng nối chuỗi hoặc tách thành các giá trị
//------------String Functions------------------
$s = "Nguyen Dang Dang Truong";
echo "</br> Độ dài chuỗi:".strlen($s);
echo "</br> Đếm số lượng từ trong chuỗi:".str_word_count($s);
echo "</br> Kiếm tra từ có trong chuỗi và trả về giá trị true hoặc false:".str_contains($s,"Truong");
echo "</br> Vị trí của từ trong chuỗi".strpos($s,"Dang");
echo "</br> Kiểm tra chuỗi có bắt đầu bằng chuỗi ko: ".str_starts_with($s,"Nguyen");
echo "</br> Kiểm tra chuỗi có kết thúc bằng chuỗi ko: ".str_ends_with($s,"Truong");
//------------String Modification---------------
$str = "Su Pham Thai Nguyen";
echo "</br> Hàm chuyển đổi chữ thường thành chữ hoa: ".strtoupper($str);
echo "</br> Hàm chuyển đổi chữ hoa thành chữ thường: ".strtolower($str);
echo "</br> Hàm thay thế chuỗi ".str_replace("ThaiNguyen","HaNoi",$str);
echo "</br> Hàm đảo chuỗi: ".strrev($str);
echo "</br> Hàm xóa khoảng trắng thừa ở đầu hoặc cuối chuỗi,( nhưng ko xóa khoảng trắng ở giữa) : ".trim("   Hello World    ");
$a = explode(" ",$str);
echo "</br> Hàm tách chuỗi thành 1 mảng: ";
print_r ($a);
var_dump($a);
//--------string concatenation-----------
// ta sử dụng toán tử . để nối chuỗi
$s1 = "Nguyễn";
$s2 = "Trường";
$s3 = $s1.$s2;
$x = 5;
$y = 5;
echo "kết quả $x . $y";// chuỗi ko đc nối trong dấu nháy
echo "</br> chuỗi đc nối là: $s3";
//-------string slicing--------------
$slic = substr($str,2,5);
echo "</br> chuỗi đc cắt ra từ vị trí 2 lấy ra 5 phần tử: $slic";
$slic2 = substr($str,5);
echo "</br> chuỗi đc cắt ra từ vị trí thứ 5 đến hết : $slic2";
//native length: dùng để cắt chuỗi từ phía cuối thông qua chỉ số âm, đến vị trí bắt đầu
$slic3 = substr($str,5,-3);
echo"</br> chuỗi được cắt từ vị trí 5 đến vị trí strlen - 3: $slic3";
$slic4 = substr($str,-3);
echo "</br> chuỗi đc cắt từ cuối lấy ra 3 phần tử cuối cùng: $slic4";
?>