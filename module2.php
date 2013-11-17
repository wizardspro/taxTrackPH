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
                        <tbody>
                            <tr>
                                <td>Social Services</td>
                                <td align="center"> P 1221 (37.2%)</td>
                                <td><input type="number" min="0.00" step="0.01" max="100.00" value="0" id="SS" class="form-control"></td>
                                <td align="center">P 1232</td>
                            </tr>
                            <tr>
                                <td>Economic Services</td>
                                <td align="center"> P 1221 (26.0%)</td>
                                <td><input type="number" min="0.00" step="0.01" max="100.00" value="0" id="ES" class="form-control"></td>
                                <td align="center">P 1232</td>
                            </tr>
                            <tr>
                                <td>General Public Services</td>
                                <td align="center"> P 1221 (16.1%)</td>
                                <td><input type="number" min="0.00" step="0.01" max="100.00" value="0" id="GPS" class="form-control"></td>
                                <td align="center">P 1232</td>
                            </tr>
                            <tr>
                                <td>Debt Burden</td>
                                <td align="center"> P 1221 (16.6%)</td>
                                <td><input type="number" min="0.00" step="0.01" max="100.00" value="0" id="DB" class="form-control"></td>
                                <td align="center">P 1232</td>
                            </tr>
                            <tr>
                                <td>Defense</td>
                                <td align="center"> P 1221 (4.1%)</td>
                                <td><input type="number" min="0.00" step="0.01" max="100.00" value="0" id="D" class="form-control"></td>
                                <td align="center">P 1232</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <button class="btn btn-primary">Submit</button>
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
                  ['Defense',  4.1,      3],
                ]);

                var options = {
                  title: 'Government Budget',
                  vAxis: {title: 'Departments',  titleTextStyle: {color: 'red'}}
                };

                var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
                chart.draw(data, options);
              }
              function drawChart2() {
                var data = google.visualization.arrayToDataTable([
                  ['Departments', 'Actual', 'Citizens','User'],
                  ['Social Services',  37.2, 30.4, 30.4],
                  ['Economic Services',  26.0,      26.1, 30.4],
                  ['General Public Services',  16.2,      16, 30.4],
                  ['Dept Burden',  16.6,      20, 30.4],
                  ['Defense',  4.1, 3, 30.4],

                ]);

                var options = {
                  title: 'Government Budget',
                  vAxis: {title: 'Departments',  titleTextStyle: {color: 'red'}}
                };

                var chart = new google.visualization.BarChart(document.getElementById('chart_div2'));
                chart.draw(data, options);
              }
              $('#SS').change(function(){
                total = parseInt($('#SS').value) + 
                parseInt($('#ES').value) + parseInt($('#GPS').value) + 
                parseInt($('#DB').value) + parseInt($('#D').value);
                alert(total);
              });
        </script>
    </body>
</html>