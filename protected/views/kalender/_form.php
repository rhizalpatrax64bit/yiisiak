<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'kalender-form',
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

	<?php echo $form->textFieldRow($model,'kr_kode',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'jr_id',array('class'=>'span5','maxlength'=>8)); ?>

	<?php echo $form->textFieldRow($model,'pr_kode',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'kln_krs',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'kln_masuk',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'kln_uts',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'kln_uas',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'kln_krs_lama',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'kln_uts_lama',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'kln_uas_lama',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'kln_stat',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'kln_sesi',array('class'=>'span5','maxlength'=>2)); ?>

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
