<?php
// This is same as a abstract but this is basic limit
// 1. not allow any proparty in interface class
// 2. all function allow only public access
// one class acces many interface with implements 
//  constructer function not allow in interface class
interface first{
    public function test();
}
 
interface second{
    public function second();
}

class c implements first, second{
    public function test(){
        echo "This is a test function";
    }
    public function second()
    {
        echo "This is a Second function";
    }
}

$obj = new c;
$obj->test();
$obj->second();

 ?>