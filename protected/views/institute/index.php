<?php
$this->breadcrumbs=array(
	'Institutes',
);

$this->menu=array(
array('label'=>'Create Institute','url'=>array('create')),
array('label'=>'Manage Institute','url'=>array('admin')),
);
?>

<h1>Institutes</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
