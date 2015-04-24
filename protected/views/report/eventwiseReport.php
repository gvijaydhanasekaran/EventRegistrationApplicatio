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
.noBorder{
    border: 0px solid black !important;
}
</style>

<?php if($courseId):
$CourseModel = Course::model()->findByPk($courseId);
    if($CourseModel):?>
        <table class="noBorder">
            <tr class="noBorder">
                <td class="noBorder">
                    <h4>Course : </h4>
                </td>
                <td class="noBorder">
                    <h4><b><u><?php echo $CourseModel->coursename?:""; ?></u></b></h4>
                </td>
            </tr>
        </table>        
<?php 
    endif;
endif;
?>

<?php if($eventId):
$eventModel = Event::model()->findByPk($eventId);
    if($eventModel):?>
        <table class="noBorder">
            <tr class="noBorder">
                <td class="noBorder">
                    <h4>Event Name : </h4>
                </td>
                <td class="noBorder">
                    <h4><b><u><?php echo $eventModel->eventname?:""; ?></u></b></h4>
                </td>
            </tr>
            <tr class="noBorder">
                <td class="noBorder">
                    <h4>Event Time : </h4>
                </td>
                <td class="noBorder">
                    <h4><b><u><?php echo $eventModel->eventtime?:""; ?></u></b></h4>
                </td>
            </tr>            
        </table>
<?php 
    endif;
endif;

?>
<div style="clear:both;margin-top:25px;"></div>


<?php if(count($model)>1){ $count = 1;?>
<table class="contentTable">
    <thead>
        <tr>
            <th>NO</th>
            <th>Name</th>
            <th>Institute</th>
        </tr>
    </thead>
    <tbody>
<?php foreach ($model as $data) { //print_r(count($model));exit();?>


    	<tr class="contentTable">
    		<td style="width:10%"><?php echo $count ? : ""; ?></td>
    		<td><?php echo $data->studentRel->studentname ? : ""; ?></td>
    		<td>
				<?php echo $data->studentRel->instituteRel->institutename ? : ""; ?>
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