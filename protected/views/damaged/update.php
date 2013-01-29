<?php
$this->breadcrumbs=array(
	'Damageds'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Damaged', 'url'=>array('index')),
	array('label'=>'Create Damaged', 'url'=>array('create')),
	array('label'=>'View Damaged', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Damaged', 'url'=>array('admin')),
);
?>

<h1>Update Damaged <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>