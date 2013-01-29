<?php
$this->breadcrumbs=array(
	'Stocks'=>array('index'),
	$model->id,
);

?>

<div id="widgetContainer" style="width:500px" >
<h1>Stock Details</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array('name'=>'plant','value'=>$model->plant_details->common_name),
		'in_date',
		'qty',
	),
)); ?>
</