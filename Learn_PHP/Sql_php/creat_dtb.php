        <?php
        $namedtb = "localhost";
        $username = "root";
        $password = "";
        $conn = new mysqli($namedtb,$username,$password,"",3307);
        if($conn->connect_error){
            echo "connect unsuccessfull".$conn->connect_error;
        }
        else{
            echo "connect susuccessful";
        }
        $sqlstr =  "CREATE DATABASE IF NOT EXISTS quanlichitieu";
        if($conn->query($sqlstr) === TRUE){
            echo " Tao DTB thanh cong";
        }
        else{
            echo "Tao That Bai: ".$conn->error;
        }
        $conn->select_db("quanlichitieu");
        // creat table;
        $sql_crtb_user = "CREATE TABLE IF NOT EXISTS user_list(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        user_name VARCHAR(256) NOT NULL,
        user_password VARCHAR(256) NOT NULL,
        user_email VARCHAR(256) NOT NULL)
        ENGINE = InnoDB";
        if($conn->query($sql_crtb_user) === TRUE){
            echo "Tao bang user thanh cong";
        }
        else{
            echo "Tao bang user that bai: ".$conn->error;
        }
        $sql_crtb = "CREATE TABLE IF NOT EXISTS danhmuc_tritieu (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        type_name VARCHAR(256) NOT NULL,
        user_id INT(6) UNSIGNED,
        FOREIGN KEY(user_id) REFERENCES user_list(id) 
        )ENGINE = InnoDB";
        if($conn->query($sql_crtb) === TRUE){
            echo "Tao bang danh muc thanh cong";
        }
        else{
            echo "Tao bang danh muc that bai".$conn->error;
        }
        $sql_crdtb_value = "CREATE TABLE IF NOT EXISTS gia_tien(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        value_sp DECIMAL(12,2) NOT NULL,
        user_id INT(6) UNSIGNED,
        danhmuc_id INT(6) UNSIGNED,
        FOREIGN KEY(user_id) REFERENCES user_list(id),
        FOREIGN KEY(danhmuc_id)REFERENCES danhmuc_tritieu(id)
        )ENGINE = InnoDB";
        $conn->query($sql_crdtb_value);
        //ADD table
        $sql_addtb = "ALTER TABLE gia_tien
        ADD namesp VARCHAR(256) NOT NULL AFTER id";
        $conn->query($sql_addtb);
        ?>