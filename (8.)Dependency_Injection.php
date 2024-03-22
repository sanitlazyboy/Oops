<?php
class logger {
    public function log($message){
        echo "Loggin Message : $message";
    } 
}

$logger = new logger;
$logger->log("This is a message");

class UsserProfile{
    private $logger;
    public function crate(){
        // $logger = new logger;
        $this->logger->log("User Create");
    }

    public function update(){
        // $logger = new logger;
     $this->logger->log("User Update");
    }

    public function delete(){
        // $logger = new logger;
     $this->logger->log("User Delete");
    }

    public function __construct()
    {
     $this->logger = new logger;   
    }
}

$user = new UsserProfile;
$user->crate();
 ?>