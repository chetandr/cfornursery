<?php
$this->breadcrumbs=array(
	'Bookings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bookings', 'url'=>array('index')),
	array('label'=>'Create Bookings', 'url'=>array('create')),
	array('label'=>'View Bookings', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Bookings', 'url'=>array('admin')),
);
?>

<h1>Update Bookings <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>