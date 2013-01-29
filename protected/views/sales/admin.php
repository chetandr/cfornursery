<?php
$this->breadcrumbs=array(
	'Sales'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Sales', 'url'=>array('index')),
	array('label'=>'Create Sales', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('sales-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div id="widgetContainer" >
<h1>Manage Sales</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'sales-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'plant',
		'qty',
		'unitprice',
		'sales_date',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
</div>