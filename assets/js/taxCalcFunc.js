//Gross Income
var grossIncome = document.getElementById("").value;
//Basic Personal Exemption
var BPE = 50000;
//Exemption Per Dependent
var perDependent=25000;
//Additional Exemption Radio Button
var AERadio = document.getElementById("").value;
//Additional Exemption
var AE = document.getElementById("").value;
//Premium on Health and/or Hospitalization Insurance
var PHHI = document.getElementById("").value;
//Taxable Income
var TI = document.getElementById("").value;
	
//Computation of Additional Exemption
function addExempt(x, y){
	var val = x*y;
	return val;
}

//Computation of Total Exemption
function totalExempt(x, y, z){
	var	val = x+y+z;
	return val;
}

//Computation of Tax Liability
function taxLiab(x){
	var val;
	switch (x) {
	case (x>0 && x<=10000):
		val = x*0.05;
		return val;
		break;

	case (x>10000 && x<=30000):
		val = 500+((x-10000)*0.1);
		return val;
		break;

	case (x>30000 && x<=70000):
		val = 2500+((x-30000)*0.15);
		return val;
		break;

	case (x>70000 && x<=140000):
		val = 8500+((x-70000)*0.2);
		return val;
		break;

	case (x>140000 && x<=250000):
		val = 22500+((x-140000)*0.25);
		return val;
		break;

	case (x>250000 && x<=500000):
		val = 50000+((x-240000)*0.3);
		return val;
		break;
	
	default:
		val = 125000+((x-500000)*0.32);
		return val;
		break;
	}
}

//Auto-update fields
function update(){
	//Additional Exemption
	document.getElementById('AE').value = addExempt(perDependent, AERadio);

	//Taxable Income
	document.getElementById('TI').value = grossIncome - totalExempt(BPE, AE, PHHI);

	//Tax Liability
	document.getElementById('TL').value = taxLiab(TI);
}