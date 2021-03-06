
    <div id='jurusan-create-modal' class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3>Create jurusan</h3>
    </div>
    
    <div class="modal-body">
    
    <div class="form">

   <?php
   
         $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'jurusan-create-form',
	'enableAjaxValidation'=>true,
        'enableClientValidation'=>true,
        'method'=>'post',
        'action'=>array("jurusan/create"),
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
					  <?php echo $form->labelEx($model,'jr_id'); ?>
					  <?php echo $form->textField($model,'jr_id',array('size'=>8,'maxlength'=>8)); ?>
					  <?php echo $form->error($model,'jr_id'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'fk_id'); ?>
					  <?php echo $form->textField($model,'fk_id',array('size'=>2,'maxlength'=>2)); ?>
					  <?php echo $form->error($model,'fk_id'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'jr_kode_nim'); ?>
					  <?php echo $form->textField($model,'jr_kode_nim',array('size'=>5,'maxlength'=>5)); ?>
					  <?php echo $form->error($model,'jr_kode_nim'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'jr_nama'); ?>
					  <?php echo $form->textField($model,'jr_nama',array('size'=>50,'maxlength'=>50)); ?>
					  <?php echo $form->error($model,'jr_nama'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'jr_jenjang'); ?>
					  <?php echo $form->textField($model,'jr_jenjang',array('size'=>2,'maxlength'=>2)); ?>
					  <?php echo $form->error($model,'jr_jenjang'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'jr_stat'); ?>
					  <?php echo $form->textField($model,'jr_stat',array('size'=>1,'maxlength'=>1)); ?>
					  <?php echo $form->error($model,'jr_stat'); ?>
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
 
   var data=$("#jurusan-create-form").serialize();
     


  jQuery.ajax({
   type: 'POST',
    url: '<?php
 echo Yii::app()->createAbsoluteUrl("jurusan/create"); ?>',
   data:data,
success:function(data){
                //alert("succes:"+data); 
                if(data!="false")
                 {
                  $('#jurusan-create-modal').modal('hide');
                  renderView(data);
                    $.fn.yiiGridView.update('jurusan-grid', {
                     
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
  $('#jurusan-create-form').each (function(){
  this.reset();
   });

  
  $('#jurusan-view-modal').modal('hide');
  
  $('#jurusan-create-modal').modal({
   show:true,
   
  });
}

</script>
