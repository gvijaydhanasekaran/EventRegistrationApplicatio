<?php
$this->breadcrumbs=array(
	'Students'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Student','url'=>array('index')),
	array('label'=>'Create Student','url'=>array('create')),
	array('label'=>'View Student','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Student','url'=>array('admin')),
	);
	?>

<div class="row">
     <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Update Student <?php echo $model->id; ?></h1>
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