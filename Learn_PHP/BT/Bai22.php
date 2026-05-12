<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method = "post">
        Name: <input type = "text" name = "name"> </br>
        Age: <input type = "text" name = "age"> </br>
        Class: <input type = "text" name = "class"> </br>
        Birth of date: <input type="date" name = "date">;
        <input type="submit" value="Submit">
    </form>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "";
    $port = 3307;
    $conn = new mysqli($servername,$username,$password,"",$port);
    if($conn->connect_error){
        echo "Connect Unsuccesful $conn->connect_error";
    }
    $strsql = "CREATE DATABASE IF NOT EXISTS quanlihocsinh";
    if($conn->query($strsql)===FALSE){
        echo "Create database unsuccesful $conn->query";
    }
    $conn->select_db("quanlihocsinh");
    $sqlstr = "CREATE TABLE IF NOT EXISTS sinhvien(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    namesv VARCHAR(256) NOT NULL,
    age INT(6) NOT NULL,
    birthdate DATE NOT NULL,
    class VARCHAR(256) NOT NULL)
    ENGINE = InnoDB";
    $conn->query($sqlstr);
    echo "Đã submit :$_SERVER["REQUEST_METHOD"] ?";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $strin = "INSERT INTO sinhvien(namesv,age,class,birthdate)
        VALUES('$_POST[name]','$_POST[age]','$_POST[class]','$_POST[date]')";
        if($conn->query($strin) ===TRUE){
            echo "Them hoc sinh thanh cong";
        }
        else{
            echo "Them hoc sinh that bai";
        }
    }
    
    ?>
</body>
</html>