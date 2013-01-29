<?php
$this->breadcrumbs=array(
	'Plants'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Plants', 'url'=>array('index')),
	array('label'=>'Create Plants', 'url'=>array('create')),
	array('label'=>'Update Plants', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Plants', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Plants', 'url'=>array('admin')),
);
?>

<h1>View Plants #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'botanical_name',
		'common_name',
	),
)); ?>
