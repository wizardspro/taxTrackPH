<!DOCTYPE html>
<html>
  <head>
    <title>Welcome to TaxTrackPH</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media
        queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
      </script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js">
      </script>
    <![endif]-->
  </head>
  <body>
    <form id="tax_compute" name="tax_compute" method="post" action="index.php">
        <label>Gross Income</label>
        <input type="text" name="gross_compensation" value="200000">
        <br>

        <fieldset>
            <legend>Earning Compensation</legend>
            <div class="earning_compensation">
                <label for="basic_personal_excemption">
                    Basic Personal Excemption</label>
                <input id="basic_personal_excemption" type="text"
                    name="basic_personal_excemption" value="50000"><br>
                <label for="additional_excemption">Additional Excemption</label>
                <input id="additional_excemption_0" type="radio"
                    name="additional_excemption" value=""> 0
                <input id="additional_excemption_1" type="radio"
                    name="additional_excemption" value=""> 1
                <input id="additional_excemption_2" type="radio"
                    name="additional_excemption" value=""> 2
                <input id="additional_excemption_3" type="radio"
                    name="additional_excemption" value=""> 3
                <br>
                <label for="phhi">PHHI</label>
                <input id="phhi" type="text" name="phhi" value=""><br>
            </div> <!-- /.earning_compensation -->
        </fieldset>

        <fieldset>
            <legend>Earning Business/Professional</legend>
            <div class="earning_business_professional">
                <p>Expenses:</p>
                <label>Cost of Sales or Services</label>
                <input id="cost_of_sales_services" name="cost_of_sales_services"
                    value=""><br>
                <label>Operating Expenses</label>
                <input id="operating_expenses" name="cost_of_sales_services"
                    value=""><br>
                <label for="optional_standard_declaration">
                    Optional Standard Declaration</label>
                <input id="option_standard_declaration"
                    name="option_standard_declaration" value="" disabled="true"><br>
            </div> <!-- /.earning_business_professional -->
        </fieldset>

        <fieldset>
            <legend>Tax Group</legend>
            <div class="tax_group">
                <label for="taxable_income">Taxable Income</label>
                <input id="taxable_income" name="taxable_income" type="text"
                    value=""><br>
                <label for="tax_due">Tax Due</label>
                <input id="tax_due" name="tax_due" type="text"
                    value=""><br>
                <label for="tax_credit">Tax Credit</label>
                <input id="tax_credit" name="tax_credit" type="text"
                    value=""><br>
                <label for="tax_liability">Tax Liability</label>
                <input id="tax_liability" name="tax_liability" type="text"
                    value=""><br>
            </div> <!-- /.tax_group -->
        </fieldset>

    </form>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files
    as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>