<?php
session_start();

include 'libs/Database.php';
include 'libs/KabantayNgBayan.php';

$kb = new KabantayNgBayan();
$page = isset($_GET['page'])?$_GET['page']:"";
$saro = $kb->get('saro', '&limit=10&skip=' . $page);
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
        	<div class="col-md-4 well">
        		
        	</div>
        	<div class="col-md-8" style="max-height:300px;overflow:auto;">
	            <table class="table table-striped table-hover ">
	            	<thead>
	            		<tr>
		            		<th>Description</th>
		            		<th class="text-right">Amount</th>
	            		</tr>
	            	</thead>
	            	<tbody>
                        <?php foreach ($saro->data as $v) : ?>
	            		<tr style="cursor:pointer;" onClick="window.location = 'view.php?id='">
	            			<td>
                                <a href="view.php?id=<?php echo $v->id; ?>">
                                    <?php echo $v->description; ?>
                                </a>
                             </td>
	            			<td align="right">Php
                                <?php echo number_format($v->amount, 2); ?></td>
	            		</tr>
                        <?php endforeach; ?>
	            	</tbody>
	            </table>
            </div>
            <div class="text-right">
            	<ul class="pagination">
				  <li><a href="releases.php?page=<?php echo $_GET['page']-10; ?>">&laquo;</a></li>
				  <li><a href="releases.php?page=10">1</a></li>
				  <li><a href="releases.php?page=20">2</a></li>
				  <li><a href="releases.php?page=30">3</a></li>
				  <li><a href="releases.php?page=40">4</a></li>
				  <li><a href="releases.php?page=50">5</a></li>
				  <li><a href="releases.php?page=<?php echo $_GET['page']+10; ?>">&raquo;</a></li>
				</ul>
	        </div>
        </div>
        <!-- /container -->
        <?php include('footer.php'); ?>
        <!-- Bootstrap core JavaScript -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/modern-business.js"></script>
		<script>
		$(document).ready(function(){

		    $.get("http://api.kabantayngbayan.ph/saro?app_id=5286f1675e13db255f873f05&limit=100",function(data,status){
		      console.log("Data: " + data + "\nStatus: " + status);
		      dd = jQuery.parseJSON(data);
		      console.log(dd);
		    });
		});
		</script>
    </body>
</html>