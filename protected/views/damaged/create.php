<?php
$this->breadcrumbs=array(
	'Damageds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Damaged', 'url'=>array('index')),
	array('label'=>'Manage Damaged', 'url'=>array('admin')),
);
?>
<div id="widgetContainer" style="width:500px">
<h1>New Mortality</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>