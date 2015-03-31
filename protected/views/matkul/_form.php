<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'matkul-form',
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

	<?php echo $form->textFieldRow($model,'mtk_kode',array('class'=>'span5','maxlength'=>15)); ?>

	<?php echo $form->textFieldRow($model,'mtk_nama',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'mtk_sks',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'mtk_kat',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'mtk_stat',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'jr_id',array('class'=>'span5','maxlength'=>8)); ?>

	<?php echo $form->textFieldRow($model,'penanggungjawab',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'mtk_sesi',array('class'=>'span5','maxlength'=>2)); ?>

	<?php echo $form->textFieldRow($model,'mtk_sub',array('class'=>'span5','maxlength'=>80)); ?>

	<?php echo $form->textFieldRow($model,'mtk_semester',array('class'=>'span5','maxlength'=>2)); ?>

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
