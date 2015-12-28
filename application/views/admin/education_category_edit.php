<!--CONTENT CONTAINER-->
<div id="content-container" style="padding-top: 15px !important;">
	<!--Page content-->
    <div id="page-content">
        <div class="row">
            <div class="col-lg-12">
			
                <div class="panel">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">Edit Education Category</h3></center>
                    </div>
					<?php 
						$education_category = $this->db->get_where('education_category',array('education_category_id' => $id))->result_array();
						foreach($education_category as $row)
                        { 
                    ?>
                    <!--Form for Age Categoryt-->
                    <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/education_category/do_update/<?php echo $row['education_category_id'] ?>" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                        <div class="panel-body">
							<!--Level-->
							<div class="form-group">
								<label class="col-sm-3 control-label">Level</label>
								<div class="col-sm-6">
									<select data-placeholder="Choose a Level..." name="level" id="demo-chosen-select2" tabindex="2">
										<option value="">Choose a Level...</option>
										<?php
											$education_level = $this->db->get('education_level')->result_array();
											foreach($education_level as $row1){
										?>
										<option value="<?php echo $row1['name']; ?>" <?php if($row1['name'] == $row['level']){echo 'selected';} ?>><?php echo $row1['name']; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<!--Name--------->
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="name">Education Category</label>
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