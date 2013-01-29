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
<h1>Manage Stocks</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<? $stock = Stock::model()->findByPk(1);	
?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'stock-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array('name'=>'plant','value'=>'$data->plant_details->common_name'),
		'qty',
		array('name'=>'price','value'=>'$data->price','htmlOptions'=>array('class'=>'rupee')),
		'in_date',		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
</div>