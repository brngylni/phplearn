<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title></title>
</head>
<body>
	<?php

	class Employee{
		public $nameSurname;
		public $monthlyExpense;
		public $monthlyIncome;

		public function setName($nameSurname){
			$this->nameSurname = $nameSurname;
		}
		public function setIncome($income){
			$this->monthlyIncome = $income;
		}
		public function setExpense($expense){
			$this->monthlyExpense = $expense;
		}
		public function calculation(){
			$netWorth = $this->monthlyIncome - $this->monthlyExpense;
			return $netWorth;
		}
		public function calculationYear(){
			$netWorthYear = $this->calculation() * 12;
			return $netWorthYear;
		}
	}
	class EmployeeInternal extends Employee{

	}
	class EmployeeExtra extends Employee{

	}

	$person2 = new EmployeeInternal();
	$person2->setName("Mehmet Geylani");
	$person2->setIncome(10000);
	$person2->setExpense(4000);
	echo "<h4>Employee Internal</h4> <br />Net worth = " . $person2->calculation() . "<br />Net worth per year = " . $person2->calculationYear() . "<br /><br />";
	
	$person3 = new EmployeeExtra();
	$person3->setName("Mehmet Geylani");
	$person3->setIncome(5000);
	$person3->setExpense(4000);
	echo "<h4>Employee Extra </h4><br /> Net worth = " . $person3->calculation() . "<br />Net worth per year = " . $person3->calculationYear() . "<br /><br />";

	?>
</body>
</html>