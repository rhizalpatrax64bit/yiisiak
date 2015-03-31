
    <div id='jadwal-create-modal' class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3>Create jadwal</h3>
    </div>
    
    <div class="modal-body">
    
    <div class="form">

   <?php
   
         $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'jadwal-create-form',
	'enableAjaxValidation'=>true,
        'enableClientValidation'=>true,
        'method'=>'post',
        'action'=>array("jadwal/create"),
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
 
   var data=$("#jadwal-create-form").serialize();
     


  jQuery.ajax({
   type: 'POST',
    url: '<?php
 echo Yii::app()->createAbsoluteUrl("jadwal/create"); ?>',
   data:data,
success:function(data){
                //alert("succes:"+data); 
                if(data!="false")
                 {
                  $('#jadwal-create-modal').modal('hide');
                  renderView(data);
                    $.fn.yiiGridView.update('jadwal-grid', {
                     
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
  $('#jadwal-create-form').each (function(){
  this.reset();
   });

  
  $('#jadwal-view-modal').modal('hide');
  
  $('#jadwal-create-modal').modal({
   show:true,
   
  });
}

</script>
