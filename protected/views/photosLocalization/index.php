<?php
$this->breadcrumbs=array(
	'Photos Localizations',
);

$this->menu=array(
	array('label'=>'Create PhotosLocalization', 'url'=>array('create')),
	array('label'=>'Manage PhotosLocalization', 'url'=>array('admin')),
);
?>

<h1>Photos Localizations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
