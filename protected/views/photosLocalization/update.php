<?php
$this->breadcrumbs=array(
	'Photos Localizations'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PhotosLocalization', 'url'=>array('index')),
	array('label'=>'Create PhotosLocalization', 'url'=>array('create')),
	array('label'=>'View PhotosLocalization', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PhotosLocalization', 'url'=>array('admin')),
);
?>

<h1>Update PhotosLocalization <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>