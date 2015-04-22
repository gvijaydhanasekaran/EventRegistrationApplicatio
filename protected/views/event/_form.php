<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'event-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php //echo $form->textFieldGroup($model,'courseId',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<div class="form-group">
		<?php echo $form -> labelEx($model, 'courseId', array('class' => 'col-sm-3 control-label ')); ?>
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
						'style' => 'width:400px;', 
						'id' => 'courseId',
						'class'=>'span5',
					), 
				)); 
			?>
			<?php echo $form -> error($model, 'courseId'); ?>
		</div>
	</div>	

	<?php echo $form->textFieldGroup($model,'eventname',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>200)))); ?>

	<?php //echo $form->textFieldGroup($model,'eventtime',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
	<div class="form-group">
		<?php echo $form -> labelEx($model, 'eventtime', array('class' => 'col-sm-3 control-label')); ?>
		<div class="col-sm-9">
			<?php $this->widget('ext.EJuiDateTimePicker.EJuiDateTimePicker',array(
											'model'=>$model,
											'attribute'=>'eventtime',
											'options'=>array(
												'changeMonth'=>'false',
												'changeYear'=>'false',
												'dateFormat'=>'dd/mm/yy',
												'timeOnly'=>true,
												//'ampm'=> true,
												'showHour'   => true,
												'showMinute' => true,
												'showSecond' => true,                    
							                    'timeFormat'=>'hh:mm:ss tt',
												//'showOn'=>'button',
												//'showButtonPanel'=>false,
												//'buttonText'=>'<i class="icon-calendar"></i>',
												//'yearRange'=>'1960:'.date('Y'),
												'yearRange'=>'1950:2023',
												'hour'=>'00',
												'minute'=>'00',
												'stepMinute'=>15,
												'stepSecond'=>60,
											),
											'htmlOptions'=>array(
												'style'=>'height:20px; width:100px;',
												'readOnly'=>'true',
												//'value'=> ($model->workdays[$i] ? $model->workdays[$i]['openingTime']:"09:00"),
											),
										));
										?>
			<?php echo $form -> error($model, 'collegeId'); ?>
		</div>
	</div>	

	<?php echo $form->textFieldGroup($model,'amount',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php //echo $form->textFieldGroup($model,'prize1',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php //echo $form->textFieldGroup($model,'prize2',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php //echo $form->textFieldGroup($model,'prize3',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php //echo $form->textFieldGroup($model,'createdBy',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php //echo $form->textFieldGroup($model,'createdAt',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php //echo $form->textFieldGroup($model,'updatedBy',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php //echo $form->textFieldGroup($model,'modifiedAt',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->dropDownListGroup($model,'status', array('widgetOptions'=>array('data'=>array("A"=>"Active","I"=>"In Active",), 'htmlOptions'=>array('class'=>'input-large')))); ?>

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
