<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'damaged-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'plants_id'); ?>
		<?php echo $form->textField($model,'plants_id'); ?>
		<?php echo $form->error($model,'plants_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qty'); ?>
		<?php echo $form->textField($model,'qty',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'qty'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_damaged'); ?>
		<?php echo $form->textField($model,'date_damaged'); ?>
		<?php echo $form->error($model,'date_damaged'); ?>
	</div>

	<div class="row button">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->