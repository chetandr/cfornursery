<?php
$this->breadcrumbs=array(
	'Stocks'=>array('index'),
	'Create',
);
?>
<div id="widgetContainer" style="width:500px" >
<h1>Create Stock</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>