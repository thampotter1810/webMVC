<?php

require_once "Controllers/ControllerSP.php";
if (!isset($_GET['task'])){
    $c = new ControllerSP();
    $c->home();
}else{
    $task = $_GET['task'];
    $c = new ControllerSP();
    $c->$task();
}