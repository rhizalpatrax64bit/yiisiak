<div id="kalender-update-modal-container" >

</div>

<script type="text/javascript">
function update()
 {
  
   var data=$("#kalender-update-form").serialize();

  jQuery.ajax({
   type: 'POST',
    url: '<?php echo Yii::app()->createAbsoluteUrl("kalender/update"); ?>',
   data:data,
success:function(data){
                if(data!="false")
                 {
                  $('#kalender-update-modal').modal('hide');
                  renderView(data);
                  $.fn.yiiGridView.update('kalender-grid', {
                     
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
 
   $('#kalender-view-modal').modal('hide');
 var data="id="+id;

  jQuery.ajax({
   type: 'POST',
    url: '<?php echo Yii::app()->createAbsoluteUrl("kalender/update"); ?>',
   data:data,
success:function(data){
                 // alert("succes:"+data); 
                 $('#kalender-update-modal-container').html(data); 
                 $('#kalender-update-modal').modal('show');
              },
   error: function(data) { // if error occured
           alert(JSON.stringify(data)); 
         alert("Error occured.please try again");
    },

  dataType:'html'
  });

}
</script>
