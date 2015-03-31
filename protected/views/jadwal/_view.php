<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('jdwl_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->jdwl_id),array('view','id'=>$data->jdwl_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bn_id')); ?>:</b>
	<?php echo CHtml::encode($data->bn_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rg_kode')); ?>:</b>
	<?php echo CHtml::encode($data->rg_kode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('semester')); ?>:</b>
	<?php echo CHtml::encode($data->semester); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jdwl_hari')); ?>:</b>
	<?php echo CHtml::encode($data->jdwl_hari); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jdwl_masuk')); ?>:</b>
	<?php echo CHtml::encode($data->jdwl_masuk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jdwl_keluar')); ?>:</b>
	<?php echo CHtml::encode($data->jdwl_keluar); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('jdwl_kls')); ?>:</b>
	<?php echo CHtml::encode($data->jdwl_kls); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jdwl_uts')); ?>:</b>
	<?php echo CHtml::encode($data->jdwl_uts); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jdwl_uas')); ?>:</b>
	<?php echo CHtml::encode($data->jdwl_uas); ?>
	<br />

	*/ ?>

</div>