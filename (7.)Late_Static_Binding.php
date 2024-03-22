<?php 
class Db{
    protected static $table_name = "Basetable";
    public function select(){
        echo "Select * from" . " " . static::$table_name;
    }

    public function insert(){
        echo "Insert into " . " " . static::$table_name;
    }
}

class abc extends Db{
    protected static $table_name = "abc";
}

$abc = new abc();
$abc->select();
?>