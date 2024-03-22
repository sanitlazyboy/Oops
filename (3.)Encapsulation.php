<?php 
class Tv{
    protected $model = "xyz";
    private $volume = 10;

   public function volumeUp(){
 $this->volume++;
    }

   public function volumeDown(){
$this->volume--;
    }
   protected function getModel(){
            return $this->model;
    }
}

class plazmaTv extends Tv{
   public function getModel(){
        return $this->model;
    }
}
$tv_one = new Tv;
// echo $tv_one->getModel();

$tv_tow =  new plazmaTv();
echo $tv_tow->getModel();
?>