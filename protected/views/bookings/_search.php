<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>


	<div class="row">
		<?php echo $form->label($model,'contact'); ?>
		<?php echo $form->textField($model,'contact'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'plants'); ?>
		<?php echo $form->textField($model,'plants'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'qty'); ?>
		<?php echo $form->textField($model,'qty'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pickup_date'); ?>
		<?php echo $form->textField($model,'pickup_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'booked_date'); ?>
		<?php echo $form->textField($model,'booked_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'buying_price'); ?>
		<?php echo $form->textField($model,'buying_price'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->