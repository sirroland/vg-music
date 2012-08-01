<?php
$this->breadcrumbs=array(
	'Photos Localizations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PhotosLocalization', 'url'=>array('index')),
	array('label'=>'Manage PhotosLocalization', 'url'=>array('admin')),
);
?>

<h1>Create PhotosLocalization</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>