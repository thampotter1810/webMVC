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

<div>
    <ul>
        <li><a href="index.php?task=xemdanhsach">Xem danh sách</a></li>
        <li><a href="index.php?task=themsp">Thêm sp</a></li>
    </ul>
</div>

<div>
    <form action="index.php?task=thuchienthem" method="post">
        <label>Ten SP</label>
        <input type="text" name="ten"> <br>
        <label>Nha Sx</label>
        <select name="nhasx">
            <?php
                $conn = mysqli_connect('localhost','root','','qlsp');
                $q = "select * from nhasanxuat";
                $data = mysqli_query($conn,$q);
                ?>
            <?php
                while ($row = $data->fetch_assoc()){?>
                <option value="<?php echo $row['manhasx'];?>"><?php echo $row['tennhasx']; ?></option>
                <?php };?>
        </select><br>
        <label>Ngay Sx</label>
        <input type="date" name="ngay"> <br> <br>
        <input type="submit" value="Thêm"> <br>
    </form>
</div>
</body>
</html>