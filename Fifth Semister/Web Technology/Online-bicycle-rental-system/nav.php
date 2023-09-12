1
<nav class="navbar navbar-expand-sm  float-right theme-main-menu">
					   <!-- Brand and toggle get grouped for better mobile display -->
					   <div >
					     <!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
					       <span class="sr-only">Toggle navigation</span>
					       Menu
					       <i class="fa fa-bars" aria-hidden="true"></i>
					     </button>-->
					   </div>
					     <ul class="nav navbar-nav">
						 <?php if(isset($_SESSION['login']))
						 {
							 ?>
							 <li class="nav-item navbar-brand mb-0 h6"><a class="nav-link" href="index.php">HOME</a></li>
							<li class="nav-item navbar-brand mb-0 h6"><a class="nav-link" href="search.php">Search</a></li>
							<li class="nav-item navbar-brand mb-0 h6"><a class="nav-link" href="bk.php">My Bookings</a></li>
							<li class="nav-item navbar-brand mb-0 h6"><a class="nav-link" href="contact.php">Contact</a></li>
							<li class="nav-item navbar-brand mb-0 h6"><a class="nav-link" href="about.php">About</a></li>
							<li class="nav-item navbar-brand mb-0 h6"><a class="nav-link" href="logout.php">Logout</a></li>
							 <?php
						 }
						 else
						 {
						     ?>
							 <li class="nav-item navbar-brand mb-0 h6"><a class="nav-link" href="register.php">Register</a></li>
							<li class="nav-item navbar-brand mb-0 h6"><a class="nav-link" href="login.php">Login</a></li>

							 <?php

						 }
						 ?>


					     </ul>
					   </nav>
