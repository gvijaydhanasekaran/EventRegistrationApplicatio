<?php
$this->breadcrumbs=array(
	'Events'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Event','url'=>array('index')),
array('label'=>'Create Event','url'=>array('create')),
array('label'=>'Update Event','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Event','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Event','url'=>array('admin')),
);
?>

<h1>View Event #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'courseId',
		'eventname',
		'eventtime',
		'amount',
		'prize1',
		'prize2',
		'prize3',
		'createdBy',
		'createdAt',
		'updatedBy',
		'modifiedAt',
		'status',
),
)); ?>
