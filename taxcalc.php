<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title> TaxWatch - taxTrackPH , See and Calculate where thus your tax
            going.
        </title>
        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Add custom CSS here -->
        <link href="assets/css/modern-business.css" rel="stylesheet">
        <link href="assets/font-awesome/css/font-awesome.min.css"
            rel="stylesheet">
        <link href="assets/css/index.css" rel="stylesheet" media="screen">
        <link href="assets/css/template.css" rel="stylesheet" media="screen">
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle"
                    data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">Tax Track PH</a>
                </div>
                <!-- Collect the nav links, forms, and other content for
                toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="taxcalc.html">Where's my money?</a></li>
                        <li><a href="budgetcalc.html">Let me do it</a></li>
                        <li><a href="releases.html">I'm watching yah</a></li>
                        <!--li class="dropdown">
                            <a href="#" class="dropdown-toggle"
                            data-toggle="dropdown">Username
                            <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                            <li><a href="#">Settings</a></li>
                            <li><a href="#">Logout</a></li>
                            </ul>
                            </li-->
                        <li>
                            <button type="button" class="btn btn-primary
                            navbar-btn login_btn">Log in
                                <span class="glyphicon glyphicon-log-in"></span>
                            </button>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <div class="banner">
            <div class="container">
            </div>
        </div>
        <div class="container" id="site_content">
            <br>
            <div class="row" id="form_ECI">
                <fieldset class="col-md-4 panel panel-default" >
                    <legend>
                        <div id="form_legend">Earning Compensation</div>
                    </legend>
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="gross_income"
                                class="col-md-5 control-label">
                            <small>Gross Income</small>
                            </label>
                            <div class="col-md-7">
                                <input class="form-control" onkeyup="update()"
                                onchange="update()" id="gross_income"
                                type="number" min="60000" step="1" value="60000"
                                name="gross_income " >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="basic_personal_exemption"
                                class="col-md-5 control-label">
                            <small>Basic Personal exemption</small>
                            </label>
                            <div class="col-md-7">
                                <input class="form-control" disabled
                                    id="basic_personal_exemption" type="text"
                                    name="basic_personal_exemption"
                                    value="50000">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="additional_exemption_radio"
                            class="col-md-5 control-label"><small>Additional exemption</small>
                            </label>
                            <div class="col-md-7">
                                <input id="additional_exemption_radio_0"
                                    type="radio" onclick="update()"
                                    name="additional_exemption_radio" checked> 0
                                <input id="additional_exemption_radio_1"
                                    type="radio" onclick="update()"
                                    name="additional_exemption_radio" value="">
                                    1
                                <input id="additional_exemption_radio_2"
                                    type="radio" onclick="update()"
                                    name="additional_exemption_radio" value="">
                                    2
                                <input id="additional_exemption_radio_3"
                                    type="radio" onclick="update()"
                                    name="additional_exemption_radio" value="">
                                    3
                                <input id="additional_exemption_radio_4"
                                    type="radio" onclick="update()"
                                    name="additional_exemption_radio" value="">
                                    4
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="basic_personal_exemption"
                                class="col-md-5 control-label">
                            <small>Total Additional exemption</small>
                            </label>
                            <div class="col-md-7">
                                <input class="form-control" disabled
                                    id="additional_exemption" type="text"
                                    name="additional_exemption" value="0">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phhi"
                                class="col-md-5 control-label">
                            Health Insurance
                            </label>
                            <div class="col-md-7">
                                <input class="form-control" onkeyup="update()"
                                    onchange="update()" id="phhi" type="number"
                                    step="1" min='0' max="2400"
                                    value='0' name="phhi">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="taxable_income"
                                class="col-md-5 control-label">
                            <small>Taxable income</small>
                            </label>
                            <div class="col-md-7">
                                <input class="form-control" id="taxable_income"
                                    type="text" disabled name="taxable_income">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tax_liablity"
                                class="col-md-5 control-label">
                            Tax Liability
                            </label>
                            <div class="col-md-7">
                                <input class="form-control" id="tax_liablity"
                                    type="text" disabled name="tax_liablity">
                            </div>
                        </div>
                    </form>
                </fieldset>
                <div class="col-md-8">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active">
                            <a href="#bysector" data-toggle="tab">By Sector</a>
                        </li>
                        <li>
                            <a href="#byexpenseclass"  data-toggle="tab">
                            By Expense Class
                            </a>
                        </li>
                        <li>
                            <a href="#bydepartment"  data-toggle="tab">
                                By Department
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="bysector">
                            <table class="table table-striped table-bordered
                                tablesorter" id="tbl_bySectors">
                                <thead>
                                    <tr>
                                        <th class="col-md-7">Sectors</th>
                                        <th class="col-md-2 text-center">Percent
                                        </th>
                                        <th class="col-md-3 text-right">Budget
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Social Services</td>
                                        <td align="center">(37.2%)</td>
                                        <td align="right" id="SS">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Economic Services</td>
                                        <td align="center">(26.0%)</td>
                                        <td  align="right" id="ES">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>General Public Services</td>
                                        <td align="center">(16.1%)</td>
                                        <td align="right" id="GPS">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Debt Burden</td>
                                        <td align="center">(16.6%)</td>
                                        <td align="right" id="DB">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Defense Services</td>
                                        <td align="center">(4.1%)</td>
                                        <td align="right" id="DS">P 0</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="byexpenseclass">
                            <table class="table table-striped table-bordered
                            tablesorter" id="tbl_byExpenseClass">
                                <thead>
                                    <tr>
                                        <th class="col-md-7">Expense Class</th>
                                        <th class="col-md-2 text-center">Percent
                                        </th>
                                        <th class="col-md-3 text-right">Budget
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Personnel Services</td>
                                        <td align="center">(37.2%)</td>
                                        <td align="right" id="PS">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Maintenance and other Operating
                                            Expenses
                                        </td>
                                        <td align="center">(26.0%)</td>
                                        <td  align="right" id="MOE">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Allotment to LGUs
                                        </td>
                                        <td align="center">(12.0%)</td>
                                        <td  align="right" id="ATLGU">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            GOCC Subsidy
                                        </td>
                                        <td align="center">(0.7%)</td>
                                        <td  align="right" id="GOCCS">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Tax Expenditure Fund
                                        </td>
                                        <td align="center">(1.2%)</td>
                                        <td  align="right" id="TEF2">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Interest Payments
                                        </td>
                                        <td align="center">(15.5%)</td>
                                        <td  align="right" id="IP">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Net Lending
                                        </td>
                                        <td align="center">(1.1%)</td>
                                        <td  align="right" id="NL">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Infrastructure Outlay
                                        </td>
                                        <td align="center">(17.6%)</td>
                                        <td  align="right" id="IO">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Other Capital Outlays
                                        </td>
                                        <td align="center">(2.9%)</td>
                                        <td  align="right" id="OCO">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            GOCC Equity
                                        </td>
                                        <td align="center">(0.2%)</td>
                                        <td  align="right" id="GOCCE">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Capital Transfers to LGUs
                                        </td>
                                        <td align="center">(1.6%)</td>
                                        <td  align="right" id="CTLGU">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Carp-Landowner's Compensation
                                        </td>
                                        <td align="center">(0.2%)</td>
                                        <td  align="right" id="CLC">P 0</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="bydepartment">
                            <table class="table table-striped table-bordered
                                tablesorter"
                                id="tbl_byDepartment">
                                <thead>
                                    <tr>
                                        <th class="col-md-7">Departments</th>
                                        <th class="col-md-2 text-center">Percent
                                        </th>
                                        <th class="col-md-3 text-right">Budget
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Congress of the Philippines</td>
                                        <td align="center">(0.454%)</td>
                                        <td align="right" id="COP">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Office of the President</td>
                                        <td align="center">(0.123%)</td>
                                        <td  align="right" id="OP">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Office of the Vice-President</td>
                                        <td align="center">(0.019%)</td>
                                        <td  align="right" id="OVP">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Department of Agrarian Reform</td>
                                        <td align="center">(0.899%)</td>
                                        <td align="right" id="DAR">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Department of Agriculture</td>
                                        <td align="center">(3.131%)</td>
                                        <td align="right" id="DOA">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Department of Budget and Management
                                        </td>
                                        <td align="center">(0.044%)</td>
                                        <td align="right" id="DBM">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Department of Education</td>
                                        <td align="center">(13.250%)</td>
                                        <td align="right" id="DepEd">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>State Universities and Colleges</td>
                                        <td align="center">(1.623%)</td>
                                        <td align="right" id="SUC">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Department of Energy</td>
                                        <td align="center">(0.181%)</td>
                                        <td align="right" id="DOE">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Department of Environment and
                                            Natural Resources</td>
                                        <td align="center">(1.054%)</td>
                                        <td align="right" id="DENR">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Department of Finance</td>
                                        <td align="center">(0.560%)</td>
                                        <td align="right" id="DOF">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Department of Foreign Affairs</td>
                                        <td align="center">(0.538%)</td>
                                        <td align="right" id="DFA">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Department of Health</td>
                                        <td align="center">(3.598%)</td>
                                        <td align="right" id="DOH">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Department of Interior and Local
                                            Government</td>
                                        <td align="center">(4.444%)</td>
                                        <td align="right" id="DILG">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Department of Justice</td>
                                        <td align="center">(0.511%)</td>
                                        <td align="right" id="DOJ">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Department of Labor and Employment
                                        </td>
                                        <td align="center">(0.463%)</td>
                                        <td align="right" id="DOLE">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Department of National Defense</td>
                                        <td align="center">(3.633%)</td>
                                        <td align="right" id="DND">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Department of Public Works and
                                            Highways</td>
                                        <td align="center">(9.392%)</td>
                                        <td align="right" id="DPWH">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Department of Science and
                                            Technology</td>
                                        <td align="center">(0.538%)</td>
                                        <td align="right" id="DOST">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Department of Social Welfare and
                                            Development</td>
                                        <td align="center">(3.483%)</td>
                                        <td align="right" id="DSWD">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Department of Tourism</td>
                                        <td align="center">(0.088%)</td>
                                        <td align="right" id="DOT">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Department of Trade and Industry
                                        </td>
                                        <td align="center">(0.198%)</td>
                                        <td align="right" id="DTI">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Department of Transportation and
                                            Communications</td>
                                        <td align="center">(2.059%)</td>
                                        <td align="right" id="DOTC">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>National Economic Development
                                            Authority</td>
                                        <td align="center">(0.176%)</td>
                                        <td align="right" id="NEDA">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Presidential Communications
                                            Operations Office</td>
                                        <td align="center">(0.053%)</td>
                                        <td align="right" id="PCOO">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Other Executive Offices</td>
                                        <td align="center">(0.516%)</td>
                                        <td align="right" id="OEO">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Autonomous Region in Muslim Mindanao
                                        </td>
                                        <td align="center">(0.904%)</td>
                                        <td align="right" id="ARMM">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Joint Legislative-Executive Councils
                                        </td>
                                        <td align="center">(0.00019%)</td>
                                        <td align="right" id="JLEC">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>The Judiciary</td>
                                        <td align="center">(0.847%)</td>
                                        <td align="right" id="TJ">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Civil Service Commission</td>
                                        <td align="center">(0.057%)</td>
                                        <td align="right" id="CSC">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Commission on Audit</td>
                                        <td align="center">(0.370%)</td>
                                        <td align="right" id="COA">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Commission on Elections</td>
                                        <td align="center">(0.128%)</td>
                                        <td align="right" id="COMELEC">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Office of the Ombudsman</td>
                                        <td align="center">(0.079%)</td>
                                        <td align="right" id="OO">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Commission on Human Rights</td>
                                        <td align="center">(0.015%)</td>
                                        <td align="right" id="CHR">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Budgetary Support to Government
                                            Corporations(BSGC)</td>
                                        <td align="center">(3.16%)</td>
                                        <td align="right" id="BSGC">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Allocations to Local Government
                                            Units</td>
                                        <td align="center">(15.93%)</td>
                                        <td align="right" id="ALGU">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Tax Expenditures Fund</td>
                                        <td align="center">(1.19%)</td>
                                        <td align="right" id="TEF">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Debt Interest Payments</td>
                                        <td align="center">(15.55%)</td>
                                        <td align="right" id="DIP">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Calamity Fund</td>
                                        <td align="center">(0.33%)</td>
                                        <td align="right" id="CalF">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Contingent Fund</td>
                                        <td align="center">(0.04%)</td>
                                        <td align="right" id="ConF">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>DepEd School Building Program</td>
                                        <td align="center">(0.04%)</td>
                                        <td align="right" id="DSBP">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>E-Government Fund</td>
                                        <td align="center">(0.11%)</td>
                                        <td align="right" id="EGF">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>International Commitments Fund</td>
                                        <td align="center">(0.21%)</td>
                                        <td align="right" id="ICF">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Miscellaneous Personnel Benefits
                                            Fund(MPBF)</td>
                                        <td align="center">(3.56%)</td>
                                        <td align="right" id="MPBF">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Pension and Gratuity Fund(PGF)</td>
                                        <td align="center">(5.31%)</td>
                                        <td align="right" id="PGF">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Priority Development Assistance
                                            Fund(PDAF)</td>
                                        <td align="center">(1.11%)</td>
                                        <td align="right" id="PDAF">P 0</td>
                                    </tr>
                                    <tr>
                                        <td>Feasibility Studies Fund</td>
                                        <td align="center">(0.02%)</td>
                                        <td align="right" id="FSF">P 0</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br>
        </div>
        <!-- /container -->
        <div class="footerBanner">
            <div class="container" style="height:230px;">
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <h4><span class="glyphicon glyphicon-thumbs-up"></span>
                        Social</h4>
                    <hr class="style-two">
                    <a href="#">Facebook</a>
                    <br>
                    <a href="#">Twitter</a>
                </div>
                <div class="col-md-3 col-sm-12">
                    <h4><span class="glyphicon glyphicon-user"></span>
                        Contact Us</h4>
                    <hr class="style-two">
                </div>
                <div class="col-md-3 col-sm-12">
                    <h4><span class="glyphicon glyphicon-user"></span>
                        Developers</h4>
                    <hr class="style-two">
                </div>
                <div class="col-md-3 col-sm-12">
                    <h4><span class="glyphicon glyphicon-envelope"></span>
                        Subscribe</h4>
                    <div class="input-group">
                        <input type="text" class="form-control"
                        placeholder="Email Address">
                        <span class="input-group-btn">
                        <button class="btn btn-primary" type="button">Go!
                        </button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container text-center">
                    <small><span class="glyphicon glyphicon-copyright-mark">
                    </span> Copyright 2013. informAksyon. All rights reserved.</small>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/jquery.tablesorter.min.js"></script>
        <script src="assets/js/modern-business.js"></script>
        <script src="assets/js/taxcalcui.js"></script>
        <script src="assets/js/taxCalcFunc.js"></script>
    </body>
</html>