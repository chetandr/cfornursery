<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'stock-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
    
	<div class="row">
		<?php echo $form->labelEx($model,'plant'); ?>
		<?php echo $form->hiddenField($model,'plant'); ?>
        <?php $this->widget('CAutoComplete',
          array(
                         //name of the html field that will be generated
             'name'=>'user_name',
			 'value'=>$model->plant_details->common_name,
                         //replace controller/action with real ids
             'url'=>array('Plants/AutoCompleteLookup'), 
             'max'=>10, //specifies the max number of items to display
 
                         //specifies the number of chars that must be entered 
                         //before autocomplete initiates a lookup
             'minChars'=>1, 
             'delay'=>500, //number of milliseconds before lookup occurs
             'matchCase'=>false, //match case when performing a lookup?
 
                         //any additional html attributes that go inside of 
                         //the input field can be defined here
             'htmlOptions'=>array('size'=>'40'), 
 
             'methodChain'=>".result(function(event,item){\$(\"#Stock_plant\").val(item[1]);})",
             ));
    ?>

		<?php echo $form->error($model,'plant'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'qty'); ?>
		<?php echo $form->textField($model,'qty'); ?>
		<?php echo $form->error($model,'qty'); ?>
	</div>
     <div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'in_date'); ?>
		 <?
    	$this->widget('zii.widgets.jui.CJuiDatePicker', 
					  array(
							'name'=>'stock[in_date]',
							'model'=>$model,
							'value'=>$model->in_date,
          // additional javascript options for the date picker plugin
          					'options'=>array(
              							'showAnim'=>'fold',
										
										'dateFormat'=>'yy-mm-dd'
          								),
							  'htmlOptions'=>array(
								  'style'=>'height:20px;','readonly',
								  'value'=>date('Y-m-d')
							  )
      					));
      
      ?>
		<?php echo $form->error($model,'in_date'); ?>
	</div>
   
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->