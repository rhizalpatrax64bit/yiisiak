<div id="kurikulum-update-modal-container" >

</div>

<script type="text/javascript">
function update()
 {
  
   var data=$("#kurikulum-update-form").serialize();

  jQuery.ajax({
   type: 'POST',
    url: '<?php echo Yii::app()->createAbsoluteUrl("kurikulum/update"); ?>',
   data:data,
success:function(data){
                if(data!="false")
                 {
                  $('#kurikulum-update-modal').modal('hide');
                  renderView(data);
                  $.fn.yiiGridView.update('kurikulum-grid', {
                     
                         });
                 }
                 
              },
   error: function(data) { // if error occured
          alert(JSON.stringify(data)); 

    },

  dataType:'html'
  });

}

function renderUpdateForm(id)
{
 
   $('#kurikulum-view-modal').modal('hide');
 var data="id="+id;

  jQuery.ajax({
   type: 'POST',
    url: '<?php echo Yii::app()->createAbsoluteUrl("kurikulum/update"); ?>',
   data:data,
success:function(data){
                 // alert("succes:"+data); 
                 $('#kurikulum-update-modal-container').html(data); 
                 $('#kurikulum-update-modal').modal('show');
              },
   error: function(data) { // if error occured
           alert(JSON.stringify(data)); 
         alert("Error occured.please try again");
    },

  dataType:'html'
  });

}
</script>
