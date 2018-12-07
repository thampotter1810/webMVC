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
    <table border="1" width="500px">
        <tr>
            <th>STT</th>
            <th>Ten SP</th>
            <th>Ngay san xuat</th>
            <th>Ten nha sx</th>
        </tr>
        <tr>
            <?php $i =0;?>
            <?php while ($row = $data->fetch_assoc()){ $i++; ?>
            <td><?php echo $i;?></td>
            <td><?php echo $row['tensp'];?></td>
            <td><?php echo $row['ngaysx'];?></td>
            <td><?php echo $row['tennhasx'];?></td>
            <td><a href="index.php?task=suadanhsach&id=<?php echo $row['masp']?>">Edit</a></td>

        </tr>
        <?php }?>
    </table>
</div>
</body>
</html>