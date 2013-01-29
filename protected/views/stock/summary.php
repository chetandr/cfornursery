<?php
$this->breadcrumbs=array(
	'Stocks'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('stock-grid', {
		data: $(this).serialize()	
	});
	return false;
});
");
?>
<div id="widgetContainer">
<h1>Stock Summary</h1>
<?
//var_dump($model->findByPk(1));
?>


<!-- search-form -->
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'stock-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'common_name',
		'botanical_name',
		'total',
		array('name'=>'price','value'=>'$data->price?$data->price:"--NA--"','htmlOptions'=>array('class'=>'rupee')),
	),
));?>
</div>