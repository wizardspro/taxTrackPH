<?php

session_start();

include 'libs/Database.php';

$loginMessage = "";

if (isset($_POST['btn_login']) && !empty($_POST['btn_login'])) {

    $db = new Database($dbConf['host'], $dbConf['user'], '', $dbConf['dbname']);

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

<?php echo $loginMessage; ?>

<?php if (isset($_SESSION['userInfo']['username']) &&
    !empty($_SESSION['userInfo']['username'])) : ?>
Fullname: <?php echo $_SESSION['userInfo']['full_name']; ?><br/>
Email: <?php echo $_SESSION['userInfo']['email']; ?>
<?php else: ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="username" value="">
        <input type="password" name="password" value="">
        <input type="submit" name="btn_login" value="Login">
    </form>
<?php endif; ?>