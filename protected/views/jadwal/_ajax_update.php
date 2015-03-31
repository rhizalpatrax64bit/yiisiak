<div id="jadwal-update-modal-container" >

</div>

<script type="text/javascript">
function update()
 {
  
   var data=$("#jadwal-update-form").serialize();

  jQuery.ajax({
   type: 'POST',
    url: '<?php echo Yii::app()->createAbsoluteUrl("jadwal/update"); ?>',
   data:data,
success:function(data){
                if(data!="false")
                 {
                  $('#jadwal-update-modal').modal('hide');
                  renderView(data);
                  $.fn.yiiGridView.update('jadwal-grid', {
                     
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
 
   $('#jadwal-view-modal').modal('hide');
 var data="id="+id;

  jQuery.ajax({
   type: 'POST',
    url: '<?php echo Yii::app()->createAbsoluteUrl("jadwal/update"); ?>',
   data:data,
success:function(data){
                 // alert("succes:"+data); 
                 $('#jadwal-update-modal-container').html(data); 
                 $('#jadwal-update-modal').modal('show');
              },
   error: function(data) { // if error occured
           alert(JSON.stringify(data)); 
         alert("Error occured.please try again");
    },

  dataType:'html'
  });

}
</script>
