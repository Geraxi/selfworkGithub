<?php

class Company{
  
    public $name;
    public $location;
    public $tot_employees;
    private $salary_per_employee = 30000;
    private static $total_expenses = 0;



public function __construct($name, $location, $tot_employees = 0){

    $this->name= $name;
    $this->location= $location;
    $this->tot_employees= $tot_employees;
    self::$total_expenses += $this->calculateAnnualExpenses();
}

public function printDetails(){
    if ($this->tot_employees >0){
        echo "L'ufficio {$this->name} con sede in {$this->location} ha ben {$this->tot_employees} dipendenti. \n";
    }else{
        echo "L'ufficio {$this->name} con sede in {this->location} non ha dipendenti.\n";
    }
    }

    public function calculateAnnualExpenses(){
        return $this->tot_employees * $this->salary_per_employee;
    }

    public function printAnnualExpenses(){
        echo "L'azienda {this->name} spende annualmente {$this-> calculateAnnualExpenses()} euro in stipendi.\n";

    }
    public static function printTotalExpenses(){
        echo "La spesa totale di tutte le aziende messe insieme ammonta a " . self::$total_expenses . " euro.\n";

    }


}

$company1 = new Company("Aulab", "Italia", 50);
$company2 = new Company("Google", "USA", 1000);
$company3 = new Company("Amazon", "Germania", 800);
$company4 = new Company("Tesla", "Canada", 500);
$company5 = new Company("Ferrari", "Italia", 200);

$company1->printDetails();
$company2->printDetails();
$company3->printDetails();
$company4->printDetails();
$company5->printDetails();

$company1->printAnnualExpenses();
$company2->printAnnualExpenses();
$company3->printAnnualExpenses();
$company4->printAnnualExpenses();
$company5->printAnnualExpenses();

Company::printTotalExpenses();