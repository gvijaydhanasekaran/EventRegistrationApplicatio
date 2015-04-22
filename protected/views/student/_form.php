<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'student-form',
	'type' => 'horizontal',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'studentname',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>200)))); ?>

	<?php //echo $form->textFieldGroup($model,'collegeId',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
	<div class="form-group">
		<?php echo $form -> labelEx($model, 'collegeId', array('class' => 'col-sm-3 control-label')); ?>
		<div class="col-sm-9">
			<?php
				$InstituteArray = Institute::getInstituteList();

			$form -> widget('bootstrap.widgets.TbSelect2', 
				array(
					'model' => $model,
					'attribute' => 'collegeId', 
					'data' => CHtml::listData($InstituteArray, 'id', 'institutename'), 
					'options' => array('allowClear' => true, ), 
					'htmlOptions' => array(
						//'empty'=>'',
						'placeholder' => "Select Course", 
						'style' => 'width:380px;', 
						'id' => 'collegeId',
						'class'=>'span5',
					), 
				)); 
			?>
			<?php echo $form -> error($model, 'collegeId'); ?>
		</div>
	</div>	

	<?php //echo $form->textFieldGroup($model,'courseId',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
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

	<?php //echo $form->textFieldGroup($model,'createdBy',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php //echo $form->textFieldGroup($model,'createdAt',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php //echo $form->textFieldGroup($model,'updatedBy',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php //echo $form->textFieldGroup($model,'modifiedAt',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php
        if($model->id){
            $selectedEvents = array_keys(CHtml::listData( StudentEvents::model()->findAllByAttributes(array('studentId'=>$model->id)), 'eventId' , 'eventId'));
            
            $ugEvents = Event::model()->findAllByAttributes(array('courseId'=>$model->courseId));
        }else{
            $selectedEvents=array();

            $ugEvents = Event::model()->findAllByAttributes(array('courseId'=>1));
        }
    ?>

	<div class="form-group">
		<?php echo $form -> labelEx($model, 'events', array('class' => 'col-sm-3 control-label')); ?>
		<div class="col-sm-9">
			<?php echo CHtml::checkBoxList('selectedEvents', $selectedEvents, CHtml::listData($ugEvents,'id','eventname')); ?>
		</div>
	</div>

	<?php echo $form->dropDownListGroup($model,'status', array('widgetOptions'=>array('data'=>array("A"=>"Active","I"=>"In Active",), 'htmlOptions'=>array('class'=>'input-large')))); ?>

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>

<script type="text/javascript">
	$(document).on('change','#courseId',function(){
        $.ajax({
            type:"POST",
            url:"<?php echo Yii::app()->createUrl('student/ajaxgetcourseevents'); ?>",
            data:{'data':$("#courseId").val()},
            dataType:"json",
            success:function(data){
            	if (data) {
            		$('#selectedEvents').html(data);
            	}
            },
		});		
	});
</script>