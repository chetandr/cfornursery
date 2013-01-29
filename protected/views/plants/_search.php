<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	

	<div class="row">
		<?php echo $form->label($model,'botanical_name'); ?>
		<?php echo $form->textField($model,'botanical_name',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'common_name'); ?>
		<?php echo $form->textField($model,'common_name',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row button">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->