<?php
/**
 * Created by PhpStorm.
 * User: Potter
 * Date: 12/7/2018
 * Time: 9:36 AM
 */

class ModelSP
{

    public function layDL()
    {
        $conn = mysqli_connect('localhost','root','','qlsp');
        //$q = "select * from sanpham where ngaysx < '2019/01/01' order by `manhasx` DESC";
        $qq = "SELECT * FROM sanpham INNER JOIN nhasanxuat ON sanpham.manhasx = nhasanxuat.manhasx where ngaysx < '2019/01/01' order by `tennhasx` ASC";
        $data = mysqli_query($conn,$qq);

        if ($data){
            return $data;
        }else{
            var_dump($data);
        }
    }

    public function kiemtra()
    {

        $user = $_POST['name'];

        $pass = $_POST['pass'];

        $conn = mysqli_connect('localhost','root','','qlsp');
        $q = "select * from user where ten = '$user'";

        $re = mysqli_query($conn,$q);
        if (mysqli_num_rows($re) == 0){
            return false;
        }else{
            $data = mysqli_fetch_array($re);

            if ($data['matkhau'] == $pass){
                return true;
            }else{
                return false;
            }
        }

    }

    public function them()
    {
        $ten = $_POST['ten'];
        $nha = $_POST['nhasx'];
        $ngay = $_POST['ngay'];

        $conn = mysqli_connect('localhost','root','','qlsp');
        $q = "insert into sanpham (`tensp`,`manhasx`,`ngaysx`) values ('$ten','$nha','$ngay')";
        $query = "select * from sanpham where tensp = '$ten'";

        $kt = $conn->query($query);

        if (mysqli_num_rows($kt)==0){
            $data = mysqli_query($conn,$q);
            return $data;
        }else{
            echo "ten san pham da ton tai khong the them";
            exit();
        }

    }
}