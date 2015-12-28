<!--CONTENT CONTAINER-->
			<!--===================================================-->
			<div id="content-container">
				
				<!--Page Title-->
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<div id="page-title">
					<h1 class="page-header text-overflow">Dashboard</h1>

					<!--Searchbox-->
					<div class="searchbox">
						<div class="input-group custom-search-form">
							<input type="text" class="form-control" placeholder="Search..">
							<span class="input-group-btn">
								<button class="text-muted" type="button"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</div>
				</div>
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<!--End page title-->


				<!--Breadcrumb-->
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<ol class="breadcrumb">
					<li><a href="index.html#">Home</a></li>
					<li><a href="index.html#">Library</a></li>
					<li class="active">Data</li>
				</ol>
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<!--End breadcrumb-->


		

				<!--Page content-->
				<!--===================================================-->
				<div id="page-content">
					
					<div class="row">
						<div class="col-lg-7">
					
							<!--Network Line Chart-->
							<!--===================================================-->
							<div id="demo-panel-network" class="panel">
								<div class="panel-heading">
									<div class="panel-control">
										<button id="demo-panel-network-refresh" data-toggle="panel-overlay" data-target="#demo-panel-network" class="btn"><i class="fa fa-rotate-right"></i></button>
										<div class="btn-group">
											<button class="dropdown-toggle btn" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-gear"></i></button>
											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="index.html#">Action</a></li>
												<li><a href="index.html#">Another action</a></li>
												<li><a href="index.html#">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="index.html#">Separated link</a></li>
											</ul>
										</div>
									</div>
									<h3 class="panel-title">Network</h3>
								</div>
					
								<!--Morris line chart placeholder-->
								<div id="morris-chart-network" class="morris-full-content"></div>
					
								<!--Chart information-->
								<div class="panel-body bg-primary" style="position:relative;z-index:2">
									<div class="row">
										<div class="col-lg-6">
											<div class="row">
												<div class="col-xs-8">
					
													<!--Server load stat-->
													<div class="pad-ver media">
														<div class="media-left">
															<span class="icon-wrap icon-wrap-xs">
																<i class="fa fa-cloud fa-2x"></i>
															</span>
														</div>
					
														<div class="media-body">
															<p class="h3 text-thin media-heading">30%</p>
															<small class="text-uppercase">Server Load</small>
														</div>
													</div>
					
													<!--Progress bar-->
													<div class="progress progress-xs progress-dark-base mar-no">
														<div class="progress-bar progress-bar-light" style="width: 30%"></div>
													</div>
					
												</div>
												<div class="col-xs-4">
													<!-- User Online -->
													<div class="text-center">
														<span class="text-3x text-thin">43</span>
														<p>User Online</p>
													</div>
												</div>
											</div>
					
											<!--Additional text-->
											<div class="mar-ver">
												<small class="pad-btm"><em>* Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</em></small>
											</div>
					
										</div>
										<div class="col-lg-6">
					
											<!-- List Group -->
											<ul class="list-group bg-trans mar-no">
												<li class="list-group-item">
													<!-- Sparkline chart -->
													<div id="demo-chart-visitors" class="pull-right"></div> Visitors
												</li>
												<li class="list-group-item">
													<!-- Sparkline chart -->
													<div id="demo-chart-bounce-rate" class="pull-right"></div> Bounce rate
												</li>
												<li class="list-group-item">
													<span class="badge badge-success">11</span>
													Today sales
												</li>
												<li class="list-group-item">
													<span class="badge badge-warning">20</span>
													Broken links found
												</li>
											</ul>
					
										</div>
									</div>
								</div>
					
					
							</div>
							<!--===================================================-->
							<!--End network line chart-->
					
						</div>
						<div class="col-lg-5">
							<div class="row">
								<div class="col-sm-6 col-lg-6">
					
									<!--Sparkline Area Chart-->
									<div class="panel panel-success panel-colorful text-center">
										<div class="panel-body">
					
											<!--Placeholder-->
											<div id="demo-sparkline-area"></div>
					
										</div>
										<div class="bg-light pad-ver">
											<h4 class="text-thin"><i class="fa fa-hdd-o"></i> HDD Usage</h4>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-lg-6">
					
									<!--Sparkline Line Chart-->
									<div class="panel panel-info panel-colorful text-center">
										<div class="panel-body">
					
											<!--Placeholder-->
											<div id="demo-sparkline-line"></div>
					
										</div>
										<div class="bg-light pad-ver">
											<h4 class="text-thin">Earning</h4>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6 col-lg-6">
					
									<!--Sparkline bar chart -->
									<div class="panel panel-purple panel-colorful text-center">
										<div class="panel-body">
					
											<!--Placeholder-->
											<div id="demo-sparkline-bar" class="box-inline"></div>
					
										</div>
										<div class="bg-light pad-ver">
											<h4 class="text-thin">Sales</h4>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-lg-6">
					
									<!--Sparkline pie chart -->
									<div class="panel panel-mint panel-colorful text-center">
										<div class="panel-body">
					
											<!--Placeholder-->
											<div id="demo-sparkline-pie" class="box-inline "></div>
					
										</div>
										<div class="bg-light pad-ver">
											<h4 class="text-thin">
												Top Movie
											</h4>
										</div>
									</div>
								</div>
							</div>
					
					
							<!--Extra Small Weather Widget-->
							<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
							<div class="panel middle">
								<div class="media-left pad-all">
									<canvas id="demo-weather-xs-icon" width="48" height="48"></canvas>
								</div>
					
								<div class="media-body">
									<p class="text-2x mar-no text-thin text-mint">25&#176;</p>
									<p class="text-muted mar-no">Partly Cloudy Day</p>
								</div>
							</div>
					
							<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
							<!--End Extra Small Weather Widget-->
					
					
						</div>
					</div>
					
					
					<!--Tiles - Bright Version-->
					<!--===================================================-->
					<div class="row">
						<div class="col-md-6 col-lg-3">
					
							<!--Registered User-->
							<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
							<div class="panel media pad-all">
								<div class="media-left">
									<span class="icon-wrap icon-wrap-sm icon-circle bg-success">
									<i class="fa fa-user fa-2x"></i>
									</span>
								</div>
					
								<div class="media-body">
									<p class="text-2x mar-no text-thin">241</p>
									<p class="text-muted mar-no">Registered User</p>
								</div>
							</div>
							<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
					
						</div>
						<div class="col-md-6 col-lg-3">
					
							<!--New Order-->
							<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
							<div class="panel media pad-all">
								<div class="media-left">
									<span class="icon-wrap icon-wrap-sm icon-circle bg-info">
									<i class="fa fa-shopping-cart fa-2x"></i>
									</span>
								</div>
					
								<div class="media-body">
									<p class="text-2x mar-no text-thin">543</p>
									<p class="text-muted mar-no">New Order</p>
								</div>
							</div>
							<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
					
						</div>
						<div class="col-md-6 col-lg-3">
					
							<!--Comments-->
							<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
							<div class="panel media pad-all">
								<div class="media-left">
									<span class="icon-wrap icon-wrap-sm icon-circle bg-warning">
									<i class="fa fa-comment fa-2x"></i>
									</span>
								</div>
					
								<div class="media-body">
									<p class="text-2x mar-no text-thin">34</p>
									<p class="text-muted mar-no">Comments</p>
								</div>
							</div>
							<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
					
						</div>
						<div class="col-md-6 col-lg-3">
					
							<!--Sales-->
							<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
							<div class="panel media pad-all">
								<div class="media-left">
									<span class="icon-wrap icon-wrap-sm icon-circle bg-danger">
									<i class="fa fa-dollar fa-2x"></i>
									</span>
								</div>
					
								<div class="media-body">
									<p class="text-2x mar-no text-thin">654</p>
									<p class="text-muted mar-no">Sales</p>
								</div>
							</div>
							<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
					
						</div>
					</div>
					<!--===================================================-->
					<!--End Tiles - Bright Version-->
					
					
					
					<div class="row">
						<div class="col-md-12 col-lg-7">
					
							<!--User table-->
							<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
							<div class="panel">
								<div class="panel-heading">
									<div class="panel-control">
										<a class="fa fa-question-circle fa-lg fa-fw unselectable add-tooltip" href="index.html#" data-original-title="<h4 class='text-thin'>Information</h4><p style='width:150px'>This is an information bubble to help the user.</p>" data-html="true" title=""></a>
									</div>
									<h3 class="panel-title">Member</h3>
								</div>
					
								<div class="panel-body">
									<table class="table table-striped table-hover mar-no">
										<thead>
											<tr>
												<th style="width:4ex">#</th>
												<th>Name</th>
												<th>Subscription</th>
												<th class="text-right">Actions</th>
											</tr>
										</thead>
					
										<tbody>
											<tr>
												<td>1</td>
												<td>Steve N. Horton</td>
												<td><span class="label label-success">Enterprise</span></td>
												<td class="text-right">
													<a class="btn btn-xs btn-default add-tooltip" data-toggle="tooltip" href="index.html#" data-original-title="Edit" data-container="body"><i class="fa fa-pencil"></i></a>
													<a class="btn btn-xs btn-danger add-tooltip"  data-toggle="tooltip" href="index.html#" data-original-title="Delete" data-container="body"><i class="fa fa-times"></i></a>
												</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Scott S. Calabrese</td>
												<td><span class="label label-warning">Trial</span></td>
												<td class="text-right">
													<a class="btn btn-xs btn-default add-tooltip" data-toggle="tooltip" href="index.html#" data-original-title="Edit" data-container="body"><i class="fa fa-pencil"></i></a>
													<a class="btn btn-xs btn-danger add-tooltip"  data-toggle="tooltip" href="index.html#" data-original-title="Delete" data-container="body"><i class="fa fa-times"></i></a>
												</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Teresa L. Doe</td>
												<td><span class="label label-primary">Premium</span></td>
												<td class="text-right">
													<a class="btn btn-xs btn-default add-tooltip" data-toggle="tooltip" href="index.html#" data-original-title="Edit" data-container="body"><i class="fa fa-pencil"></i></a>
													<a class="btn btn-xs btn-danger add-tooltip"  data-toggle="tooltip" href="index.html#" data-original-title="Delete" data-container="body"><i class="fa fa-times"></i></a>
												</td>
											</tr>
											<tr>
												<td>4</td>
												<td>Lucy Doe</td>
												<td><span class="label label-warning">Trial</span></td>
												<td class="text-right">
													<a class="btn btn-xs btn-default add-tooltip" data-toggle="tooltip" href="index.html#" data-original-title="Edit" data-container="body"><i class="fa fa-pencil"></i></a>
													<a class="btn btn-xs btn-danger add-tooltip"  data-toggle="tooltip" href="index.html#" data-original-title="Delete" data-container="body"><i class="fa fa-times"></i></a>
												</td>
											</tr>
											<tr>
												<td>5</td>
												<td>Charles S Boyle</td>
												<td><span class="label label-success">Enterprise</span></td>
												<td class="text-right">
													<a class="btn btn-xs btn-default add-tooltip" data-toggle="tooltip" href="index.html#" data-original-title="Edit" data-container="body"><i class="fa fa-pencil"></i></a>
													<a class="btn btn-xs btn-danger add-tooltip"  data-toggle="tooltip" href="index.html#" data-original-title="Delete" data-container="body"><i class="fa fa-times"></i></a>
												</td>
											</tr>
											<tr>
												<td>6</td>
												<td>Paul Aguilar</td>
												<td><span class="label label-warning">Trial</span></td>
												<td class="text-right">
													<a class="btn btn-xs btn-default add-tooltip" data-toggle="tooltip" href="index.html#" data-original-title="Edit" data-container="body"><i class="fa fa-pencil"></i></a>
													<a class="btn btn-xs btn-danger add-tooltip"  data-toggle="tooltip" href="index.html#" data-original-title="Delete" data-container="body"><i class="fa fa-times"></i></a>
												</td>
											</tr>
											<tr>
												<td>7</td>
												<td>Betty Murphy</td>
												<td><span class="label label-primary">Premium</span></td>
												<td class="text-right">
													<a class="btn btn-xs btn-default add-tooltip" data-toggle="tooltip" href="index.html#" data-original-title="Edit" data-container="body"><i class="fa fa-pencil"></i></a>
													<a class="btn btn-xs btn-danger add-tooltip"  data-toggle="tooltip" href="index.html#" data-original-title="Delete" data-container="body"><i class="fa fa-times"></i></a>
												</td>
											</tr>
											<tr>
												<td>8</td>
												<td>Steve N. Horton</td>
												<td><span class="label label-success">Enterprise</span></td>
												<td class="text-right">
													<a class="btn btn-xs btn-default add-tooltip" data-toggle="tooltip" href="index.html#" data-original-title="Edit" data-container="body"><i class="fa fa-pencil"></i></a>
													<a class="btn btn-xs btn-danger add-tooltip"  data-toggle="tooltip" href="index.html#" data-original-title="Delete" data-container="body"><i class="fa fa-times"></i></a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
							<!--End user table-->
					
					
							<div class="row">
					
								<!--Large tile (Visit Today)-->
								<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
								<div class="col-md-6 col-lg-4">
									<div class="panel panel-dark panel-colorful">
										<div class="panel-body text-center">
											<i class="fa fa-users fa-5x"></i>
											<hr>
											<p class="h2 mar-btm text-thin">254,487</p>
											<p class="text-uppercase mar-no text-sm">Visit Today</p>
											<small><span class="text-semibold">7%</span> Higher than yesterday</small>
										</div>
									</div>
								</div>
								<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
								<!--End large tile (Visit Today)-->
					
					
								<!--Large tile (Comments)-->
								<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
								<div class="col-md-6 col-lg-4">
									<div class="panel panel-danger panel-colorful">
										<div class="panel-body text-center">
											<i class="fa fa-comment fa-5x"></i>
											<hr>
											<p class="h2 mar-btm text-thin">873</p>
											<p class="text-uppercase mar-no text-sm">Comments</p>
											<small><span class="text-semibold"><i class="fa fa-unlock-alt fa-fw"></i> 154</span> Unapproved comments</small>
										</div>
									</div>
								</div>
								<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
								<!--Large tile (Comments)-->
					
					
								<!--Large tile (New orders)-->
								<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
								<div class="col-md-12 col-lg-4">
									<div class="panel panel-primary panel-colorful">
										<div class="panel-body text-center">
											<i class="fa fa-shopping-cart fa-5x"></i>
											<hr>
											<p class="h2 mar-btm text-thin">2,423</p>
											<p class="text-uppercase mar-no text-sm">New Orders</p>
											<small><span class="text-semibold"><i class="fa fa-shopping-cart fa-fw"></i> 954</span> Sales in this month</small>
										</div>
									</div>
								</div>
								<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
								<!--End Large tile (New orders)-->
					
					
							</div>
					
					
							<!--Simple pricing table-->
							<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
							<div class="row">
					
								<!--Personal Plan-->
								<div class="col-md-6 col-lg-4">
									<div class="panel plan">
										<div class="panel-body">
											<span class="plan-title">Personal</span>
											<p class="text-semibold text-mint">$99/year</p>
											<div class="plan-icon">
												<i class="fa fa-mobile-phone"></i>
											</div>
					
											<p class="text-muted pad-btm">
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
											</p>
											<button class="btn btn-block btn-primary btn-lg">Choose</button>
										</div>
									</div>
								</div>
					
								<!--Premium Plan-->
								<div class="col-md-6 col-lg-4">
									<div class="panel plan">
										<div class="panel-body">
											<span class="plan-title">Premium</span>
											<p class="text-semibold text-mint">$299/year</p>
											<div class="plan-icon">
												<i class="fa fa-laptop"></i>
											</div>
					
											<p class="text-muted pad-btm">
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
											</p>
											<button class="btn btn-block btn-mint btn-lg">Choose</button>
										</div>
									</div>
								</div>
					
								<!--Enterprise Plan-->
								<div class="col-md-12 col-lg-4">
									<div class="panel plan">
										<div class="panel-body">
											<span class="plan-title">Enterprise</span>
											<p class="text-semibold text-mint">$399/year</p>
											<div class="plan-icon">
												<i class="fa fa-desktop"></i>
											</div>
					
											<p class="text-muted pad-btm">
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
											</p>
											<button class="btn btn-block btn-purple btn-lg">Choose</button>
										</div>
									</div>
								</div>
					
							</div>
							<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
							<!--End Simple pricing table-->
					
					
							<div class="row">
								<div class="col-lg-6">
					
									<!--List Todo-->
									<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
									<div class="panel panel-dark panel-colorful">
										<div class="panel-heading">
											<div class="panel-control">
												<button class="btn btn-default"><i class="fa fa-gear"></i></button>
											</div>
											<h3 class="panel-title">To do list</h3>
										</div>
										<div class="pad-ver">
											<ul class="list-group bg-trans list-todo mar-no">
												<li class="list-group-item">
													<label class="form-checkbox form-icon">
														<input type="checkbox">
														<span>Find an idea.</span>
													</label>
												</li>
												<li class="list-group-item">
													<label class="form-checkbox form-icon active">
														<input type="checkbox" checked>
														<span>Do some work</span>
													</label>
												</li>
												<li class="list-group-item">
													<label class="form-checkbox form-icon active">
														<input type="checkbox" checked>
														<span>Redesign my logo</span>
													</label>
												</li>
												<li class="list-group-item">
													<label class="form-checkbox form-icon">
														<input type="checkbox">
														<span>Read the book</span>
													</label>
												</li>
												<li class="list-group-item">
													<label class="form-checkbox form-icon">
														<input type="checkbox">
														<span>Upgrade server</span>
													</label>
												</li>
												<li class="list-group-item">
													<label class="form-checkbox form-icon active">
														<input type="checkbox" checked>
														<span>Redesign my logo</span>
													</label>
												</li>
												<li class="list-group-item">
													<label class="form-checkbox form-icon active">
														<input type="checkbox" checked>
														<span>Redesign my logo</span>
													</label>
												</li>
												<li class="list-group-item">
													<label class="form-checkbox form-icon">
														<input type="checkbox">
														<span>Read the book</span>
													</label>
												</li>
											</ul>
										</div>
										<div class="input-group pad-all">
											<input type="text" class="form-control" placeholder="New task" autocomplete="off">
											<span class="input-group-btn">
												<button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
											</span>
										</div>
									</div>
									<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
									<!--End todo list-->
					
								</div>
								<div class="col-lg-6">
									<div class="row">
										<div class="col-sm-6 col-md-4 col-lg-6">
					
											<!--Sales tile-->
											<div class="panel panel-primary panel-colorful">
												<div class="pad-all text-center">
													<span class="text-5x text-thin">53</span>
													<p>Sales</p>
													<i class="fa fa-shopping-cart"></i>
												</div>
											</div>
					
										</div>
										<div class="col-sm-6 col-md-4 col-lg-6">
					
											<!--Messages tile-->
											<div class="panel panel-warning panel-colorful">
												<div class="pad-all text-center">
													<span class="text-5x text-thin">68</span>
													<p>Messages</p>
													<i class="fa fa-envelope"></i>
												</div>
											</div>
					
										</div>
										<div class="col-sm-6 col-md-4 col-lg-6">
					
											<!--Projects-->
											<div class="panel panel-purple panel-colorful">
												<div class="pad-all text-center">
													<span class="text-5x text-thin">32</span>
													<p>Projects</p>
													<i class="fa fa-code"></i>
												</div>
											</div>
					
										</div>
										<div class="col-sm-6 col-md-4 col-lg-6">
					
											<!--Reports-->
											<div class="panel panel-dark panel-colorful">
												<div class="pad-all text-center">
													<span class="text-5x text-thin">12</span>
													<p>Reports</p>
													<i class="fa fa-file-text"></i>
												</div>
											</div>
					
										</div>
										<div class="col-sm-6 col-md-4 col-lg-6">
					
											<!--New Items-->
											<div class="panel panel-info panel-colorful">
												<div class="pad-all text-center">
													<span class="text-5x text-thin">254</span>
													<p>New Items</p>
													<i class="fa fa-plus-circle"></i>
												</div>
											</div>
					
										</div>
										<div class="col-sm-6 col-md-4 col-lg-6">
					
											<!--Task-->
											<div class="panel panel-success panel-colorful">
												<div class="pad-all text-center">
													<span class="text-5x text-thin">52</span>
													<p>Task</p>
													<i class="fa fa-tasks"></i>
												</div>
											</div>
					
										</div>
									</div>
								</div>
							</div>
					
						</div>
						<div class="col-lg-5">
							<div class="row">
								<div class="col-md-6 col-lg-6">
					
									<!--Tile with progress bar (Comments)-->
									<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
									<div class="panel panel-mint panel-colorful">
										<div class="pad-all media">
											<div class="media-left">
												<span class="icon-wrap icon-wrap-xs">
													<i class="fa fa-comment fa-3x"></i>
												</span>
											</div>
											<div class="media-body">
												<p class="h3 text-thin media-heading">45.9%</p>
												<small class="text-uppercase">comments</small>
											</div>
										</div>
					
										<div class="progress progress-xs progress-dark-base mar-no">
											<div role="progressbar" aria-valuenow="45.9" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-light" style="width: 45.9%"></div>
										</div>
					
										<div class="pad-all text-right">
											<small><span class="text-semibold"><i class="fa fa-unlock-alt fa-fw"></i> 312</span> Unapproved comments</small>
										</div>
									</div>
									<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
									<!--End Tile with progress bar (Comments)-->
					
								</div>
								<div class="col-md-6 col-lg-6">
					
									<!--Tile with progress bar (New Orders)-->
									<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
									<div class="panel panel-purple panel-colorful">
										<div class="pad-all media">
											<div class="media-left">
												<span class="icon-wrap icon-wrap-xs">
													<i class="fa fa-shopping-cart fa-fw fa-3x"></i>
												</span>
											</div>
											<div class="media-body">
												<p class="h3 text-thin media-heading">5,345</p>
												<small class="text-uppercase">New Orders</small>
											</div>
										</div>
					
										<div class="progress progress-xs progress-dark-base mar-no">
											<div role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-light" style="width: 75%"></div>
										</div>
					
										<div class="pad-all text-right">
											<small><span class="text-semibold"><i class="fa fa-shopping-cart fa-fw"></i> 954</span> Sales in this month</small>
										</div>
									</div>
									<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
									<!--Tile with progress bar (New Orders)-->
					
								</div>
							</div>
					
							<!--Morris donut chart-->
							<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
							<div class="panel">
								<div class="panel-heading">
									<div class="panel-control">
										<button data-dismiss="panel" class="btn btn-default">
											<i class="fa fa-times"></i>
										</button>
									</div>
									<h3 class="panel-title">Services</h3>
								</div>
								<div class="panel-body">
					
									<div class="media-left">
					
										<!--Chart placeholder -->
										<div id="demo-morris-donut" style="width:200px; height:200px" class="morris-donut"></div>
					
									</div>
									<div class="media-body pad-lft">
										<div class="pad-ver">
											<p>Upgrade Progress</p>
											<div class="progress progress-sm">
												<div role="progressbar" style="width: 15%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="15" class="progress-bar progress-bar-purple">
													<span class="sr-only">15%</span>
												</div>
											</div>
											<small class="text-muted">15% Completed</small>
										</div>
										<div class="pad-ver">
											<p>Database</p>
											<div class="progress progress-sm">
												<div role="progressbar" style="width: 70%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar progress-bar-success">
													<span class="sr-only">70%</span>
												</div>
											</div>
											<small class="text-muted">70% Completed</small>
										</div>
					
										<hr>
										<p class="text-muted">Lorem ipsum dolor sit amet, consectetuer <a data-title="45%" class="add-tooltip text-semibold" href="index.html#" data-original-title="" title="">adipiscing elit</a>, sed diam nonummy nibh. Lorem ipsum dolor sit amet.</p>
										<small class="text-muted"><em>Last Update : Des 12, 2014</em></small>
									</div>
					
								</div>
							</div>
							<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
							<!--End Morris donut chart-->
					
					
							<!--Chat Widget-->
							<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
							<div class="panel">
					
								<!--Chat widget header-->
								<div class="panel-heading">
									<div class="panel-control">
										<div class="btn-group">
											<button class="btn btn-default" type="button" data-toggle="collapse" data-target="#demo-chat-body"><i class="fa fa-chevron-down"></i></button>
											<button type="button" class="btn btn-default" data-toggle="dropdown"><i class="fa fa-gear"></i></button>
											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="index.html#">Available</a></li>
												<li><a href="index.html#">Busy</a></li>
												<li><a href="index.html#">Away</a></li>
												<li class="divider"></li>
												<li><a id="demo-connect-chat" href="index.html#" class="disabled-link" data-target="#demo-chat-body">Connect</a></li>
												<li><a id="demo-disconnect-chat" href="index.html#" data-target="#demo-chat-body" >Disconect</a></li>
											</ul>
										</div>
									</div>
									<h3 class="panel-title">Chat</h3>
								</div>
					
								<!--Chat widget body-->
								<div id="demo-chat-body" class="collapse in">
									<div class="nano" style="height:500px">
										<div class="nano-content pad-all">
											<ul class="list-unstyled media-block">
												<li class="mar-btm">
													<div class="media-left">
														<img src="img/av1.png" class="img-circle img-sm" alt="Profile Picture">
													</div>
													<div class="media-body pad-hor">
														<div class="speech">
															<a href="index.html#" class="media-heading">John Doe</a>
															<p>Hello Lucy, how can I help you today ?</p>
															<p class="speech-time">
															<i class="fa fa-clock-o fa-fw"></i>09:23AM
															</p>
														</div>
													</div>
												</li>
												<li class="mar-btm">
													<div class="media-right">
														<img src="<?php echo base_url();?>template/back/img/av4.png" class="img-circle img-sm" alt="Profile Picture">
													</div>
													<div class="media-body pad-hor speech-right">
														<div class="speech">
															<a href="index.html#" class="media-heading">Lucy Doe</a>
															<p>Hi, I want to buy a new shoes.</p>
															<p class="speech-time">
																<i class="fa fa-clock-o fa-fw"></i> 09:23AM
															</p>
														</div>
													</div>
												</li>
												<li class="mar-btm">
													<div class="media-left">
														<img src="<?php echo base_url();?>template/back/img/av1.png" class="img-circle img-sm" alt="Profile Picture">
													</div>
													<div class="media-body pad-hor">
														<div class="speech">
															<a href="index.html#" class="media-heading">John Doe</a>
															<p>Shipment is free. You'll get your shoes tomorrow!</p>
															<p class="speech-time">
																<i class="fa fa-clock-o fa-fw"></i> 09:25
															</p>
														</div>
													</div>
												</li>
												<li class="mar-btm">
													<div class="media-right">
														<img src="img/av4.png" class="img-circle img-sm" alt="Profile Picture">
													</div>
													<div class="media-body pad-hor speech-right">
														<div class="speech">
															<a href="index.html#" class="media-heading">Lucy Doe</a>
															<p>Wow, that's great!</p>
															<p class="speech-time">
																<i class="fa fa-clock-o fa-fw"></i> 09:27
															</p>
														</div>
													</div>
												</li>
												<li class="mar-btm">
													<div class="media-right">
														<img src="<?php echo base_url();?>template/back/img/av4.png" class="img-circle img-sm" alt="Profile Picture">
													</div>
													<div class="media-body pad-hor speech-right">
														<div class="speech">
															<a href="index.html#" class="media-heading">Lucy Doe</a>
															<p>Ok. Thanks for the answer. Appreciated.</p>
															<p class="speech-time">
															<i class="fa fa-clock-o fa-fw"></i> 09:28
															</p>
														</div>
													</div>
												</li>
												<li class="mar-btm">
													<div class="media-left">
														<img src="<?php echo base_url();?>template/back/img/av1.png" class="img-circle img-sm" alt="Profile Picture">
													</div>
													<div class="media-body pad-hor">
														<div class="speech">
															<a href="index.html#" class="media-heading">John Doe</a>
															<p>You are welcome! <br/> Is there anything else I can do for you today?</p>
															<p class="speech-time">
																<i class="fa fa-clock-o fa-fw"></i> 09:30
															</p>
														</div>
													</div>
												</li>
												<li class="mar-btm">
													<div class="media-right">
														<img src="<?php echo base_url();?>template/back/img/av4.png" class="img-circle img-sm" alt="Profile Picture">
													</div>
													<div class="media-body pad-hor speech-right">
														<div class="speech">
															<a href="index.html#" class="media-heading">Lucy Doe</a>
															<p>Nope, That's it.</p>
															<p class="speech-time">
																<i class="fa fa-clock-o fa-fw"></i> 09:31
															</p>
														</div>
													</div>
												</li>
												<li class="mar-btm">
													<div class="media-left">
														<img src="<?php echo base_url();?>template/back/img/av1.png" class="img-circle img-sm" alt="Profile Picture">
													</div>
													<div class="media-body pad-hor">
														<div class="speech">
															<a href="index.html#" class="media-heading">John Doe</a>
															<p>Thank you for contacting us today</p>
															<p class="speech-time">
																<i class="fa fa-clock-o fa-fw"></i> 09:32
															</p>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
					
					
					
									<!--Chat widget footer-->
									<div class="panel-footer">
										<div class="row">
											<div class="col-xs-9">
												<input type="text" placeholder="Enter your text" class="form-control chat-input">
											</div>
											<div class="col-xs-3">
												<button class="btn btn-primary btn-block" type="submit">Send</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
							<!--End Chat Widget-->
					
					
							<!--Weather Widget-->
							<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
							<div id="demo-weather-widget" class="panel panel-mint panel-colorful text-center">
								<div class="panel-body">
					
									<!--Weather widget body-->
									<div class="row pad-top">
										<div class="col-xs-6">
											<canvas id="demo-weather-icon-1" width="98" height="98"></canvas>
										</div>
										<div class="col-xs-6">
											<p class="text-4x">27&#176;</p>
											<p class="text-semibold">Partly Cloudy Day</p>
										</div>
									</div>
					
									<h4 class="mar-no pad-top">San Jose, CA</h4>
									<p>Today</p>
					
									<hr>
					
									<!--Weather widget footer-->
									<ul class="list-unstyled text-center clearfix">
										<li class="col-xs-3">
											<canvas id="demo-weather-icon-2" width="32" height="32"></canvas>
											<p class="text-sm mar-no">Saturday</p>
											<p>25 &#176;C</p>
										</li>
										<li class="col-xs-3">
											<canvas id="demo-weather-icon-3" width="32" height="32"></canvas>
											<p class="text-sm mar-no">Sunday</p>
											<p>22 &#176;C</p>
										</li>
										<li class="col-xs-3">
											<canvas id="demo-weather-icon-4" width="32" height="32"></canvas>
											<p class="text-sm mar-no">Monday</p>
											<p>20 &#176;C</p>
										</li>
										<li class="col-xs-3">
											<canvas id="demo-weather-icon-5" width="32" height="32"></canvas>
											<p class="text-sm mar-no">Monday</p>
											<p>28 &#176;C</p>
										</li>
									</ul>
								</div>
							</div>
							<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
							<!--End Weather Widget-->
					
						</div>
					</div>
					
					
					
				</div>
				<!--===================================================-->
				<!--End page content-->


			</div>
			<!--===================================================-->
			<!--END CONTENT CONTAINER-->