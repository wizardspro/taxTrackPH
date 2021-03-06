<?php
session_start();

include 'libs/Database.php';
include 'libs/KabantayNgBayan.php';

$kb = new KabantayNgBayan();
$saro = $kb->get('saro', '&id=' . $_REQUEST['id']);
$data = $saro->data[0];

$db = new Database($dbConf['host'], $dbConf['user'], $dbConf['password'], $dbConf['dbname']); 

if (isset($_POST['btn_submit']) && !empty($_POST['btn_submit'])) {

	if (isset($_SESSION['userInfo']['username']) && !empty($_SESSION['userInfo']['username'])) {
		//print_r($_SESSION);	

		$dataComment['fb_id'] = $_SESSION['userInfo']['fb_id'];
		$dataComment['email'] = $_SESSION['userInfo']['email'];
		$dataComment['full_name'] = $_SESSION['userInfo']['full_name'];
		$dataComment['comments'] = $_POST['textarea_comment'];
		$dataComment['status'] = $_POST['comment_status'];
		$dataComment['type'] = 1; // for saro
			
		$insertResult = $db->insertComment($dataComment);
	}
}


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

                
                <div class="panel panel-default" style="height:300px;overflow:auto;">
                <div class="panel-heading text-right">
                	<?php $comments = $db->getAllComments(); echo "Total: &nbsp;<span class='badge pull-right'>" . count($comments) . "</span>";?>
                </div>
                <div class="panel-body">
                	<?php 
                	if ($comments > 0) {
	                	foreach ($comments as $v) {
	                ?>
	                		<strong><?php echo $v['full_name']; echo ($v['status']) ? " <span class=\"label label-success\">
	                		P</span>" : "<span class=\"label label-danger\">N</span>";?></strong><br>
	                		<small><i><?php echo $v['inserted_on'];?></i></small><br>
	                		<small><?php echo $v['email'];?></small><br>
	                		<p><?php echo $v['comments'];?></p>
						    <hr>

	                <?php
	                	} 
                	}
                	?>
                </div>
                </div>
        		<form method="post" action="view.php?id=<?php echo $_GET['id']; ?>">
                <div class="pull-right">
                    <input type="radio" id="radio_positive" name="comment_status" value="1" checked>
                    <span class="label label-success">Positive</span>
                    <input type="radio" id="radio_negative" name="comment_status" value="0">
                    <span class="label label-danger">Negative</span>
                </div>
                <div>
                <?php 
                	if (isset($insertResult) && $insertResult > 0)  {
                		echo "Comment has been posted.";
                	}
                ?> 
                </div>
                <label for="textarea_comment" class="pull-left">Message </label>
                <br><br>
                <textarea name="textarea_comment" id="textarea_comment" class="form-control" rows="3"></textarea>
                <br>
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                <input type="submit" class="btn btn-primary" name="btn_submit" value="Post Comment">
                </form>
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