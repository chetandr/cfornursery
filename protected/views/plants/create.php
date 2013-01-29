<?php
$this->breadcrumbs=array(
	'Plants'=>array('index'),
	'Create',
);

?>
<div id="widgetContainer" style="width:500px">
<h1>Create Plants</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>