<?php
$this->breadcrumbs=array(
	'Damageds'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Damaged', 'url'=>array('index')),
	array('label'=>'Create Damaged', 'url'=>array('create')),
	array('label'=>'Update Damaged', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Damaged', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Damaged', 'url'=>array('admin')),
);
?>

<h1>View Damaged #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'plants_id',
		'qty',
		'date_damaged',
	),
)); ?>
