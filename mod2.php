<?php

include 'libs/Database.php';

$db = new Database($dbConf['host'], $dbConf['user'], $dbConf['password'],
    $dbConf['dbname']);
$sectors = $db->getAllSectors();

$userSectorBudgets = $db->getUserSectorBudgets(124);

if (isset($_POST['btn_submit']) && !empty($_POST['btn_submit'])) {
    echo "<pre>";
    $budget = json_encode($_POST['budget']);

    $data['fb_id'] = $_POST['fb_id'];
    $data['email'] = $_POST['email'];
    $data['full_name'] = $_POST['full_name'];
    $data['budget'] = $_POST['budget'];
    $data['name'] = $_POST['name'];
    $data['notes'] = $_POST['notes'];
    $data['budget'] = $budget;

    $insertResult = $db->insertUserSectorBudget($data);
}

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <table border="1">
        <tr>
            <td>Id</td>
            <td>Sector</td>
            <td>Budget</td>
            <td>Percent</td>
            <td>Suggest a budget</td>
        </tr>
        <?php $totalBudget = 0; ?>
        <?php foreach ($sectors as $k => $v) : ?>
        <tr>
            <td><?php echo ++$k; ?></td>
            <td><?php echo $v['name']; ?></td>
            <td><?php
            $totalBudget += $v['budget'];
            echo number_format($v['budget'], 2); ?>
            </td>
            <td><?php echo number_format($v['percent'], 2); ?>%</td>
            <td><input type="text" name="budget[<?php echo $v['name']; ?>]" value=""></td>
        </tr>
        <?php endforeach; ?>
        <tr>
            <td>Total Budget:</td>
            <td colspan="4"><?php echo number_format($totalBudget, 2); ?></td>
        </tr>
    </table>
    FB ID<input type="text" name="fb_id" value=""><br>
    Email<input type="text" name="email" value=""><br>
    Full Name<input type="text" name="full_name" value=""><br>
    Title<input type="text" name="name" value=""><br>
    Notes<textarea name="notes" value=""></textarea><br>
    <input type="submit" name="btn_submit" value="Submit">
</form>

<?php if (count($userSectorBudgets) > 0) : ?>

<table border="1">
    <tr>
        <td>ID: <?php echo $userSectorBudgets[0]['id']; ?></td>
        <td>FB ID: <?php echo $userSectorBudgets[0]['fb_id']; ?></td>
        <td>Email: <?php echo $userSectorBudgets[0]['email']; ?></td>
        <td>Full Name: <?php echo $userSectorBudgets[0]['full_name']; ?></td>
        <td>Title: <?php echo $userSectorBudgets[0]['name']; ?></td>
        <td>Comment: <?php echo $userSectorBudgets[0]['notes']; ?></td>
    </tr>
    <?php foreach ($userSectorBudgets as $v) : ?>
        <?php $userBudget[] = json_decode($v['budget']); ?>
    <?php endforeach; ?>

    <tr>
        <td colspan="6">
            <table>
            <?php foreach ($userBudget as $j) : ?>
                <?php foreach ($j as $k => $l) : ?>
                    <tr>
                        <td><?php echo $k; ?></td>
                        <td><?php echo $l; ?></td>
                    </tr>
                <?php endforeach; ?>
                <tr><td colspan="2">&nbsp;</td></tr>
            <?php endforeach; ?>
            </table>
        </td>
    </tr>

</table>

<?php endif; ?>