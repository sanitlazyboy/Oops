<?php 
class Tv{
public $model = "LG";
public $volume = 1;
public function volumeUp(){
    $this->volume++;
}

public function volumeDown(){
    $this->volume--;
}
}
$tv_one = new Tv();
$tv_tow = new Tv();

$tv_one->volumeUp();
echo $tv_one->volume;
echo $tv_tow->volume;
$tv_one->model = "Sony";
echo $tv_tow->model;
echo $tv_one->model;
?>