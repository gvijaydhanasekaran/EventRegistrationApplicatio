<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('studentname')); ?>:</b>
	<?php echo CHtml::encode($data->studentname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('collegeId')); ?>:</b>
	<?php echo CHtml::encode($data->collegeId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('courseId')); ?>:</b>
	<?php echo CHtml::encode($data->courseId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdBy')); ?>:</b>
	<?php echo CHtml::encode($data->createdBy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdAt')); ?>:</b>
	<?php echo CHtml::encode($data->createdAt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updatedBy')); ?>:</b>
	<?php echo CHtml::encode($data->updatedBy); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('modifiedAt')); ?>:</b>
	<?php echo CHtml::encode($data->modifiedAt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	*/ ?>

</div>