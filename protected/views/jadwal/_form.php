<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'jadwal-form',
	'enableAjaxValidation'=>false,
        'method'=>'post',
	'type'=>'horizontal',
	'htmlOptions'=>array(
		'enctype'=>'multipart/form-data'
	)
)); ?>
     	<fieldset>
		<legend>
			<p class="note">Fields with <span class="required">*</span> are required.</p>
		</legend>

	<?php echo $form->errorSummary($model,'Opps!!!', null,array('class'=>'alert alert-error span12')); ?>
        		
   <div class="control-group">		
			<div class="span4">

	<?php echo $form->textFieldRow($model,'bn_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'rg_kode',array('class'=>'span5','maxlength'=>8)); ?>

	<?php echo $form->textFieldRow($model,'semester',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'jdwl_hari',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'jdwl_masuk',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'jdwl_keluar',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'jdwl_kls',array('class'=>'span5','maxlength'=>15)); ?>

	<?php echo $form->textFieldRow($model,'jdwl_uts',array('class'=>'span5','maxlength'=>16)); ?>

	<?php echo $form->textFieldRow($model,'jdwl_uas',array('class'=>'span5','maxlength'=>16)); ?>

                        </div>   
  </div>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
                        'icon'=>'ok white',  
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
              <?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'reset',
                        'icon'=>'remove',  
			'label'=>'Reset',
		)); ?>
	</div>
</fieldset>

<?php $this->endWidget(); ?>

</div>
