<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ds_nidn')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ds_nidn),array('view','id'=>$data->ds_nidn)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ds_user')); ?>:</b>
	<?php echo CHtml::encode($data->ds_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ds_pass')); ?>:</b>
	<?php echo CHtml::encode($data->ds_pass); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ds_pass_kode')); ?>:</b>
	<?php echo CHtml::encode($data->ds_pass_kode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ds_nm')); ?>:</b>
	<?php echo CHtml::encode($data->ds_nm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ds_tipe')); ?>:</b>
	<?php echo CHtml::encode($data->ds_tipe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ds_kat')); ?>:</b>
	<?php echo CHtml::encode($data->ds_kat); ?>
	<br />


</div>