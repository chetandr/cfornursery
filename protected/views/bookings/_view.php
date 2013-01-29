<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact')); ?>:</b>
	<?php echo CHtml::encode($data->contact); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plants')); ?>:</b>
	<?php echo CHtml::encode($data->plants); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qty')); ?>:</b>
	<?php echo CHtml::encode($data->qty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pickup_date')); ?>:</b>
	<?php echo CHtml::encode($data->pickup_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('booked_date')); ?>:</b>
	<?php echo CHtml::encode($data->booked_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('buying_price')); ?>:</b>
	<?php echo CHtml::encode($data->buying_price); ?>
	<br />


</div>