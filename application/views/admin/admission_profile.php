<!--CONTENT CONTAINER-->
<?php 
		
		foreach($admission as $row)
        { 
?>
<div id="content-container" style="padding-top:50px !important;">
	<h4 class="modal-title">Profile of <?php echo $row['baby_name'];?></h4>
	<hr style="margin-top: 10px !important;">
		<div class="text-center pad-all">
			<div class="pad-ver">
				<img src="<?php echo base_url(); ?>uploads/baby_image/baby_<?php echo $row['admission_id'];?>.jpg"  class="img-md img-border img-circle" alt="Profile Picture">
			</div>
			<h4 class="text-lg text-overflow mar-no"><?php echo $row['baby_name']?></h4>
			<p class="text-sm">Digital Marketing Director</p>
			
			<hr>
		</div>


<div class="row">
    <div class="col-sm-12">
        <div class="panel-body">
		
            <table class="table table-striped" style="border-radius:3px;">
                <tr>
                    <th class="custom_td">Admission Date</th>
                    <td class="custom_td"><?php echo $row['admission_date']?></td>
                </tr>
                <tr>
                    <th class="custom_td">Baby Name</th>
                    <td class="custom_td"><?php echo $row['baby_name']?></td>
                </tr>
                <tr>
                    <th class="custom_td">Age Category</th>
                    <td class="custom_td"><?php echo $row['age_category']?></td>
                </tr>
                <tr>
                    <th class="custom_td">Education Level</th>
                    <td class="custom_td"><?php echo $row['education_level']?></td>
                </tr>
                <tr>
                    <th class="custom_td">Education Category</th>
                    <td class="custom_td"><?php echo $row['education_category']?></td>
                </tr>
				<tr>
                    <th class="custom_td">Guardian Name</th>
                    <td class="custom_td"><?php echo $row['guardian_name']?></td>
                </tr>
                <tr>
                    <th class="custom_td">Relation</th>
                    <td class="custom_td"><?php echo $row['relation']?></td>
                </tr>
            </table>
			
        </div>
		  
            <!--===================================================-->
            <!--End Hover Rows-->

    </div>
</div>					
</div>
			<?php 
				}
			?>
            
<style>
.custom_td{
border-left: 1px solid #ddd;
border-right: 1px solid #ddd;
border-bottom: 1px solid #ddd;
}
</style>