<?php
$this->breadcrumbs=array(
	'Stocks'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);


?>
<div id="widgetContainer" style="width:500px" >
<h1>Update Stock : <?php echo $model->plant_details->common_name; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?></div>