<div id="dosen-update-modal-container" >

</div>

<script type="text/javascript">
function update()
 {
  
   var data=$("#dosen-update-form").serialize();

  jQuery.ajax({
   type: 'POST',
    url: '<?php echo Yii::app()->createAbsoluteUrl("dosen/update"); ?>',
   data:data,
success:function(data){
                if(data!="false")
                 {
                  $('#dosen-update-modal').modal('hide');
                  renderView(data);
                  $.fn.yiiGridView.update('dosen-grid', {
                     
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
 
   $('#dosen-view-modal').modal('hide');
 var data="id="+id;

  jQuery.ajax({
   type: 'POST',
    url: '<?php echo Yii::app()->createAbsoluteUrl("dosen/update"); ?>',
   data:data,
success:function(data){
                 // alert("succes:"+data); 
                 $('#dosen-update-modal-container').html(data); 
                 $('#dosen-update-modal').modal('show');
              },
   error: function(data) { // if error occured
           alert(JSON.stringify(data)); 
         alert("Error occured.please try again");
    },

  dataType:'html'
  });

}
</script>
