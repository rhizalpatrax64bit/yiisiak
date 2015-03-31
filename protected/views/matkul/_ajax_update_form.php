    <div id='matkul-update-modal' class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
   
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3>Update matkul #<?php echo $model->mtk_kode; ?></h3>
    </div>
    
    <div class="modal-body">
 
    
    
    <div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'matkul-update-form',
	'enableAjaxValidation'=>true,
        'enableClientValidation'=>true,
        'method'=>'post',
        'action'=>array("matkul/update"),
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
			
			<?php echo $form->hiddenField($model,'mtk_kode',array()); ?>
			
	               				  <div class="row">
					  <?php echo $form->labelEx($model,'mtk_kode'); ?>
					  <?php echo $form->textField($model,'mtk_kode',array('size'=>15,'maxlength'=>15)); ?>
					  <?php echo $form->error($model,'mtk_kode'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'mtk_nama'); ?>
					  <?php echo $form->textField($model,'mtk_nama',array('size'=>50,'maxlength'=>50)); ?>
					  <?php echo $form->error($model,'mtk_nama'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'mtk_sks'); ?>
					  <?php echo $form->textField($model,'mtk_sks'); ?>
					  <?php echo $form->error($model,'mtk_sks'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'mtk_kat'); ?>
					  <?php echo $form->textField($model,'mtk_kat',array('size'=>1,'maxlength'=>1)); ?>
					  <?php echo $form->error($model,'mtk_kat'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'mtk_stat'); ?>
					  <?php echo $form->textField($model,'mtk_stat',array('size'=>1,'maxlength'=>1)); ?>
					  <?php echo $form->error($model,'mtk_stat'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'jr_id'); ?>
					  <?php echo $form->textField($model,'jr_id',array('size'=>8,'maxlength'=>8)); ?>
					  <?php echo $form->error($model,'jr_id'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'penanggungjawab'); ?>
					  <?php echo $form->textField($model,'penanggungjawab',array('size'=>20,'maxlength'=>20)); ?>
					  <?php echo $form->error($model,'penanggungjawab'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'mtk_sesi'); ?>
					  <?php echo $form->textField($model,'mtk_sesi',array('size'=>2,'maxlength'=>2)); ?>
					  <?php echo $form->error($model,'mtk_sesi'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'mtk_sub'); ?>
					  <?php echo $form->textField($model,'mtk_sub',array('size'=>60,'maxlength'=>80)); ?>
					  <?php echo $form->error($model,'mtk_sub'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'mtk_semester'); ?>
					  <?php echo $form->textField($model,'mtk_semester',array('size'=>2,'maxlength'=>2)); ?>
					  <?php echo $form->error($model,'mtk_semester'); ?>
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



