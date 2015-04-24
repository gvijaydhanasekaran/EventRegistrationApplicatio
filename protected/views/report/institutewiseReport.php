<title>Institute wise report</title>
<!--<table data-toggle="table" data-url="data1.json" data-cache="false" data-height="299">
    <thead>
        <tr>
            <th>Item ID</th>
            <th>Item Name</th>
            <th>Item Price</th>
        </tr>
    </thead>
    <tbody>
    	<tr>
    		<td>vijay</td>
    		<td>vijay</td>
    		<td>vijay</td>
    	</tr>
    </tbody>
</table> -->

<style type="text/css">
.contentTable{
	width: 100%;
}

table {
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
}

</style>

<?php if($collegeId):
$collegeModel = Institute::model()->findByPk($collegeId);
    if($collegeModel):?>
        <div class="row show-grid">
            <div class="col-md-4"><h4>Institute Name : </h4></div>
            <div class="col-md-8"><h4><b><u><?php echo $collegeModel->institutename?:""; ?></u></b></h4></div>
        </div>
<?php 
    endif;
endif;
?>

<?php if($courseId):
$CourseModel = Course::model()->findByPk($courseId);
    if($CourseModel):?>
        <div class="row show-grid">
            <div class="col-md-4"><h4>Course : </h4></div>
            <div class="col-md-5"><h4><b><u><?php echo $CourseModel->coursename?:""; ?></u></b></h4></div>
        </div>
<?php 
    endif;
endif;
?>
<div style="clear:both;margin-top:25px;"></div>


<?php if($model){ $count = 1;?>
<table class="contentTable">
    <thead>
        <tr>
            <th>NO</th>
            <th>Name</th>
            <th>Event</th>
        </tr>
    </thead>
    <tbody>
<?php foreach ($model as $data) { ?>


    	<tr class="contentTable">
    		<td><?php echo $count ? : ""; ?></td>
    		<td><?php echo $data->studentname ? : ""; ?></td>
    		<td>
				<?php
				$eventModel = StudentEvents::model()->findAllByAttributes(array('studentId'=>$data->id));
				if($eventModel){ ?>
					<table class="contentTable">
						<thead>
							<tr>
								<th>Event name</th>
								<th>Time</th>
							</tr>
						</thead>
						<tbody>
					<?php foreach ($eventModel as $event) {?>
						<tr>
							<td><?php echo $event->eventRel->eventname ? : "";?></td>
							<td><?php echo $event->eventRel->eventtime ? : ""; ?></td>
						</tr>	
				<?php		
					}
					echo "</tbody></table>";
				}
				
				?>
			</td>
    	</tr>
		<?php $count++; ?>

<?php
	}
echo "    </tbody>
</table>
";	
}else{
	echo "No Results Found";
}	

?>