<div id="content-container">
<div class="row">
    <div class="col-lg-12">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Hover rows</h3>
            </div>

            <!--Hover Rows-->
            <!--===================================================-->
            <div class="panel-body">
            	<div class="col-lg-12">
					<button class="btn btn-dark btn-labeled fa fa-plus-circle pull-right" 
                                style="border-radius:3px !important;margin-top:10px !important;" 
                                        class="btn btn-warning" 
                                            data-target="#demo-lg-modal" data-toggle="modal" 
                                                onClick="modal_form('education_category_add','1')">
                            <i class="entypo-user-add"></i> Create Education Category</button>
				</div>
                <table id="demo-table" class="table-striped" data-toolbar="#demo-custom-toolbar" data-sort-name="id" data-sort-order="desc" data-pagination="true" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1">
                    <thead>
                        <tr>
							<th>Level</th>
							<th>Education Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
						<?php 
							foreach($education_category as $row)
							{
						?>
							<tr>
								<td><?php echo $row['level'];?></td>
								<td><?php echo $row['name'];?></td>
								<td>
									<a data-target="#demo-lg-modal" data-toggle="modal" 
                                                        onClick="modal_form('education_category_profile',<?php echo $row['education_category_id']; ?>)">
										<button class="btn btn-info btn-xs btn-labeled fa fa-location-arrow">Profile</button>
									</a>
									<a data-target="#demo-lg-modal" data-toggle="modal" 
                                                            onClick="modal_form('education_category_edit',<?php echo $row['education_category_id']; ?>)">
										<button class="btn btn-success btn-xs btn-labeled fa fa-wrench">Edit</button>
									</a>
									<a href="<?php echo base_url();?>index.php/admin/education_category/delete/<?php echo $row['education_category_id']; ?>">
										<button class="btn btn-danger btn-xs btn-labeled fa fa-trash" onclick="return confirm('Are you sure?');">Delete</button>
									</a>
								</td>
							</tr> 
						<?php
							}
						?>						
                    </tbody> 
                </table>
            </div>
            <!--===================================================-->
            <!--End Hover Rows-->
        </div>
    </div>
</div>
</div>

<script>

$(document).ready(function() {

	$('#demo-table').bootstrapTable();


});
</script>