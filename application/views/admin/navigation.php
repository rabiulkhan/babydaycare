<nav id="mainnav-container">
	<div id="mainnav">
		<!--Shortcut buttons-->
		<!--================================-->
		<div id="mainnav-shortcut">
			<ul class="list-unstyled">
				<li class="col-xs-4" data-content="Additional Sidebar">
					<a id="demo-toggle-aside" class="shortcut-grid" href="index.html#">
						<i class="fa fa-magic"></i>
					</a>
				</li>
				<li class="col-xs-4" data-content="Notification">
					<a id="demo-alert" class="shortcut-grid" href="index.html#">
						<i class="fa fa-bullhorn"></i>
					</a>
				</li>
				<li class="col-xs-4" data-content="Page Alerts">
					<a id="demo-page-alert" class="shortcut-grid" href="index.html#">
						<i class="fa fa-bell"></i>
					</a>
				</li>
			</ul>
		</div>
		<!--================================-->
		<!--End shortcut buttons-->
		<!--Menu-->
		<!--================================-->
		<div id="mainnav-menu-wrap">
			<div class="nano">
				<div class="nano-content">
					<ul id="mainnav-menu" class="list-group">
						<!--Category name-->
						<li class="list-header">Navigation</li>
						<!--Menu list item-->
						<li class="active-link">
							<a href="<?php echo base_url();?>index.php/admin/dashboard">
								<i class="fa fa-dashboard"></i>
								<span class="menu-title">
									<strong>Dashboard</strong>
								</span>
							</a>
						</li>
						<!--Menu list Users-->
						<li>
							<a href="index.html#">
								<i class="fa fa-users"></i>
								<span class="menu-title">
									<strong>Users</strong>
								</span>
								<i class="fa arrow"></i>
							</a>
							<!--Submenu-->
							<ul class="collapse">
								<li><a href="<?php echo base_url()?>index.php/admin/accountant/view"><i class="fa fa-user"></i>Accountant</a></li>
								<li><a href="<?php echo base_url()?>index.php/admin/teachers/view"><i class="fa fa-user"></i>Teachers</a></li>
								<li><a href="<?php echo base_url()?>index.php/admin/nurse/view"><i class="fa fa-user"></i>Nurse</a></li>
								<li><a href="<?php echo base_url()?>index.php/admin/guardians/view"><i class="fa fa-user"></i>Guardians</a></li>
							</ul>
						</li>
						<!--Menu list CARE TIME Category-->
						<li>
							<a href="">
								<i class="fa fa-user"></i>
								<span class="menu-title">
									<strong>Category Settings</strong>
								</span>
								<i class="fa arrow"></i>
							</a>
							<!--Submenu-->
							<ul class="collapse">
								<li><a href="<?php echo base_url()?>index.php/admin/care_time_category/view"><i class="fa fa-user"></i>Care time Category</a></li>
								<li><a href="<?php echo base_url()?>index.php/admin/age_category/view"><i class="fa fa-user"></i>Age Category</a></li>
								<li><a href="<?php echo base_url()?>index.php/admin/education_level/view"><i class="fa fa-user"></i>Education Level</a></li>
								<li><a href="<?php echo base_url()?>index.php/admin/education_category/view"><i class="fa fa-user"></i>Education Category</a></li>
							</ul>
						</li>
						<!--Menu list BABY ADMISSION-->
						<li>
							<a href="<?php echo base_url()?>index.php/admin/admission/view">
								<i class="fa fa-user"></i>
								<span class="menu-title">
									<strong>Admission</strong>
								</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!--================================-->
		<!--End menu-->

	</div>
</nav>
			<!--===================================================-->
			<!--END MAIN NAVIGATION-->