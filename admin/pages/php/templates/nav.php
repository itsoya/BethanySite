<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 10px">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.php">Bethany Negash Admin Site</a>
        <!--Navigation button-->
        <button id="nav-toggle-btn" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
    </div>
    <!-- /.navbar-header -->
    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a></li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a></li>
                <li class="divider"></li>
                <li><a href="../../../Minh/Auth/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                <li><a href="../../index.php"><i class="fa fa-sign-out fa-fw"></i> Back to Site</a></li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav">
            <li><a href="index.php">Paypal Donations</a></li>
            <li><a href="cashDonate.php">Cash Donations</a></li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
    <!-- /.navbar-static-side -->
</nav>