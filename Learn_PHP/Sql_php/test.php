<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hoc_wordpress";
$port = 3307;
$conn = new mysqli($servername,$username,$password,$dbname,$port);
$conn->connect_error;
$sql = "CREATE TABLE IF NOT EXISTS project(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name_prj VARCHAR(256) NOT NULL,
complete INT(6) NOT NULL)
";
if($conn->query($sql)===TRUE)
{
    echo "Da tao bang thanh cong";
}
else{
    echo "Tao bang ko thanh cong, loi la: ".$conn->error;
}
// $sqlstr = "ALTER TABLE project
// ADD link_prj VARCHAR(256) NOT NULL";
// if($conn->query($sqlstr)===TRUE){
//     echo "</br>Them thanh cong";
// }
$sqlins = "INSERT INTO project(id,name_prj,complete,link_prj)
VALUE('1','Website Kiểm tra trắc nghiệm online',0,'https://github.com/JamesNguyen2k4/Du_an_web_trac_nghiem_new.git')";
$conn->query($sqlins);
?>