<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('botanical_name')); ?>:</b>
	<?php echo CHtml::encode($data->botanical_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('common_name')); ?>:</b>
	<?php echo CHtml::encode($data->common_name); ?>
	<br />


</div>