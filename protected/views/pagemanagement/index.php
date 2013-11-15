<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
  'Pages',
);

$this->menu=array(
  array('label'=>'Create Page', 'url'=>array('create')),
  array('label'=>'Manage Page', 'url'=>array('admin')),
);
?>

<h1>Pages</h1>

<?php $this->widget('zii.widgets.CListView', array(
  'dataProvider'=>$Provider,
  'itemView'=>'_view',
)); ?>
