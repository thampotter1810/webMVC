<?php
/**
 * Created by PhpStorm.
 * User: Potter
 * Date: 12/7/2018
 * Time: 9:31 AM
 */


class ViewSP
{

    public function hienhome()
    {
        include "Templates/home.php";
    }

    public function hiendanhsach($data)
    {
        include "Templates/danhsach.php";
    }

    public function hiendanhsachad($data)
    {
        include "Templates/danhsachsua.php";
    }

    public function hienform()
    {
        include "Templates/form.php";
    }
}