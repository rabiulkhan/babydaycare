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
				<a  href="<?php echo base_url();?>index.php/admin/teachers_add">
					<button class="btn btn-dark btn-labeled fa fa-plus-circle pull-right">Create Teachers</button>
                </a>
				</div>
                <table id="demo-table" class="table-striped" data-toolbar="#demo-custom-toolbar" data-sort-name="id" data-sort-order="desc" data-pagination="true" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1">
                    <thead>
                        <tr>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Appointment Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
						<?php 
							foreach($teachers as $row)
							{
						?>
							<tr>
								<td><img src="<?php echo base_url(); ?>uploads/teachers_image/teachers_<?php echo $row['teachers_id']; ?>.jpg" class="img-sm img-circle" width="130" /></td>
								<td><?php echo $row['name'];?></td>
								<td><?php echo $row['email'];?></td>
								<td><?php echo $row['appointment_date'];?></td>
								<td>
									<a href="<?php echo base_url();?>index.php/admin/teachers/profile/<?php echo $row['teachers_id']; ?>">
										<button class="btn btn-info btn-xs btn-labeled fa fa-location-arrow">Profile</button>
									</a>
									<a href="<?php echo base_url();?>index.php/admin/teachers_edit/edit_view/<?php echo $row['teachers_id']; ?>">
										<button class="btn btn-success btn-xs btn-labeled fa fa-wrench">Edit</button>
									</a>
									<a href="<?php echo base_url();?>index.php/admin/teachers/delete/<?php echo $row['teachers_id']; ?>">
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