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
	$("#COP").text(Math.round(parseInt(val) * 0.00454*100)/100);
	$("#OP").text(Math.round(parseInt(val) * 0.00123*100)/100); 
	$("#OVP").text(Math.round(parseInt(val) * 0.00019*100)/100);
	$("#DAR").text(Math.round(parseInt(val) * 0.00899*100)/100);
	$("#DOA").text(Math.round(parseInt(val) * 0.03131*100)/100);
	$("#DBM").text(Math.round(parseInt(val) * 0.00044*100)/100);
	$("#DepEd").text(Math.round(parseInt(val) * 0.13250*100)/100);
	$("#SUC").text(Math.round(parseInt(val) * 0.01623*100)/100); 
	$("#DOE").text(Math.round(parseInt(val) * 0.00181*100)/100);
	$("#DENR").text(Math.round(parseInt(val) * 0.01054*100)/100);
	$("#DOF").text(Math.round(parseInt(val) * 0.00560*100)/100);
	$("#DFA").text(Math.round(parseInt(val) * 0.00538*100)/100);
	$("#DOH").text(Math.round(parseInt(val) * 0.03598*100)/100);
	$("#DILG").text(Math.round(parseInt(val) * 0.04444*100)/100);
	$("#DOJ").text(Math.round(parseInt(val) * 0.00511*100)/100);
	$("#DOLE").text(Math.round(parseInt(val) * 0.00463*100)/100);
	$("#DND").text(Math.round(parseInt(val) * 0.03633*100)/100);
	$("#DPWH").text(Math.round(parseInt(val) * 0.09392*100)/100);
	$("#DOST").text(Math.round(parseInt(val) * 0.00538*100)/100);
	$("#DSWD").text(Math.round(parseInt(val) * 0.03483*100)/100);
	$("#DOT").text(Math.round(parseInt(val) * 0.00088*100)/100);
	$("#DTI").text(Math.round(parseInt(val) * 0.00198*100)/100);
	$("#DOTC").text(Math.round(parseInt(val) * 0.02059*100)/100);
	$("#NEDA").text(Math.round(parseInt(val) * 0.00176*100)/100);
	$("#PCOO").text(Math.round(parseInt(val) * 0.00053*100)/100);
	$("#OEO").text(Math.round(parseInt(val) * 0.00516*100)/100);
	$("#ARMM").text(Math.round(parseInt(val) * 0.00904*100)/100);
	$("#JLEC").text(Math.round(parseInt(val) * 0.0000019*100)/100);
	$("#TJ").text(Math.round(parseInt(val) * 0.00847*100)/100);
	$("#CSC").text(Math.round(parseInt(val) * 0.00057*100)/100);
	$("#COA").text(Math.round(parseInt(val) * 0.0037*100)/100);
	$("#COMELEC").text(Math.round(parseInt(val) * 0.00128*100)/100);
	$("#OO").text(Math.round(parseInt(val) * 0.00079*100)/100);
	$("#CHR").text(Math.round(parseInt(val) * 0.00015*100)/100);
	$("#BSGC").text(Math.round(parseInt(val) * 0.0316*100)/100);
	$("#ALGU").text(Math.round(parseInt(val) * 0.1593*100)/100);
	$("#TEF").text(Math.round(parseInt(val) * 0.0119*100)/100);
	$("#DIP").text(Math.round(parseInt(val) * 0.1555*100)/100);
	$("#CalF").text(Math.round(parseInt(val) * 0.0033*100)/100);
	$("#ConF").text(Math.round(parseInt(val) * 0.0004*100)/100);
	$("#DSBP").text(Math.round(parseInt(val) * 0.0004*100)/100);
	$("#EGF").text(Math.round(parseInt(val) * 0.0011*100)/100);
	$("#ICF").text(Math.round(parseInt(val) * 0.0021*100)/100);
	$("#MPBF").text(Math.round(parseInt(val) * 0.0356*100)/100);
	$("#PGF").text(Math.round(parseInt(val) * 0.0531*100)/100);
	$("#PDAF").text(Math.round(parseInt(val) * 0.0111*100)/100);
	$("#FSF").text(Math.round(parseInt(val) * 0.0002*100)/100);

	//Budget By Sector
	$("#SS").text(Math.round(parseInt(val) * 0.372*100)/100);
	$("#ES").text(Math.round(parseInt(val) * 0.26*100)/100);
	$("#GPS").text(Math.round(parseInt(val) * 0.161*100)/100);
	$("#DB").text(Math.round(parseInt(val) * 0.166*100)/100);
	$("#DS").text(Math.round(parseInt(val) * 0.041*100)/100);



	//Budget By Expense Class
	$("#PS").text(Math.round(parseInt(val) * 0.372*100)/100);
	$("#MOE").text(Math.round(parseInt(val) * 0.26*100)/100);
	$("#ATLGU").text(Math.round(parseInt(val) * 0.12*100)/100);
	$("#GOCCS").text(Math.round(parseInt(val) * 0.007*100)/100);
	$("#TEF2").text(Math.round(parseInt(val) * 0.0012*100)/100);
	$("#IP").text(Math.round(parseInt(val) * 0.155*100)/100);
	$("#NL").text(Math.round(parseInt(val) * 0.011*100)/100);
	$("#IO").text(Math.round(parseInt(val) * 0.176*100)/100);
	$("#OCO").text(Math.round(parseInt(val) * 0.029*100)/100);
	$("#GOCCE").text(Math.round(parseInt(val) * 0.002*100)/100);
	$("#CTLGU").text(Math.round(parseInt(val) * 0.016*100)/100);
	$("#CLC").text(Math.round(parseInt(val) * 0.002*100)/100);

	$("#tbl_bySectors").tablesorter(); 
	$("#tbl_byExpenseClass").tablesorter(); 
	$("#tbl_byDepartment").tablesorter(); 
}