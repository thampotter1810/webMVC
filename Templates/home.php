<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <H1>Đây là home</H1>

    <form action="index.php?task=dangnhap" method="post">
        <input type="text" name="name" placeholder="username" width="50px"> <br>
        <input type="password" name="pass" placeholder="pass" width="50px"> <br>
        <input type="submit" value="Sign in" width="50px"> <br>
    </form>
    <div>
        <ul>
            <li><a href="index.php?task=xemdanhsach">Xem danh sách</a></li>
        </ul>
    </div>
</body>
</html>