<?php  $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'search-kalender-form',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
));  ?>


	<?php echo $form->textFieldRow($model,'kln_id',array('class'=>'span5')); ?>

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

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'icon'=>'search white', 'label'=>'Search')); ?>
               <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'button', 'icon'=>'icon-remove-sign white', 'label'=>'Reset', 'htmlOptions'=>array('class'=>'btnreset btn-small'))); ?>
	</div>

<?php $this->endWidget(); ?>


<?php $cs = Yii::app()->getClientScript();
$cs->registerCoreScript('jquery');
$cs->registerCoreScript('jquery.ui');
$cs->registerCssFile(Yii::app()->request->baseUrl.'/css/bootstrap/jquery-ui.css');
?>	
   <script>
	$(".btnreset").click(function(){
		$(":input","#search-kalender-form").each(function() {
		var type = this.type;
		var tag = this.tagName.toLowerCase(); // normalize case
		if (type == "text" || type == "password" || tag == "textarea") this.value = "";
		else if (type == "checkbox" || type == "radio") this.checked = false;
		else if (tag == "select") this.selectedIndex = "";
	  });
	});
   </script>

