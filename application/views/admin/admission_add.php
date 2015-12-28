<div id="content-container" style="padding-top: 35px !important;">
<!--Page content-->
<div id="page-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                    <center><h3 class="panel-title">Please fill the form to Admission</h3></center>
                </div>
                <!--Form for Admission-->
                <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/admission/add" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                    <div class="panel-body">
						<!--Admission Date--------->
                        <div class="form-group">
                            <label for="demo-is-inputlarge" 
                            class="col-sm-3 control-label">Admission Date</label>
                            <div class="col-sm-6">
                                <div id="demo-dp-component">
                                    <div class="input-group date">
                                        <input type="text" class="form-control" name="admission_date">
                                        <span class="input-group-addon"><i class="fa fa-calendar fa-lg"></i></span>
                                    </div>
                                    <small class="text-muted">Auto close on select</small>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <!-- Baby Name--------->
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="name">Baby Name</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Baby Name" name="baby_name" 
                                class="form-control input-sm" id="name">
                            </div>
                        </div>
                        <hr>
						<!--Age Category--------->
						<div class="form-group">
                            <label class="col-sm-3 control-label">Age Category</label>
                            <div class="col-sm-6">
                                <select data-placeholder="Choose a Age Category..." name="age_category" id="demo-chosen-select" tabindex="2">
                                    <option value="">Choose a Age Category...</option>
                                    <?php
                                        $age_category = $this->db->get('age_category')->result_array();
                                        foreach($age_category as $row){
                                    ?>
                                    <option value="<?php echo $row['start_age']; ?> to <?php echo $row['end_age']; ?>"><?php echo $row['start_age']; ?> to <?php echo $row['end_age']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
						<hr>
						<!--Education Level--------->
						<div class="form-group">
                            <label class="col-sm-3 control-label">Education Level</label>
                            <div class="col-sm-6">
                                <select data-placeholder="Choose a Education Level..." name="education_level" id="demo-chosen-select" tabindex="2">
                                    <option value="">Choose a Education Level...</option>
                                    <?php
                                        $education_level = $this->db->get('education_level')->result_array();
                                        foreach($education_level as $row){
                                    ?>
                                    <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
						<hr>
						<!--Education Category--------->
						<div class="form-group">
                            <label class="col-sm-3 control-label">Education Category</label>
                            <div class="col-sm-6">
                                <select data-placeholder="Choose a Education Category..." name="education_category" id="demo-chosen-select" tabindex="2">
                                    <option value="">Choose a Education Category...</option>
                                    <?php
                                        $education_category = $this->db->get('education_category')->result_array();
                                        foreach($education_category as $row){
                                    ?>
                                    <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
						<hr>
						<!--Guardian Name--------->
						<div class="form-group">
                            <label class="col-sm-3 control-label">Guardian Name</label>
                            <div class="col-sm-6">
                                <select data-placeholder="Choose a Guardian Name..." name="guardian_name" id="demo-chosen-select" tabindex="2">
                                    <option value="">Choose a Guardian Name...</option>
                                    <?php
                                        $guardians = $this->db->get('guardians')->result_array();
                                        foreach($guardians as $row){
                                    ?>
                                    <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
						<hr>
						<!-- Relation--------->
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="name">Relation</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Relation" name="relation" 
                                class="form-control input-sm" id="name">
                            </div>
                        </div>
                        <hr>
						<!--Photo--------->
                        <div class="form-group">
                            <label for="demo-is-inputlarge" class="col-sm-3 control-label">Photo</label>
                            <div class="col-sm-6">
                               <span class="pull-left btn btn-default btn-file">
                                    Choose your photo <input type="file" name="image">
                                </span>
                            </div>
                        </div>
						<hr>
                     </div>
                        
             </div>
                        
                    <div class="panel-footer" style="">
                        <div class="row">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button class="btn btn-success btn-labeled fa fa-user fa-lg" 
                                type="submit">Save</button>
                            </div>
                        </div>
                    </div>
                    </div>  
                </form>
            </div>
        </div>
    </div>


<script>
	// FORM VALIDATION ON TABS
	// =================================================================
	$('#demo-bv-bsc-tabs').bootstrapValidator({
		excluded: [':disabled'],
		feedbackIcons: faIcon,
		fields: {
			name: {
				validators: {
					notEmpty: {
						message: 'The full name is required'
					}
				}
			}
		}
	}).on('status.field.bv', function(e, data) {
		var $form     = $(e.target),
		validator = data.bv,
		$tabPane  = data.element.parents('.tab-pane'),
		tabId     = $tabPane.attr('id');

		if (tabId) {
			var $icon = $('a[href="#' + tabId + '"][data-toggle="tab"]').parent().find('i');
	
			// Add custom class to tab containing the field
			if (data.status == validator.STATUS_INVALID) {
				$icon.removeClass(faIcon.valid).addClass(faIcon.invalid);
			} else if (data.status == validator.STATUS_VALID) {
				var isValidTab = validator.isValidContainer($tabPane);
				$icon.removeClass(faIcon.valid).addClass(isValidTab ? faIcon.valid : faIcon.invalid);
			}
		}
	});

</script>