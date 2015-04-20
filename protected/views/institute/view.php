<?php
$this->breadcrumbs=array(
	'Institutes'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Institute','url'=>array('index')),
array('label'=>'Create Institute','url'=>array('create')),
array('label'=>'Update Institute','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Institute','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Institute','url'=>array('admin')),
);
?>

<h1>View Institute #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'institutename',
		'instituteplace',
		'incharge',
		'contactno',
		'createdBy',
		'createdAt',
		'updatedBy',
		'modifiedAt',
		'status',
),
)); ?>
