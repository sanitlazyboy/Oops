<?php 
class SmartTv{
public $model;
public $volume;
public function volumeUp(){
    $this->volume++;
}

public function volumeDown(){
    $this->volume--;
}

function __construct($model_name, $volume)
{
    $this->model = $model_name;
    $this->volume = $volume;
}
}

$tv_one = new SmartTv("Sony", 5);
$tv_tow = new SmartTv("Mi", 10);
$tv_one->model = "ChagenTV";
$tv_one->volumeUp();
echo $tv_one->volume;
echo $tv_tow->volume;
echo $tv_tow->model;
echo $tv_one->model;

class TimerTv extends SmartTv{
    public $timer = true;

    // overwrite 
    public function __construct()
    {
        echo "This is function overwrite";
    }
}
// $timer_tv  = new TimerTv("Timer_LG_TV", 5);
// echo $timer_tv->model;
// echo $timer_tv->timer;

$new_tv = new TimerTv;
?>