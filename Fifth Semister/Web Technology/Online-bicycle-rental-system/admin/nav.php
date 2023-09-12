 <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="index.php"><span class="fa fa-area-chart"></span> Admin
			<span class="dashboard_text"> dashboard</span></a></h1>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
			<?php if(isset($_SESSION['adminlogin']))
			{
			?>
			<li class="treeview">
                <a href="index.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
              </li>
			  
			  <li class="treeview">
                <a href="bicycle.php">
                <i class="fa fa-table"></i> <span>Add bicycle</span>
                </a>
                
              </li>
			  <li class="treeview">
                <a href="view_user.php">
                <i class="fa fa-table"></i> <span>View User</span>
                </a>
              </li>
			  <li class="treeview">
                <a href="view_bicycle.php">
                <i class="fa fa-table"></i> <span>View bicycle</span>
                </a>
              </li> <li class="treeview">
                <a href="view_bookings.php">
                <i class="fa fa-table"></i> <span>View Bookings</span>
                </a>
              </li>
			 
			  <li class="treeview">
                <a href="logout.php">
                <i class="fa fa-sign-out"></i> <span>Logout</span>
                </a>
              </li>
			<?php
			}
else
{
	?>
	
	<li class="treeview">
                <a href="login.php">
                <i class="fa fa-sign-in"></i> <span>Login</span>
                </a>
              </li>
	<?php
}	
			?>
              
          <!-- /.navbar-collapse -->
      </nav>