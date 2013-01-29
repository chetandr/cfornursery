<?php
$this->breadcrumbs=array(
	'Plants',
);

$this->menu=array(
	array('label'=>'Create Plants', 'url'=>array('create')),
	array('label'=>'Manage Plants', 'url'=>array('admin')),
);
?>

<h1>Plants</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
