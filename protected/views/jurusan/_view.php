<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('jr_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->jr_id),array('view','id'=>$data->jr_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_id')); ?>:</b>
	<?php echo CHtml::encode($data->fk_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jr_kode_nim')); ?>:</b>
	<?php echo CHtml::encode($data->jr_kode_nim); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jr_nama')); ?>:</b>
	<?php echo CHtml::encode($data->jr_nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jr_jenjang')); ?>:</b>
	<?php echo CHtml::encode($data->jr_jenjang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jr_stat')); ?>:</b>
	<?php echo CHtml::encode($data->jr_stat); ?>
	<br />


</div>