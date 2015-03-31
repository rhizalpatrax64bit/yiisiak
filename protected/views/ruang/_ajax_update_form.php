    <div id='ruang-update-modal' class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
   
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3>Update ruang #<?php echo $model->rg_kode; ?></h3>
    </div>
    
    <div class="modal-body">
 
    
    
    <div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'ruang-update-form',
	'enableAjaxValidation'=>true,
        'enableClientValidation'=>true,
        'method'=>'post',
        'action'=>array("ruang/update"),
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
			
			<?php echo $form->hiddenField($model,'rg_kode',array()); ?>
			
	               				  <div class="row">
					  <?php echo $form->labelEx($model,'rg_kode'); ?>
					  <?php echo $form->textField($model,'rg_kode',array('size'=>8,'maxlength'=>8)); ?>
					  <?php echo $form->error($model,'rg_kode'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'rg_nama'); ?>
					  <?php echo $form->textField($model,'rg_nama',array('size'=>20,'maxlength'=>20)); ?>
					  <?php echo $form->error($model,'rg_nama'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'kapasitas'); ?>
					  <?php echo $form->textField($model,'kapasitas'); ?>
					  <?php echo $form->error($model,'kapasitas'); ?>
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



