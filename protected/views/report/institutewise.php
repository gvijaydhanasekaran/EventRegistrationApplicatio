
<div class="row">
     <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Institute Wise Report</h1>
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
						'placeholder' => "Select Institute", 
						'style' => 'width:380px;', 
						'id' => 'collegeId',
						'class'=>'span5',
					), 
				)); 
			?>
			<?php echo $form -> error($model, 'collegeId'); ?>
		</div>
	</div>

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

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>

			</div>
		</div>
	</div>
</div>