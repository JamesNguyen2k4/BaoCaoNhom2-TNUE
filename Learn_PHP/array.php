<?php
echo "<h2> Mảng trong php có thể có nhiều kiểu dữ liệu, bao gồm cả một mảng khác</h2>";
$car = array("volvo","vmw","vinfast");// mang tinh
var_dump($car);
$mycar = array("vinfast",15,["banana","mango"]);
echo "</br> số lượng phần tử trong mảng là: " . count($mycar);
// Duyệt mảng
echo "</br> Danh sách mảng là: ";
foreach ($mycar as $x) {
    if(is_array($x)){
        echo implode(" ",$x). " ";
    }
    else{
        echo $x. " ";
    }
}
echo "</br>-------associactive array----------</br>";
// mảng trong php có thể ở dạng key value
$car2 = array("Vinfast"=>"20 nghìn đô","year"=>2026);
echo "</br>" . $car2["Vinfast"];
//Duyệt
echo "Duyệt mảng có cặp key : value: ";
foreach($car2 as $x=>$y){
    echo "$x: $y" . " ";
}
echo "</br>"."--------Creating array---------"."</br>";
$a1 = array("Nguyễn",12);
$a2 = ["volvol","vinfast"];
// cho phep xuong dong trong khi khai bao mang
$a3 = [
    "Vinfast" => 1200,
    "Honda" => 2000
];
// cho phep dau phay cuoi cung trong mang
$cars = [
    "Volvo",
    "BMW",
    "Toyota",
  ];
echo "</br> Mang co dau phay cuoi cung: ";
var_dump($cars);
echo "</br> Mang xuong dong: ";
var_dump($a3); 
echo "</br>"." khai báo mảng rỗng trước"."</br>";
$ar = [];
$ar[0] = "Nguyễn";
$ar[1] = "Trường";
foreach($ar as $i){
    print $i . " ";
}
echo "</br>Tương tự ta có thể khai báo với associactive array: ";
$ds = [];
$ds["car1"] = "honda";
$ds["car2"] = "vinfast";
print_r($ds);
echo "<br>----------Mix array--------</br>";
$ds2 = [];
$ds2[0] = 1;
$ds2["banana"] = 12.23;
var_dump($ds2);
echo "</br>--------access array--------</br>";
// ta co the truy cap phan tu key thong qua ca dau don va dau kep
echo $ds2['banana'];
// ta có thể sử dụng phần tử mảng làm lời gọi hàm cùng tên với giá trị của phần tử
function BMW($x){
    print "<br>".$x."</br>";
}
echo $cars[1]($ds2["banana"]);
echo "</br>------update array--------</br>";
$cars[1] = "Vinfast";
print $cars[1];
$ds["car1"] = "Mec";
print $ds["car1"];
echo "</br>---------add array item--------</br>";
$fruits = ["Táo","lê","mít"];
$fruits[] = "Dừa";// thêm 1 phần tử
var_dump($fruits);
echo "</br>";
// thêm trong associative array
$ds2["mango"] = 15.222;
var_dump($ds2);
echo "</br> Các hàm dùng để thêm 1 hoặc nhiều phần tử: ";
array_push($ds2,"Mít","Dừa");// thêm vào cuối mảng
$ds2 +=["Táo"=>12000,"Cam"=>2000];// thêm mới với associative array
array_unshift($ds2,"Quýt","Bưởi");// thêm vào đầu mảng
var_dump($ds2);
array_splice($ds2,1,0,"Chuối");// thêm vào theo vị trí
echo "</br>";
var_dump($ds2);
echo "</br>------------merge array--------</br>";
$danhsach = array_merge($ds,$ds2);
var_dump($danhsach);
echo "</br>------------Delete array---------</br>";
array_splice($danhsach,1,2);// từ vị trí số 1 xóa 2 phần tử
var_dump($danhsach);
unset($danhsach[0],$danhsach["car1"]);// xóa trực tiếp 1 hoặc nhiều phần tử thông qua chỉ số hoặc key
echo "</br>";
var_dump($danhsach);
echo "</br>";
array_shift($danhsach);// xóa phần tử đầu tiên
array_pop($danhsach);// xóa phần tử cuối cùng
var_dump($danhsach);
echo "
sort() - sorts an indexed array in ascending order
rsort() - sorts an indexed array in descending order
asort() - sorts an associative array in ascending order, according to the value
ksort() - sorts an associative array in ascending order, according to the key
arsort() - sorts an associative array in descending order, according to the value
krsort() - sorts an associative array in descending order, according to the key";
?>