<div id="content-container" style="padding-top: 35px !important;">
<!--Page content-->
<div id="page-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                    <center><h3 class="panel-title">Please fill the form to creat Education Category</h3></center>
                </div>
                <!--Form for Age Category-->
                <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/education_category/add" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                    <div class="panel-body">
						<!--Level--------->
						<div class="form-group">
                            <label class="col-sm-3 control-label">Level</label>
                            <div class="col-sm-6">
                                <select data-placeholder="Choose a Level..." name="level" id="demo-chosen-select" tabindex="2">
                                    <option value="">Choose a Level...</option>
                                    <?php
                                        $education_level = $this->db->get('education_level')->result_array();
                                        foreach($education_level as $row1){
                                    ?>
                                    <option value="<?php echo $row1['name']; ?>"><?php echo $row1['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
						<hr>
						<!--Name--------->
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="name">Education Category</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Name" name="name" 
                                class="form-control input-sm" id="name">
                            </div>
                        </div>
						<hr>
						
                     </div>
                        
             </div>
                        
                    <div class="panel-footer" style="">
                        <div class="row">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button class="btn btn-success btn-labeled fa fa-user fa-lg" 
                                type="submit">Creat Education Category</button>
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