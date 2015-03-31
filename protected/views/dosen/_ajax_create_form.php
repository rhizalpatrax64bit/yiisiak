
    <div id='dosen-create-modal' class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3>Create dosen</h3>
    </div>
    
    <div class="modal-body">
    
    <div class="form">

   <?php
   
         $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'dosen-create-form',
	'enableAjaxValidation'=>true,
        'enableClientValidation'=>true,
        'method'=>'post',
        'action'=>array("dosen/create"),
	'type'=>'horizontal',
	'htmlOptions'=>array(
	                        'onsubmit'=>"return false;",/* Disable normal form submit */
                            ),
          'clientOptions'=>array(
                    'validateOnType'=>true,
                    'validateOnSubmit'=>true,
                    'afterValidate'=>'js:function(form, data, hasError) {
                                     if (!hasError)
                                        {    
                                          create();
                                        }
                                     }'
                                    

            ),                  
  
)); ?>
     	<fieldset>
		<legend>
			<p class="note">Fields with <span class="required">*</span> are required.</p>
		</legend>

	<?php echo $form->errorSummary($model,'Opps!!!', null,array('class'=>'alert alert-error span12')); ?>
        		
   <div class="control-group">		
			<div class="span4">
			
							  <div class="row">
					  <?php echo $form->labelEx($model,'ds_nidn'); ?>
					  <?php echo $form->textField($model,'ds_nidn',array('size'=>20,'maxlength'=>20)); ?>
					  <?php echo $form->error($model,'ds_nidn'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'ds_user'); ?>
					  <?php echo $form->textField($model,'ds_user',array('size'=>60,'maxlength'=>80)); ?>
					  <?php echo $form->error($model,'ds_user'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'ds_pass'); ?>
					  <?php echo $form->textField($model,'ds_pass',array('size'=>60,'maxlength'=>80)); ?>
					  <?php echo $form->error($model,'ds_pass'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'ds_pass_kode'); ?>
					  <?php echo $form->textField($model,'ds_pass_kode',array('size'=>10,'maxlength'=>10)); ?>
					  <?php echo $form->error($model,'ds_pass_kode'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'ds_nm'); ?>
					  <?php echo $form->textField($model,'ds_nm',array('size'=>60,'maxlength'=>80)); ?>
					  <?php echo $form->error($model,'ds_nm'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'ds_tipe'); ?>
					  <?php echo $form->textField($model,'ds_tipe'); ?>
					  <?php echo $form->error($model,'ds_tipe'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'ds_kat'); ?>
					  <?php echo $form->textField($model,'ds_kat',array('size'=>1,'maxlength'=>1)); ?>
					  <?php echo $form->error($model,'ds_kat'); ?>
				  </div>

			  
                        </div>   
  </div>

  </div><!--end modal body-->
  
  <div class="modal-footer">
	<div class="form-actions">

		<?php
		
		 $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
                        'icon'=>'ok white', 
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
			)
			
		);
		
		?>
              <?php
 $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'reset',
                        'icon'=>'remove',  
			'label'=>'Reset',
		)); ?>
	</div> 
   </div><!--end modal footer-->	
</fieldset>

<?php
 $this->endWidget(); ?>

</div>

</div><!--end modal-->

<script type="text/javascript">
function create()
 {
 
   var data=$("#dosen-create-form").serialize();
     


  jQuery.ajax({
   type: 'POST',
    url: '<?php
 echo Yii::app()->createAbsoluteUrl("dosen/create"); ?>',
   data:data,
success:function(data){
                //alert("succes:"+data); 
                if(data!="false")
                 {
                  $('#dosen-create-modal').modal('hide');
                  renderView(data);
                    $.fn.yiiGridView.update('dosen-grid', {
                     
                         });
                   
                 }
                 
              },
   error: function(data) { // if error occured
         alert("Error occured.please try again");
         alert(data);
    },

  dataType:'html'
  });

}

function renderCreateForm()
{
  $('#dosen-create-form').each (function(){
  this.reset();
   });

  
  $('#dosen-view-modal').modal('hide');
  
  $('#dosen-create-modal').modal({
   show:true,
   
  });
}

</script>
