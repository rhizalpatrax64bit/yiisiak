<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('rg_kode')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->rg_kode),array('view','id'=>$data->rg_kode)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rg_nama')); ?>:</b>
	<?php echo CHtml::encode($data->rg_nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kapasitas')); ?>:</b>
	<?php echo CHtml::encode($data->kapasitas); ?>
	<br />


</div>