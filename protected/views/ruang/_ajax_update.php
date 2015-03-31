<div id="ruang-update-modal-container" >

</div>

<script type="text/javascript">
function update()
 {
  
   var data=$("#ruang-update-form").serialize();

  jQuery.ajax({
   type: 'POST',
    url: '<?php echo Yii::app()->createAbsoluteUrl("ruang/update"); ?>',
   data:data,
success:function(data){
                if(data!="false")
                 {
                  $('#ruang-update-modal').modal('hide');
                  renderView(data);
                  $.fn.yiiGridView.update('ruang-grid', {
                     
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
 
   $('#ruang-view-modal').modal('hide');
 var data="id="+id;

  jQuery.ajax({
   type: 'POST',
    url: '<?php echo Yii::app()->createAbsoluteUrl("ruang/update"); ?>',
   data:data,
success:function(data){
                 // alert("succes:"+data); 
                 $('#ruang-update-modal-container').html(data); 
                 $('#ruang-update-modal').modal('show');
              },
   error: function(data) { // if error occured
           alert(JSON.stringify(data)); 
         alert("Error occured.please try again");
    },

  dataType:'html'
  });

}
</script>
