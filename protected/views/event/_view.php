<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('courseId')); ?>:</b>
	<?php echo CHtml::encode($data->courseId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eventname')); ?>:</b>
	<?php echo CHtml::encode($data->eventname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eventtime')); ?>:</b>
	<?php echo CHtml::encode($data->eventtime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prize1')); ?>:</b>
	<?php echo CHtml::encode($data->prize1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prize2')); ?>:</b>
	<?php echo CHtml::encode($data->prize2); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('prize3')); ?>:</b>
	<?php echo CHtml::encode($data->prize3); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('modifiedAt')); ?>:</b>
	<?php echo CHtml::encode($data->modifiedAt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	*/ ?>

</div>