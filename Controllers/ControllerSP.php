<?php
/**
 * Created by PhpStorm.
 * User: Potter
 * Date: 12/7/2018
 * Time: 9:28 AM
 */
    require_once "Views/ViewSP.php";
    require_once "Models/ModelSP.php";
class ControllerSP
{

    public function home()
    {
        $v = new ViewSP();
        $v->hienhome();
    }
    public function xemdanhsach(){
        $m = new ModelSP();
        $data = $m->layDL();

        $v = new ViewSP();
        $v ->hiendanhsach($data);
    }
    function dangnhap(){
        $m = new ModelSP();
        if ($m->kiemtra()){
            $this->xemadmin();
        }else{
            $this->home();
        }

    }

    private function xemadmin()
    {
        $m = new ModelSP();
        $data = $m->layDL();

        $v = new ViewSP();
        $v ->hiendanhsachad($data);
    }
    function themsp(){
        $v = new ViewSP();
        $v->hienform();
    }
    function thuchienthem(){
        $m = new ModelSP();
        if ($m->them()){
            $this->xemadmin();
        }
    }
}