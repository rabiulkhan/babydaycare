<!--CONTENT CONTAINER-->
<?php 
		$education_category = $this->db->get_where('education_category',array('education_category_id' => $id))->result_array();
		foreach($education_category as $row)
        { 
?>
<div id="content-container" style="padding-top:50px !important;">
	<hr style="margin-top: 10px !important;">


<div class="row">
    <div class="col-sm-12">
        <div class="panel-body">
		
            <table class="table table-striped" style="border-radius:3px;">
				<tr>
                    <th class="custom_td">Education Category</th>
                    <td class="custom_td"><?php echo $row['name']?></td>
                </tr>
				<tr>
                    <th class="custom_td">Level</th>
                    <td class="custom_td"><?php echo $row['level']?></td>
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