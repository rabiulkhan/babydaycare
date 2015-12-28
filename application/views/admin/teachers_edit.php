<!--CONTENT CONTAINER-->
<div id="content-container" style="padding-top: 15px !important;">
	<!--Page content-->
    <div id="page-content">
        <div class="row">
            <div class="col-lg-12">
			
                <div class="panel">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">Edit Teachers</h3></center>
                    </div>
					<?php 
					
						foreach($teachers as $row)
                        { 
                    ?>
                    <!--Form for Accountant-->
                    <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/teachers/do_update/<?php echo $row['teachers_id'] ?>" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                        <div class="panel-body">
                            <!--Name--------->
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="name">Name</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="name" name="name" 
                                    class="form-control input-sm" id="name" value="<?php echo $row['name'];?>">
                                </div>
                            </div>
							<hr>
                            <!--Email--------->
                            <div class="form-group">
                                <label for="email_set" class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-6">
                                    <input type="email" placeholder="Email" name="email" 
                                    	class="form-control input-lg" 
                                        	id="email_set" value="<?php echo $row['email']; ?>">
                                </div>
                            </div>
                            <hr>
                            <!--Password--------->
                            <div class="form-group">
                                <label for="password" 
                                class="col-sm-3 control-label">Password</label>
                                <div class="col-sm-6">
                                    <input type="password" placeholder="password" 
                                        name="password" class="form-control input-lg" 
                                            id="password" value="<?php echo $row['password']; ?>">
                                </div>
                            </div>
                            <hr>
                            <!--Address--------->
                            <div class="form-group">
                                <label for="demo-textarea-input" 
                                class="col-sm-3 control-label">Address</label>
                                <div class="col-sm-6">
                                    <textarea placeholder="Address" rows="6" class="form-control"  value="<?php echo $row['address'];?>"><?php echo $row['address'];?></textarea>
                                </div>
                            </div>
                            <hr>
                            <!--Phone Number--------->
                            <div class="form-group">
                                <label for="demo-is-inputlarge" 
                                class="col-sm-3 control-label">Phone Number</label>
                                <div class="col-sm-6">
                                    <input type="number" id="demo-msk-phone" class="form-control" 
                                    placeholder="(999) 999-9999" value="<?php echo $row['phone_number']?>" >
                                </div>
                            </div>
                            <hr>
                            <!--Gender--------->
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="demo-is-inputsmall">Gender</label>
                                <div class="col-sm-6">
                                    <select class="selectpicker" 
                                        title="Choose one of the following..." data-width="100%" 
                                        style="display: none;"
                                         name="gender" >
                                        <option value="" >Select One</option>
                                        <option value="male" >Male</option>
                                        <option value="female">Female</option>
										
                                    </select>
                                </div>
                            </div>
							<hr>
                            <!--Appointment Date--------->
                            <div class="form-group">
                                <label for="demo-is-inputlarge" 
                                class="col-sm-3 control-label">Appointment Date</label>
                                <div class="col-sm-6">
                                    <div id="demo-dp-component">
                                        <div class="input-group date">
                                            <input type="date" class="form-control" value="<?php echo $row['appointment_date']?>" >
                                            <span class="input-group-addon"><i class="fa fa-calendar fa-lg"></i></span>
                                        </div>
                                        <small class="text-muted">Auto close on select</small>
                                    </div>
                                </div>
                            </div>
							<hr>
						<div class="form-group">
                            <label class="col-sm-3 control-label" for="name">Facebook</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="facebook link" name="facebook" 
                                class="form-control input-sm" id="facebook" value="<?php echo $row['facebook']?>">
                            </div>
                        </div>
						<hr>
						 <div class="form-group">
                            <label class="col-sm-3 control-label" for="name">Twiter</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="twiter link" name="twiter" 
                                class="form-control input-sm" id="twiter" value="<?php echo $row['twiter']?>">
                            </div>
                        </div>
						<hr>
						<div class="form-group">
                            <label class="col-sm-3 control-label" for="name">Google Plus</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="google plus link" name="google_plus" 
                                class="form-control input-sm" id="google_plus" value="<?php echo $row['google_plus']?>">
                            </div>
                        </div>
						<hr>
                        <!--Photo--------->
                            <div class="form-group">
                                <label for="demo-is-inputlarge" class="col-sm-3 control-label">Photo</label>
									<div class="col-sm-6">
									   <span class="pull-left btn btn-default btn-file">
											Choose your photo <input type="file" name="image" value="<?php echo base_url(); ?>uploads/teachers_image/teachers_<?php echo $row['teachers_id']; ?>.jpg">
										</span>
									</div>
								</div>    
							</div>
							<hr> 
                            <div class="panel-footer" style="">
								<div class="row">
									<div class="col-sm-9 col-sm-offset-3">
										<button class="btn btn-success btn-labeled fa fa-wrench fa-lg" 
										type="submit">Edit Teachers</button>
									</div>
								</div>
							</div>
					  
                    </form>
					<?php 
						}
					?>	
                </div>
            </div>
        </div>
    </div>
</div>
    
				<!--===================================================-->
				<!--End page content-->

			<!--===================================================-->
			<!--END CONTENT CONTAINER-->