<!--CONTENT CONTAINER-->
<div id="content-container" style="padding-top: 15px !important;">
	<!--Page content-->
    <div id="page-content">
        <div class="row">
            <div class="col-lg-12">
			
                <div class="panel">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">Edit Education Level</h3></center>
                    </div>
					<?php 
						$education_level = $this->db->get_where('education_level',array('education_level_id' => $id))->result_array();
						foreach($education_level as $row)
                        { 
                    ?>
                    <!--Form for Age Categoryt-->
                    <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/education_level/do_update/<?php echo $row['education_level_id'] ?>" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                        <div class="panel-body">
							<!--Name--------->
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="name">Name</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Name" name="name" 
                                    class="form-control input-sm" id="name" value="<?php echo $row['name'];?>">
                                </div>
                            </div>
							<hr>
                        </div>
                            
                            <div class="panel-footer" style="">
								<div class="row">
									<div class="col-sm-9 col-sm-offset-3">
										<button class="btn btn-success btn-labeled fa fa-wrench fa-lg" 
										type="submit">Edit Education Level</button>
									</div>
								</div>
							</div>
							<hr>
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