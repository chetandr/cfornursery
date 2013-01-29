<?php
$this->breadcrumbs=array(
	'Plants'=>array('index'),
	'Manage',
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('plants-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div id="widgetContainer" style="width:500px">
<h1>Manage Plants</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'plants-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'botanical_name',
		'common_name',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
</div>