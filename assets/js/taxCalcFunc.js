/*/Gross Income
var grossIncome = $("#gross_income").text();
//Basic Personal Exemption
var BPE = $("#basic_personal_exemption").text();
//Exemption Per Dependent
var perDependent=25000;
//Additional Exemption Select
var AESelect = $("#additional_exemption_select").text();


//var AERadio0 = $("#additional_exemption_radio_0").text();
//var AERadio1 = $("#additional_exemption_radio_1").text();
//var AERadio2 = $("#additional_exemption_radio_2").text();
//var AERadio3 = $("#additional_exemption_radio_3").text();
//var AERadio4 = $("#additional_exemption_radio_4").text();

//Additional Exemption
var AE = $("#additional_exemption").text();
//Premium on Health and/or Hospitalization Insurance
var PHHI = $("#phhi").text();
//Taxable Income
var TI = $("#taxable_income").text();
	
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
	$('#AE').text() = addExempt(perDependent, AESelect);

	//Taxable Income
	$('#TI').text() = grossIncome - totalExempt(BPE, AE, PHHI);

	//Tax Liability
	$('#TL').text() = taxLiab(TI);
}*/

function update(){
	//Gross Income
	grossIncome = $("#gross_income").val();
	//Basic Personal Exemption
	BPE = 50000;
	//Exemption Per Dependent
	perDependent=25000;
	//Additional Exemption Select
	//var AESelect = $("#additional_exemption_select").text();


	AERadio2 = document.getElementById("additional_exemption_radio_2").checked;
	AERadio3 = document.getElementById("additional_exemption_radio_3").checked;
	AERadio1 = document.getElementById("additional_exemption_radio_1").checked;
	AERadio0 = document.getElementById("additional_exemption_radio_0").checked;
	AERadio4 = document.getElementById("additional_exemption_radio_4").checked;

	//Additional Exemption
	AE = 0;
	if(AERadio0){
		AE = perDependent * 0;
	}else if(AERadio1){
		AE = perDependent * 1;
	}else if(AERadio2){
		AE = perDependent * 2;
	}else if(AERadio3){
		AE = perDependent * 3;
	}else if(AERadio4){
		AE = perDependent * 4;
	}
	$('#additional_exemption').val(AE);
	//Premium on Health and/or Hospitalization Insurance
	PHHI = parseInt($("#phhi").val()) > 2400 ? 2400:$("#phhi").val();
	//Taxable Income

	ti = (parseInt(grossIncome) - (parseInt(PHHI) + parseInt(AE) + parseInt(BPE)));
	$("#taxable_income").val(ti<0 ? 0:ti);
	x = parseInt($("#taxable_income").val());
	
	var val = 0;

	if(x>0 && x<=10000){
		val = x*0.05;
	}

	if(x>10000 && x<=30000)
		val = 500+((x-10000)*0.1);

	if(x>30000 && x<=70000)
		val = 2500+((x-30000)*0.15);


	if(x>70000 && x<=140000)
		val = 8500+((x-70000)*0.2);

	if(x>140000 && x<=250000)
		val = 22500+((x-140000)*0.25);

	if(x>250000 && x<=500000)
		val = 50000+((x-240000)*0.3);
	
	if(x>500000)
		val = 125000+((x-500000)*0.32);

	$("#tax_liablity").val(val);

	//Budget By Department
	$("#COP").text("P "+Math.round(parseInt(val) * 0.00454*100)/100);
	$("#OP").text("P "+Math.round(parseInt(val) * 0.00123*100)/100); 
	$("#OVP").text("P "+Math.round(parseInt(val) * 0.00019*100)/100);
	$("#DAR").text("P "+Math.round(parseInt(val) * 0.00899*100)/100);
	$("#DOA").text("P "+Math.round(parseInt(val) * 0.03131*100)/100);
	$("#DBM").text("P "+Math.round(parseInt(val) * 0.00044*100)/100);
	$("#DepEd").text("P "+Math.round(parseInt(val) * 0.13250*100)/100);
	$("#SUC").text("P "+Math.round(parseInt(val) * 0.01623*100)/100); 
	$("#DOE").text("P "+Math.round(parseInt(val) * 0.00181*100)/100);
	$("#DENR").text("P "+Math.round(parseInt(val) * 0.01054*100)/100);
	$("#DOF").text("P "+Math.round(parseInt(val) * 0.00560*100)/100);
	$("#DFA").text("P "+Math.round(parseInt(val) * 0.00538*100)/100);
	$("#DOH").text("P "+Math.round(parseInt(val) * 0.03598*100)/100);
	$("#DILG").text("P "+Math.round(parseInt(val) * 0.04444*100)/100);
	$("#DOJ").text("P "+Math.round(parseInt(val) * 0.00511*100)/100);
	$("#DOLE").text("P "+Math.round(parseInt(val) * 0.00463*100)/100);
	$("#DND").text("P "+Math.round(parseInt(val) * 0.03633*100)/100);
	$("#DPWH").text("P "+Math.round(parseInt(val) * 0.09392*100)/100);
	$("#DOST").text("P "+Math.round(parseInt(val) * 0.00538*100)/100);
	$("#DSWD").text("P "+Math.round(parseInt(val) * 0.03483*100)/100);
	$("#DOT").text("P "+Math.round(parseInt(val) * 0.00088*100)/100);
	$("#DTI").text("P "+Math.round(parseInt(val) * 0.00198*100)/100);
	$("#DOTC").text("P "+Math.round(parseInt(val) * 0.02059*100)/100);
	$("#NEDA").text("P "+Math.round(parseInt(val) * 0.00176*100)/100);
	$("#PCOO").text("P "+Math.round(parseInt(val) * 0.00053*100)/100);
	$("#OEO").text("P "+Math.round(parseInt(val) * 0.00516*100)/100);
	$("#ARMM").text("P "+Math.round(parseInt(val) * 0.00904*100)/100);
	$("#JLEC").text("P "+Math.round(parseInt(val) * 0.0000019*100)/100);
	$("#TJ").text("P "+Math.round(parseInt(val) * 0.00847*100)/100);
	$("#CSC").text("P "+Math.round(parseInt(val) * 0.00057*100)/100);
	$("#COA").text("P "+Math.round(parseInt(val) * 0.0037*100)/100);
	$("#COMELEC").text("P "+Math.round(parseInt(val) * 0.00128*100)/100);
	$("#OO").text("P "+Math.round(parseInt(val) * 0.00079*100)/100);
	$("#CHR").text("P "+Math.round(parseInt(val) * 0.00015*100)/100);
	$("#BSGC").text("P "+Math.round(parseInt(val) * 0.0316*100)/100);
	$("#ALGU").text("P "+Math.round(parseInt(val) * 0.1593*100)/100);
	$("#TEF").text("P "+Math.round(parseInt(val) * 0.0119*100)/100);
	$("#DIP").text("P "+Math.round(parseInt(val) * 0.1555*100)/100);
	$("#CalF").text("P "+Math.round(parseInt(val) * 0.0033*100)/100);
	$("#ConF").text("P "+Math.round(parseInt(val) * 0.0004*100)/100);
	$("#DSBP").text("P "+Math.round(parseInt(val) * 0.0004*100)/100);
	$("#EGF").text("P "+Math.round(parseInt(val) * 0.0011*100)/100);
	$("#ICF").text("P "+Math.round(parseInt(val) * 0.0021*100)/100);
	$("#MPBF").text("P "+Math.round(parseInt(val) * 0.0356*100)/100);
	$("#PGF").text("P "+Math.round(parseInt(val) * 0.0531*100)/100);
	$("#PDAF").text("P "+Math.round(parseInt(val) * 0.0111*100)/100);
	$("#FSF").text("P "+Math.round(parseInt(val) * 0.0002*100)/100);

	//Budget By Sector
	$("#SS").text("P "+Math.round(parseInt(val) * 0.372*100)/100);
	$("#ES").text("P "+Math.round(parseInt(val) * 0.26*100)/100);
	$("#GPS").text("P "+Math.round(parseInt(val) * 0.161*100)/100);
	$("#DB").text("P "+Math.round(parseInt(val) * 0.166*100)/100);
	$("#DS").text("P "+Math.round(parseInt(val) * 0.041*100)/100);



	//Budget By Expense Class
	$("#PS").text("P"+Math.round(parseInt(val) * 0.372*100)/100);
	$("#MOE").text("P"+Math.round(parseInt(val) * 0.26*100)/100);
	$("#ATLGU").text("P"+Math.round(parseInt(val) * 0.12*100)/100);
	$("#GOCCS").text("P"+Math.round(parseInt(val) * 0.007*100)/100);
	$("#TEF2").text("P"+Math.round(parseInt(val) * 0.0012*100)/100);
	$("#IP").text("P"+Math.round(parseInt(val) * 0.155*100)/100);
	$("#NL").text("P"+Math.round(parseInt(val) * 0.011*100)/100);
	$("#IO").text("P"+Math.round(parseInt(val) * 0.176*100)/100);
	$("#OCO").text("P"+Math.round(parseInt(val) * 0.029*100)/100);
	$("#GOCCE").text("P"+Math.round(parseInt(val) * 0.002*100)/100);
	$("#CTLGU").text("P"+Math.round(parseInt(val) * 0.016*100)/100);
	$("#CLC").text("P"+Math.round(parseInt(val) * 0.002*100)/100);
}