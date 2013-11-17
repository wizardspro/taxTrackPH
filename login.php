<?php

session_start();

include 'libs/Database.php';

$loginMessage = "";

if (isset($_POST['btn_login']) && !empty($_POST['btn_login'])) {

    $db = new Database($dbConf['host'], $dbConf['user'], $dbConf['password'], $dbConf['dbname']);

    $userInfo['username'] = $_POST['username'];
    $userInfo['password'] = $_POST['password'];

    if ($db->authenticate($userInfo)) {
        $_SESSION['userInfo'] = $db->getUserInfo();
        header('location: ' . $_SERVER['PHP_SELF']);
        exit;
    } else {
        $loginMessage = "Authentication Failed: Please login again.";
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
        
        <div class="container">
            <br><br><br><br>
            <div class="col-md-4 col-md-offset-4 well">
            
            <?php echo $loginMessage; ?>

            <?php if (isset($_SESSION['userInfo']['username']) &&
                !empty($_SESSION['userInfo']['username'])) : ?>
            Fullname: <?php echo $_SESSION['userInfo']['full_name']; ?><br/>
            Email: <?php echo $_SESSION['userInfo']['email']; ?>
            <?php else: ?> 
            <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <div class="form-group">
                <label for="username">Username</label>
                <input name="username" value="" class="form-control" id="username"
                 placeholder="username">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password"
                name="password" placeholder="Password">
              </div>
              <input type="submit" name="btn_login" value="Login" class="btn btn-primary">
                </form>
            <?php endif; ?>

            </div>
        </div>
        
        <!-- Bootstrap core JavaScript -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/modern-business.js"></script>
    </body>
</html>
