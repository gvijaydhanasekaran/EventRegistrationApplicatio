<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('institutename')); ?>:</b>
	<?php echo CHtml::encode($data->institutename); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('instituteplace')); ?>:</b>
	<?php echo CHtml::encode($data->instituteplace); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('incharge')); ?>:</b>
	<?php echo CHtml::encode($data->incharge); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contactno')); ?>:</b>
	<?php echo CHtml::encode($data->contactno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdBy')); ?>:</b>
	<?php echo CHtml::encode($data->createdBy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdAt')); ?>:</b>
	<?php echo CHtml::encode($data->createdAt); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('updatedBy')); ?>:</b>
	<?php echo CHtml::encode($data->updatedBy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modifiedAt')); ?>:</b>
	<?php echo CHtml::encode($data->modifiedAt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	*/ ?>

</div>