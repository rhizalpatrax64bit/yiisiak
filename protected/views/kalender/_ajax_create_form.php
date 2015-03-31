
    <div id='kalender-create-modal' class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3>Create kalender</h3>
    </div>
    
    <div class="modal-body">
    
    <div class="form">

   <?php
   
         $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'kalender-create-form',
	'enableAjaxValidation'=>true,
        'enableClientValidation'=>true,
        'method'=>'post',
        'action'=>array("kalender/create"),
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
					  <?php echo $form->labelEx($model,'kr_kode'); ?>
					  <?php echo $form->textField($model,'kr_kode',array('size'=>5,'maxlength'=>5)); ?>
					  <?php echo $form->error($model,'kr_kode'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'jr_id'); ?>
					  <?php echo $form->textField($model,'jr_id',array('size'=>8,'maxlength'=>8)); ?>
					  <?php echo $form->error($model,'jr_id'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'pr_kode'); ?>
					  <?php echo $form->textField($model,'pr_kode',array('size'=>5,'maxlength'=>5)); ?>
					  <?php echo $form->error($model,'pr_kode'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'kln_krs'); ?>
					  <?php echo $form->textField($model,'kln_krs'); ?>
					  <?php echo $form->error($model,'kln_krs'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'kln_masuk'); ?>
					  <?php echo $form->textField($model,'kln_masuk'); ?>
					  <?php echo $form->error($model,'kln_masuk'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'kln_uts'); ?>
					  <?php echo $form->textField($model,'kln_uts'); ?>
					  <?php echo $form->error($model,'kln_uts'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'kln_uas'); ?>
					  <?php echo $form->textField($model,'kln_uas'); ?>
					  <?php echo $form->error($model,'kln_uas'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'kln_krs_lama'); ?>
					  <?php echo $form->textField($model,'kln_krs_lama'); ?>
					  <?php echo $form->error($model,'kln_krs_lama'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'kln_uts_lama'); ?>
					  <?php echo $form->textField($model,'kln_uts_lama'); ?>
					  <?php echo $form->error($model,'kln_uts_lama'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'kln_uas_lama'); ?>
					  <?php echo $form->textField($model,'kln_uas_lama'); ?>
					  <?php echo $form->error($model,'kln_uas_lama'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'kln_stat'); ?>
					  <?php echo $form->textField($model,'kln_stat',array('size'=>1,'maxlength'=>1)); ?>
					  <?php echo $form->error($model,'kln_stat'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'kln_sesi'); ?>
					  <?php echo $form->textField($model,'kln_sesi',array('size'=>2,'maxlength'=>2)); ?>
					  <?php echo $form->error($model,'kln_sesi'); ?>
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
 
   var data=$("#kalender-create-form").serialize();
     


  jQuery.ajax({
   type: 'POST',
    url: '<?php
 echo Yii::app()->createAbsoluteUrl("kalender/create"); ?>',
   data:data,
success:function(data){
                //alert("succes:"+data); 
                if(data!="false")
                 {
                  $('#kalender-create-modal').modal('hide');
                  renderView(data);
                    $.fn.yiiGridView.update('kalender-grid', {
                     
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
  $('#kalender-create-form').each (function(){
  this.reset();
   });

  
  $('#kalender-view-modal').modal('hide');
  
  $('#kalender-create-modal').modal({
   show:true,
   
  });
}

</script>
