<?php
$this->breadcrumbs=array(
	'Bookings'=>array('index'),
	'Create',
);

?>
<div id="widgetContainer" style="width:500px">
<h1>Create Bookings</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>