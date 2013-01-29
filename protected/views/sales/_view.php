<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plant')); ?>:</b>
	<?php echo CHtml::encode($data->plant); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qty')); ?>:</b>
	<?php echo CHtml::encode($data->qty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unitprice')); ?>:</b>
	<?php echo CHtml::encode($data->unitprice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sales_date')); ?>:</b>
	<?php echo CHtml::encode($data->sales_date); ?>
	<br />


</div>