<?php
$this->breadcrumbs=array(
	'Damageds'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Damaged', 'url'=>array('index')),
	array('label'=>'Create Damaged', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('damaged-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div id="widgetContainer" >
<h1>Manage Mortality</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'damaged-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'plants_id',
		'qty',
		'date_damaged',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
</div>