<!--CONTENT CONTAINER-->
<div id="content-container" style="padding-top: 15px !important;">
	<!--Page content-->
    <div id="page-content">
        <div class="row">
            <div class="col-lg-12">
			
                <div class="panel">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">Edit Care Time Category</h3></center>
                    </div>
					<?php 
						$care_time_category = $this->db->get_where('care_time_category',array('care_time_category_id' => $id))->result_array();
						foreach($care_time_category as $row)
                        { 
                    ?>
                    <!--Form for Accountant-->
                    <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/care_time_category/do_update/<?php echo $row['care_time_category_id'] ?>" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
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
                        </div>
                            
                            <div class="panel-footer" style="">
								<div class="row">
									<div class="col-sm-9 col-sm-offset-3">
										<button class="btn btn-success btn-labeled fa fa-wrench fa-lg" 
										type="submit">Edit Care Time Category</button>
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