<?php

$taxableIncome = 145000;


switch ($taxableIncome) {
	case ($taxableIncome>0 && $taxableIncome<=10000):
		$taxDue=$taxableIncome*0.05;
		echo $taxDue;
		break;

	case ($taxableIncome>10000 && $taxableIncome<=30000):
		$taxDue=500+(($taxableIncome-10000)*0.1);
		echo $taxDue;
		break;

	case ($taxableIncome>30000 && $taxableIncome<=70000):
		$taxDue=2500+(($taxableIncome-30000)*0.15);
		echo $taxDue;
		break;

	case ($taxableIncome>70000 && $taxableIncome<=140000):
		$taxDue=8500+(($taxableIncome-70000)*0.2);
		echo $taxDue;
		break;

	case ($taxableIncome>140000 && $taxableIncome<=250000):
		$taxDue=22500+(($taxableIncome-140000)*0.25);
		echo $taxDue;
		break;

	case ($taxableIncome>250000 && $taxableIncome<=500000):
		$taxDue=50000+(($taxableIncome-240000)*0.3);
		echo $taxDue;
		break;
	
	default:
		$taxDue=125000+(($taxableIncome-500000)*0.32);
		echo $taxDue;
		break;
}