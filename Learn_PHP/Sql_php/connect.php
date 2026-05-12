<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "";
$port = 3307;
$conectionstr = new mysqli($servername,$username,$password,$dbname,$port);
if($conectionstr->connect_error){
    echo "Connect unsucssecful! ".$conectionstr->connect_error;
}
else{
    echo "Connect Sucessful!";
}
?>