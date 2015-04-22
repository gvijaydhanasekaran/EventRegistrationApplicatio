<?php
$this->breadcrumbs=array(
	'Events'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Event','url'=>array('index')),
	array('label'=>'Create Event','url'=>array('create')),
	array('label'=>'View Event','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Event','url'=>array('admin')),
	);
	?>

<div class="row">
     <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Update Event <?php echo $model->id; ?></h1>
    </div>
    <!--end page header -->
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
				<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
			</div>
		</div>
	</div>
</div>				