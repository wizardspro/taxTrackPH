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
        <link href="assets/css/index.css" rel="stylesheet" media="screen">
        <link href="assets/css/template.css" rel="stylesheet" media="screen">

          <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    </head>
    <body>
        <?php include "navbar.php" ?>
        <div class="banner">
            <div class="container">
                <div style="font-size:60px;box-shadow:0px 5px 15px #000;background-color:#fff;padding:10px;font-family:sans;opacity:0.8;" class="pull-right">Do it your own</div>
            </div>
        </div>
        <div class="container" id="site_content">
            <div class="col-md-4 ">
                <button class="btn btn-warning btn-block btn-lg">
                    Do it Your Own
                </button>
                <button class="btn btn-default btn-block">
                    Overview
                </button>
                <div class="panel panel-default"style="margin-top:10px;">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <td><a href="#">something</a></td>
                            </tr>
                            <tr>
                                <td><a href="#">something</a></td>
                            </tr>
                            <tr>
                                <td><a href="#">something</a></td>
                            </tr>
                            <tr>
                                <td><a href="#">something</a></td>
                            </tr>
                            <tr>
                                <td><a href="#">something</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-8" style="display:block;">
                <div id="chart_div" style="height: 400px;"></div>
            </div>
            <div class="col-md-8">
                <div id="chart_div2" style="height:450px;"></div>
                <div class=" panel panel-default">
                    <table class="table table-striped table-bordered 
                                tablesorter" id="tbl_bySectors">
                        <thead>
                            <tr>
                                <th class="col-md-3">Sectors</th>
                                <th class="col-md-3 text-center">Budget(%)
                                </th>
                                <th class="col-md-3 text-center">Percent</th>
                                <th class="col-md-3 text-center">New</th>
                            </tr>
                        </thead>
                        <form method="post" action"" id="theForm"></form>
                        <tbody>
                            <tr>
                                <td>Social Services</td>
                                <td align="center"> P 1221 (37.2%)</td>
                                <td><input type="number" min="0.00" step="0.01" max="100.00" value="0" id="SS" class="form-control" onKeyUp="changeAll()"></td>
                                <td align="center" id="ss_value">P 0</td>
                            </tr>
                            <tr>
                                <td>Economic Services</td>
                                <td align="center"> P 1221 (26.0%)</td>
                                <td><input type="number" min="0.00" step="0.01" max="100.00" value="0" id="ES" class="form-control" onKeyUp="changeAll()"></td>
                                <td align="center" id="es_value">P 0</td>
                            </tr>
                            <tr>
                                <td>General Public Services</td>
                                <td align="center"> P 1221 (16.1%)</td>
                                <td><input type="number" min="0.00" step="0.01" max="100.00" value="0" id="GPS" class="form-control" onKeyUp="changeAll()"></td>
                                <td align="center" id="gps_value">P 0</td>
                            </tr>
                            <tr>
                                <td>Debt Burden</td>
                                <td align="center"> P 1221 (16.6%)</td>
                                <td><input type="number" min="0.00" step="0.01" max="100.00" value="0" id="DB" class="form-control" onKeyUp="changeAll()"></td>
                                <td align="center" id="db_value">P 0</td>
                            </tr>
                            <tr>
                                <td>Defense</td>
                                <td align="center"> P 1221 (4.1%)</td>
                                <td><input type="number" min="0.00" step="0.01" max="100.00" value="0" id="D" class="form-control" onKeyUp="changeAll()"></td>
                                <td align="center" id="d_value">P 0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <button class="btn btn-primary" form="theForm" id="submit_btn">Submit</button>
            </div>
        </div>
        <br><br>

        <?php include('footer.php'); ?>


        <!-- Bootstrap core JavaScript -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.js"></script>
          <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
          <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script src="assets/js/jquery-latest.min.js"></script>
        <script src="assets/js/jquery.tablesorter.min.js"></script>

        <script src="assets/js/modern-business.js"></script>
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript">
            google.load("visualization", "1", {packages:["corechart"]});
              google.setOnLoadCallback(drawChart);
              google.setOnLoadCallback(drawChart2);
              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ['Departments', 'Actual', 'Citizens'],
                  ['Social Services',  37.2,      30.4],
                  ['Economic Services',  26.0,      26.1],
                  ['General Public Services',  16.2,      16],
                  ['Dept Burden',  16.6,      20],
                  ['Defense',  4.1,     12],
                ]);

                var options = {
                  title: 'Government Budget',
                  vAxis: {title: 'Departments',  titleTextStyle: {color: 'red'}}
                };

                var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
                chart.draw(data, options);
              }
              function drawChart2(e_ss , e_es , e_gps , E_db , e_d ) {
                var data = google.visualization.arrayToDataTable([
                  ['Departments', 'Actual', 'Citizens','User'],
                  ['Social Services',  37.2, 30.4, e_ss],
                  ['Economic Services',  26.0,      26.1, e_es],
                  ['General Public Services',  16.2,      16, e_gps],
                  ['Dept Burden',  16.6,      20, e_db],
                  ['Defense',  4.1, 3, e_d]

                ]);

                var options = {
                  title: 'Government Budget',
                  vAxis: {title: 'Departments',  titleTextStyle: {color: 'red'}}
                };

                var chart = new google.visualization.BarChart(document.getElementById('chart_div2'));
                chart.draw(data, options);
              }
              function changeAll(){
                ss = parseInt($('#SS').val());
                es = parseInt($('#ES').val());
                gps = parseInt($('#GPS').val());
                db = parseInt($('#DB').val());
                d = parseInt($('#D').val());
                t = 2300000000000;
                total = ss + es + gps +  db + d;
                if(total>100){
                    $("#submit_btn").hide();
                }else{
                    $("#submit_btn").show();
                    $('#ss_value').text(t*(ss/100));
                    $('#es_value').text(t*(es/100));
                    $('#gps_value').text(t*(gps/100));
                    $('#db_value').text(t*(db/100));
                    $('#d_value').text(t*(d/100));
                    drawChart2(129090,129090678,456,65445,654654) {
                }
                

              };
        </script>
    </body>
</html>