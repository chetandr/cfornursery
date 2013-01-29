<?php
$this->breadcrumbs=array(
	'Contacts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Contacts', 'url'=>array('index')),
	array('label'=>'Manage Contacts', 'url'=>array('admin')),
);
?>
<div id="widgetContainer" style="width:500px">
<h1>Create Contacts</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?></div>