<?php

session_start();
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
                <div class="pull-right">
                    <input type="radio" id="radio_positive" name="comment_status" checked>
                    <span class="label label-success">Positive</span>
                    <input type="radio" id="radio_negative" name="comment_status">
                    <span class="label label-danger">Negative</span>
                </div>
                <label for="textarea_comment" class="pull-left">Message </label>
                <br><br>
                <textarea name="textarea_comment" id="textarea_comment" class="form-control" rows="3"></textarea>
                <br>
                <button class="btn btn-primary">Send</button>
        	</div>
        	<div class="col-md-8" style="max-height:400px;overflow:auto;">
	            <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="col-md-5">Title</th>
                            <th class="col-md-7">Value</th>
                        </tr>
                    </thead>
	            	<tbody>
	            		<tr style="cursor:pointer;" onClick="window.location = 'view.php?id='">
	            			<td>Year</td>
	            			<td align="right">P 203209</td>
	            		</tr>
                        <tr style="cursor:pointer;" onClick="window.location = 'view.php?id='">
                            <td>Department Code</td>
                            <td align="right">P 203209</td>
                        </tr>
                        <tr style="cursor:pointer;" onClick="window.location = 'view.php?id='">
                            <td>Agency Code</td>
                            <td align="right">P 203209</td>
                        </tr>
                        <tr style="cursor:pointer;" onClick="window.location = 'view.php?id='">
                            <td>Operating Unit</td>
                            <td align="right">P 203209</td>
                        </tr>
                        <tr style="cursor:pointer;" onClick="window.location = 'view.php?id='">
                            <td>Special Purpose Fund Code</td>
                            <td align="right">P 203209</td>
                        </tr>
                        <tr style="cursor:pointer;" onClick="window.location = 'view.php?id='">
                            <td>Sub Special Purpose Fund Code</td>
                            <td align="right">P 203209</td>
                        </tr>
                        <tr style="cursor:pointer;" onClick="window.location = 'view.php?id='">
                            <td>Description</td>
                            <td align="right">P 203209</td>
                        </tr>
                        <tr style="cursor:pointer;" onClick="window.location = 'view.php?id='">
                            <td>Fund Code</td>
                            <td align="right">P 203209</td>
                        </tr>
                        <tr style="cursor:pointer;" onClick="window.location = 'view.php?id='">
                            <td>Region</td>
                            <td align="right">P 203209</td>
                        </tr>
                        <tr style="cursor:pointer;" onClick="window.location = 'view.php?id='">
                            <td>Appropriation Source</td>
                            <td align="right">P 203209</td>
                        </tr>
                        <tr style="cursor:pointer;" onClick="window.location = 'view.php?id='">
                            <td>Program Code</td>
                            <td align="right">P 203209</td>
                        </tr>
                        <tr style="cursor:pointer;" onClick="window.location = 'view.php?id='">
                            <td>Program Description</td>
                            <td align="right">P 203209</td>
                        </tr>
                        <tr style="cursor:pointer;" onClick="window.location = 'view.php?id='">
                            <td>Object Code</td>
                            <td align="right">P 203209</td>
                        </tr>
                        <tr style="cursor:pointer;" onClick="window.location = 'view.php?id='">
                            <td>Object Desciption</td>
                            <td align="right">P 203209</td>
                        </tr>
                        <tr style="cursor:pointer;" onClick="window.location = 'view.php?id='">
                            <td>Amount</td>
                            <td align="right">P 203209</td>
                        </tr>
                        <tr style="cursor:pointer;" onClick="window.location = 'view.php?id='">
                            <td>Issue Date</td>
                            <td align="right">P 203209</td>
                        </tr>
                        <tr style="cursor:pointer;" onClick="window.location = 'view.php?id='">
                            <td>Barcode Number</td>
                            <td align="right">P 203209</td>
                        </tr>
                        <tr style="cursor:pointer;" onClick="window.location = 'view.php?id='">
                            <td>Saro Number</td>
                            <td align="right">P 203209</td>
                        </tr>
                        <tr style="cursor:pointer;" onClick="window.location = 'view.php?id='">
                            <td>ID</td>
                            <td align="right">P 203209</td>
                        </tr>
	            	</tbody>
	            </table>
            </div>
        </div>
        <br>
                <br>
                <br>
                <br>
                <br>
                <br>
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
    </body>
</html>