
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
                <li><a href="module2.php">Let me do it</a></li>
                <li><a href="releases.php">I'm watching yah</a></li>
                <?php if (isset($_SESSION['userInfo']['username']) &&
        			!empty($_SESSION['userInfo']['username'])) : ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <?php 
                    	echo ucfirst($_SESSION['userInfo']['username']);
                    ?>
                    <b class="caret"></b></a>
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