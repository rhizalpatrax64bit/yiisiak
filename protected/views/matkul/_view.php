<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('mtk_kode')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->mtk_kode),array('view','id'=>$data->mtk_kode)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mtk_nama')); ?>:</b>
	<?php echo CHtml::encode($data->mtk_nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mtk_sks')); ?>:</b>
	<?php echo CHtml::encode($data->mtk_sks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mtk_kat')); ?>:</b>
	<?php echo CHtml::encode($data->mtk_kat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mtk_stat')); ?>:</b>
	<?php echo CHtml::encode($data->mtk_stat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jr_id')); ?>:</b>
	<?php echo CHtml::encode($data->jr_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('penanggungjawab')); ?>:</b>
	<?php echo CHtml::encode($data->penanggungjawab); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('mtk_sesi')); ?>:</b>
	<?php echo CHtml::encode($data->mtk_sesi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mtk_sub')); ?>:</b>
	<?php echo CHtml::encode($data->mtk_sub); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mtk_semester')); ?>:</b>
	<?php echo CHtml::encode($data->mtk_semester); ?>
	<br />

	*/ ?>

</div>