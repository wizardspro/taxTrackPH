<?php
session_start();

include 'libs/Database.php';
include 'libs/KabantayNgBayan.php';

$kb = new KabantayNgBayan();
$saro = $kb->get('saro', '&id=' . $_GET['id']);
$data = $saro->data[0];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title> TaxWatch - taxTrackPH , See and Calculate where thus your tax going. </title>
        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Add custom CSS here -->
        <link href="assets/css/modern-business.css" rel="stylesheet">
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/css/index.css" rel="stylesheet" media="screen">
        <link href="assets/css/template.css" rel="stylesheet" media="screen">
    </head>
    <body>
        <?php include "navbar.php" ?>
        <div class="banner">
            <div class="container">

                <div style="font-size:60px;box-shadow:0px 5px 15px #000;background-color:#fff;padding:10px;font-family:sans;opacity:0.8;" class="pull-right">What yah think?</div>
            
            </div>
        </div>
        <div class="container" id='site_content'>
            <div class="col-md-4 ">
                <div class="panel panel-default" style="height:300px;overflow:auto;margin-bottom:-5px;">
                    
                </div>
            	<div class="well">
                    <div class="pull-right">
                        <input type="radio" id="radio_positive" name="comment_status" checked>
                        <span class="label label-success">Positive</span>
                        <input type="radio" id="radio_negative" name="comment_status">
                        <span class="label label-danger">Negative</span>
                    </div>
                    <label for="textarea_comment" class="pull-left">Message </label>
                    
                    <textarea name="textarea_comment" style="margin-top:20px;margin-bottom:10px;" id="textarea_comment" class="form-control" rows="3"></textarea>
                    
                    <button class="btn btn-primary">Post Comment</button>
                </div>
            </div>
            <div class="col-md-8">
                <div><font color="green">320 <span class="glyphicon glyphicon-thumbs-up"></span></font> 
                    &nbsp;&nbsp;&nbsp;
                    <font color="red">146 <span class="glyphicon glyphicon-thumbs-down"></span></font></div>
        	<div style="max-height:460px;overflow:auto;">
	            <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="col-md-5">Title</th>
                            <th class="col-md-7">Value</th>
                        </tr>
                    </thead>
	            	<tbody>
                        <tr>
                            <td>Saro Number</td>
                            <td align="right"><?php echo $data->saro_no; ?></td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td align="right"><?php echo $data->description; ?></td>
                        </tr>
                        <tr>
                            <td>Year</td>
                            <td align="right"><?php echo $data->year; ?></td>
                        </tr>
                        <tr>
                            <td>Amount</td>
                            <td align="right">Php <?php echo number_format($data->amount, 2); ?></td>
                        </tr>
                        <tr>
                            <td>Issue Date</td>
                            <td align="right"><?php echo date('M d, Y', strtotime($data->issue_date)); ?></td>
                        </tr>
                        <tr>
                            <td>Purpose</td>
                            <td align="right"><?php echo $data->purpose; ?></td>
                        </tr>
                        <tr>
                            <td>Program Description</td>
                            <td align="right"><?php echo $data->program_description; ?></td>
                        </tr>
                        <tr>
                            <td>Fund Code</td>
                            <td align="right"><?php echo $data->fund_code; ?></td>
                        </tr>
                        <tr>
                            <td>Department Code</td>
                            <td align="right"><?php echo $data->department_code; ?></td>
                        </tr>
                        <tr>
                            <td>Agency Code</td>
                            <td align="right"><?php echo $data->agency_code; ?></td>
                        </tr>
                        <tr>
                            <td>Operating Unit</td>
                            <td align="right"><?php echo $data->operating_unit; ?></td>
                        </tr>
                        <tr>
                            <td>Special Purpose Fund Code</td>
                            <td align="right"><?php echo $data->spf_code; ?></td>
                        </tr>
                        <tr>
                            <td>Sub Special Purpose Fund Code</td>
                            <td align="right"><?php echo $data->sub_spf_code; ?></td>
                        </tr>
                        <tr>
                            <td>Region</td>
                            <td align="right"><?php echo $data->region; ?></td>
                        </tr>
                        <tr>
                            <td>Appropriation Source</td>
                            <td align="right"><?php echo $data->appro_src; ?></td>
                        </tr>
                        <tr>
                            <td>Program Code</td>
                            <td align="right"><?php echo $data->program_code; ?></td>
                        </tr>
                        <tr>
                            <td>Object Code</td>
                            <td align="right"><?php echo $data->object_code; ?></td>
                        </tr>
                        <tr>
                            <td>Object Desciption</td>
                            <td align="right"><?php echo $data->object_description; ?></td>
                        </tr>

                        <tr>
                            <td>Barcode Number</td>
                            <td align="right"><?php echo $data->barcode_no; ?></td>
                        </tr>
                        <tr>
                            <td>ID</td>
                            <td align="right"><?php echo $data->id; ?></td>
                        </tr>
	            	</tbody>
	            </table>
                </div>
            </div>
        </div>
        <br>
                <br>
                <br>
                <br>
                <br>
                <br>
        <!-- /container -->
        <?php include "footer.php" ?>
        <!-- Bootstrap core JavaScript -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/modern-business.js"></script>
    </body>
</html>