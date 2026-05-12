<?php
require_once "connect.php";
// $sql = "INSERT INTO user_list(id,user_name,user_password,user_email)
// VALUE(1,'Nguyễn Đăng Trường','123456','ndt889904@gmail.com')";
// if($conectionstr->query($sql) === TRUE){
//     echo "Them Thanh Cong";
// }
// else{
//     echo "Them That Bai: ".$conectionstr->error;
// }
//insert multiple
$sql_mtl = "INSERT INTO user_list(id,user_name,user_password,user_email)
VALUES (2,'Lê Khắc Tâm','123456','tkl@gmail.com'),
(3,'Vũ Mạnh Tú','123456','tvm@gmail.com'),
(4,'Phạm Thế Tùng','123456','tpk@gmail.com')";
$conectionstr->query($sql_mtl);
?>