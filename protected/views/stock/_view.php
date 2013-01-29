<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plant')); ?>:</b>
	<?php echo CHtml::encode($data->plant); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('in_date')); ?>:</b>
	<?php echo CHtml::encode($data->in_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qty')); ?>:</b>
	<?php echo CHtml::encode($data->qty); ?>
	<br />


</div>