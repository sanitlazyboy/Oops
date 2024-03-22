<?php
class abc{
    public static $objectcount = 0;

    public static function objCount(){
        echo self::$objectcount;
    }
    public function __construct()
    {
        self::$objectcount++;
    }
}

$obj_1 = new abc();
$obj_2 = new abc();
$obj_3 = new abc();

echo abc::$objectcount;
abc::objCount();

class def extends abc{
    public static function objCount()
    {
        parent::objCount();
        echo "This is Child Class and parent name abc";
    }
}

def::objCount()
 ?>