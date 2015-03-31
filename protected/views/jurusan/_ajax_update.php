<div id="jurusan-update-modal-container" >

</div>

<script type="text/javascript">
function update()
 {
  
   var data=$("#jurusan-update-form").serialize();

  jQuery.ajax({
   type: 'POST',
    url: '<?php echo Yii::app()->createAbsoluteUrl("jurusan/update"); ?>',
   data:data,
success:function(data){
                if(data!="false")
                 {
                  $('#jurusan-update-modal').modal('hide');
                  renderView(data);
                  $.fn.yiiGridView.update('jurusan-grid', {
                     
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
 
   $('#jurusan-view-modal').modal('hide');
 var data="id="+id;

  jQuery.ajax({
   type: 'POST',
    url: '<?php echo Yii::app()->createAbsoluteUrl("jurusan/update"); ?>',
   data:data,
success:function(data){
                 // alert("succes:"+data); 
                 $('#jurusan-update-modal-container').html(data); 
                 $('#jurusan-update-modal').modal('show');
              },
   error: function(data) { // if error occured
           alert(JSON.stringify(data)); 
         alert("Error occured.please try again");
    },

  dataType:'html'
  });

}
</script>
