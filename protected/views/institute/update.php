<?php
$this->breadcrumbs=array(
	'Institutes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Institute','url'=>array('index')),
	array('label'=>'Create Institute','url'=>array('create')),
	array('label'=>'View Institute','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Institute','url'=>array('admin')),
	);
	?>

	<h1>Update Institute <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>