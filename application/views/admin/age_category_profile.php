<!--CONTENT CONTAINER-->
<?php 
		$age_category = $this->db->get_where('age_category',array('age_category_id' => $id))->result_array();
		foreach($age_category as $row)
        { 
?>
<div id="content-container" style="padding-top:50px !important;">
	<h4 class="modal-title">Profile of <?php echo $row['name'];?></h4>
	<hr style="margin-top: 10px !important;">


<div class="row">
    <div class="col-sm-12">
        <div class="panel-body">
		
            <table class="table table-striped" style="border-radius:3px;">
				<tr>
                    <th class="custom_td">Name</th>
                    <td class="custom_td"><?php echo $row['name']?></td>
                </tr>
                <tr>
                    <th class="custom_td">Start Age</th>
                    <td class="custom_td"><?php echo $row['start_age']?></td>
                </tr>
				<tr>
                    <th class="custom_td">End Age</th>
                    <td class="custom_td"><?php echo $row['end_age']?></td>
                </tr>
            </table>
        </div>
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