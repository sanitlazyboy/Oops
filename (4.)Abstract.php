<?php
abstract class BaseEmployee{

    protected $first_name;
    protected $last_name;

    public function __construct($f, $l){
        $this->first_name = $f;
        $this->last_name = $l;
    }

    protected abstract function getFullSalary($a, $b);

    public function getfullname(){
        return $this->first_name . " " . $this->last_name ; 
    }
    
}
class FullTimeEmployee extends BaseEmployee{
    protected $annualSalary;
    public function getFullSalary($salary, $a){
        $this->annualSalary = $salary;
        return $this->annualSalary / 12;
    }
    // public function __construct($f,$l,$salary)
    // {
    //     $this->first_name = $f;
    //     $this->last_name = $l;
    //  $this->annualSalary = $salary;   
    // }
}
class ContractorEmployee extends BaseEmployee{
    protected $hourlyRate;
    protected $totalHours;
    public function getFullSalary($hourRate, $totalHours){
        $this->hourlyRate = $hourRate;
        $this->totalHours = $totalHours;
    return $this->hourlyRate * $this->totalHours;
    }
}
$fullMonth = new FullTimeEmployee("FullTime", "Employess");
$contractorbase = new ContractorEmployee("Contractor", "Emloyess");
echo $fullMonth->getFullSalary(300000, 1);
echo $contractorbase->getFullSalary(400, 5);
?>