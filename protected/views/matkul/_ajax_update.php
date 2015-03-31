<div id="matkul-update-modal-container" >

</div>

<script type="text/javascript">
function update()
 {
  
   var data=$("#matkul-update-form").serialize();

  jQuery.ajax({
   type: 'POST',
    url: '<?php echo Yii::app()->createAbsoluteUrl("matkul/update"); ?>',
   data:data,
success:function(data){
                if(data!="false")
                 {
                  $('#matkul-update-modal').modal('hide');
                  renderView(data);
                  $.fn.yiiGridView.update('matkul-grid', {
                     
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
 
   $('#matkul-view-modal').modal('hide');
 var data="id="+id;

  jQuery.ajax({
   type: 'POST',
    url: '<?php echo Yii::app()->createAbsoluteUrl("matkul/update"); ?>',
   data:data,
success:function(data){
                 // alert("succes:"+data); 
                 $('#matkul-update-modal-container').html(data); 
                 $('#matkul-update-modal').modal('show');
              },
   error: function(data) { // if error occured
           alert(JSON.stringify(data)); 
         alert("Error occured.please try again");
    },

  dataType:'html'
  });

}
</script>
