
<div class="row">
     <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Event Wise Report</h1>
    </div>
    <!--end page header -->
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'student-form',
	'type' => 'horizontal',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('target'=>'_blank'),
)); ?>



	<div class="form-group">
		<?php echo $form -> labelEx($model, 'courseId', array('class' => 'col-sm-3 control-label')); ?>
		<div class="col-sm-9">
			<?php
				$CourseArray = Course::getCourseList();

			$form -> widget('bootstrap.widgets.TbSelect2', 
				array(
					'model' => $model,
					'attribute' => 'courseId', 
					'data' => CHtml::listData($CourseArray, 'id', 'coursename'), 
					'options' => array('allowClear' => true, ), 
					'htmlOptions' => array(
						//'empty'=>'',
						'placeholder' => "Select Course", 
						'style' => 'width:380px;', 
						'id' => 'courseId',
						'class'=>'span5',
					), 
				)); 
			?>
			<?php echo $form -> error($model, 'courseId'); ?>
		</div>
	</div>

<?php $retailerId = 0; ?>
	<div class="form-group">
        <?php echo $form->labelEx($model,'event',array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-9">
            <?php 
               $storesArray = Event::getEventList($retailerId);
               
               $form->widget('bootstrap.widgets.TbSelect2',array(
                    'model'=>$model,
                    'attribute'=>'event',
                    'data'=>CHtml::listData($storesArray, 'id', 'name'),
                    'options'=>array(
                                'allowClear'=>true,
                              ),
                    'htmlOptions'=>array(
                                'placeholder'=>"First Select a Course",
                                'style'=>'width:380px;',
                    ),
                ));    
            ?>
            <?php echo $form->error($model,'event'); ?>
        </div>
    </div>

<?php //echo $form->textFieldGroup($model,'event',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>200)))); ?>


<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Report' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>

			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
$(document).ready(function(){
		$('#courseId').select2().on('change', function() {
			retailerChange();
		});
		
		function retailerChange(){
			//alert($("#courseId").val());
	        $.ajax({
	            type:"POST",
	            url:"<?php echo Yii::app()->createUrl('report/DynamicEvents'); ?>",
	            data:{ 'data':$("#courseId").val() },
	            dataType:"json",
	            success:function(data){
	            	console.log(data);
					$("#Student_event").html(data.Events);
					$("#Student_event").select2();
	            },
	            error:function(){
	                
	            },
	        });
		}
});		
</script>