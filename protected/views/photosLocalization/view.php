<?php
$this->breadcrumbs=array(
	'Photos Localizations'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List PhotosLocalization', 'url'=>array('index')),
	array('label'=>'Create PhotosLocalization', 'url'=>array('create')),
	array('label'=>'Update PhotosLocalization', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PhotosLocalization', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PhotosLocalization', 'url'=>array('admin')),
);
?>

<h1>View PhotosLocalization #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'photos_id',
		'title',
		'description',
		'culture',
	),
)); ?>
