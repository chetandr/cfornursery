<?php
$this->breadcrumbs=array(
	'Sales'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Sales', 'url'=>array('index')),
	array('label'=>'Manage Sales', 'url'=>array('admin')),
);
?>
<div id="widgetContainer" >
<h1>Create Sales</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>