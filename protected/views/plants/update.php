<?php
$this->breadcrumbs=array(
	'Plants'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Plants', 'url'=>array('index')),
	array('label'=>'Create Plants', 'url'=>array('create')),
	array('label'=>'View Plants', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Plants', 'url'=>array('admin')),
);
?>

<h1>Update Plants <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>