<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
  'Pages'=>array('index'),
  'Create',
);

$this->menu=array(
  array('label'=>'List Page', 'url'=>array('index')),
  array('label'=>'Manage Page', 'url'=>array('admin')),
);
?>

<h1>Create Page</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>