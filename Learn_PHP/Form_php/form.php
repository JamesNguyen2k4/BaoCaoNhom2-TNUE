<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Form sử dụng biến $_POST và $_GET-->
    <form action = "welcome.php" method  = "post">
        Name: <input type = "text" name = "name"> </br>
        Age: <input type = "text" name = "age"> </br>
    <input type="submit" value="Submit">
    </form> 
    <form action = "welcome.php" method  = "get">
        Email: <input type = "text" name = "email"> </br>
        DC: <input type = "text" name = "dc"> </br>
    <input type="submit" value="Submit">
    </form>
    

</body>
</html>


