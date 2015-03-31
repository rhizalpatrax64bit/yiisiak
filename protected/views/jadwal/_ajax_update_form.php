    <div id='jadwal-update-modal' class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
   
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3>Update jadwal #<?php echo $model->jdwl_id; ?></h3>
    </div>
    
    <div class="modal-body">
 
    
    
    <div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'jadwal-update-form',
	'enableAjaxValidation'=>true,
        'enableClientValidation'=>true,
        'method'=>'post',
        'action'=>array("jadwal/update"),
	'type'=>'horizontal',
	'htmlOptions'=>array(
                               'onsubmit'=>"return false;",/* Disable normal form submit */
                               'onkeypress'=>" if(event.keyCode == 13){ update(); } " /* Do ajax call when user presses enter key */
                            ),               
	
)); ?>
     	<fieldset>
		<legend>
			<p class="note">Fields with <span class="required">*</span> are required.</p>
		</legend>

	<?php echo $form->errorSummary($model,'Opps!!!', null,array('class'=>'alert alert-error span12')); ?>
        		
   <div class="control-group">		
			<div class="span4">
			
			<?php echo $form->hiddenField($model,'jdwl_id',array()); ?>
			
	               				  <div class="row">
					  <?php echo $form->labelEx($model,'bn_id'); ?>
					  <?php echo $form->textField($model,'bn_id'); ?>
					  <?php echo $form->error($model,'bn_id'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'rg_kode'); ?>
					  <?php echo $form->textField($model,'rg_kode',array('size'=>8,'maxlength'=>8)); ?>
					  <?php echo $form->error($model,'rg_kode'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'semester'); ?>
					  <?php echo $form->textField($model,'semester',array('size'=>1,'maxlength'=>1)); ?>
					  <?php echo $form->error($model,'semester'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'jdwl_hari'); ?>
					  <?php echo $form->textField($model,'jdwl_hari',array('size'=>1,'maxlength'=>1)); ?>
					  <?php echo $form->error($model,'jdwl_hari'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'jdwl_masuk'); ?>
					  <?php echo $form->textField($model,'jdwl_masuk',array('size'=>5,'maxlength'=>5)); ?>
					  <?php echo $form->error($model,'jdwl_masuk'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'jdwl_keluar'); ?>
					  <?php echo $form->textField($model,'jdwl_keluar',array('size'=>5,'maxlength'=>5)); ?>
					  <?php echo $form->error($model,'jdwl_keluar'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'jdwl_kls'); ?>
					  <?php echo $form->textField($model,'jdwl_kls',array('size'=>15,'maxlength'=>15)); ?>
					  <?php echo $form->error($model,'jdwl_kls'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'jdwl_uts'); ?>
					  <?php echo $form->textField($model,'jdwl_uts',array('size'=>16,'maxlength'=>16)); ?>
					  <?php echo $form->error($model,'jdwl_uts'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'jdwl_uas'); ?>
					  <?php echo $form->textField($model,'jdwl_uas',array('size'=>16,'maxlength'=>16)); ?>
					  <?php echo $form->error($model,'jdwl_uas'); ?>
				  </div>

			  
                        </div>   
  </div>

  </div><!--end modal body-->
  
  <div class="modal-footer">
	<div class="form-actions">

	                
		<?php		
		 $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			//'id'=>'sub2',
			'type'=>'primary',
                        'icon'=>'ok white', 
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
			'htmlOptions'=>array('onclick'=>'update();'),
		));
		
		?>
             
	</div> 
   </div><!--end modal footer-->	
</fieldset>

<?php $this->endWidget(); ?>

</div>


</div><!--end modal-->



