<?php
$this->breadcrumbs=array(
	'Courses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Course','url'=>array('index')),
	array('label'=>'Create Course','url'=>array('create')),
	array('label'=>'View Course','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Course','url'=>array('admin')),
	);
	?>



<div class="row">
     <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Update Course <?php echo $model->id; ?></h1>
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