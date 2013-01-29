<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'plants-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'botanical_name'); ?>
		<?php echo $form->textField($model,'botanical_name',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'botanical_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'common_name'); ?>
		<?php echo $form->textField($model,'common_name',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'common_name'); ?>
	</div>

	<div class="row button">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->