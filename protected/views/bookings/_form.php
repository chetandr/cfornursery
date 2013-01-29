<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bookings-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'contact'); ?>
		<?php echo $form->textField($model,'contact'); ?>
		<?php echo $form->error($model,'contact'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'plants'); ?>
		<?php echo $form->textField($model,'plants'); ?>
		<?php echo $form->error($model,'plants'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qty'); ?>
		<?php echo $form->textField($model,'qty'); ?>
		<?php echo $form->error($model,'qty'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pickup_date'); ?>
		<?php echo $form->textField($model,'pickup_date'); ?>
		<?php echo $form->error($model,'pickup_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'booked_date'); ?>
		<?php echo $form->textField($model,'booked_date'); ?>
		<?php echo $form->error($model,'booked_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'buying_price'); ?>
		<?php echo $form->textField($model,'buying_price'); ?>
		<?php echo $form->error($model,'buying_price'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->