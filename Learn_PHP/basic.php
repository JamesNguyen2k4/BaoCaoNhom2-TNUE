<?php
    // ----------print and echo-------------
    // print chỉ cho phép in ra một giá trị cho nên nếu chuỗi có nhiều phần tử phải nối vào thành 1 bởi toán tử .
    print "hello"."trường!</br>";
    // print "hello", "trường!";// báo lỗi
    echo 'Hello world'," My name is James</br>";
    // print có thể trả về giá trị
    $tentoi = "Trường";
    echo print "Hello $tentoi </br>";
    // Hello Trường
    //1
    //------------Sigle quotes and double quotes------------
    echo 'Không thể in giá trị trực tiếp $tentoi</br>';
    echo 'phải in bằng cách nối chuỗi: '.$tentoi."</br>";
    echo "có thể in giá trị trực tiếp là: $tentoi </br>";
    echo "nháy kép có hiểu với các ký tự đặc biêt: ".'\t \n';
    $a = 5;
    $b = 10;
    echo "</br> nháy kép chỉ in ra chứ ko kết hợp các toán tử đc như này $a+$b ", "mà phải để ngoài: ",$a+$b;
    // -----------variables-----------------
    $name = "James";
    $age = 21;
    $job = "Developer";
    print " </br>Hello, My name is $name, I'm $age years old, and i'm a $job";
    $a = 5;
    $b = 10;
    echo "</br> $a + $b = ", $a + $b;
    //trong php biến viết hoa và viết thường khác nhau
    $color = "red";
    $Color = "blue";
    print "</br>".$color." and ".$Color. " = " . $color.$Color ."</br>";      
    var_dump($color);// in ra kiểu dữ liệu của biến      
    //----------global variable--------------
    $x = 5;// global
    function ham(){
        echo "</br>",$x; // error
    }
    echo "</br>",$x;
    ham();// php ko cho phép truy cập biến toàn cục trong hàm trực tiếp
    // cách truy cập biến toàn cục trong hàm
    function ham2(){
        global $x;// thêm từ khóa global để truy cập biến toàn cục
        echo "</br> Biến X trong hàm đc khai báo ở bên ngoài hàm là biến toàn cục: ",$x;
    }
    ham2();
    //biến siêu toàn cục
    function ham3(){
        //php cho phép lưu trữ biến toàn cục trong mảng siêu toàn cục $GLOBALS
        $GLOBALS['y'] = $GLOBALS['x'] + 10;
        echo "</br> Super global variable: ". $GLOBALS['y'];
    }
    ham3();
    //biến tĩnh: static-là biến cục bộ nhưng giữ giá trị sau khi hàm kết thúc, tức là lần gọi hàm sau thì giá trị biến được giữ lại từ lần gọi hàm trước đó
    function ham4(){
        static $s = 0;
        $s = $s + 1;
        echo "</br> Biến static: ". $s;
    }
    ham4();
    ham4();
    ham4();
    echo "</br>==========Ds SUPERGLOBALS=============";
    echo '<pre> 
    $GLOBALS - Một mảng chứa các tham chiếu đến tất cả các biến toàn cục của tập lệnh
    $_SERVER - Chứa thông tin về máy chủ web bao gồm tiêu đề, đường dẫn và vị trí tập lệnh
    $_REQUEST - Một mảng chứa dữ liệu từ các siêu toàn cầu $_GET, $_POST và $_COOKIE
    $_POST - Một mảng các biến được nhận thông qua phương thức HTTP POST
    $_GET - Một mảng các biến được nhận thông qua phương thức HTTP GET
    $_FILES - Một mảng các mục được tải lên tập lệnh hiện tại thông qua phương thức HTTP POST (tên tệp, loại, kích thước)
    $_ENV - Giữ các biến môi trường được truyền cho tập lệnh hiện tại
    $_COOKIE - Một mảng các biến được truyền tới tập lệnh hiện tại thông qua HTTP Cookies
    $_SESSION - Một mảng các biến phiên
    
    </pre>';

?>