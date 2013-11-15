<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
  'Pages'=>array('index'),
  $model->id=>array('view','id'=>$model->id),
  'Update',
);

$this->menu=array(
  array('label'=>'List User', 'url'=>array('index')),
  array('label'=>'Create User', 'url'=>array('create')),
  array('label'=>'View User', 'url'=>array('view', 'id'=>$model->id)),
  array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>Update Page <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>