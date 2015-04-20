<?php
    $this->breadcrumbs=array(
            'Users',
    );

    $this->menu=array(
        array('label'=>'Create User','url'=>array('create')),
        array('label'=>'Manage User','url'=>array('admin')),
    );
	
	$this->pageTitle = 'All Users';
?>

<div id="statusMsg"></div>

<div id="statusMsg2">
    <div id='delAlert2' class='alert alert-success' style="display: none" ><button id='closebutton' type='button' class='close' data-dismiss='alert'>×</button></div>
</div>

<div class="bootstrap-widget">
    <div class="bootstrap-widget-header">
        <i class="icon-list-alt"></i>
        <h3>All Courses</h3>
    </div>
    <div  class="bootstrap-widget-content">
        <?php echo CHtml::link('Add New Course', array('course/create'),array('class'=>'btn-primary btn')); ?>

        <?php
             $this->widget('bootstrap.widgets.TbExtendedGridView', array(
                'id'=>'user-grid',
                //'fixedHeader' => true,
                'headerOffset' => 40, // 40px is the height of the main navigation at bootstrap
                'type'=>'striped ',
                'dataProvider'=>$model->search(),
                'responsiveTable' => true,
                'filter'=>$model,
                'enablePagination'=>true,
                //'selectableRows'=>2,
                'columns'=>array(
                    //array('class'=>'CCheckBoxColumn'),
                    array('name'=>'id', 'value'=>'$data->id', 'filterHtmlOptions'=>array('style'=>'width:50px;')),
                    array('name'=>'coursename', 'value'=>'CHtml::link($data->coursename, Yii::app()->createUrl("course/update",array("id"=>$data->primaryKey)))', 'type'=>'raw', 'filterHtmlOptions'=>array('style'=>'width:200px;')),
                    array('name'=>'status',
                         'filter'=>array("A"=>"Active","I"=>"In-active"),
                         'value'=>'($data->status == "A") ? "Active" : "Inactive"',
                         'htmlOptions'=>array('style'=>'width:100px;'),
                    ),
                    array(
                        'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template'=>'{view}{update}{delete}',
                        'afterDelete'=>'function(link,success,data){ if(success){ $("#statusMsg").html(data);} $("#delAlert").animate({opacity: 1.0}, 6000).fadeOut(); }',
                    ),
                ),
            ));
         ?>
    </div>
</div>