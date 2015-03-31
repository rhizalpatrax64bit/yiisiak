<?php
$this->breadcrumbs=array(
	'Dosens',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('dosen-grid', {
        data: $(this).serialize()
    });
    return false;
});
");

?>

<h1>Dosens</h1>
<hr />

<?php 
$this->beginWidget('zii.widgets.CPortlet', array(
	'htmlOptions'=>array(
		'class'=>''
	)
));
$this->widget('bootstrap.widgets.TbMenu', array(
	'type'=>'pills',
	'items'=>array(
		array('label'=>'Create', 'icon'=>'icon-plus', 'url'=>'javascript:void(0);','linkOptions'=>array('onclick'=>'renderCreateForm()')),
                array('label'=>'List', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'),'active'=>true, 'linkOptions'=>array()),
		array('label'=>'Search', 'icon'=>'icon-search', 'url'=>'#', 'linkOptions'=>array('class'=>'search-button')),
		array('label'=>'Export to PDF', 'icon'=>'icon-download', 'url'=>Yii::app()->controller->createUrl('GeneratePdf'), 'linkOptions'=>array('target'=>'_blank'), 'visible'=>true),
		array('label'=>'Export to Excel', 'icon'=>'icon-download', 'url'=>Yii::app()->controller->createUrl('GenerateExcel'), 'linkOptions'=>array('target'=>'_blank'), 'visible'=>true),
	),
));
$this->endWidget();
?>



<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'dosen-grid',
	'dataProvider'=>$model->search(),
        'type'=>'striped bordered condensed',
        'template'=>'{summary}{items}{pager}',
	'columns'=>array(
		'ds_nidn',
		'ds_user',
		/*'ds_pass',
		'ds_pass_kode',*/
		'ds_nm',
		array(
        'header'=>'Status',
        'type'=>'raw',
        'value'=>'CHtml::CheckBox("$data->active",$data->active,array(
         "ajax" => array(
                    "type"=>"POST", 
                    "url"=>Yii::app()->createUrl("dosen/view"),
                    "dataType"=>"text",
                    "data" => array("ap_programType_id" => $data->ds_tipe),
                    "success" => "js:function(html){
                           if(html==\"1\"){
                               $(\"#active$data->ds_tipe\").attr(\"checked\",\"checked\");
                               window.location.reload()
                           }
                               else if(html==\"0\"){
                               $(\"#active$data->ds_tipe\").attr(\"checked\",false);
                               window.location.reload()
                           }

                    }",
                    "error"=>"function (xhr, ajaxOptions, thrownError){
                            alert(xhr.statusText);
                            alert(thrownError);}",
            ),
        "style"=>"width:50px;","feed_id"=>$data->ds_tipe,"id"=>"active".$data->ds_tipe))',
        'htmlOptions'=>array("width"=>"50px"),
    ),  
		//'ds_tipe',
		/*
		'ds_kat',
		*/
               array(
		     
		      'type'=>'raw',
		       'value'=>'"
		      <a href=\'javascript:void(0);\' onclick=\'renderView(&#34;".$data->ds_nidn."&#34;)\'   class=\'btn btn-small view\'  ><i class=\'icon-eye-open\'></i></a>
		      <a href=\'javascript:void(0);\' onclick=\'renderUpdateForm(&#34;".$data->ds_nidn."&#34;)\'   class=\'btn btn-small view\'  ><i class=\'icon-pencil\'></i></a>
		      <a href=\'javascript:void(0);\' onclick=\'delete_record(&#34;".$data->ds_nidn."&#34;)\'   class=\'btn btn-small view\'  ><i class=\'icon-trash\'></i></a>
		     "',
		      'htmlOptions'=>array('style'=>'width:150px;')  
		     ),
        
	),
)); 


 $this->renderPartial("_ajax_update");
 $this->renderPartial("_ajax_create_form",array("model"=>$model));
 $this->renderPartial("_ajax_view");

 ?>

 
<script type="text/javascript"> 
function delete_record(id)
{
 
  if(!confirm("Are you sure you want delete this?"))
   return;
   
 //  $('#ajaxtest-view-modal').modal('hide');
 
 var data="id="+id;
 

  jQuery.ajax({
   type: 'POST',
    url: '<?php echo Yii::app()->createAbsoluteUrl("dosen/delete"); ?>',
   data:data,
success:function(data){
                 if(data=="true")
                  {
                     $('#dosen-view-modal').modal('hide');
                     $.fn.yiiGridView.update('dosen-grid', {
                     
                         });
                 
                  } 
                 else
                   alert("deletion failed");
              },
   error: function(data) { // if error occured
           alert(JSON.stringify(data)); 
         alert("Error occured.please try again");
       //  alert(data);
    },

  dataType:'html'
  });

}
</script>

<style type="text/css" media="print">
body {visibility:hidden;}
.printableArea{visibility:visible;} 
</style>
<script type="text/javascript">
function printDiv()
{

window.print();

}
</script>
 

