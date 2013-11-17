<?php
session_start();

include 'libs/Database.php';
include 'libs/kabantayngbayan.php';

$kb = new KabantayNgBayan();
$saro = $kb->get('saro', '&limit=10&skip=' . $_GET['page']);
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
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Tax Track PH</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">    
                        <li><a href="taxcalc.php">Where's my money?</a></li>
                        <li><a href="budgetcalc.php">Let me do it</a></li>
                        <li><a href="releases.php">I'm watching yah</a></li>
                        <?php if (isset($_SESSION['userInfo']['username']) &&
                            !empty($_SESSION['userInfo']['username'])) : ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Username <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                            <li><a href="#">Settings</a></li>
                            <li><a href="logout.php">Logout</a></li>
                            </ul>
                            </li>
                            <?php else: ?>   
                        <li><button onClick="window.location = 'login.php'" type="button" class="btn btn-primary navbar-btn login_btn">Log in <span class="glyphicon glyphicon-log-in"></span></button></li>
                    <?php endif; ?>   
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
        <div class="container" id='site_content'>
        	<div class="col-md-4 well">
        		hmm
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
        <div class="footerBanner">
            <div class="container" style="height:230px;">
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <h4><span class="glyphicon glyphicon-thumbs-up"></span> Social</h4>
                    <hr class="style-two">
                    <a href="#">Facebook</a>
                    <br>
                    <a href="#">Twitter</a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <h4><span class="glyphicon glyphicon-user"></span> Contact Us</h4>
                    <hr class="style-two">
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <h4><span class="glyphicon glyphicon-user"></span> Developers</h4>
                    <hr class="style-two">
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <h4><span class="glyphicon glyphicon-envelope"></span> Subscribe</h4>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Email Address">
                        <span class="input-group-btn">
                        <button class="btn btn-primary" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container text-center">
                    <small><span class="glyphicon glyphicon-copyright-mark"></span> Copyright 2012. informAksyon. All rights reserved.</small>
                </div>
            </div>
        </div>
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