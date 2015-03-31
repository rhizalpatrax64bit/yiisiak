<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kr_kode')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kr_kode),array('view','id'=>$data->kr_kode)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kr_nama')); ?>:</b>
	<?php echo CHtml::encode($data->kr_nama); ?>
	<br />


</div>