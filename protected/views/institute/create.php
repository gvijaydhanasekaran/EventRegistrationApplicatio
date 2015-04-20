<?php
$this->breadcrumbs=array(
	'Institutes'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Institute','url'=>array('index')),
array('label'=>'Manage Institute','url'=>array('admin')),
);
?>

<h1>Create Institute</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>