<?php
$this->breadcrumbs=array(
	'Damageds',
);

$this->menu=array(
	array('label'=>'Create Damaged', 'url'=>array('create')),
	array('label'=>'Manage Damaged', 'url'=>array('admin')),
);
?>

<h1>Damageds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
