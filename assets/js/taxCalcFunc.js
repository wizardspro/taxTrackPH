(function() {

	var totalExemption = function() {
		
	}

})();

function totalExemption(){
	
	//Basi Personal Exemption
	var BPE=$("#").value;
	//Additional Exemption
	var AE=$("#").value;
	//Health and/or Hospitalizations Insurance
	var PHHI=$("#").value; 
	//Earning Compensation or Earning Business/Professional Income
	var IncomeType=$("#").value; 
	// Cost of Sales or Services
	var CSS=$("#").value; 
	//Operating Expenses
	var OE=$("#").value; 
	//Optional Standard Deduction
	var OSD=$("#").value; 
	//Type or Earning Business/Professional Income
	var EBP=$("#").value; 
	//Basic Exemption. Applicable to all
	var basicExemption=BPE+AE+PHHI; 
	//Business Exemption. with supporting documents like RECEIPT
	var businessExemption1=CSS+OE+basicExemption; 
	//Business Exemption. without supporting documents
	var businessExemption2=OSD+basicExemption; 
	if (IncomeType==1) {
		return basicExemption;
	}
	else{
		if (EBP==1) {
			return businessExemption1;
		}
		else{
			return businessExemption2;
		}
	}
}

function taxableIncome(grossIncome, exemption){
	var x = grossIncome - exemption;
	return x;
}

function taxDue(){
	var taxInc=taxableIncome();
	var x;
	switch (taxInc) {
	case (taxInc>0 && taxInc<=10000):
		x=taxInc*0.05;
		return x;
		break;

	case (taxInc>10000 && taxInc<=30000):
		x=500+((taxInc-10000)*0.1);
		return x;
		break;

	case (taxInc>30000 && taxInc<=70000):
		x=2500+((taxInc-30000)*0.15);
		return x;
		break;

	case (taxInc>70000 && taxInc<=140000):
		x=8500+((taxInc-70000)*0.2);
		return x;
		break;

	case (taxInc>140000 && taxInc<=250000):
		x=22500+((taxInc-140000)*0.25);
		return x;
		break;

	case (taxInc>250000 && taxInc<=500000):
		x=50000+((taxInc-240000)*0.3);
		return x;
		break;
	
	default:
		x=125000+((taxInc-500000)*0.32);
		return x;
		break;
}
}

function taxLiab(){
	var due=taxDue();
	var taxCredit=$("#").value;
	var x=due-taxCredit;
	return x;
}

function update(){
	taxLiab();
}