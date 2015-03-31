<?php
$this->breadcrumbs=array(
	'Matkuls'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Matkul','url'=>array('index')),
	array('label'=>'Create Matkul','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('matkul-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Matkuls</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'matkul-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'mtk_kode',
		'mtk_nama',
		'mtk_sks',
		'mtk_kat',
		'mtk_stat',
		'jr_id',
		/*
		'penanggungjawab',
		'mtk_sesi',
		'mtk_sub',
		'mtk_semester',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
