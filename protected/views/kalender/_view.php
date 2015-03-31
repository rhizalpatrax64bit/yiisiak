<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kln_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kln_id),array('view','id'=>$data->kln_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kr_kode')); ?>:</b>
	<?php echo CHtml::encode($data->kr_kode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jr_id')); ?>:</b>
	<?php echo CHtml::encode($data->jr_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pr_kode')); ?>:</b>
	<?php echo CHtml::encode($data->pr_kode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kln_krs')); ?>:</b>
	<?php echo CHtml::encode($data->kln_krs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kln_masuk')); ?>:</b>
	<?php echo CHtml::encode($data->kln_masuk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kln_uts')); ?>:</b>
	<?php echo CHtml::encode($data->kln_uts); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('kln_uas')); ?>:</b>
	<?php echo CHtml::encode($data->kln_uas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kln_krs_lama')); ?>:</b>
	<?php echo CHtml::encode($data->kln_krs_lama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kln_uts_lama')); ?>:</b>
	<?php echo CHtml::encode($data->kln_uts_lama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kln_uas_lama')); ?>:</b>
	<?php echo CHtml::encode($data->kln_uas_lama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kln_stat')); ?>:</b>
	<?php echo CHtml::encode($data->kln_stat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kln_sesi')); ?>:</b>
	<?php echo CHtml::encode($data->kln_sesi); ?>
	<br />

	*/ ?>

</div>